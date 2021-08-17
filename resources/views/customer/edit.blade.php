@extends('admin_layout2.template')
@section('content')

<div style='background-image: url("https://image.freepik.com/free-vector/vintage-ornamental-flowers-background_52683-28040.jpg");'>
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
					
					<li>Edit Customer</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			
    	<!-- 
    trong blade
    su dung ham url('<uri>') cua 1 route
    su dung ham route('<name>') cua 1 route de dieu huong
    
        $obj_id->tenkh = $req->tenkh;
        $obj_id->email = $req->email;
        $obj_id->matkhau = $req->matkhau;
        $obj_id->sodienthoai = $req->sodienthoai;
        $obj_id->diachi = $req->diachi;
     --><!--  -->
		<div>
			@if (session()->has('message'))<!-- ti xem message no nam o vi tri nao nha-->
			<div class="alert alert-success">
				{{session()->get('message')}}<!-- message de thuc hien thong bao xem chuc nang da hoat dong dc hay chua -->
			</div>
		@endif
		</div>
		<div style="display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: stretch;
    width:35em;margin-left: auto;
    margin-right: auto;">
    <div style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
    <div class='jumbotron bg-light'>
    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>P</span>rofile
				</h3>
    	
    		@csrf
    		@method('put')
    		<input type="hidden" name="id" value="{{ $customer->id }}"/><!--Ti tim xem $chuyennganh no nam o dau nha-->
    		
    		<div class="form-group">
    			<label>Name:</label>
    			<input type="text" class="form-control" id='abc1' name="tenkh" value="{{ $customer->tenkh }}"/>
    			<div id='result1a'></div>
    		</div>
    		<div class="form-group">
    			<label>Email:</label>
    			<input type="email" class="form-control" id='abc2' name="email" value="{{ $customer->email }}"/>
    			<div id='result2a'></div>
    		</div>
    		
    		<div class="form-group">
    			<label>Tel:</label>
    			<input type="text" class="form-control" id='abc3' name="sodienthoai" value="{{ $customer->sodienthoai }}"/>
    			<div id='result3a'></div>
    		</div>
    		<div class="form-group">
    			<label>Address:</label>
    			<input type="text" class="form-control" id='abc4' name="diachi" value="{{ $customer->diachi }}"/>
    			<div id='result4a'></div>
    		</div>
    		<div class="form-group">
    			<label>Gender:</label>
    			<select name="gioitinh"  id="gioitinh" class='form-control font-weight-bold' required>
    				<option value="0" <?php echo $customer->gioitinh==0?"selected":"" ?>>Men</option>
    				<option value="1" <?php echo $customer->gioitinh==1?"selected":"" ?>>Women</option>
    			</select>
    			<div id='result5a'></div><!-- div id=result5a se k can dung den nha, result6a de xac nhan la da update thanh cong -->
    			<p>&nbsp;</p>
    			
    			<div id='result6a'></div>
    		</div>
    		<div class='d-flex flex-row'>
    			<button type="submit" class="btn btn-primary font-weight-bold" style='border:2px solid black;' onclick="test2()">Update</button>&nbsp;
    			<a href="/password/{{ $customer->id }}/edit" class="btn btn-warning text-light font-weight-bold" style='border:2px solid black;'>Password</a>
    		</div>
    		
    	
    	</div>
    	</div>
    	</div>
    </div>
	<!-- //top products -->
	</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
		function test2(){
			
    			let tenkh1=$('#abc1').val();//string
    			//---------------------------------
    			let email2=$('#abc2').val();//string
    			let sodienthoai3=$('#abc3').val();//string
    			let diachi4=$('#abc4').val();//string
    			
    			let gioitinh5=$('#gioitinh').val();//integer, cai status la select nen cx k can rao dieu kien nha
    			
    			if(tenkh1 =="" || tenkh1.length==0){
    				$('#result1a').html('<p style="color:#CC0033;font-size:16px;font-family:monospace">fullname field must not be empty</p>');
    				$('#abc1').focus();
    			}
    			else if(email2 =="" || email2.length==0){
    				$('#result2a').html('<p style="color:#CC0033;font-size:16px;font-family:monospace">email field must not be empty</p>');
    				$('#abc2').focus();
    			}
    			else if(sodienthoai3 =="" || sodienthoai3.length != 10){
    				$('#result3a').html('<p style="color:#CC0033;font-size:16px;font-family:monospace">tel field must not be empty (note: 10 numbers)</p>');
    				$('#abc3').focus();
    			}
    			else if(!/^[0-9]+$/.test(sodienthoai3)){
    				$('#result3a').html('<p style="color:#CC0033;font-size:16px;font-family:monospace">tel field must be filled by numeric string (note: 10 numbers)</p>');
    				$('#abc3').focus();
    			}
    			else if(diachi4 =="" || diachi4.length==0){
    				$('#result4a').html('<p style="color:#CC0033;font-size:16px;font-family:monospace">address field must not be empty</p>');
    				$('#abc4').focus();
    			}
    			
    			else{
    				$('#result6a').html('<div style="display: flex; justify-content: center;align-items: center;"><div class="alert alert-success"><p style="color:#006600;font-size:15px;font-family:monospace">Notification: Edit your info successful &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></p></div></div>');
    				$('#result1a').html('');
    				$('#result2a').html('');
    				$('#result3a').html('');
    				$('#result4a').html('');
    				$.ajax({
    					url : "{{route('customer.update',$customer->id)}}",
						method: "post",
    				data: {
    					"_token": $("input[name='_token']").val(),
    					"_method" : "put",
    						tenkh:tenkh1,
    						email:email2,
    						sodienthoai:sodienthoai3,
    						diachi:diachi4,
    						gioitinh:gioitinh5
    					},
    					
    					success:function(result){
    						Swal.fire({
                              position: 'top-center',
                              icon: 'success',
                              title: 'Update your profile successful',
                              showConfirmButton: false,
                              timer: 1500
                            })
    					}
    				});
    			}
		}
		</script>
	
	
	
@endsection