@extends('frontend.layout.master')
@section('title')
    Counter.com - Event Details
@endsection
@section('content')
<br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center text-center">
       <div class="col-lg-12">
          <h1 class="hero-2-title text-uppercase text-white">{{$event->name}}</h1> <br>
          <h3 class="hero-2-title text-uppercase text-white">{{$event->price}} BDT</h3>
          <br>
          <img src="{{(!empty($event->logo))?URL::to('storage/'.$event->logo):URL::to('image/no_image.png')}}" alt="" style="max-width: 500px">
          <div class="text-white mb-4 pb-2 mt-2 text-md-justify">
             {!!$event->desc!!}
          </div>
          <div class="text-white mt-2 mb-5">
            @if ($event->type == '1' && $event->ticket_status == '2')
            <h4>Ticketing is not live!</h4>
            <a class="btn btn-primary btn-lg text-dark mt-1" href="#">NOTIFY ME WHEN LIVE</a>
            @elseif($event->type == '1' && $event->ticket_status == '1')
            <a class="btn btn-success btn-lg text-dark mt-1" href="#">buy Ticket</a>
            @elseif($event->type == '2')
            <h4>Event is continuing!</h4>
            @elseif($event->type == '3')
            <h4>Event has finished!</h4>
            @endif
             
          </div>
       </div>
    </div>
 </div>
@endsection