@extends('layouts.layout')
@section('title')
  edit Project 
@endsection
@section('content')
   
  <div class="row">
 
  
     
   
    
  
  
     <div class="card col-md-12">
         <div class="card-header">
      <h3 class="card-title"> <span class="border border-info">  Edit {{$project['name']}} </span></h3>
         </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" enctype="multipart/form-data"  action="{{route('store.project')}}" >
      @csrf
      <input type="hidden" name="userId" value="{{$user_id}}">
      <div class="card-body">
        
          <div class="form-group   " style="width: 100%">
            <label for="exampleInputEmail1">Name:</label>
            <input type="text" class="form-control w-100" name="name" value="{{$project['name']}}" id="exampleInputEmail1" placeholder="Enter Name">
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
            <textarea name="description" width="100%" class="form-control" > "{{$project['description']}}" </textarea>
          </div>
       
    
        <div class="form-group ">
          <label for="exampleInputEmail1">total Price :</label>
          <input type="number" step="0.1" class="form-control w-100" value="{{$project['totalPriceOfProject']}}"   name="totalPriceOfProject"   id="exampleInputEmail1" placeholder="Enter Price">
        </div>

        <div class="form-group ">
          <label for="exampleInputEmail1">total Price :</label>
          <input type="number" step="0.1" class="form-control w-100" name="totalHoursOfProject"  value="{{$project['totalHoursOfProject']}}"   id="exampleInputEmail1" placeholder="Enter Hours">
        </div>
        
        <div class="form-group  ">
          <label for="exampleInputEmail1">startDate:</label>
          <input type="date" class="form-control w-100"  name="startDate"   value="{{$project['startDate']}}"  id="exampleInputEmail1" placeholder="Enter start date">
        </div>

        <div class="form-group  ">
          <label for="exampleInputEmail1">endDate:</label>
          <input type="date" class="form-control w-100"  name="endDate" value="{{$project['endDate']}}"  id="exampleInputEmail1" placeholder="Enter end date">
        </div>
    
        <div class="form-group  ">
          <label for="exampleInputEmail1">Submission Method:</label>
          <input type="text" class="form-control w-100"  name="submissonMethod" value="{{$project['submissonMethod']}}"  id="exampleInputEmail1" placeholder="Enter submission mehtod">
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