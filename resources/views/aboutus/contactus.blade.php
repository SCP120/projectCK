@extends('admin_layout2.template')
@section('content')
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
					<li>Contact Us</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- contact -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>ontact
				<span>U</span>s
			</h3>
			<!-- //tittle heading -->
			<div class="row contact-grids agile-1 mb-5">
				<div class="col-sm-4 contact-grid agileinfo-6 mt-sm-0 mt-2">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-map-marker-alt rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Address</h4>
						<p>212 NguyenChiThanh, CauGiay
							<label>VietNam.</label>
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6 my-sm-0 my-4">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-phone rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Call Us</h4>
						<p>+(084) 1235 5678 
							<label>+(084) 1235 2369 </label>
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-envelope-open rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Email</h4>
						<p>
							<a href="mailto:info@example.com">hoangdada199@gmail.com</a>
							<label>
								<a href="mailto:info@example.com">minBiBolam95@gmail.com</a>
							</label>
						</p>
					</div>
				</div>
			</div>
			<!-- form -->
			
				<div class="contact-grids1 w3agile-6">
					<div class="row">
					@csrf
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Name</label>
							<input type="text" class="form-control" name="tenkhachhang" id="tenkhachhang" placeholder="Enter your name...">
							<div id='result1a'></div>
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">E-mail</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="abc123@gmai.com">
							<div id='result2a'></div>
						</div>
					</div>
					<div class="contact-me animated wow slideInUp form-group">
						<label class="col-form-label">Message</label>
						<textarea id="noidung" name="noidung" class='form-control' required></textarea>
						<div id='result3a'></div>
						<p>&nbsp;</p>
						<div id='result9a'></div>
					</div>
					
					<div class="contact-form">
						<button type="submit" class="btn btn-block btn-primary font-weight-bold" style="border:2px solid black;" onclick="test3()">Submit</button>
					</div>
				</div>
			
			<!-- //form -->
		</div>
	</div>
	<!-- //contact -->

	<!-- map -->
	<div class="map mt-sm-0 mt-4">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1683.097365121105!2d105.8088055029752!3d21.022477007053237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab6eb1cbb357%3A0xb3ce2c06f74751b0!2zTmd1eeG7hW4gQ2jDrSBUaGFuaCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1629121670531!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	<!-- //map -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
    		<script type="text/javascript">
    		function test3(){
    			let fname=$('#tenkhachhang').val();//string
    			let ems=$('#email').val();//string
    			let content=$('#noidung').val();//string
    			
    			
    			if(fname =="" || fname.length==0){
    				$('#result1a').html('<p style="color:#CC0033;font-size:16px;font-family:monospace">fullname field must not be empty</p>');
    				$('#tenkhachhang').focus();
    			}
    			else if(ems =="" || ems.length==0){
    				$('#result2a').html('<p style="color:#CC0033;font-size:16px;font-family:monospace">Email field must not be empty</p>');
    				$('#email').focus();
    			}
    			else if(content =="" || content.length==0){
    				$('#result3a').html('<p style="color:#CC0033;font-size:16px;font-family:monospace">Content field must not be empty</p>');
    				$('#noidung').focus();
    			}
    			
    			
    			else{
    				$('#result9a').html('<p></p><div style="display: flex; justify-content: center;align-items: center;"><div class="alert alert-success"><i style="color:#00CC00;font-size:18px;font-family:cursive">Notification: Provide your feedback successful &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div></div>');
    				$('#result1a').html('');
    				$('#result2a').html('');
    				$('#result3a').html('');
    				
    				$.ajax({
    					url : "{{route('contactus.themmoi')}}",
						method: "post",
    				data: {
    					"_token": $("input[name='_token']").val(),
    					"_method" : "post",
    						tenkhachhang : fname,
    						email : ems,
    						noidung : content
    					},
    					
    					success:function(result){
    						Swal.fire({
                              position: 'top-center',
                              icon: 'success',
                              title: 'Provide your feedback successful',
                              showConfirmButton: false,
                              timer: 1500
                            })
    					}
    				});
    			}
    			}
    		</script>
@endsection