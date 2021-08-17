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
					<li>CHECKOUT</li>
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
				<span>C</span>heck<span>o</span>ut
				</h3>

<div class="checkout-right">
   <!-- <h4 class="mb-sm-4 mb-3">Your shopping cart contains:
        <span>{{Cart::count().' '.'Products'}}</span>
    </h4> --> 
    <div class="table-responsive">
        <?php

        use Gloudemans\Shoppingcart\Facades\Cart;


        $content = Cart::content();

        ?>
        <table  class="table  table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th style='width:22%;font-weight:bold;'>Product</th>
                    <th style='width:26%;font-weight:bold;'>Quantity</th>
                    <th style='width:28%;font-weight:bold;'>Product Name</th>
                    <th style='font-weight:bold;'>Price</th>
                    <th style='font-weight:bold;'>Total</th>
                    <th style='width:6%;font-weight:bold;'>Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach($content as $value)
                <tr class="rem1">
                    <td class="invert-image">
                        <a href="single.html">
                            <img src="{{$value->options->image}}" alt=" " class="img-responsive">
                        </a>
                    </td>
                    <td class="invert">
                        <div class="quantity">
                            <div class="quantity-select">
                                <form action="{{url('/update_cart_quantity')}}" method="post">
                                    {{csrf_field()}}
                                    <input class="input text-center" type="number" min="1" max="20" name="cart_quantity" value="{{$value->qty}}">
                                    <input type="hidden" value="{{$value->rowId}}" name="cart_rowId" class="form-control">
                                    <input type="submit" value="Update" name="update_quantity" class="btn btn-default btn-sm">
                                </form>
                            </div>
                        </div>
                    </td>
                    <td class="invert" style='font-size:17px;font-weight:bold;'>{{$value->name}}</td>
                    <td class="invert" style='font-size:19px;font-weight:bold;'>${{number_format($value->price)}}</td>
                    <td class="invert" style='font-size:19px;font-weight:bold;'>
                        <?php
                        $subtotal = $value->price * $value->qty;
                        echo '$'.number_format($subtotal);
                        ?>
                    </td>
                    <td class="invert">
                        <div class="rem mt-3">
                            <a class="close1" href="{{url('/delete_cart/'.$value->rowId)}}"> </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="total_area">
    	<!-- <li>Cart Sub Total <span>{{Cart::subtotal().' '.'VND'}}</span></li>
            <li>Eco Tax <span>{{Cart::tax().' '.'VND'}}</span></li>
            <li>Shipping Cost <span>Free</span></li>  -->
    	<div class='d-flex flex-row'>
            <div class='mr-auto'>&nbsp;</div>
            <p style='font-size:16px;'>Cart Sub-Total <span>${{Cart::subtotal()}}</span></p>           
        </div>
        <div class='d-flex flex-row'>
            <div class='mr-auto'>&nbsp;</div>
            <p style='font-size:16px;'>Eco-Tax <span>${{Cart::tax()}}</span></p>           
        </div>
        <div class='d-flex flex-row'>
            <div class='mr-auto'>&nbsp;</div>
            <p style='font-size:16px;'>Shipping Cost <span>Free</span></p>           
        </div>
      	<div class='d-flex flex-row'>
            <div class='mr-auto'>&nbsp;</div>
            <p style='font-size:26px;text-decoration: underline;'>Total <span>${{Cart::total()}}</span></p>           
        </div>
    </div>
</div>
<div class="checkout-left">
    <div class="address_form_agile mt-sm-5 mt-4">
        <h4 class="mb-sm-4 mb-3">Add a new Details</h4>
        <form action="{{url('/payment_info')}}" method="post" class="creditly-card-form agileinfo_form">

            {{csrf_field()}}
            <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                <div class="information-wrapper">
                    <div class="first-row">
                        <div class="controls form-group">
                            <input class="billing-address-name form-control" type="text" name="tennguoinhan" placeholder="Full Name" required="">
                        </div>
                        <div class="w3_agileits_card_number_grids">
                            <div class="w3_agileits_card_number_grid_left form-group">
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Mobile Number" name="sodienthoai" required="">
                                </div>
                            </div>
                            <div class="w3_agileits_card_number_grid_right form-group">
                                <div class="controls">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required="">
                                </div>
                            </div>
                        </div>
                        <div class="controls form-group">
                            <input type="text" class="form-control" placeholder="Address" name="diachidonhang" required="">
                        </div>
                        <?php

                        use Illuminate\Support\Facades\Session;

                        $id =  Session::get('id');
                        if ($id != NULL) {
                        ?>
                            <input type="submit" class="check_out btn">Make a payment
                            </input>
                        <?php
                        } else {
                        ?>
                            <div class="checkout-right-basket">
                                <a href="" data-toggle="modal" data-target="#exampleModal">Log In to Purchase
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>


@endsection