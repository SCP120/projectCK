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
					
					<li>Edit Password</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div>
			@if (session()->has('message'))
			<div class="alert alert-success">
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
				
				
    	<form action = "{{ route ('password.update',$password->id)}}" method = "post">
    		@csrf
    		@method('put')
    		 
    		<input type="hidden" name="id" value="{{ $password->id }}"/>
    		<input type="hidden" id='abc2' name="matkhau" value="{{ $password->matkhau }}"/>
    		<div class="form-group">
        		<div id='alertA'>
        			
        		</div>
    			<label id='abc3'>Current Password: </label>
    			
    			<input type="password" id='abc1' class="form-control" name="matkhau" value="123456"/>
    			
    		</div>
    		<div class='d-flex flex-row'>
    			<button type="button" id='but2' class='btn btn-danger font-weight-bold' style='border:2px solid black;' onclick="getInputValue()">Check</button>
    			<a id='but1' href="/password2/{{ $password->id }}/edit" class="btn btn-primary font-weight-bold" style='border:2px solid black;'>Next</a>
    			&nbsp;<a href='/customer/{{$password->id}}/edit' class='btn btn-warning font-weight-bold' style='border:2px solid black;color:white;'>Back</a>
    		</div>
    		<p>&nbsp;</p>
    		<div id='alertB'>
    			
    		</div>
    			
    	</form>
    	
    	
    	
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
    	
    	document.getElementById('but1').style.display="none";
    	function getInputValue(){
            var inputVal = document.getElementById("abc1").value;
            var inputVal2=document.getElementById("abc2").value;
            if(inputVal === inputVal2 ){
            	document.getElementById('but1').style.display="block";
            	document.getElementById('but2').style.display="none";
            	
            	document.getElementById('abc3').style.display="none";
            	
            	document.getElementById('abc1').style.display='none';
            	
            	document.getElementById('abc1').disabled=true;
            	
            	var str1='<div class="alert alert-success" role="alert">';
 				str1+='Password has been checked, then press "Next" button ';
				str1+='</div>';
            	document.getElementById('alertA').innerHTML=str1;
            	document.getElementById('alertB').innerHTML="";
            }
            else{
            var str2='<div class="alert alert-danger" role="alert">';
  			str2+='Input wrong current password, try again...';
			str2+='</div>';
            	document.getElementById('alertB').innerHTML=str2;
            	
            }
        }
		
		</script>
	
	
	
@endsection