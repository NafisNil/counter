<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="TemplateMo">
	<link
		href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
		rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<title>@yield('title')</title>

	<!-- Bootstrap core CSS -->
	<link href="{{asset('frontend')}}/assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.css">
</head>

<body>

	<!-- Header -->
	@include('frontend.layout.header')

    @yield('content')

	<!-- Banner 3 Starts Here -->
	<div class="heading-page2 header-text">
        @php
        $prefix = Request::route()->getPrefix();
        $route = Request::route()->getName();
        @endphp
		<section class="page-heading2">
            @if ($route == 'index')
            <div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-content">
							<div class="text-center">
								<button class="btn">Buy Tickets</button>
							</div>
							<h1>
								About us
							</h1>
							<h4>
								{!! $about->desc!!}
							</h4>
							<br><br>
							<a href="{{route('about')}}"><button class="btn">Learn More</button></a>
						</div>
					</div>
				</div>
			</div>
            @endif

			<hr style="background: #000; margin: 100px 0px 60px 0;">
            @include('frontend.layout.footer')
		</section>
	</div>

	<!-- Banner Ends Here -->

	<!-- Additional Scripts -->
	<script src="{{asset('frontend')}}/assets/js/custom.js"></script>
	<script src="{{asset('frontend')}}/assets/js/owl.js"></script>
	<script src="{{asset('frontend')}}/assets/js/slick.js"></script>
	<script src="{{asset('frontend')}}/assets/js/isotope.js"></script>
	<script src="{{asset('frontend')}}/assets/js/accordions.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>
	<script language="text/Javascript">
		cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
		function clearField(t) {                   //declaring the array outside of the
			if (!cleared[t.id]) {                      // function makes it static and global
				cleared[t.id] = 1;  // you could use true and false, but that's more typing
				t.value = '';         // with more chance of typos
				t.style.color = '#fff';
			}
		}
	</script>

</body>

</html>