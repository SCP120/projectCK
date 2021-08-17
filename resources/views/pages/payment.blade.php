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
					<li>PAYMENT</li>
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
				<span>I</span>nvoice
				</h3>

<div class="checkout-right">
    
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
<!-- payment page-->
<div class="privacy py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span>P</span>ayment
        </h3>
        <!-- //tittle heading -->
        <div class="checkout-right">
            <!--Horizontal Tab-->
            <div id="parentHorizontalTab">
                <ul class="resp-tabs-list hor_1">
                    <li>Cash on delivery (COD)</li>
                    <li>Credit/Debit</li>
                    <li>Paypal Account</li>
                </ul>
                <div class="resp-tabs-container hor_1">
                    <div>
                        <form action="{{url('/order1')}}" method="post">
                            {{csrf_field()}}
                            <div class="vertical_post check_box_agile">
                                <h5>COD</h5>
                                <input type="hidden" name="options" value="Cash on delivery">
                                <input type="submit" class="submit check_out btn" name="send_order" value="Make a payment">
                            </div>
                        </form>
                    </div>
                    <div>
                        <form action="{{url('/order2')}}" method="post" class="creditly-card-form agileinfo_form">
                            {{csrf_field()}}
                            <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                                <div class="credit-card-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Name on Card</label>
                                            <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                        </div>
                                        <div class="w3_agileits_card_number_grids my-3">
                                            <div class="w3_agileits_card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Card Number</label>
                                                    <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                </div>
                                            </div>
                                            <div class="w3_agileits_card_number_grid_right mt-2">
                                                <div class="controls">
                                                    <label class="control-label">CVV</label>
                                                    <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Expiration Date</label>
                                            <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                        </div>
                                        <input type="hidden" name="options" value="Debit/Credit Card">
                                    </div>
                                    <button class="submit mt-3" type="submit">
                                        <span>Make a payment </span>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div>
                        <div id="tab4" class="tab-grid" style="display: block;">
                            <div class="row">
                                <div class="col-md-6 pay-forms">
                                    <img class="pp-img" src="{{asset('frontend/images/paypal.png')}}" alt="Image Alternative text" title="Image Title">
                                    <p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>
                                    @php
                                        $total = Cart::total();
                                        $conversion = $total;
                                    @endphp
                                    <div id="paypal-button"></div>
                                    <input type="hidden" id="conversion" value="{{$conversion}}">
                                </div>
                                <div class="col-md-6 number-paymk">
                                    <form action="{{url('/order3')}}" method="post" class="creditly-card-form-2 shopf-sear-headinfo_form">
                                        {{csrf_field()}}
                                        <section class="creditly-wrapper payf_wrapper">
                                            <div class="credit-card-wrapper">
                                                <div class="first-row form-group">
                                                    <div class="controls">
                                                        <label class="control-label">Card Holder </label>
                                                        <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                                    </div>
                                                    <div class="paymntf_card_number_grids my-2">
                                                        <div class="fpay_card_number_grid_left">
                                                            <div class="controls">
                                                                <label class="control-label">Card Number</label>
                                                                <input class="number credit-card-number-2 form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="•••• •••• •••• ••••">
                                                            </div>
                                                        </div>
                                                        <div class="fpay_card_number_grid_right mt-2">
                                                            <div class="controls">
                                                                <label class="control-label">CVV</label>
                                                                <input class="security-code-2 form-control" Â·="" inputmode="numeric" type="text" name="security-code" placeholder="•••">
                                                            </div>
                                                        </div>
                                                        <div class="clear"> </div>
                                                    </div>
                                                    <div class="controls">
                                                        <label class="control-label">Valid Thru</label>
                                                        <input class="expiration-month-and-year-2 form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                                    </div>
                                                    <input type="hidden" name="options" value="Paypal">
                                                </div>
                                                <input class="submit" type="submit" value="Proceed Payment">
                                            </div>
                                        </section>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Plug-in Initialisation-->
        </div>
    </div>
</div>
<!-- //payment page -->
</div>
</div>

@endsection