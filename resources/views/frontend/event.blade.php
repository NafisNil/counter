@extends('frontend.layout.master')
@section('title')
    Counter.com - Event List
@endsection
@section('content')
<br><br><br><br><br><br>
<div class="container mb-5">
    <form class="mb-3" method="POST" action="{{route('event_filter')}}">
        @csrf
       <div class="row p-lg-5">
          <div class="col-md-3"></div>
          <div class="col-md-6 text-center shadow-lg rounded-3" style="align-items: flex-end; background-color: #383838; padding: 20px ">
             <div>
                <label class="form-label text-primary" for="status" style="color:rgb(241, 235, 235)">Status:</label>
                <select class="form-select" id="status" name="type">
                    <option value="">Select</option>
                   <option value="1">Upcoming</option>
                   <option value="2">Live</option>
                   <option value="3">Done</option>
                </select>
             </div>
             <div class="row">
                <div class="col-md-6 pt-2"><button class="btn w-100 btn-lg text-dark btn-primary" type="submit">Filter</button></div>
                <div class="col-md-6 pt-2"><a class="btn w-100 btn-danger" href="{{route('event')}}">Clear Filters</a></div>
             </div>
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-2"></div>
       </div>
    </form>
    <div class="row">

    @foreach ($event as $item)
        
  
       <div class="col-lg-4 col-md-6 mt-4 pt-2">
          <div class="events-event bg-dark border px-4 py-5 bg-dark-light text-center rounded" style="height: 450px">
             <h3 class="mb-4 pri-text text-light">{{$item->name}}</h3>
             <div class="text-light pre-text">
                
             </div>
             <span class="text-white fs-14">{{$item->date}}</span> &nbsp; <span class="text-white fs-14">{!!$item->location!!}</span>
             <br>
            
             @if ($item->type == "1")
             <span class="text-info fs-14">  Upcoming </span>
                @elseif($item->type == "2")
                <span class="text-success fs-14">  Live</span>
                @elseif($item->type == "3")
                <span class="text-danger fs-14">  Done</span>
              
                @endif
                <br>
             <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="" style="max-width: 200px">
             <br>
             <a class="btn btn-primary btn-lg text-dark mt-3" href="{{route('event_details',$item->id)}}">
                View Event
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send icon-xxs icon">
                   <line x1="22" y1="2" x2="11" y2="13"></line>
                   <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
             </a>
          </div>
       </div>
       @endforeach
    </div>
 </div>
@endsection