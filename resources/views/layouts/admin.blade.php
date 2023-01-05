<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lara LTE</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	@include('layouts.style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div id="app" class="wrapper">
  <header class="main-header">
	<a href="{{url('/')}}" class="logo">
	  <span class="logo-mini">
		<img src="{{ asset('asset') }}/logo_mini.png" height="40px">
	  </span>
	  <span class="logo-lg">
		<img src="{{ asset('asset') }}/logo_lg.png" height="50px">
	  </span>
	</a>
	<nav class="navbar navbar-static-top">
	  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
		<span class="sr-only">Toggle navigation</span>
	  </a>

	  <div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
		<form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">
			@csrf
		</form>
		<li class="hidden-xs">
			<a><i class="fa fa-bank"></i> <span class="hidden-xs">PT LARA LTE</span> </a>
		</li>
		<li>
			<a href="{{url('profile')}}" class="dropdown-toggle a-go_link" data-toggle="dropdown">
				<i class="fa fa-user-md"></i>
				<span>{{ Auth::user()->name }}</span>
				<span>( {{ Auth::user()->role }} )</span>
			</a>
		</li>
		  <li>
			<a href="#" class="btn-logout" data-toggle="control-sidebar"><i class="fa fa-sign-out fa-lg"></i></a>
		  </li>
		</ul>
	  </div>
	</nav>
  </header>
  <aside class="main-sidebar">
		@include('layouts.sidebar')
  </aside>

  <div class="content-wrapper">
	@yield('content')
  </div>
  <footer class="main-footer">
	<div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2022 <a href=""> LARALTE </a>Template By <a href="https://adminlte.io">AdminLTE</a>.
  </footer>
  	<div class="control-sidebar-bg"></div>
	<div id="app-loading">
		<div class="inner"><i class="fa fa-spin fa-spinner"></i> Mohon menunggu sebentar...</div>
	</div>
</div>
@include('layouts.script')
</body>
</html>
