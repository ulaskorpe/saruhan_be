
<!-- jQuery -->
<script src="{{url('admin_assets/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('admin_assets/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('admin_assets/fastclick/lib/fastclick.js')}} "></script>
<!-- NProgress -->
<script src="{{url('admin_assets/nprogress/nprogress.js')}} "></script>
<!-- Chart.js -->
<script src="{{url('admin_assets/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{url('admin_assets/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{url('admin_assets/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('admin_assets/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{url('admin_assets/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{url('admin_assets/Flot/jquery.flot.js')}}"></script>
<script src="{{url('admin_assets/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{url('admin_assets/Flot/jquery.flot.time.js')}}"></script>
<script src="{{url('admin_assets/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{url('admin_assets/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{url('admin_assets/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{url('admin_assets/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{url('admin_assets/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{url('admin_assets/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('admin_assets/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{url('admin_assets/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{url('admin_assets/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{url('admin_assets/moment/min/moment.min.js')}}"></script>
<script src="{{url('admin_assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{url('admin_assets/build/js/custom.min.js')}}"></script>
<script src="{{url('js/sweetalert.min.js')}}"></script>
<script src="{{url('js/save.js')}}"></script>
<script>
    function logOut() {
        swal("Çıkış yapılacak , Emin misiniz?", {
            buttons: ["İptal", "Evet"],
            dangerMode: true,
        }).then((value) => {
            if (value) {
                $('#log-out-form').submit();


            }
        })
    }
</script>
