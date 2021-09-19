@extends('admin.base')
@section('admindash')

<div class="row">
        
    </div>
   
    <div class="container">
        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employee Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('employees.index')}}"> Back</a>
            </div>
          
<table>
    <thead>
      <tr>
        <th>Name:</th>
        <th>{{$user->name}}</th>   
      </tr>
      <tr>
        <th>E-mail:</th>
        <th>{{$user->email}}</th>   
      </tr>
      <tr>
        <th>Gender:</th>
        <th>{{$user->gender}}</th>   
      </tr>

      <tr>
        <th>Address:</th>
        <th>{{$user->address}}</th>   
      </tr>
    </thead>
    <tr>
        <th>MobileNo:</th>
        <th>{{$user->mobileno}}</th>   
      </tr>
    
  </table>
</div> 
@endsection