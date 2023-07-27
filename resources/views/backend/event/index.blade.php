@extends('backend.layout.master')
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Event </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Event</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Event</h3>
                
              
                <a href="{{route('event.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
                      

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>Type</th>
                    <th>Ticket Status</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                   
                            
                    @foreach ($event as $key=>$item) 
                   
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}} BDT</td>
                    <td>{{$item->date}}</td>
                    <td>{!!$item->location!!}</td>
                    <td>{!!$item->desc!!}</td>
                    <td> <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="{{$item->title}}" style="max-width:250px"></td>
                    <td>
                      @if ($item->type == "1")
                      Upcoming
                      @elseif($item->type == "2")
                      Live
                      @elseif($item->type == "3")
                      Done
                    
                      @endif
                    </td>

                    <td>
                      @if ($item->ticket_status == "1")
                      Open
                      @elseif($item->ticket_status == "2")
                      Closed
                    
                      @endif
                    </td>
                   <td>
            
                      <a href="{{route('event.edit',[$item])}}"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
                    
                      <form action="{{route('event.destroy',[$item])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                         
                    </td>
                   
                  </tr>
                
                  @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>Type</th>
                    <th>Ticket Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection