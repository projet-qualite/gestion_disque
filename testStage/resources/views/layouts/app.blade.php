<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test Stage</title>

	@yield('extra-script')
	

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	
	<link rel="stylesheet" type="text/css" href="backend/src/plugins/jquery-steps/jquery.steps.css"> -->




	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="backend/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="backend/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="backend/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
    
    @include('layouts.navbar')
    


    @yield('content')

 
    <script src="{{asset('backend/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('backend/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('backend/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('backend/vendors/scripts/layout-settings.js')}}"></script>
	
	<script src="{{asset('backend/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('backend/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('backend/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('backend/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('backend/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset('backend/vendors/scripts/dashboard.js')}}"></script>

	 
	<script src="{{asset('backend/src/plugins/jquery-steps/jquery.steps.js')}}"></script>
	
	<script src="{{asset('backend/vendors/scripts/steps-setting.js')}}"></script>

	
@yield('extra-js')	
</body>
</html>