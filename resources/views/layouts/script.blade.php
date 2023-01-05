
<script src="{{ asset('admin_lte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('admin_lte/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{ asset('admin_lte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin_lte/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('admin_lte/bower_components/morris.js/morris.min.js')}}"></script>
<script src="{{ asset('admin_lte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('admin_lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('admin_lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{ asset('admin_lte/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<script src="{{ asset('admin_lte/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('admin_lte/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ asset('admin_lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('admin_lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{ asset('admin_lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{ asset('admin_lte/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{ asset('admin_lte/dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('admin_lte/dist/js/pages/dashboard.js')}}"></script>
<script src="{{ asset('admin_lte/dist/js/demo.js')}}"></script>
<link rel="stylesheet"
href="{{ asset('datatables') }}/dataTables.bootstrap.css">
<script src="{{ asset('datatables') }}/jquery.dataTables.min.js"></script>
<script src="{{ asset('datatables') }}/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="{{ asset('chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin_lte/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
  $('.datatable').DataTable();
  $('.btn_export_excel').on('click', function() {
    $('.buttons-excel').click();
  });
  $('.select2').select2()
</script>
<script src="{{ asset('admin_lte/bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{ asset('admin_lte/bower_components') }}/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('admin_lte/bower_components') }}/sweetalert/dist/sweetalert.css">

<div class="modal fade" id="modal_hapus">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
              </button>
              <h4 class="modal-title">Hapus Data</h4>
          </div>
          <form method='post' class="form_modal_hapus" enctype='multipart/form-data'>
              @csrf
              @method('delete')
              <div class="modal-body">
                  <p>Apakah anda yakin akan menghapus data ini?</p>
              </div>
              <div class=" modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger">Hapus</button>
              </div>
          </form>
      </div>
  </div>
</div>

<script>
  $(document).on('click', '.btn_modal_hapus', function(){
    $('#modal_hapus').modal('show')
    let url = $(this).data("url")
    $(".form_modal_hapus").attr('action', url);
  })
</script>

<script>
	$(".btn-logout").click(function(){
		swal({
      title: 'Apakah anda ingin keluar ?',
      type:'info',
      showCancelButton:true,
      allowOutsideClick:true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Keluar',
      cancelButtonText: 'Batal',
      closeOnConfirm: true
    }, function(){
        $('#form-logout').submit()
    });
	})

  $(".btn").click(function(){
    if ($(this).attr("type") == "submit") {
      $("#app-loading").show()
    }
	})
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

@if ($errors->any())
  @foreach ($errors->all() as $error)
      <script>
        toastr["error"]("{{ $error }}")        
      </script>
  @endforeach
@endif

<script>
  if ("{{ Session::get('success') }}") {
    toastr["success"]("{{ Session::get('success') }}")
  }
  if ("{{ Session::get('warning') }}") {
    toastr["warning"]("{{ Session::get('warning') }}")
  }
  if ("{{ Session::get('error') }}") {
    toastr["error"]("{{ Session::get('error') }}")
  }
  
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
</script>

@yield('js')
<script>
  $("#app-loading").hide();
</script>