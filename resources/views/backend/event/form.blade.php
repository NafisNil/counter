
@include('backend.sessionMsg')
<div class="card-body">


  <div class="form-group row">
    <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
    <div class="col-md-6">
    
    <img id="showImage" src="{{(!empty($edit->logo))?URL::to('storage/'.$edit->logo):URL::to('image/no_image.png')}}"  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
  </div>
</div>
  <div class="form-group">
    <label for="exampleInputFile">Photo </label>
    <div class="input-group">
      <div class="custom-file">
        <input type="file" name="logo" class="custom-file-input"  id="image">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
      </div>
     
    </div>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Name <span style="color:red" >*</span></label>
   
    <input type="text" class="form-control" name="name" value="{!!old('name',@$edit->name)!!}">
   
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Price <span style="color:red" >*</span></label>
   
    <input type="text" class="form-control" name="price" value="{!!old('price',@$edit->price)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Location <span style="color:red" >*</span></label>
   
   <textarea name="location" id="" cols="30" rows="10" >{!!old('location',@$edit->location)!!}</textarea>
   
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Description <span style="color:red" >*</span></label>
   
   <textarea name="desc" id="" cols="30" rows="10" >{!!old('desc',@$edit->desc)!!}</textarea>
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Date and Time <span style="color:red" >*</span></label>
   
  
    <input type="datetime-local" class="form-control" name="date" value="{!!old('date',@$edit->date)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Ticket Status</label>
   
    <select class="form-control" name="ticket_status" id="dropdown">
      
      <option>Select Status</option>
        
     
        <option value="1" {{ ( "1" == @$edit->ticket_status) ? 'selected' : '' }}> 
         Open
        </option>
        <option value="2" {{ ( "2" == @$edit->ticket_status) ? 'selected' : '' }}> 
         Closed 
        </option>

    </select>
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Type</label>
   
    <select class="form-control" name="type" id="dropdown">
      
      <option>Select Status</option>
        
     
        <option value="1" {{ ( "1" == @$edit->type) ? 'selected' : '' }}> 
         Upcoming
        </option>
        <option value="2" {{ ( "2" == @$edit->type) ? 'selected' : '' }}> 
         Live 
        </option>
        <option value="3" {{ ( "3" == @$edit->type) ? 'selected' : '' }}> 
         Done
        </option>

  
        
    </select>
   
  </div>

</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>

<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'location' );
</script>
<script>
  CKEDITOR.replace( 'desc' );
</script>