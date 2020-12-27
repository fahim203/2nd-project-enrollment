@extends('layout')
@section('content')
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Student Roll</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Adderss</th>
                          <th>Departments</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($ece_student as $row)	
                      <tr>
                          <td>{{ $row->student_roll}}</td>
                          <td>{{ $row->student_name}}</td>
                          <td>{{ $row->student_phone}}</td>
                          <td><img src="{{ $row->student_image}}" style="width:70px;height: 70px;border-radius: 50%" /></td>
                          <td>{{ $row->student_adderss}}</td>
                          <td>
                          	@if($row->student_department == 1)
                          		<span>CSE</span>
                          	@elseif($row->student_department == 2)
                          		<span>BBA</span>
                          	@elseif($row->student_department == 3)
                          		<span>ECE</span>
                          	@elseif($row->student_department == 4)
                          		<span>EEE</span>
                          	@elseif($row->student_department == 5)
                          		<span>MBA</span>				
                          	@endif	
                          </td>
                          <td>
                            <a href="{{URL::to('/view-student/'.$row->student_id)}}" class="btn btn-outline-primary">View</a>
                            <a href="{{URL::to('/edit-student/'.$row->student_id)}}" class="btn btn-outline-primary">Edit</a>
                            <a href="{{URL::to('/delete-student/'.$row->student_id)}}" id="delete" class="btn btn-outline-primary">Delete</a>
                          </td>
                      </tr>
                    @endforeach  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        
@endsection
