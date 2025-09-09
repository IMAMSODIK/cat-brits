<!-- latest jquery-->
<script src="{{ asset('dashboard_assets/assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap js-->
<script src="{{ asset('dashboard_assets/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<!-- feather icon js-->
<script src="{{ asset('dashboard_assets/assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
<!-- scrollbar js-->
<script src="{{ asset('dashboard_assets/assets/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/scrollbar/custom.js') }}"></script>
<!-- Sidebar jquery-->
<script src="{{ asset('dashboard_assets/assets/js/config.js') }}"></script>
<!-- Plugins JS start-->
<script src="{{ asset('dashboard_assets/assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/sidebar-pin.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/header-slick.js') }}"></script>
{{-- <script src="{{ asset('dashboard_assets/assets/js/chart/apex-chart/apex-chart.js') }}"></script> --}}
<script src="{{ asset('dashboard_assets/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
<!-- Range Slider js-->
<script src="{{ asset('dashboard_assets/assets/js/range-slider/rSlider.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/rangeslider/rangeslider.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/counter/counter-custom.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/custom-card/custom-card.js') }}"></script>
<!-- calendar js-->
<script src="{{ asset('dashboard_assets/assets/js/calendar/fullcalender.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/calendar/custom-calendar.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/dashboard/dashboard_2.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/animation/wow/wow.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/datatable/datatables/datatable.custom.js') }}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{ asset('dashboard_assets/assets/js/script.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/theme-customizer/customizer.js') }}"></script>

<script>
    new WOW().init();

    $("#logout").on("click", function() {
        let token = $("meta[name='csrf-token']").attr('content');
        $.ajax({
            url: '/logout',
            method: 'POST',
            data: {
                "_token": token
            },
            success: function(response) {
                location.href = '/login'
            },
            error: function(response) {
                alert(response.message);
            }
        })
    })

    function closeModal(element) {
        element.modal("hide");
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>
    function formatTanggal(data) {
        moment.locale('id');
        return data ? moment(data).format('DD MMMM YYYY HH:mm') + ' WIB' : '-';
    }

    function formatTanggalBooking(data) {
        moment.locale('id');
        return data ? moment(data).format('DD MMMM YYYY') : '-';
    }

    function formatRupiah(angka) {
        if (!angka) return 'Tidak ada data';

        return 'Rp. ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    }

</script>
<script src="{{ asset('dashboard_assets/assets/js/editors/quill.js') }}"></script>

@yield('own_script')