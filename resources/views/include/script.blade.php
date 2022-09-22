<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('admin_assets/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('admin_assets/assets/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('admin_assets/assets/demo/chart-bar-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('admin_assets/js/datatables-simple-demo.js')}}"></script>
<script>
    $(() => {
        var path = window.location.href;
        $('.nav-link').each(function() {
            var href = $(this).attr('href');
            if (path === decodeURIComponent(href)) {
                $(this).addClass('active');
                var parent = $(this).closest('.collapse');
                parent.addClass('d-block');
                $(parent).find('.nav-link').first().addClass('active');
            }
        });
    });

    var myModal = document.getElementById('myModal');
    var myInput = document.getElementById('myInput');

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    });
</script>