<!-- Javascript files-->
<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/popper.min.js')}}"></script>
<script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('js/jquery-3.0.0.min.js')}}"></script>
<script src="{{url('js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{url('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('js/custom.js')}}"></script>
<script src="{{url('js/sweetalert.min.js')}}"></script>
<script src="{{url('js/save.js')}}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script>
    function logOut() {
        swal("Çıkış yapılacak , Emin misiniz?", {
            buttons: ["İptal", "Evet"],
            dangerMode: true,
        }).then((value) => {
            if (value) {


            }
        })
    }
</script>