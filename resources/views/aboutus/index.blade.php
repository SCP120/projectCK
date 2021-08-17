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
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

<!-- about -->
<div class="welcome py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span>A</span>bout
            <span>U</span>s
        </h3>
        <!-- //tittle heading -->
        <div class="row">
            <div class="col-lg-6 welcome-left">
                <h3>Welcome</h3>
                <h4 class="my-sm-3 my-2">
                    Welcome to E4 Shop, your number one source for all things mobile phones! 
                    We're dedicated to giving you the very best of mobile phones, 
                    with a focus on providing quality service, giving your the best prices, and finding you the best mobile phones.
                    Founded in 2021 by E4 Team, 
                    E4 Shop has come a long way from its beginnings in Hanoi. 
                    When E4 Team first started out, 
                    their passion for "best-quality mobile phones" drove them to 
                    quit day job, do tons of research, so that E4 Shop can offer you 
                    "the world's most advanced mobile phones". 
                </h4>
                <p>We now serve customers all over the world, 
                    and are thrilled that we're able to turn our passion into our] own website.
                    We hope you enjoy our products as much as we enjoy offering them to you. 
                    If you have any questions or comments, please don't hesitate to contact us.</p>
                    <p>
                    Sincerely,
                    E4 Team</p>
            </div>
            <div class="col-lg-6 welcome-right-top mt-lg-0 mt-sm-5 mt-4">
                <img src="../../frontend2/images/ab.jpg" class="img-fluid" alt=" ">
            </div>
        </div>
        <div class="text-center">
        <a href="/contactus" class="check_out btn btn-lg btn-primary justify-content-center">Contact Us</a>
        </div>
    </div>
</div>
<!-- //about -->

<!-- testimonials -->
<div class="testimonials py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center text-white mb-lg-5 mb-sm-4 mb-3">
            <span>O</span>ur
            <span>C</span>ustomers
            <span>S</span>ays
        </h3>
        <!-- tittle heading -->
        <div class="row gallery-index">
            <div class="col-sm-6 med-testi-grid">
                <div class="med-testi test-tooltip rounded p-4">
                    <p>"I love the shop! Its products are cheap and intuitive!"</p>
                </div>
                <div class="row med-testi-left my-5">
                    <div class="col-lg-2 col-3 w3ls-med-testi-img">
                        <img src="../../frontend2/images/user.jpg" alt=" " class="img-fluid rounded-circle" />
                    </div>
                    <div class="col-lg-10 col-9 med-testi-txt">
                        <h4 class="font-weight-bold mb-lg-1 mb-2">Tyson</h4>
                        <p>Customer</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 med-testi-grid">
                <div class="med-testi test-tooltip rounded p-4">
                    <p>"I like the variety in the products, there's so much to choose form."</p>
                </div>
                <div class="row med-testi-left my-5">
                    <div class="col-lg-2 col-3 w3ls-med-testi-img">
                        <img src="../../frontend2/images/user.jpg" alt=" " class="img-fluid rounded-circle" />
                    </div>
                    <div class="col-lg-10 col-9 med-testi-txt">
                        <h4 class="font-weight-bold mb-lg-1 mb-2">Alejandra</h4>
                        <p>Customer</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 med-testi-grid">
                <div class="med-testi test-tooltip rounded p-4">
                    <p>"Customer service's great! Definitely gonna buy more."</p>
                </div>
                <div class="row med-testi-left mt-sm-5 my-5">
                    <div class="col-lg-2 col-3 w3ls-med-testi-img">
                        <img src="../../frontend2/images/user.jpg" alt=" " class="img-fluid rounded-circle" />
                    </div>
                    <div class="col-lg-10 col-9 med-testi-txt">
                        <h4 class="font-weight-bold mb-lg-1 mb-2">Charles</h4>
                        <p>Customer</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 med-testi-grid">
                <div class="med-testi test-tooltip rounded p-4">
                    <p>"I bout a Samsung here with a 30% discount! it's crazy how there's a lot of sales in this shop."</p>
                </div>
                <div class="row med-testi-left mt-5">
                    <div class="col-lg-2 col-3 w3ls-med-testi-img">
                        <img src="../../frontend2/images/user.jpg" alt=" " class="img-fluid rounded-circle" />
                    </div>
                    <div class="col-lg-10 col-9 med-testi-txt">
                        <h4 class="font-weight-bold mb-lg-1 mb-2">Jessie</h4>
                        <p>Customer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //testimonials -->



@endsection