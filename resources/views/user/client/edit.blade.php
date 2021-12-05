@extends('layouts.layout')
@section('title')
   Clients
@endsection
@section('content')
   
 <div class="col-md-12">
   <div class="card">
  <div class="card-header">
    <h3 class="card-title"> <span class="border border-info">  EDIT Client </span></h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="POST" enctype="multipart/form-data"  action="{{route('updatepost.client')}}" >
    @csrf
    <input type="hidden" name="userId" value="{{$user_id}}">
    <div class="card-body">
        <div class="form-group col-md-12 ">
          <label for="exampleInputEmail1">client Name:</label>
          <input type="text" class="form-control w-50" name="name" value="{{$client['name'] }}" id="exampleInputEmail1" placeholder="Enter Name">
        </div>
        <div class="form-group   ">
          <label for="exampleInputEmail1">client Email:</label>
          <input type="text" class="form-control w-50"  name="email" value="{{$client['email'] }}"  id="exampleInputEmail1" placeholder="Enter email">
        </div>
     
  
      <div class="form-group ">
        <label for="exampleInputEmail1">client Phone:</label>
        <input type="text" class="form-control w-50" name="phone" value="{{$client['phone']}}"   id="exampleInputEmail1" placeholder="Enter Phone">
      </div>
  
      <div class="form-group  ">
        <label for="exampleInputEmail1">Recognized by:</label>
        <input type="text" class="form-control w-50"  name="by" value="{{$client['by']}}"   id="exampleInputEmail1" placeholder="Enter Phone">
      </div>
  
      <div class="form-group  ">
        <label for="exampleInputEmail1">Submission Method:</label>
        <input type="text" class="form-control w-50"  name="submissonMethod" value="{{$client['submissonMethod']}}"   id="exampleInputEmail1" placeholder="Enter Phone">
      </div>
  
      <div class="form-group">
        <label for="exampleInputEmail1">Notes:</label>
        <input type="text" class="form-control w-50"  name="notes"  value="{{$client['notes']}}"   id="exampleInputEmail1" placeholder="Enter Phone">
      </div>
  
   
    </div>
    <!-- /.card-body -->
  
    <div class="card-footer">
      <button type="submit" class="btn btn-primary w-50 text-center">Submit</button>
    </div>
  </form>
  
    </div>
   </div>  


  
     
   
    

   
  </div>
  @endsection