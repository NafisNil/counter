@extends('frontend.layout.master')
@section('title')
    Counter.com - Terms and Condition
@endsection
@section('content')
<br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center text-center">
       <div class="col-lg-12">
          <h1 class="hero-2-title text-uppercase text-white">Terms and Condition</h1>
          <br>
        
          <div class="text-white mb-4 pb-2 mt-2 text-md-justify">
             {!!$term->desc!!}
          </div>
         
       </div>
    </div>
 </div>
@endsection