@extends('backend.layout.master')
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>refund policy </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">refund policy</li>
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
                <h3 class="card-title">refund policy</h3>
                
              @if ($refundCount<1)
           
                <a href="{{route('refund.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
                           
              @endif  

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Refund</th>
                
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                   
                            
           
                    @if ($refundCount > 0)
                  <tr>
                    <td>#1</td>
                    <td>{!!@$refund->desc!!}</td>
                   
                   <td>
                     
                  
                      <a href="{{route('refund.edit',[$refund])}}"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
                    
                      <form action="{{route('refund.destroy',[$refund])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                                 
                     
                    </td>
                   
                  </tr>
                  @else
                    No data found!!!
                  @endif
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>refund policy</th>
                   
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