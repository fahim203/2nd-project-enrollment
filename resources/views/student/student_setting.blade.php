@extends('student_layout')

@section('content')
<div class="col-12 col-lg-12 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Edit Your Profile</h2>
              <form role="form" action="{{ url('/update-student-profile/'.$result->student_id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label for="exampleInputEmail1">Student Name</label>
                      <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" value="{{$result->student_name}}">
                     
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Father Name</label>
                      <input type="text" class="form-control p-input" name="student_father_name" value="{{$result->student_father_name}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Mother Name</label>
                      <input type="text" class="form-control p-input" name="student_mother_name" value="{{$result->student_mother_name}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Email</label>
                      <input type="email" class="form-control p-input" name="student_email" value="{{$result->student_email}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Phone</label>
                      <input type="number" class="form-control p-input" name="student_phone" value="{{$result->student_phone}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Address</label>
                      <input type="text" class="form-control p-input" name="student_adderss" value="{{$result->student_adderss}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Password</label>
                      <input type="password" class="form-control p-input" name="student_password" value="{{$result->student_password}}">
                  </div>
			      <div class="form-group">
                      <img src="" id="image">
                      <label class="small mb-1" for="inputEmailAddress">Update Photo</label>
                      <input type="file" name ="student_image" accept="image/*" class="upload" onchange="readURL(this);"/>
                  </div>
                  <div class="form-group">
                  
                    <img src="{{ URL::to($result->student_image) }}" name="old_photo" style="height: 100px;width: 100px;border-radius: 50%;">  
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                      <button type="submit" class="btn btn-primary">Update Student</button> 
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