@extends('layout')
@section('content')
<div class="col-12 col-lg-12 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Edit Single Teacher</h2>
              <form role="form" action="{{ url('/update-teacher/'.$single->teacher_id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label for="exampleInputEmail1">Teacher Name</label>
                      <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp" value="{{$single->teacher_name}}">
                     
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Teacher Phone</label>
                      <input type="number" class="form-control p-input" name="teacher_phone" value="{{$single->teacher_phone}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Teacher Address</label>
                      <input type="text" class="form-control p-input" name="teacher_adderss" value="{{$single->teacher_adderss}}">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputPassword1">Teacher Department Name</label>
                      <select class="form-control p-input" name="teacher_department">
                        <option value="{{$single->teacher_department}}" <?php if($single->teacher_department == $single->teacher_department){ echo "selected";} ?> disable>{{$single->teacher_department}}</option>
                        <option value="CSE">CSE</option>
                        <option value="BBA">BBA</option>
                        <option value="ECE">ECE</option>
                        <option value="EEE">EEE</option>
                        <option value="MBA">MBA</option>
                      </select>
                  </div>
                  
                  

                  <div class="form-group">
                      <img src="" id="image">
                      <label class="small mb-1" for="inputEmailAddress">Update Photo</label>
                      <input type="file" name ="teacher_image" accept="image/*" class="upload" onchange="readURL(this);"/>
                  </div>
                  <div class="form-group">
                  
                    <img src="{{ URL::to($single->teacher_image) }}" name="old_photo" style="height: 100px;width: 100px;border-radius: 50%;">  
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                      <button type="submit" class="btn btn-primary">Update Teacher</button> 
                  </div>
              </form>

                  
          </div>
      </div>
</div>
<script type="text/javascript">
  function readURL(input){
    if(input.files && input.files[0]){
      var reader = new FileReader();
      reader.onload = function (e){
        $('#image')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
@endsection