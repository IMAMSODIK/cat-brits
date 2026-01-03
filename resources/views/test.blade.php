<style>
.activity-calendar {
    font-family: system-ui, -apple-system, BlinkMacSystemFont;
    font-size: 12px;
}

.calendar-wrapper {
    display: flex;
    gap: 6px;
}

.weekdays {
    display: grid;
    grid-template-rows: repeat(7, 14px);
    gap: 3px;
    margin-top: 22px;
}

.weekdays span {
    height: 14px;
    line-height: 14px;
    color: #666;
}

.calendar-body {
    overflow-x: auto;
}

.months {
    display: grid;
    grid-template-columns: repeat(53, 14px);
    gap: 3px;
    margin-bottom: 6px;
    color: #666;
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
    border-radius: 3px;
    background: #ebedf0;
    cursor: pointer;
}

.level-0 { background: #ebedf0; }
.level-1 { background: #9be9a8; }
.level-2 { background: #40c463; }
.level-3 { background: #30a14e; }
.level-4 { background: #216e39; }
</style>

<div class="activity-calendar">

    <h4>Student Activity (Last 12 Months)</h4>

    <div class="calendar-wrapper">

        {{-- Weekdays --}}
        <div class="weekdays">
            <span>Mon</span>
            <span></span>
            <span>Wed</span>
            <span></span>
            <span>Fri</span>
            <span></span>
            <span></span>
        </div>

        <div class="calendar-body">

            {{-- Months --}}
            <div class="months">
                @php
                    $monthCursor = $start->copy()->startOfWeek();
                @endphp

                @for ($i = 0; $i < 53; $i++)
                    <span>
                        {{ $monthCursor->format('M') }}
                    </span>
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
                        } elseif ($count == 10) {
                            $level = 1;
                        } elseif ($count <= 30) {
                            $level = 2;
                        } elseif ($count <= 60) {
                            $level = 3;
                        } else {
                            $level = 4;
                        }
                    @endphp

                    <div class="day-box level-{{ $level }}"
                         title="{{ $date->format('d M Y') }} — {{ $count }} test">
                    </div>

                    @php $date->addDay(); @endphp
                @endwhile
            </div>

        </div>
    </div>

    {{-- Legend --}}
    <div style="margin-top:10px; display:flex; align-items:center; gap:6px;">
        <span>Less</span>
        <div class="day-box level-0"></div>
        <div class="day-box level-1"></div>
        <div class="day-box level-2"></div>
        <div class="day-box level-3"></div>
        <div class="day-box level-4"></div>
        <span>More</span>
    </div>

</div>