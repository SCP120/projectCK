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
						<a href="/mainpage">Home</a>
						<i>|</i>
					</li>
					<li>All-Events & Discount-Promotions</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	
	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-2 mb-sm-4 mb-3">
				<span>E</span>vents <span>&</span> <span>P</span>romotions
				</h3>
			<!-- //tittle heading -->
			<!-- Product list here (please press ctrl F for searching) -->
			<div class="row">
			@foreach($event2 as $item)
			<div class="col-md-4 mt-5">
    					<div class="card" style="">
                            <img class="card-img-top" src="{{$item->anhsukien}}" id="anhto5" alt="Card image cap">
                            <div class="card-body">
                                 <h5 class="card-title">{{$item->tensukien}}</h5>
                                 <p class="card-text">{{$item->mota}}</p>
                                 <div class="d-flex">
                                 <div class='mr-auto' style="font-size:13px;">
                                 	<ul class="mt-4 ml-3">
                                 		<li>{{date('d/m/Y', strtotime($item->start))}} - {{date('d/m/Y', strtotime($item->end))}}</li>
                                 		<li style="color:#DD0000;">{{$item->trangthai}}</li>
                                 	</ul>
                                 </div>
                                 
                                 <a href="{{url('/product')}}" class='btn btn-outline-danger mt-4 font-weight-bold'>See more</a>
                                 </div>
                                 
                            </div>
                        </div>
    				</div>
				@endforeach    				
				@foreach($event as $item)
    				<div class="col-md-4 mt-5">
    					<div class="card" style="">
                            <img class="card-img-top" src="{{$item->anhsukien}}" id="anhto5" alt="Card image cap">
                            <div class="card-body">
                                 <h5 class="card-title">{{$item->tensukien}}</h5>
                                 <p class="card-text">{{$item->mota}}</p>
                                 <div class="d-flex">
                                 <div class='mr-auto' style="font-size:13px;">
                                 	<ul class="mt-4 ml-3">
                                 		<li>{{date('d/m/Y', strtotime($item->start))}} - {{date('d/m/Y', strtotime($item->end))}}</li>
                                 		<li style="color:#DD0000;">{{$item->trangthai}}</li>
                                 	</ul>
                                 </div>
                                <!--  @php
                                 	$url_tab="/product/".$item->sp_id;
                                 @endphp -->
                                 <!-- <a href="{{url($url_tab)}}" class='btn btn-outline-danger mt-4 font-weight-bold'>See more</a> -->
                                 <form class="form-inline" action="{{url('/searchEvent')}}" method="post">
							{{csrf_field()}}
								<input class="form-control mr-sm-2" type="hidden" name="keywords_submit" value="{{$item->sort_sanpham}}">
								<button  class='btn btn-outline-danger mt-4 font-weight-bold' type="submit">See more</button>
							</form>
                                 
                                 </div>
                                 
                            </div>
                        </div>
    				</div>
				@endforeach
			</div>
	</div>
	<!-- //top products -->
	</div>

@endsection