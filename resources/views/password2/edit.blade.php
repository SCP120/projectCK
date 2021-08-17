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
					
					<li>Confirm New Password</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			
    	
		<div>
			@if (session()->has('message'))
			<div class="alert alert-warning">
				{{session()->get('message')}}
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
    	<!-- <form action = "{{ route ('password2.update',$password2->id)}}" method = "post"> -->
    		@csrf
    		@method('put')
    		<input type="hidden" name="id" value="{{ $password2->id }}"/>
    		
    		<div class="form-group">
    			<label>New Password: </label>
    			<input type="password" class="form-control" id='abc1' name="matkhau" value="" required/>
    			<div id='result1a'></div>
    		</div>
    		<div class="form-group">
    			<label>Confirm New Password: </label>
    			<input type="password" class="form-control" id='abc2' name="cf_matkhau" value="" required/>
    			<div id='result2a'></div>
    			<p>&nbsp;</p>
    			<div id='result6a'></div>
    		</div>
    		
    		<div class='d-flex flex-row'>
    			<!-- <button type="button" id='but1' class='btn btn-danger font-weight-bold' style='border:2px solid black;' onclick="getInputValue()">Check</button> -->
    			<button type="submit" id='but2' class="btn btn-primary font-weight-bold" style='border:2px solid black;' onclick='test2()'>Update</button>
    			&nbsp;<a href="/customer/{{$password2->id}}/edit" class='btn btn-warning font-weight-bold' style='border:2px solid black;color:white;'>Back</a>
    		</div>
    		<p>&nbsp;</p>
    		<div id='alertA'>
    		
    		</div>
    	<!-- </form> -->
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
			
    			let matkhau1=$('#abc1').val();//string
    			
    			let matkhau2=$('#abc2').val();//string
    			
    			
    			if(matkhau1 =="" || matkhau1.length==0){
    				$('#result1a').html('<p style="color:#CC0033;font-size:16px;font-family:monospace">password field must not be empty</p>');
    				$('#abc1').focus();
    			}
    			else if(matkhau1.length < 8){
    				$('#result1a').html('<p style="color:#CC0033;font-size:16px;font-family:monospace">password field must be filled with at least 8 characters</p>');
    				$('#abc2').focus();
    			}
    			else if(matkhau1 !== matkhau2){
    				$('#result2a').html('<p style="color:#CC0033;font-size:16px;font-family:monospace">Both of those dont match to each other, try again...</p>');
    				$('#abc3').focus();
    			}
    			
    			
    			else{
    				$('#result6a').html('<div style="display: flex; justify-content: center;align-items: center;"><div class="alert alert-success"><p style="color:#006600;font-size:15px;font-family:monospace">Notification: Edit password successful... &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></p></div></div>');
    				$('#result1a').html('');
    				$('#result2a').html('');
    				
    				$.ajax({
    					url : "{{ route ('password2.update',$password2->id)}}",
						method: "post",
    				data: {
    					"_token": $("input[name='_token']").val(),
    					"_method" : "put",
    						matkhau : matkhau1
    					},
    					
    					success:function(result){
    						Swal.fire({
                              position: 'top-center',
                              icon: 'success',
                              title: 'Update your password successful',
                              showConfirmButton: false,
                              timer: 1500
                            });
                            window.location.href = "/customer/{{$password2->id}}/edit";
    					}
    				});
    			}
		}
        
        /*document.getElementById('but2').style.display="none";
        
       
        
        function getInputValue(){
        var p1 = document.getElementById("p1").value;
        var p2 = document.getElementById("p2").value;
          if(p1 === p2 && p1.length >=8 && p2.length>=8) {
            document.getElementById('but1').style.display='none';
            document.getElementById('but2').style.display='block';
             	var str1='<div class="alert alert-success" role="alert">';
 				str1+='New password has been confirmed, click "Update"...';
				str1+='</div>';
            	document.getElementById('alertA').innerHTML=str1;
            }
            else if(p1 === null || p1 === ""){
            	var str3='<div class="alert alert-danger" role="alert">';
  			str3+='the first one must not be left...';
			str3+='</div>';
            document.getElementById('alertA').innerHTML=str3;
            }
            else if(p2 === null || p2 === ""){
            	var str3='<div class="alert alert-danger" role="alert">';
  			str3+='the second one must not be left...';
			str3+='</div>';
            document.getElementById('alertA').innerHTML=str3;
            }
            else if(p2.length <8 || p1.length <8){
            	var str3='<div class="alert alert-danger" role="alert">';
  			str3+='you must fill this password field with at least 8 characters...';
			str3+='</div>';
            document.getElementById('alertA').innerHTML=str3;
            
            }
            else{
            var str2='<div class="alert alert-danger" role="alert">';
  			str2+='Both of those dont math to each other, try again...';
			str2+='</div>';
            document.getElementById('alertA').innerHTML=str2;
            }
        }
        */
        
		
		</script>
	
	
	
@endsection