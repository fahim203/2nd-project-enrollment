@extends('layout')
@section('content')
<div class="col-12 col-lg-12 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Add Teacher From</h2>
              <form class="forms-sample" method="post" action="{{ URL::to('/save-teacher')}}" enctype="multipart/form-data">
              	@csrf
                  <div class="form-group">
                      <label for="exampleInputEmail1">Teacher Name</label>
                      <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp" placeholder="Enter Teacher Name">
                     
                  </div>

                  <div class="form-group">
                      <label for="exampleInputPassword1">Teacher Phone</label>
                      <input type="number" class="form-control p-input" name="teacher_phone" placeholder="Enter Teacher Phone">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Teacher Address</label>
                      <input type="text" class="form-control p-input" name="teacher_adderss" placeholder="Enter Teacher Adderss">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Teacher Department Name</label>
                      <select class="form-control p-input" name="teacher_department">
                      	<option value="CSE">CSE</option>
                      	<option value="BBA">BBA</option>
                      	<option value="ECE">ECE</option>
                      	<option value="EEE">EEE</option>
                      	<option value="MBA">MBA</option>
                      </select>
                  </div>
                  
                  <div class="form-group">
                	<img src="" id="image">
                    <label class="small mb-1" for="inputEmailAddress">Teacher Image</label>
                    <input type="file" name ="teacher_image" accept="image/*" class="upload" onchange="readURL(this);"/>
                  </div>
                  <button type="submit" class="btn btn-info">Add Teacher</button>
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