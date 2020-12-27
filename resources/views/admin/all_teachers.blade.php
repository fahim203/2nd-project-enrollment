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
                          <th>Teacher Name</th>
                          <th>Teacher Phone</th>
                          <th>Teacher Image</th>
                          <th>Teacher Adderss</th>
                          <th>Teacher Departments</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($all_teachers as $row)	
                      <tr>
                          <td>{{ $row->teacher_name}}</td>
                          <td>{{ $row->teacher_phone}}</td>
                          <td><img src="{{ $row->teacher_image}}" style="width:70px;height: 70px;border-radius: 50%" /></td>
                          <td>{{ $row->teacher_adderss}}</td>
                          <td>{{ $row->teacher_department}}</td>
                          <td>
                            <a href="{{URL::to('/edit-teacher/'.$row->teacher_id)}}" class="btn btn-outline-primary">Edit</a>
                            <a href="{{URL::to('/delete-teacher/'.$row->teacher_id)}}" id="delete" class="btn btn-outline-primary">Delete</a>

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