@extends('student_layout')

@section('content')
<style type="text/css">
  
  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 600px;
  margin: auto;
  text-align: center;
  font-family: arial;
}


</style>

<div class="card">
  <img src="{{ URL::to($result->student_image) }}" alt="John" style="height: 150px;width: 150px;border-radius: 50%;margin:0 auto">
  <h1>{{$result->student_name}}</h1>
  <p class="title">{{$result->student_roll}}</p>
  <p>Metropolitan University, Sylhet</p>
  <div class="row">
  <div class="col-sm-6">
    <p class="title"><b>Father Name :</b> {{$result->student_father_name}}</p>
    <p class="title"><b>Mother Name :</b> {{$result->student_mother_name}}</p>
    <p class="title"><b>Email :</b> {{$result->student_email}}</p>
    <p class="title"><b>Address :</b> {{$result->student_adderss}}</p>
  </div>
  <div class="col-sm-6">
    <p class="title"><b>Roll : </b>{{$result->student_roll}}</p>
    <p class="title"><b>Department :</b> 
        @if($result->student_department == 1)
            <span>CSE</span>
            @elseif($result->student_department == 2)
              <span>BBA</span>
            @elseif($result->student_department == 3)
              <span>ECE</span>
            @elseif($result->student_department == 4)
              <span>EEE</span>
            @elseif($result->student_department == 5)
              <span>MBA</span>        
        @endif  
    </p>
    <p class="title"><b>Phone :</b> {{$result->student_phone}}</p>
    <p class="title"><b>Addmission Date : </b>{{$result->student_admission_year}}</p>
  </div>
  </div>
</div>



 @endsection  

