<style>
    .activity-calendar {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        font-size: 14px;
        max-width: 100%;
        overflow: hidden;
    }

    .calendar-wrapper {
        display: flex;
        gap: 10px;
        align-items: flex-start;
    }

    .weekdays {
        display: flex;
        flex-direction: column;
        gap: 3px;
        margin-top: 28px;
        min-width: 30px;
    }

    .weekday {
        height: 14px;
        line-height: 14px;
        color: #666;
        font-size: 11px;
        text-align: right;
        padding-right: 8px;
    }

    .calendar-body {
        overflow-x: auto;
        padding-bottom: 10px;
    }

    .months {
        display: flex;
        margin-bottom: 8px;
        margin-left: -2px;
        height: 20px;
        align-items: flex-end;
        font-size: 11px;
        color: #666;
    }

    .month-label {
        min-width: 14px;
        text-align: left;
        white-space: nowrap;
    }

    .calendar-grid {
        display: grid;
        grid-template-columns: repeat(53, 14px);
        grid-auto-rows: 14px;
        gap: 3px;
    }

    .day-box {
        width: 14px;
        height: 14px;
        border-radius: 2px;
        background: #ebedf0;
        cursor: pointer;
        position: relative;
        transition: transform 0.1s ease;
    }

    .day-box:hover {
        transform: scale(1.1);
        z-index: 1;
        box-shadow: 0 0 0 1px rgba(0,0,0,0.1);
    }

    .day-box:hover::after {
        content: attr(data-tooltip);
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
        background: #333;
        color: white;
        padding: 4px 8px;
        border-radius: 3px;
        font-size: 11px;
        white-space: nowrap;
        z-index: 10;
        pointer-events: none;
    }

    .level-0 { background: #ebedf0; }
    .level-1 { background: #9be9a8; }
    .level-2 { background: #40c463; }
    .level-3 { background: #30a14e; }
    .level-4 { background: #216e39; }

    .legend {
        display: flex;
        align-items: center;
        gap: 6px;
        margin-top: 15px;
        font-size: 12px;
        color: #666;
    }

    h4 {
        margin: 0 0 15px 0;
        font-weight: 600;
        color: #333;
    }
</style>

<div class="activity-calendar">
    <h4>Student Activity (Last 12 Months)</h4>

    <div class="calendar-wrapper">
        {{-- Weekdays --}}
        <div class="weekdays">
            <div class="weekday">Mon</div>
            <div class="weekday" style="height: 14px;"></div>
            <div class="weekday">Wed</div>
            <div class="weekday" style="height: 14px;"></div>
            <div class="weekday">Fri</div>
            <div class="weekday" style="height: 14px;"></div>
            <div class="weekday" style="height: 14px;"></div>
        </div>

        <div class="calendar-body">
            {{-- Months --}}
            <div class="months" id="months-container">
                @php
                    $currentMonth = '';
                    $monthCursor = $start->copy()->startOfWeek();
                @endphp

                @for ($i = 0; $i < 53; $i++)
                    @php
                        $weekStart = $monthCursor->copy();
                        $monthName = $weekStart->format('M');
                    @endphp
                    
                    @if ($monthName !== $currentMonth)
                        <div class="month-label" style="grid-column: {{ $i + 1 }}">
                            {{ $monthName }}
                        </div>
                        @php $currentMonth = $monthName; @endphp
                    @endif
                    
                    @php $monthCursor->addWeek(); @endphp
                @endfor
            </div>

            {{-- Calendar Grid --}}
            <div class="calendar-grid">
                @php
                    $date = $start->copy()->startOfWeek();
                @endphp

                @while ($date <= $end)
                    @php
                        $count = $activities[$date->toDateString()] ?? 0;
                        
                        if ($count == 0) {
                            $level = 0;
                        } elseif ($count <= 10) {
                            $level = 1;
                        } elseif ($count <= 30) {
                            $level = 2;
                        } elseif ($count <= 60) {
                            $level = 3;
                        } else {
                            $level = 4;
                        }
                        
                        $tooltip = $date->format('d M Y') . ' - ' . $count . ' test' . ($count != 1 ? 's' : '');
                    @endphp

                    <div class="day-box level-{{ $level }}" 
                         data-tooltip="{{ $tooltip }}"
                         title="{{ $tooltip }}">
                    </div>

                    @php $date->addDay(); @endphp
                @endwhile
            </div>
        </div>
    </div>

    {{-- Legend --}}
    <div class="legend">
        <span style="margin-right: 4px;">Less</span>
        <div class="day-box level-0"></div>
        <div class="day-box level-1"></div>
        <div class="day-box level-2"></div>
        <div class="day-box level-3"></div>
        <div class="day-box level-4"></div>
        <span style="margin-left: 4px;">More</span>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const monthContainer = document.getElementById('months-container');
        const monthLabels = monthContainer.querySelectorAll('.month-label');
        
        // Reset container months
        monthContainer.innerHTML = '';
        monthContainer.style.position = 'relative';
        monthContainer.style.height = '20px';
        
        @php
            $date = $start->copy()->startOfWeek();
            $currentMonth = '';
            $monthStartCol = 1;
            $lastMonthCol = 1;
            
            for ($i = 0; $i < 53; $i++) {
                $weekStart = $date->copy();
                $monthName = $weekStart->format('M');
                
                if ($monthName !== $currentMonth) {
                    if ($currentMonth !== '') {
                        echo "addMonthLabel('{$currentMonth}', {$monthStartCol}, {$lastMonthCol});";
                    }
                    $currentMonth = $monthName;
                    $monthStartCol = $i + 1;
                }
                $lastMonthCol = $i + 1;
                $date->addWeek();
            }
            
            // Add last month
            if ($currentMonth !== '') {
                echo "addMonthLabel('{$currentMonth}', {$monthStartCol}, {$lastMonthCol});";
            }
        @endphp
        
        function addMonthLabel(monthName, startCol, endCol) {
            const label = document.createElement('div');
            label.className = 'month-label';
            label.textContent = monthName;
            label.style.position = 'absolute';
            label.style.left = ((startCol - 1) * 17) + 'px'; // 14px + 3px gap
            label.style.width = ((endCol - startCol + 1) * 17) + 'px';
            monthContainer.appendChild(label);
        }
    });
</script>