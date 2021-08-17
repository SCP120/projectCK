@extends('admin_layout2.template')
@section('content')
	<!-- help -->
	<div class="faqs-w3l py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>S</span>uccess!
			</h3>
			<!-- //tittle heading -->
			<!-- help content -->
			<div class="wthree-help mb-sm-5 mb-4">
				<div class="agile-left-help">
					<h3 class="w3-head">Thank you for purchasing!</h3>
                    <h5 class="my-sm-4 my-3"></h5>
					<a href="{{url('/mainpage')}}">Back</a>
				</div>
			</div>
			<!-- //help content -->
		</div>
	</div>
	<!-- //help -->

@endsection