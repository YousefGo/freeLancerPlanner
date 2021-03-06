@extends('layouts.layout')
@section('title')
  Tasks
@endsection
@section('content')
   
  <div class="row">
    <div class="card col-md-8">
      <div class="card-header">
        <h3 class="card-title"> Task List</h3>
  
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap text-center">
          <thead>
            <tr>
              <th>task Name</th>
              <th>Description Name</th>
              <th>start Date</th>
              <th>end Date</th>
              <th>Hours</th>
              <th>Price</th>
              <th > Action </th>
            </tr>
          </thead>
          <tbody>
           
            @foreach ($tasks as $task)
            <tr>  
                <td>{{$task['name']}}</td>
                <td>{{$task['description']}} </td>
                <td> {{ date('d-m-Y', strtotime($task->created_at))}}</td>
                <td> {{ date('d-m-Y', strtotime($task->created_at))}}</td>
                <td>{{$task['totalPriceOfTask']}} </td>
                <td>{{$task['totolHoursOfTask']}} </td>


                 <td>      <a href="{{route('update.project',$project->id)}}" class="btn btn-info"> Change State </a>
                          
                </td>  
            </tr>    
            @endforeach
            
        
           
     
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  
  
     
   
    
  
  
     <div class="card col-md-3">
         <div class="card-header">
      <h3 class="card-title"> <span class="border border-info">  ADD NEW Task </span></h3>
         </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" enctype="multipart/form-data"  action="{{route('store.project')}}" >
      @csrf
      <input type="hidden" name="userId" value="{{$user_id}}">
      <div class="card-body">
        
          <div class="form-group   " style="width: 100%">
            <label for="exampleInputEmail1">Name:</label>
            <input type="text" class="form-control w-100" name="name" id="exampleInputEmail1" placeholder="Enter Name">
          </div>
       
          <div class="form-group ">
            <label for="exampleInputEmail1"class="w-100" >Description:</label>
            <br>
            <textarea name="description" class="form-control"> {{'please enter your project descrition'}} </textarea>
          </div>
       
    
        <div class="form-group ">
          <label for="exampleInputEmail1">total Price :</label>
          <input type="number" step="0.1" class="form-control w-100" name="totalPriceOfProject"   id="exampleInputEmail1" placeholder="Enter Price">
        </div>

        <div class="form-group ">
          <label for="exampleInputEmail1">total Price :</label>
          <input type="number" step="0.1" class="form-control w-100" name="totalHoursOfProject"   id="exampleInputEmail1" placeholder="Enter Hours">
        </div>
        
        <div class="form-group  ">
          <label for="exampleInputEmail1">startDate:</label>
          <input type="date" class="form-control w-100"  name="startDate"  id="exampleInputEmail1" placeholder="Enter start date">
        </div>

        <div class="form-group  ">
          <label for="exampleInputEmail1">endDate:</label>
          <input type="date" class="form-control w-100"  name="endDate"  id="exampleInputEmail1" placeholder="Enter end date">
        </div>
    
        <div class="form-group  ">
          <label for="exampleInputEmail1">Submission Method:</label>
          <input type="text" class="form-control w-100"  name="submissonMethod"  id="exampleInputEmail1" placeholder="Enter Phone">
        </div>
    
        <div class="form-group">
          <label for="exampleInputEmail1">state:</label>
          <select class="custom-select rounded-0" id="exampleSelectRounded0" name='state'>
            <option value="backlog"> backlog</option>
            <option  value="started">started</option>
            <option  value="pending">pending</option>
            <option  value="finshed">finshed</option>

          </select>
        </div>


       
    
     
      </div>


      
      <!-- /.card-body -->
    
      <div class="card-footer">
        <button type="submit" class="btn btn-primary w-100   text-center">Submit</button>
      </div>
    </form>
    
      </div>
      
  
     
    </div>
  </div>

  @endsection