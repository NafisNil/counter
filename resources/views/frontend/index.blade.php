@extends('frontend.layout.master')
@section('title')
    Counter.com - Index
@endsection
@section('content')
    	<!-- Banner 1 Starts Here -->
	<div class="heading-page header-text">
		<section class="page-heading">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-content">
							<h1 class="banner-title">
								Event ticketing <br>
								done right
							</h1>
							<h4>
								creating awesome events and selling tickets <br>
								online just got a whole lot easier.
							</h4>
							<div class="text-center">
								<button class="btn">Sign up for free </button>
								<br><br><br>
								<img class="" style="height: 55px;" src="{{asset('frontend')}}/assets/images/logo.png" alt="">
								<br><br>
								<h1>
									Upcoming Events
								</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- Banner 2 Starts Here -->
	<div class="heading-page1 header-text">
		<section class="page-heading">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100"
										src="{{(!empty($slider_first->logo))?URL::to('storage/'.$slider_first->logo):URL::to('image/no_image.png')}}"
										alt="First slide">
								</div>
                                @foreach ($slider as $item)
                                <div class="carousel-item">
									<img class="d-block w-100"
										src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="Second slide">
								</div>
                                @endforeach
							
							
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button"
								data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button"
								data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection