@extends('admin_layout2.template')
@section('content')
@csrf
<div class="page-head_agile_info_w3l">

</div>
<!-- page -->
<div class="services-breadcrumb">
	<div class="agile_inner_breadcrumb">
		<div class="container">
			<ul class="w3_short">
				<li>
					<a href="/mainpage">Home</a>
					<i>|</i>
				</li>
				<li>{{$detail2->tendaydu}}</li>
			</ul>
		</div>
	</div>
</div>
<!-- //page -->

<!-- Single Page -->
<div class="banner-bootom-w3-agileits py-5">
	<div class="container py-xl-4 py-lg-2">
		<!-- tittle heading -->
		<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
			<span>S</span>ingle
			<span>P</span>roduct
		</h3>
		<!-- //tittle heading -->
		<div class="row">
			<div class="col-lg-5 col-md-8 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="{{$detail2->anhdaidien}}">
								<div class="thumb-image">
									<img src="{{$detail2->anhdaidien}}" id="anhto3" data-imagezoom="true" class="img-fluid" alt="">
								</div>
							</li>
							<li data-thumb="{{$detail2->anhdaidien2}}">
								<div class="thumb-image">
									<img src="{{$detail2->anhdaidien2}}" id="anhto3" data-imagezoom="true" class="img-fluid" alt="">
								</div>
							</li>
							<li data-thumb="{{$detail2->anhdaidien3}}">
								<div class="thumb-image">
									<img src="{{$detail2->anhdaidien3}}" id="anhto3" data-imagezoom="true" class="img-fluid" alt="">
								</div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-7 single-right-left simpleCart_shelfItem">
				<h3 class="mb-3">{{$info1->tieude}}</h3>
				<p class="mb-3">
					<span class="item_price">{{$detail2->price}}</span>
					<del class="mx-2 font-weight-light">$380.00</del>
					<label>Free delivery</label>
				</p>
				<div class="single-infoagile">
					<ul>
						<li class="mb-3">
							Brand: {{$detail2->hang}}
						</li>
						<li class="mb-3">
							{{$info1->quyenloi1}}.
						</li>
						<li class="mb-3">
							{{$info1->quyenloi2}}.
						</li>
						<li class="mb-3">
							{{$info1->quyenloi3}}.
						</li>
						<li class="mb-3">
							{{$info1->quyenloi4}}.
						</li>
					</ul>
				</div>
				<div class="product-single-w3l">
					<p class="my-3">
						<i class="far fa-hand-point-right mr-2"></i>
						<label>{{$info1->baohanh}} Year</label>Manufacturer Warranty
					</p>
					<ul>
						<li class="mb-1">
							{{$info1->thongso1}}
						</li>
						<li class="mb-1">
							{{$info1->thongso2}}
						</li>
						<li class="mb-1">
							{{$info1->thongso3}}
						</li>
						<li class="mb-1">
							{{$info1->thongso4}}
						</li>
						<li class="mb-1">
							{{$info1->thongso5}}
						</li>
					</ul>
					<p class="my-sm-4 my-3">
						<i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
					</p>
				</div>
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="{{url('/save_cart')}}" method="post">
							{{csrf_field()}}
							<fieldset>
								<input type="hidden" name="product_id_hidden" value="{{$detail2->id}}" />
								<input type="hidden" name="price" value="{{$detail2->price}}" />
								<input type="submit" name="submit" value="Add to cart" class="button" />
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		<style type="text/css">
			#reviews {
				padding-left: 25px;
				padding-right: 25px;
			}

			#reviews ul {
				background: #FFFFFF;
				border: 0 none;
				list-style: none outside none;
				margin: 0 0 20px;
				padding: 0;
			}

			#reviews ul li {
				display: inline-block;
			}

			#reviews ul li a {
				color: #696763;
				display: block;
				font-family: 'Roboto', sans-serif;
				font-size: 14px;
				padding-right: 15px;
			}

			#reviews ul li a i {
				color: #FE980F;
				padding-right: 8px;
			}

			#reviews ul li a:hover {
				background: #fff;
				color: #FE980F;
			}

			#reviews p {
				color: #363432;
			}

			#reviews form span {
				display: block;
			}

			#reviews form span input {
				background: #F0F0E9;
				border: 0 none;
				color: #A6A6A1;
				font-family: 'Roboto', sans-serif;
				font-size: 14px;
				outline: medium none;
				padding: 8px;
				width: 48%;
			}


			#reviews textarea {
				background: #F0F0E9;
				border: medium none;
				color: #A6A6A1;
				height: 195px;
				margin-bottom: 25px;
				margin-top: 15px;
				outline: medium none;
				padding-left: 10px;
				padding-top: 15px;
				resize: none;
				width: 99.5%;
			}

			#reviews button {
				
				
				
				font-family: 'Roboto', sans-serif;
				font-size: 14px;
			}
		</style>
		<p class="mb-lg-5 mb-lg-4 mb-lg-3">
		</p>

		<div class="row" id="reviews">
			<div class="col-sm-12">
				<style type="text/css">
					.style-comment {
						border: 1px solid #ddd;
						border-radius: 10px;
						background: #F0F0E9;
					}
				</style>
				

				<div style='text-decoration:underline;'><b>Rating Star: </b></div>
					<ul class="list-inline rating" title="Rating">
						@for($count=1; $count<=5; $count++)
						@php
							if($count<=$rating){
								$color = 'color:#00cc00;';
							} else {
								$color = 'color:#ccc;';
							}
						@endphp	
							<li title="Star Rating"
							id="{{$detail2->id}}-{{$count}}"
							data-index="{{$count}}"
							data-id="{{$detail2->id}}"
							data-sosao="{{$rating}}"
							class="rating"
							style="cursor:pointer; {{$color}} font-size:30px;"
							>&#9733;
							</li>
						@endfor
					</ul>
					<div class='mb-3' style='text-decoration:underline;'><b>Write Your Review: </b></div>
					
				<form action="#" method='post'>
					<span>
						<input style="width:99.5%;" name='fullname' id='p1' type="text" class="tennhanxet" placeholder="Enter your name..." required/>
						<div id='result1a'></div>
					</span>
					<textarea name="comment" id='p2' class="thongtinnhanxet" placeholder="Enter your feeling about this product..." required ></textarea>
    				<div id='result2a'></div>	
					<button type="button" id='btnSend' style='font-weight:bold;' class="btn btn-success mb-5 pull-right send_comment">
						Send
					</button>
					<div id='result3a'></div>
					<div id="notify_comment"></div>
				</form>
				<center>
					<div style='border:2px solid #F0F0E9;background-color: #F0F0E9;width:50%;'></div>
				</center>
				
				<p>&nbsp;</p>
				<form>
				{{csrf_field()}}
					<input type="hidden" name="sp_id" class="sp_id" id="sp_id" value="{{$detail2->id}}">
					<div id="comment_show"></div>
					<p>&nbsp;</p>
				</form>
				
			</div>
		</div>
	</div>
</div>
<!-- //Single Page -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
		
		
		</script>
@endsection