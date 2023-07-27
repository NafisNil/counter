@extends('frontend.layout.master')
@section('title')
    Counter.com - About us
@endsection
@section('content')
<br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center text-center">
       <div class="col-lg-12">
          <h1 class="hero-2-title text-uppercase text-white">About Us</h1>
          <br>
          <img src="{{(!empty($about->logo))?URL::to('storage/'.$about->logo):URL::to('image/no_image.png')}}" alt="" style="max-width: 500px">
          <div class="text-white mb-4 pb-2 mt-2 text-md-justify">
             {!!$about->desc!!}
          </div>
         
       </div>
    </div>
 </div>
@endsection