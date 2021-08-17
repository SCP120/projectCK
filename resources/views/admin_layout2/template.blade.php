<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | Electronics :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="{{asset('frontend2/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="{{asset('frontend2/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="{{asset('frontend2/css/fontawesome-all.css')}}">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="{{asset('frontend2/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="{{asset('frontend2/css/menu.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->
	<style type="text/css">
	   #anhto1{
	       height:200px; width:auto;
	   }
	   #anhto2{
	      height:200px; width:auto; 
	   }
	   #anhto5{
	      height:170px; width:auto; 
	   }
	   .card{
	       box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
	   }
	   .card:hover {
	       box-shadow: rgba(0, 0, 0, 0) 0px 3px 8px;
	       border:2px solid #DDDDDD;
	   }
	   #lblCartCount {
	
	margin-left:-11px;	
    font-size: 12px;
    background: #ff0000;
    color: #fff;
    padding: 0 5px;
    vertical-align: 12px;
    border-radius:10px;
    font-weight:bold;
}
	</style>
</head>

<body>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Easy Shopping With E4 Store
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								</a>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								</a>
						</li>
						<li class="text-center border-right text-white font-weight-bold">
							<i class="fas fa-phone mr-2 font-weight-bold"></i> 001 234 5678
						</li>
						<?php 
						use Illuminate\Support\Facades\Session;
							$id =  Session::get('id');
							$tenkh=Session::get('tenkh');
							if($id!=NULL){
						?>
						<li class="text-center border-right text-white">
							<a href="{{url('/logout')}}" data-target="#exampleModal" class="text-white font-weight-bold">
								<i class="fas fa-sign-in-alt mr-2 font-weight-bold"></i> Log Out </a>
						</li>
						
						<li class="text-center text-white">
							@php 
								$url_editCustomer="/customer/".$id."/edit";
							@endphp
							<a href="{{url($url_editCustomer)}}">
							<p class="text-white font-weight-bold" style="font-size:13px;"><i class="fas fa-user-circle mr-2 font-weight-bold"></i>
							{{$tenkh}}</p></a>
						</li>
						<?php 
							} else {
						?>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white font-weight-bold">
								<i class="fas fa-sign-in-alt mr-2 font-weight-bold"></i> Log In </a>
						</li>
						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white font-weight-bold">
								<i class="fas fa-sign-out-alt mr-2 font-weight-bold"></i>Register </a>
						</li>
						<?php 
							}
						?>
						
					</ul>
					<!-- //header lists <i class="fas fa-user-cog"></i><i class="fas fa-user-circle"></i>-->
				</div>
			</div>
		</div>
	</div>

	<!-- Button trigger modal(select-location) -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>
				<i class="fas fa-map-marker"></i> Please Select Your Location</h3>
			<select class="list_of_cities">
				<optgroup label="Popular Cities">
					<option selected style="display:none;color:#eee;">Select City</option>
					<option>Birmingham</option>
					<option>Anchorage</option>
					
				</optgroup>
				<optgroup label="Alabama">
					<option>Birmingham</option>
					<option>Montgomery</option>
					
				</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div>

	<!-- modals -->
	<!-- modals -->
	<!-- log in -->

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{url('/login_customer')}}" method="post">
					{{csrf_field()}}
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="matkhau" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Log in">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Register Now</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{url('/add_customer')}}" method="post">
					{{csrf_field()}}
						<div class="form-group">
							<label class="col-form-label">Your Name</label>
							<input type="text" class="form-control" placeholder=" " name="tenkh" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="matkhau" id="password" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password_confirm" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Phone Number</label>
							<input type="text" class="form-control" placeholder=" " name="sodienthoai" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Address</label>
							<input type="text" class="form-control" placeholder=" " name="diachi" required="">
						</div>

						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="" class="font-weight-bold font-italic">
							<img src="../../../frontend2/images/logo2.png" alt=" " class="img-fluid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E4
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="{{url('/search')}}" method="post">
							{{csrf_field()}}
								<input class="form-control mr-sm-2" type="search" name="keywords_submit" placeholder="Search" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<a href="/checkout" style='text-decoration:none;'>
									<button class="btn w3view-cart" name="submit" value="">
										<i class="fas fa-cart-arrow-down text-light"></i>
										<asp:Label ID="lblCartCount" runat="server" CssClass="badge badge-warning" ForeColor="White"/>{{Cart::count()}}</a>
										
									</button>
									</a>
								
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light mr-xl-3">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse mr-xl-5" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							
							<a class="nav-link" href="/mainpage">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Smartphones & Appliances
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">Mobiles</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="/product">All Items</a>
												</li>
												<li>
													<a href="/show2">Smartphones</a>
												</li>
												<li>
													<a href="/category/7">Smartphone Appliances</a>
												</li>
											</ul>
										</div>
										
									</div>
								</div>
							</div>
						</li>
						
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="/aboutus">About Us</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="/event">Events & Promotions</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="/contactus">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->

	<!-- banner-2 -->
	
	
	
	
	<!-- //banner-2 -->
	<!-- page -->
	@yield('content')
	
	
	
	
	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Smooth, Rich & Loud Audio</h6>
								<h4 class="mt-2 mb-3">Branded Headphones</h4>
								<p>Sale up to 25% off all in store</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="../../frontend2/images/off1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>A Bigger Phone</h6>
								<h4 class="mt-2 mb-3">Smart Phones 5</h4>
								<p>Free shipping order over $100</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="../../frontend2/images/off2.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->

	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<h2 class="footer-top-head-w3l font-weight-bold mb-2">Smartphones :</h2>
				<p class="footer-main mb-4">
					If you're considering a new mobilephone, looking for a powerful new car stereo or shopping for a new HDTV, we make it easy to
					find exactly what you need at a price you can afford. We offer Every Day Low Prices on TVs, laptops, cell phones, tablets
					and iPads, video games, desktop computers, cameras and camcorders, audio, video and more.</p>
				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Free Shipping</h3>
								<p>on orders over $100</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Fast Delivery</h3>
								<p>World Wide</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Big Choice</h3>
								<p>of Products</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Categories</h3>
						<ul>
							<li class="mb-3">
								<a href="/category/1">Samsung </a>
							</li>
							<li class="mb-3">
								<a href="/category/2">Iphone</a>
							</li>
							<li class="mb-3">
								<a href="/category/3">Xiaomi</a>
							</li>
							<li class="mb-3">
								<a href="/category/4">VSmart</a>
							</li>
							<li class="mb-3">
								<a href="/category/5">Oppo</a>
							</li>
							<li class="mb-3">
								<a href="/category/6">Nokia</a>
							</li>
							<li>
								<a href="/category/7">All Appliances</a>
							</li>
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
						<ul>
							<li class="mb-3">
								<a href="/aboutus">About Us</a>
							</li>
							<li class="mb-3">
								<a href="/contactus">Contact Us</a>
							</li>
							
							
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Get in Touch</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> 15 Hangbot, Hanoi.</li>
								<li class="mb-3">
								<i class="fas fa-map-marker"></i> 212 Nguyenchithanh, Caugiay, Hanoi.</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i> 333 222 2323 </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> +222 11 9999 </li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:hoangdada199@gmail.com"> mail1 hoangdada199@gmail.com</a>
							</li>
							<li>
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:hoangdada199@gmail.com"> mail2 hoangdada199@gmail.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk">
							<h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="https://www.facebook.com/TMobile/">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="https://twitter.com/TMobile">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="icon gp" href="https://www.t-mobile.com/support/devices/t-mobile-aspect/email-accounts-t-mobile-aspect">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->

		<!-- footer fourth section -->
		<div class="agile-sometext py-md-5 py-sm-4 py-3">
			<div class="container">
				<!-- brands -->
				<div class="sub-some">
					<h5 class="font-weight-bold mb-2">Mobile Brands :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="/category/1" class="border-right pr-2">Samsung</a>
						</li>
						<li class="m-sm-1">
							<a href="/category/2" class="border-right pr-2">Iphone</a>
						</li>
						<li class="m-sm-1">
							<a href="/category/3" class="border-right pr-2">Xiaomi</a>
						</li>
						<li class="m-sm-1">
							<a href="/category/4" class="border-right pr-2">VSmart</a>
						</li>
						<li class="m-sm-1">
							<a href="/category/5" class="border-right pr-2">Oppo</a>
						</li>
						<li class="m-sm-1">
							<a href="/category/6" class="border-right pr-2">Nokia</a>
						</li>
						
						<li class="m-sm-1">
							<a href="/category/7" class="border-right pr-2">Appliances</a>
						</li>
						
					</ul>
				</div>
				
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Appliances :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="/product/20" class="border-right pr-2">S.Galaxy Watch 3</a>
						</li>
						<li class="m-sm-1">
							<a href="/product/21" class="border-right pr-2">S.Galaxy Fit 2</a>
						</li>
						<li class="m-sm-1">
							<a href="/product/24" class="border-right pr-2">Apple AirPod Max</a>
						</li>
						<li class="m-sm-1">
							<a href="/product/25" class="border-right pr-2">Bluetooth JBL GO2</a>
						</li>
						<li class="m-sm-1">
							<a href="/product/41" class="border-right pr-2">Soul Ultra Dynamic</a>
						</li>
						<li class="m-sm-1">
							<a href="/product/39" class="border-right pr-2">Apple Watch Series 6</a>
						</li>
						
					</ul>
				</div>
				
				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu mt-4">
					<h5 class="font-weight-bold mb-3">Payment Method</h5>
					<ul>
						<li>
							<img style='height:33px; width:80px;border:1px solid black;' src="../../frontend2/images/pay1a.jpg" alt="">
						</li>
						<li>
							<img src="../../frontend2/images/pay2.png" alt="">
						</li>
						<li>
							<img src="../../frontend2/images/pay5.png" alt="">
						</li>
						<li>
							<img src="../../frontend2/images/pay1.png" alt="">
						</li>
						<li>
							<img src="../../frontend2/images/pay4.png" alt="">
						</li>
						<li>
							<img src="../../frontend2/images/pay6.png" alt="">
						</li>
						<li>
							<img src="../../frontend2/images/pay3.png" alt="">
						</li>
						<li>
							<img src="../../frontend2/images/pay7.png" alt="">
						</li>
						<li>
							<img src="../../frontend2/images/pay8.png" alt="">
						</li>
						<li>
							<img src="../../frontend2/images/pay9.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
		</div>
		<!-- //footer fourth section (text) -->
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">@2020 E4 Store. All rights reserved | Design by
				<a href="http://w3layouts.com"> E4.</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="{{asset('frontend2/js/jquery-2.2.3.min.js')}}"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="{{asset('frontend2/js/jquery.magnific-popup.js')}}"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- imagezoom -->
	<script src="{{asset('frontend2/js/imagezoom.js')}}"></script>
	<!-- //imagezoom -->

	<!-- flexslider -->
	<link rel="stylesheet" href="{{asset('frontend2/css/flexslider.css')}}" type="text/css" media="screen" />

	<script src="{{asset('frontend2/js/jquery.flexslider.js')}}"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //popup modal (for location)-->
	
	<!-- cart-js -->
	
	
	
	
	<script src="{{asset('frontend2/js/minicart.js')}}"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="{{asset('frontend2/js/SmoothScroll.min.js')}}"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="{{asset('frontend2/js/move-top.js')}}"></script>
	<script src="{{asset('frontend2/js/easing.js')}}"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	
	
	
	
	
	<!-- easy-responsive-tabs -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/easy-responsive-tabs.css')}} " />
	<script src="{{asset('frontend/js/easyResponsiveTabs.js')}}"></script>

	<script>
		$(document).ready(function() {
			//Horizontal Tab
			$('#parentHorizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
	</script>
	<!-- //easy-responsive-tabs -->
	
	
	
	
	
	
	
	
	<!-- credit-card -->
	<script src="{{asset('frontend/js/creditly.js')}}"></script>
	<link rel="stylesheet" href="{{asset('frontend/css/creditly.css')}}" type="text/css" media="all" />
	<script>
		$(function() {
			var creditly = Creditly.initialize(
				'.creditly-wrapper .expiration-month-and-year',
				'.creditly-wrapper .credit-card-number',
				'.creditly-wrapper .security-code',
				'.creditly-wrapper .card-type');


			$(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
					// Your validated credit card output
					console.log(output);
				}
			});
		});
	</script>

	<!-- creditly2 (for paypal) -->
	<script src="{{asset('frontend/js/creditly2.js')}}"></script>
	<script>
		$(function() {
			var creditly = Creditly2.initialize(
				'.creditly-wrapper .expiration-month-and-year-2',
				'.creditly-wrapper .credit-card-number-2',
				'.creditly-wrapper .security-code-2',
				'.creditly-wrapper .card-type');

			$(".creditly-card-form-2 .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
					// Your validated credit card output
					console.log(output);
				}
			});
		});
	</script>

	<!-- //credit-card -->
	
	
	
	
	
	
	
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	
	
	
	
	
	
	
	
	
	
	<!-- paypal-integration -->
	<script src="https://www.paypalobjects.com/api/checkout.js"></script>
	<script>
		var usd = document.getElementById("conversion").value;
		paypal.Button.render({
			// Configure environment
			env: 'sandbox',
			client: {
				sandbox: 'ASR94hpJ-P8bqxhokfceB6F9arWz2IkB0wg64y_ESGHXwf2hAu6uB95uDQw_ur2VzEwm4HEGUtEsUXpv',
				production: 'demo_production_client_id'
			},
			// Customize button (optional)
			locale: 'en_US',
			style: {
				size: 'responsive',
				color: 'blue',
				shape: 'rect',
				tagline: 'false',
				label: 'checkout',
			},

			// Enable Pay Now checkout flow (optional)
			commit: true,

			// Set up a payment
			payment: function(data, actions) {
				return actions.payment.create({
					transactions: [{
						amount: {
							total: `${usd}`,
							currency: 'USD'
						}
					}]
				});
			},
			// Execute the payment
			onAuthorize: function(data, actions) {
				return actions.payment.execute().then(function() {
					// Show a confirmation message to the buyer
					window.alert('Thank you for your purchase!');
					var url = "http://localhost:8000/mainpage"
					$(location).attr('href',url);
				});
			}
		}, '#paypal-button');
	</script>
	<!-- //paypal-integration -->
	<!-- for bootstrap working -->
	<script src="{{asset('frontend2/js/bootstrap.js')}}"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->
	
            <!-- Start of LiveChat (www.livechatinc.com) code -->
            <script type="text/javascript">
              window.__lc = window.__lc || {};
              window.__lc.license = 13021740;
              ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)};
              var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){
              i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},
              get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");
              return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){
              var n=t.createElement("script");
              n.async=!0,n.type="text/javascript",
              n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};
              !n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
            </script>
            <noscript>
            <a href="https://www.livechatinc.com/chat-with/13021740/" rel="nofollow">Chat with us</a>,
            powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
            </noscript>
            <!-- End of LiveChat code -->

<!-- Start of LiveChat (www.livechatinc.com) code -->
            <script type="text/javascript">
              window.__lc = window.__lc || {};
              window.__lc.license = 13021740;
              ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)};
              var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){
              i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},
              get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");
              return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){
              var n=t.createElement("script");
              n.async=!0,n.type="text/javascript",
              n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};
              !n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
            </script>
            <noscript>
            <a href="https://www.livechatinc.com/chat-with/13021740/" rel="nofollow">Chat with us</a>,
            powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
            </noscript>
            <!-- End of LiveChat code -->
            <!--comment -->
	<script type="text/javascript">
		$(document).ready(function() {
			load_comment();

			function load_comment() {
				var product_id = $('.sp_id').val();
				var _token = $('input[name="_token"]').val();
				$.ajax({
					url: "{{url('/load_comment')}}",
					method: "POST",
					data: {
						sp_id: product_id,
						_token: _token
					},
					success: function(data) {
						$('#comment_show').html(data);
					}
				});
			}
			$('.send_comment').click(function() {
				var product_id = $('.sp_id').val();
				var tennhanxet = $('.tennhanxet').val();
				var thongtinnhanxet = $('.thongtinnhanxet').val();
				
				if(tennhanxet =="" || tennhanxet.length==0){
    				$('#result1a').html('<p style="color:#CC0033;font-size:16px;font-family:monospace">fullname field must not be left</p>');
    				$('#p1').focus();
    			}
    			else if(thongtinnhanxet =="" || thongtinnhanxet.length==0){
    				$('#result2a').html('<p style="color:#CC0033;font-size:16px;font-family:monospace">comment field must not be left</p>');
    				$('#p2').focus();
    			}
    			
    			else{
    				$('#result3a').html('<div style="display: flex; justify-content: center;align-items: center;"><div class="alert alert-success"><p style="color:#006600;font-size:15px;font-family:monospace">Notification: Send your comment successful... &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></p></div></div>');
    				$('#result1a').html('');
    				$('#result2a').html('');
				
				var _token = $('input[name="_token"]').val();
				$.ajax({
					url: "{{url('/send_comment')}}",
					method: "POST",
					data: {
						sp_id: product_id,
						tennhanxet: tennhanxet,
						thongtinnhanxet: thongtinnhanxet,
						_token: _token
					},
					success: function(data) {
						$('#notify_comment').html('<span class="text text-success"></span>');
						
						$('#notify_comment').fadeOut(2000);
						$('.tennhanxet').val('');
						$('.thongtinnhanxet').val('');
						
					}
				});
				window.location.href = "/product/"+product_id;
				}
			
			});
		});
	</script>
	<!--rating -->
	<script type="text/javascript">
		function remove_background(id) {
			for (var count = 1; count <= 5; count++) {
				$('#' + id + '-' + count).css('color', '#ccc');
			}
		}
		//hover and rate
		$(document).on('mouseenter', '.rating', function() {
			var index = $(this).data("index");
			var product_id = $(this).data('id');
			remove_background(product_id);
			for (var count = 1; count <= index; count++) {
				$('#' + product_id + '-' + count).css('color', '#00cc00');
			}
		})
		//hover and not rate 
		$(document).on('mouseleave', '.rating', function() {
			var index = $(this).data("index");
			var product_id = $(this).data('id');
			var rating = $(this).data("sosao");
			remove_background(product_id);

			for (var count = 1; count <= rating; count++) {
				$('#' + product_id + '-' + count).css('color', '#00cc00');
			}
		})
		//click and rate
		$(document).on('click', '.rating', function() {
			var index = $(this).data("index");
			var product_id = $(this).data('id');
			var _token = $('input[name="_token"]').val();
			$.ajax({
				url: "{{url('/insert_rating')}}",
				method: "POST",
				data: {
					index:index,
					id: product_id,
					_token: _token
				},
				success: function(data) {
					if(data == 'done'){
						return alert('You rated '+index+' out of 5 stars');
					} else {
						return alert('Error!');
					}
				}
			});
		})
	
	</script>
</body>

</html>
