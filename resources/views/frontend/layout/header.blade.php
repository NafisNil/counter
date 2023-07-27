<header class="" style="background: #000; ">
    <nav class="navbar navbar-expand-lg">
        <div class="container mt-2">
            <a class="navbar-brand" href="#">
                <img class="" style="height: 47px;" src="assets/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @php
            $prefix = Request::route()->getPrefix();
            $route = Request::route()->getName();
            @endphp
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">Home
                            @if ($route == 'index')
                            <span class="sr-only">(current)</span>
                            @endif
                            
                        </a>
                    </li>
                    <li class="nav-item">
                      
                        <a class="nav-link" href="{{route('about')}}">About Us</a>
                        @if ($route == 'about')
                        <span class="sr-only">(current)</span>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('event')}}">Events</a>
                        @if ($route == 'event')
                        <span class="sr-only">(current)</span>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}#contact">Contact Us</a>
                    </li>

                    <li class="nav-item" style="margin-left: 100px;">
                        <a class="btn bg-light" href="#">Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn bg-light" href="{{route('event')}}">Buy Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn bg-light" href="#"><i class="fa-solid fa-user-plus"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>