 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">

<link href="Public/Admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
<!-- Font Awesome -->
<link href="Public/Admin/css/font-awesome.min.css" rel="stylesheet">

<!-- ionicons -->
<link href="Public__PUBLIC__/Admin/css/ionicons.min.css" rel="stylesheet">

<!-- Morris -->
<link href="Public/Admin/css/morris.css" rel="stylesheet"/>	

<!-- Datepicker -->
<link href="Public/Admin/css/datepicker.css" rel="stylesheet"/>	

<!-- Animate -->
<link href="Public/Admin/css/animate.min.css" rel="stylesheet">

<!-- Owl Carousel -->
<link href="Public/Admin/css/owl.carousel.min.css" rel="stylesheet">
<link href="Public/Admin/css/owl.theme.default.min.css" rel="stylesheet">

<!-- Simplify -->
<link href="Public/Admin/css/simplify.min.css" rel="stylesheet">

        
<title>系统发生错误</title>
 
</head>
<body class="overflow-hidden light-background">
		<div class="wrapper no-navigation preload">
			<div class="error-wrapper">
				<div class="error-inner">
					<div class="error-type">404</div>
					<h1>Page Not Found</h1>
					<p>Look like the page you're looking for isn't here anymore.
						Try typing the address again or start over from the home page.</p>
					<div class="m-top-md">
						<!--<a href="<?php echo U('Admin-index-login');?>" class="btn btn-default btn-lg text-upper">Back to Home</a>-->
                        <a href="javascript:history.back();" class="btn btn-default btn-lg text-upper">Back to Home</a>
					</div>
				</div><!-- ./error-inner -->
			</div><!-- ./error-wrapper -->
		</div><!-- /wrapper -->

		<a href="" id="scroll-to-top" class="hidden-print"><i class="icon-chevron-up"></i></a>

	    <!-- Le javascript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
		
		<!-- Jquery -->
		<script src="Public/Admin/js/jquery-1.11.1.min.js"></script>
		
		<!-- Bootstrap -->
	    <script src="Public/Admin/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll -->
		<script src='Public/Admin/js/jquery.slimscroll.min.js'></script>
		
		<!-- Popup Overlay -->
		<script src='Public/Admin/js/jquery.popupoverlay.min.js'></script>

		<!-- Modernizr -->
		<script src='Public/Admin/js/modernizr.min.js'></script>
		
		<!-- Simplify -->
		<script src="Public/Admin/js/simplify/simplify.js"></script>

		<script>
			$(function()	{
				setTimeout(function() {
					$('.error-type').addClass('animated');
				},100);
			});
		</script>
		
  	</body>
</html>
