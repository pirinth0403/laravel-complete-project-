@extends('admin.base')
@section('admindash')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Employee Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('products.index')}}"> Back</a>
            </div>
        </div>
    </div>
   
   <!-- error messages --> 

   @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  
    <form action="{{route('users.update',$user->id)}}" method="post">
            @csrf
            @method('PUT')
           
        <div class="row">
            <div class="col-25">
            <label for="cname">Employee Name</label>
            </div>
            <div class="col-50">
            <input type="text" id="cname" name="name" placeholder="Employee name.." value="{{$user->name}}">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
            <label for="emain">Email</label>
            </div>
            <div class="col-50">
            <input type="email" id="uname" name="email" placeholder="Your user name.." value="{{$user->email}}">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
            <label for="gender">Gender</label>
            </div>
            <div class="col-50">
            <select id="gender" name="gender" value="{{$user->gender}}">
                <option value="m">Male</option>
                <option value="f">Female</option>
                
            </select>
            </div>
        </div>
        


        <div class="row">
            <div class="col-25">
            <label for="mno">Address</label>
            </div>
            <div class="col-50">
            <input type="text" id="ad" name="address" placeholder="Your address here.." value="{{$user->address}}">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="mno">MobileNO</label>
            </div>
            <div class="col-50">
            <input type="text" id="mno" name="mobileno" placeholder="Your mobile no.." value="{{$user->mobileno}}">
            </div>
        </div>


        <div class="row">
            <div class="col-25">
            <label for="pword" class="form-group">Password</label>
            </div>
            <div class="col-50">
            <input type="password" id="pword" name="password" placeholder="Your password no.." value="{{$user->password}}">
            </div>
        </div>

        <div class="row">
             <input type="hidden" id="role" name="role" value="employee">
        </div>

        <div>
            <button type="submit" class="btn btn-primary">
                        submit
            </button>
            
        </div>
  
    </form>
@endsection