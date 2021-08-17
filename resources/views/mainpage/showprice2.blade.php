@extends('admin_layout2.template')
@section('content')
@csrf

<div class="page-head_agile_info_w3l">

	</div>
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="">Home</a>
						<i>|</i>
					</li>
					<li>Under $100</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>P</span>roduct
				</h3>
			<!-- //tittle heading -->
			<!-- Product list here (please press ctrl F for searching) -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								@foreach($category_price2 as $sanpham)
								<div class="col-md-4 product-men mt-md-0 mb-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="{{$sanpham->anhdaidien}}" id="anhto1" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
												@php
                                          		$url_show = "/product/".$sanpham->id;
                                          	@endphp
													<a href="{{url($url_show)}}" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="">{{$sanpham->tendaydu}}</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">${{$sanpham->price}}</span>
												<del>$380.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="{{url('/save_cart')}}" method="post">
								{{csrf_field()}}
								<fieldset>
									<input type="hidden" name="product_id_hidden" value="{{$sanpham->id}}" />
									<input type="hidden" name="price" value="{{$sanpham->price}}" />
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
						
					</div>
					<div class="d-flex justify-content-center">
						<p style="text-decoration:none;">{{ $category_price2->onEachSide(1)->links() }}</p>
					</div>
				</div>
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Brand</h3>
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
						<!-- ram -->
						
						<!-- //ram -->
						<!-- price -->
						
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
						
						<!-- //price -->
						
					
					<!-- //product right -->
				</div>
				<!-- //product left -->
				<!-- product right -->
				
			</div>
		</div>
	</div>
	<!-- //top products -->
	</div>	

@endsection