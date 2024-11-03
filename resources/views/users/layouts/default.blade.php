<!DOCTYPE html>
<html lang="en">
<head>
<title>Trang chủ</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/bootstrap4/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/responsive.css') }}">


</head>

<body>

<div class="super_container">

	<!-- Header -->

    @include('users.layouts.header')

	
	<!-- Slider -->

    <div class="main_slider" style="background-image: url('{{ asset('assets/images/banner.png') }}')">
        <div class="container fill_height">
        </div>
    </div>

	<!-- Banner -->

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/vp1.jpg)">
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/vp2.png)">
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/vp3.png)">

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- New Arrivals -->

<div class="new_arrivals py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="section_title new_arrivals_title text-uppercase">New Arrivals</h2>
                <p class="text-muted">Discover our latest collection of exclusive items</p>
            </div>
        </div>
        <div class="row mb-4 text-center">
            <div class="col">
                <ul class="list-inline">
                    <li class="list-inline-item mx-2"><button class="btn btn-outline-secondary active" data-filter="*">All</button></li>
                    <li class="list-inline-item mx-2"><button class="btn btn-outline-secondary" data-filter=".women">Vật Phẩm</button></li>
                    <li class="list-inline-item mx-2"><button class="btn btn-outline-secondary" data-filter=".accessories">Phụ Kiện</button></li>
                    <li class="list-inline-item mx-2"><button class="btn btn-outline-secondary" data-filter=".men">Thời Trang</button></li>
                </ul>
            </div>
        </div>

        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6 product-item men">
                <div class="card border-0 shadow-sm h-100">
                    <img src="images/pro (1).png" class="card-img-top" alt="Product Image">
                    <div class="card-body text-center">
                        <h6 class="product_name"><a href="single.html" class="text-dark">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                        <p class="text-primary fs-5 fw-bold">$520.00 <span class="text-muted fs-6 text-decoration-line-through">$590.00</span></p>
                        <a href="#" class="btn btn-danger btn-sm">Add to Cart</a>
                    </div>
                </div>
            </div>

            <!-- Repeat for each product -->
            <div class="col-lg-3 col-md-4 col-sm-6 product-item women">
                <div class="card border-0 shadow-sm h-100">
                    <img src="images/pro (2).png" class="card-img-top" alt="Product Image">
                    <div class="card-body text-center">
                        <h6 class="product_name"><a href="single.html" class="text-dark">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                        <p class="text-primary fs-5 fw-bold">$610.00</p>
                        <a href="#" class="btn btn-danger btn-sm">Add to Cart</a>
                    </div>
                </div>
            </div>

            <!-- Add similar blocks for each product -->
        </div>
    </div>
</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

    @include('users.layouts.footer')

</div>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
