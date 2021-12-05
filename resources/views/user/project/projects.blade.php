@extends('layouts.layout')
@section('title')
  Projects
@endsection
@section('content')
   
  <div class="row">
    <div class="card col-md-8">
      <div class="card-header">
        <h3 class="card-title"> Project List</h3>
  
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
              <th>project Name</th>
              <th>Client Name</th>
              <th>start Date</th>
              <th style="width:40%"> Action </th>
            </tr>
          </thead>
          <tbody>
           
            @foreach ($projects as $project)
            <tr>  
                <td>{{$project->name}}</td>
                <td>{{$project->client['name']}} </td>
                <td> {{ date('d-m-Y', strtotime($project->created_at))}}</td>
                 <td>      <a href="{{route('update.project',$project->id)}}" class="btn btn-info"> UPDATE </a>
                     <a href="{{route('update.project',$project->id)}}" class="btn btn-warning"> Detail </a>
                           <a href="{{route('delete.project',$project->id)}}" class="btn btn-danger"> DELETE </a>
                </td>  
            </tr>    
            @endforeach
            
        
           
     
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  
  
     
   
    
  
  
     <div class="card col-md-4">
         <div class="card-header">
      <h3 class="card-title"> <span class="border border-info">  ADD NEW Project </span></h3>
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
          <div class="form-group">
            <label for="exampleInputEmail1">Client:</label>
            <select class="custom-select rounded-0" id="exampleSelectRounded0" name='clientId'>
              <option hidden selected > select the clients</option>
              @foreach ($clients as $client)
              <option value="{{$client->id}}" >{{$client->name}}</option>
              @endforeach
  
            </select>
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