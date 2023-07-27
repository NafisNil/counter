@extends('frontend.layout.master')
@section('title')
    Counter.com - Refund policy
@endsection
@section('content')
<br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center text-center">
       <div class="col-lg-12">
          <h1 class="hero-2-title text-uppercase text-white">Refund policy</h1>
          <br>
       
          <div class="text-white mb-4 pb-2 mt-2 text-md-justify">
             {!!$refund->desc!!}
          </div>
         
       </div>
    </div>
 </div>
@endsection