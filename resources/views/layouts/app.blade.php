<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="/css/font-awesome.css" rel="stylesheet"> 
<link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="/js/jquery.min.js"></script>
<link rel="stylesheet" href="/css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- Scripts -->
<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
<!-- //end-smooth-scrolling --> 
</head> 
<body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="/js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->

<!-- Authentication Links -->
@if (Auth::guest())

    <!-- header modal -->
    <div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;</button>
                        <h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
                    </div>
                    <div class="modal-body modal-body-sub">
                        <div class="row">
                            <div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
                                <div class="sap_tabs">
                                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                        <ul>
                                            <a href="{{ url('/login') }}"><li style="color:blue" class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li></a>
                                            <a href="{{ url('/register') }}"><li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li></a>
                                        </ul>		 			        					            	      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
    <!-- header modal -->
@else
	@if (Auth::user()->admin)
	<!-- header modal -->
		<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
				aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;</button>
							<h4 class="modal-title" id="myModalLabel">{{ Auth::user()->name }}   		</h4>
						</div>
						<div class="modal-body modal-body-sub">
							<div class="row">
								<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
									<div class="sap_tabs">
										<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
											<ul>
												<a href="{{ url('/logout') }}" onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();"><li style="color:red" class="resp-tab-item" aria-controls="tab_item-0">
													 <span>Sign out</span></li></a>
												<a href="{{ route('home') }}"><li style="color:green" class="resp-tab-item" aria-controls="tab_item-0"><span>Admin Panel</span></li></a>
												<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
													{{ csrf_field() }}
												</form>
											</ul>		 			        					            	      
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<!-- header modal -->
		@else
		<!-- header modal -->
		<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
				aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;</button>
							<h4 class="modal-title" id="myModalLabel">{{ Auth::user()->name }}   		Logout now!</h4>
						</div>
						<div class="modal-body modal-body-sub">
							<div class="row">
								<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
									<div class="sap_tabs">
										<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
											<ul>
												<a href="{{ url('/logout') }}" onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();"><li style="color:red" class="resp-tab-item" aria-controls="tab_item-0">
													 <span>Sign out</span></li></a>
												<a href="{{ route('user.home') }}"><li style="color:green" class="resp-tab-item" aria-controls="tab_item-0"><span>Dashboard</span></li></a>
												<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
													{{ csrf_field() }}
												</form>
											</ul>		 			        					            	      
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<!-- header modal -->
		@endif
@endif
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.html">African's Art Store<span>Your stores. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="{{ route('search') }}" method="get">
						

						<input type="text" name="search" placeholder="Search...">
						<button type="submit" value="">Search</button>
					</form>
				</div>
			</div>
			<div class="cart cart box_1"> 
				
					
				<button class="w3view-cart" type="submit" name="submit" value=""><a href="/cart" class="js-cart-animate">
					<i class="glyphicon glyphicon-shopping-cart"></i>
					<span class="cart-count">{{ Cart::content()->count() }}</span>
				</a></button>
					
				 
			</div>  
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="/" class="act">Home</a></li>	
						<!-- Mega Menu -->
						<li><a href="{{ route('product') }}">Products </a></li>
						<li><a href="{{ route('about') }}">About Us</a></li> 
						<li><a href="{{ route('faq') }}">Faq</a></li>  
						<li><a href="{{ route('contact') }}">Contact Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
 
    @yield('body')
    
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Subscribe to our newsletter to get update for new arts.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="footer-copy">
			<div class="container">
				<p>&copy; 2019 Art's Store. All rights reserved </p>
			</div>
		</div>
	</div>
	<!-- //footer --> 
	<!-- cart-js -->
	<script src="/js/minicart.js"></script>
	<script src="{{ asset('js/toastr.min.js') }}"></script>
	<script src="/js/app.js"></script>
	<script>
	
		@if(Session::has('success'))
			toastr.success("{{ Session::get('success') }}")
		@endif

	</script>
	<!-- //cart-js -->   
</body>
</html>