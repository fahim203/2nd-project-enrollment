@extends('layout')
@section('content')
<div class="col-12 col-lg-12 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Add Student From</h2>
              <form class="forms-sample" method="post" action="{{ URL::to('/save-student')}}" enctype="multipart/form-data">
              	@csrf
                  <div class="form-group">
                      <label for="exampleInputEmail1">Student Name</label>
                      <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter Student Name">
                     
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Roll</label>
                      <input type="text" class="form-control p-input" name="student_roll" placeholder="Enter Student Roll">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Father Name</label>
                      <input type="text" class="form-control p-input" name="student_father_name" placeholder="Enter Student Father Name">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Mother Name</label>
                      <input type="text" class="form-control p-input" name="student_mother_name" placeholder="Enter Student Mother Name">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Email</label>
                      <input type="email" class="form-control p-input" name="student_email" placeholder="Enter Student Student Email">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Phone</label>
                      <input type="number" class="form-control p-input" name="student_phone" placeholder="Enter Student Phone">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Address</label>
                      <input type="text" class="form-control p-input" name="student_adderss" placeholder="Enter Student Adderss">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Password</label>
                      <input type="password" class="form-control p-input" name="student_password" placeholder="Enter Student Password">
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
                      <input type="date" class="form-control p-input" name="student_admission_year" placeholder="Enter Student Addmission Year">
                  </div>
                  
                  <div class="form-group">
                	<img src="" id="image">
                    <label class="small mb-1" for="inputEmailAddress">Student Image</label>
                    <input type="file" name ="student_image" accept="image/*" class="upload" onchange="readURL(this);"/>
                  </div>
                  <button type="submit" class="btn btn-info">Add Student</button>
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