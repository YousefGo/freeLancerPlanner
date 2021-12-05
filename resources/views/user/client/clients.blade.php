@extends('layouts.layout')
@section('title')
   Clients
@endsection
@section('content')
   
 <div class="col-md-12">
   <div class="card">
  <div class="card-header">
    <h3 class="card-title"> <span class="border border-info">  ADD NEW USER </span></h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="POST" enctype="multipart/form-data"  action="{{route('store.client')}}" >
    @csrf
    <input type="hidden" name="userId" value="{{$user_id}}">
    <div class="card-body">
        <div class="form-group col-md-12 ">
          <label for="exampleInputEmail1">client Name:</label>
          <input type="text" class="form-control w-50" name="name" id="exampleInputEmail1" placeholder="Enter Name">
        </div>
        <div class="form-group   ">
          <label for="exampleInputEmail1">client Email:</label>
          <input type="text" class="form-control w-50"  name="email"  id="exampleInputEmail1" placeholder="Enter email">
        </div>
     
  
      <div class="form-group ">
        <label for="exampleInputEmail1">client Phone:</label>
        <input type="text" class="form-control w-50" name="phone"   id="exampleInputEmail1" placeholder="Enter Phone">
      </div>
  
      <div class="form-group  ">
        <label for="exampleInputEmail1">Recognized by:</label>
        <input type="text" class="form-control w-50"  name="by"  id="exampleInputEmail1" placeholder="Enter Phone">
      </div>
  
      <div class="form-group  ">
        <label for="exampleInputEmail1">Submission Method:</label>
        <input type="text" class="form-control w-50"  name="submissonMethod"  id="exampleInputEmail1" placeholder="Enter Phone">
      </div>
  
      <div class="form-group">
        <label for="exampleInputEmail1">Notes:</label>
        <input type="text" class="form-control w-50"  name="notes"  id="exampleInputEmail1" placeholder="Enter Phone">
      </div>
  
   
    </div>
    <!-- /.card-body -->
  
    <div class="card-footer">
      <button type="submit" class="btn btn-primary w-50 text-center">Submit</button>
    </div>
  </form>
  
    </div>
   </div>  


<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"> Client List</h3>

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
              <th>name</th>
              <th>email</th>
              <th>phone</th>
              <th>client source </th>
              <th>submission method</th>
              <th>Add Date</th>
              <th> Action</th>
            </tr>
          </thead>
          <tbody>
           
            @foreach ($clients as $client)
            <tr>  
                <td>{{$client->name}}</td>
                <td>{{$client->email}} </td>
                <td> {{$client->phone}}</td>
                <td><span class="tag tag-success">{{$client->by}}</span></td>
                <td>{{$client->submissonMethod }}</td>
                <td> {{ date('d-m-Y', strtotime($client->created_at))}}</td> 
                <td> 
                  <a href="{{route('update.client',$client->id)}}" class="btn btn-info"> UPDATE </a>
                  <a href="{{route('delete.client',$client->id)}}" class="btn btn-danger"> DELETE </a>
                </td>  
            </tr>    
            @endforeach
            
        
           
     
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

  
     
   
    

   
  </div>
  @endsection