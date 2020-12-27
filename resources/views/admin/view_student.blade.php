@extends('layout')
@section('content')
<div class="col-12 col-lg-12 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">View Single Student</h2>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Student Name</label>
                      <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" value="{{$single->student_name}}" readonly>
                     
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Roll</label>
                      <input type="text" class="form-control p-input" name="student_roll" value="{{$single->student_roll}}" readonly>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Father Name</label>
                      <input type="text" class="form-control p-input" name="student_father_name" value="{{$single->student_father_name}}" readonly>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Mother Name</label>
                      <input type="text" class="form-control p-input" name="student_mother_name" value="{{$single->student_mother_name}}" readonly>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Email</label>
                      <input type="email" class="form-control p-input" name="student_email" value="{{$single->student_email}}" readonly>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Phone</label>
                      <input type="number" class="form-control p-input" name="student_phone" value="{{$single->student_phone}}" readonly>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Address</label>
                      <input type="text" class="form-control p-input" name="student_adderss" value="{{$single->student_adderss}}" readonly>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Password</label>
                      <input type="password" class="form-control p-input" name="student_password" value="{{$single->student_password}}" readonly="">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Department Name</label>
                      <select class="form-control p-input" name="student_department">
                      	<option value="{{$single->student_department}}">
                            @if($single->student_department == 1)
                              <span>CSE</span>
                            @elseif($single->student_department == 2)
                              <span>BBA</span>
                            @elseif($single->student_department == 3)
                              <span>ECE</span>
                            @elseif($single->student_department == 4)
                              <span>EEE</span>
                            @elseif($single->student_department == 5)
                              <span>MBA</span>        
                            @endif 
                        </option>
                      	    
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Student Addmission Year</label>
                      <input type="date" class="form-control p-input" name="student_admission_year" value="{{$single->student_admission_year}}" readonly="">
                  </div>
                  
                  <div class="form-group">
                
                    <label class="small mb-1" for="inputEmailAddress">Student Image</label>
                    <img src="{{URL::to($single->student_image) }}" style="width: 150px;height: 150px;border-radius: 50%;">
                  </div>
                  
          </div>
      </div>
</div>

@endsection