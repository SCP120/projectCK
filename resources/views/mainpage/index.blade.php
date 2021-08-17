@extends('admin_layout2.template')
@section('content')
@csrf

	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get flat
								<span>10%</span> Cashback</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
								<span>Big</span>
								Sale
							</h3>
							<a class="button2" href="/product">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>advanced
								<span>Wireless</span> earbuds</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Best
								<span>Headphone</span>
							</h3>
							<a class="button2" href="/category/7">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get flat
								<span>10%</span> Cashback</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">New
								<span>Standard</span>
							</h3>
							<a class="button2" href="/category/7">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item4">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get Now
								<span>40%</span> Discount</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Today
								<span>Discount</span>
							</h3>
							<a class="button2" href="/category/7">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>O</span>ur
				<span>N</span>ew
				<span>P</span>roducts</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">New Brand Mobiles</h3>
							<div class="row">
								@foreach($dtmain as $sp)
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="{{$sp->anhdaidien}}" id="anhto2" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
												@php
                                          			$url_show = "/product/".$sp->id;
                                          		@endphp
													<a href="{{url($url_show)}}" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="">{{$sp->tendaydu}}</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">${{$sp->price}}</span>
												<del>$480.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="{{url('/save_cart')}}" method="post">
								{{csrf_field()}}
								<fieldset>
									<input type="hidden" name="product_id_hidden" value="{{$sp->id}}" />
									<input type="hidden" name="price" value="{{$sp->price}}" />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<!-- //first section -->
						<!-- second section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">All New Speakers</h3>
							<div class="row">
								@foreach($apps as $item)
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="{{$item->anhdaidien}}" id="anhto2" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
												@php
													$url_apps="/product/".$item->id;
												@endphp
													<a href="{{url($url_apps)}}" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="">{{$item->tendaydu}}</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">${{$item->price}}</span>
												<del>$340.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="{{url('/save_cart')}}" method="post">
								{{csrf_field()}}
								<fieldset>
									<input type="hidden" name="product_id_hidden" value="{{$item->id}}" />
									<input type="hidden" name="price" value="{{$item->price}}" />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<!-- //second section -->
						<!-- third section -->
						<div class="product-sec1 product-sec2 px-sm-5 px-3">
							<div class="row">
								<h3 class="col-md-4 effect-bg">Summer Carnival</h3>
								<p class="w3l-nut-middle">Extra 10% Off</p>
								<div class="col-md-8 bg-right-nut d-flex flex-row">
									<img src="frontend/images/font2.webp" class='ml-5 py-2' style='height: 260px;' alt="">
									<img src="frontend/images/font3.webp" class='mr-5 py-2' style='height: 260px;margin-left:-25px;' alt="">
								</div>
							</div>
						</div>
						<!-- //third section -->
						<!-- fourth section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
							<h3 class="heading-tittle text-center font-italic">New Brand Watches</h3>
							<div class="row">
							@foreach($apps2 as $item)
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="{{$item->anhdaidien}}" id="anhto2" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
												@php
													$url_apps2="/product/".$item->id;
												@endphp
													<a href="{{url($url_apps2)}}" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<span class="product-new-top">New</span>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="#">{{$item->tendaydu}}</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">${{$item->price}}</span>
												<del>$280.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="{{url('/save_cart')}}" method="post">
								{{csrf_field()}}
								<fieldset>
									<input type="hidden" name="product_id_hidden" value="{{$item->id}}" />
									<input type="hidden" name="price" value="{{$item->price}}" />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
											</div>

										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Search Here..</h3>
							<form action="{{url('/search')}}" method="post">
                    			{{csrf_field()}}
                        		<input type="search" placeholder="Product name..." name="keywords_submit" required="">
                        		<input type="submit" value=" ">
                			</form>
						</div>
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Brands</h3>
							<div class="w3l-range">
								<ul>
								
								@foreach($category as $cate)
									<li>
									@php
                              			$url_category_show = "/category/".$cate->id;
                              		@endphp
										<a href="{{url($url_category_show)}}">{{$cate->tendn}}</a>
									</li>
								@endforeach	
								</ul>
							</div>
						</div>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Price</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="/showprice1">Under $100</a>
									</li>
									<li class="my-1">
										<a href="/showprice2">$100 - $200</a>
									</li>
									<li>
										<a href="/showprice3">$200 - $300</a>
									</li>
									<li class="mt-1">
										<a href="/showprice4">Over $300</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //price -->
						<!-- discounts -->
						
						<!-- //discounts -->
						<!-- reviews -->
						
						<!-- //reviews -->
						<!-- electronics -->
						
						<!-- //electronics -->
						<!-- delivery -->
						
						<!-- //delivery -->
						<!-- arrivals -->
						
						<!-- //arrivals -->
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Brand-New</h3>
								<div>
									<img style='width:220px;height:auto;border-radius:10px;box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;' alt="" src="https://img.us.news.samsung.com/us/wp-content/uploads/2019/09/16172959/Galaxy-Note10-In-Depth_main_5-performance.gif">
								</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->

@endsection
