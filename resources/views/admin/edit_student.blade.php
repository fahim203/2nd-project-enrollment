@extends('layout')
@section('content')
<div class="col-12 col-lg-12 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Edit Single Student</h2>
              <form role="form" action="{{ url('/update-student/'.$single->student_id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label for="exampleInputEmail1">Student Name</label>
                      <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" value="{{$single->student_name}}">
                     
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Roll</label>
                      <input type="text" class="form-control p-input" name="student_roll" value="{{$single->student_roll}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Father Name</label>
                      <input type="text" class="form-control p-input" name="student_father_name" value="{{$single->student_father_name}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Mother Name</label>
                      <input type="text" class="form-control p-input" name="student_mother_name" value="{{$single->student_mother_name}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Email</label>
                      <input type="email" class="form-control p-input" name="student_email" value="{{$single->student_email}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Phone</label>
                      <input type="number" class="form-control p-input" name="student_phone" value="{{$single->student_phone}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Address</label>
                      <input type="text" class="form-control p-input" name="student_adderss" value="{{$single->student_adderss}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Password</label>
                      <input type="password" class="form-control p-input" name="student_password" value="{{$single->student_password}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Department Name</label>
                      <select class="form-control p-input" name="student_department">
                        <option value="1">CSE</option>
                        <option value="2">BBA</option>
                        <option value="3">ECE</option>
                        <option value="4">EEE</option>
                        <option value="5">MBA</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Addmission Year</label>
                      <input type="date" class="form-control p-input" name="student_admission_year" value="{{$single->student_admission_year}}">
                  </div>
                  
                  

                  <div class="form-group">
                      <img src="" id="image">
                      <label class="small mb-1" for="inputEmailAddress">Update Photo</label>
                      <input type="file" name ="student_image" accept="image/*" class="upload" onchange="readURL(this);"/>
                  </div>
                  <div class="form-group">
                  
                    <img src="{{ URL::to($single->student_image) }}" name="old_photo" style="height: 100px;width: 100px;border-radius: 50%;">  
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