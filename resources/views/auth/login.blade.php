
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Panel : </title>
    <meta name='generator' content='CRUDBooster'/>
    <meta name='robots' content='noindex,nofollow'/>
    <link rel="shortcut icon" href="{{ asset('vendor') }}/crudbooster/assets/logo_crudbooster.png">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="{{ asset('admin_lte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_lte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_lte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_lte/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_lte/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_lte/bower_components/morris.js/morris.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_lte/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_lte/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  
    <style type="text/css">
        .login-page, .register-page {
            background: #dddddd url('{{ asset("asset") }}/background.jpg');
            color: #ffffff  !important;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .login-box, .register-box {
            margin: 10% auto;
        }

        @media (min-width: 768px){
            .login-box, .register-box {
                width: 720px;
            }
            .login-box-body{
                width: 50%;
            }
        }

        .login-box-body {
            box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.8);
            background: rgba(255, 255, 255, 0.9);
            color: #666666  !important;
        }

        html, body {
            overflow: hidden;
        }
    </style>
</head>

<body class="login-page">
<div class="login-box">
    <div class="login-box-body" style=";display: block;margin: 0 auto;">
        <p class='login-box-msg' style="font-size: 18px;font-weight: bold;color:blue;">
		<img src="{{ asset('asset') }}/logo_rapor_hitam.png" height="40px">
        </p>
        <p class='login-box-msg'>Silahkan login untuk masuk</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
                        
            <div class="form-group has-feedback">
                <input autocomplete='off' type="text" class="form-control" name='login' value="{{old('login')}}" required placeholder="Username/Email"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input autocomplete='off' type="password" class="form-control" name='password' required placeholder="Password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <select id="semester_id" name="semester_id" class="form-control select2-biasa" required style="width: 100%;">
                    <option value="20222">2022-2023 Gasal</option>
                </select>
                <input type="hidden" name="tahun_ajaran_str" value="">
            </div>
            <div class="form-group">
                <input type="checkbox" class="lihat_password" id="lihat_password">
                <label for="lihat_password">Lihat Password</label>
            </div>

            <div style="margin-bottom:10px" class='row'>
                <div class='col-xs-12'>
                    <button type="submit" class="btn btn-info btn-block btn-flat"><i class='fa fa-lock'></i> Masuk</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('admin_lte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('admin_lte/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
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
<script>
    $(document).on('change', '.lihat_password', function(){
        if(this.checked) {
            $("input[name='password']").attr('type', "text");
        } else {
            $("input[name='password']").attr('type', "password");
        }
    })
    $(document).on('click', 'button:submit', function(){
        $(this).html('<i class="fa fa-refresh fa-spin"></i> Loading ...')
    })
</script>
</body>
</html>
