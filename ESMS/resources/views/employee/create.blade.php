@extends('admin.base')
@section('admindash')

<div class="container boxreg">
  <form action="{{route('employees.store')}}" method="post">
      @csrf
  <div class="row">

    <div class="col-25">
      <label for="name">Employee Name</label>
    </div>
    <div class="col-50">
      <input type="text" id="name" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-50">
      <input type="text" id="uname" name="email" placeholder="Your user name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="gender">Gender</label>
    </div>
    <div class="col-50">
      <select id="gender" name="gender">
        <option value="m">Male</option>
        <option value="f">Female</option>
        
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="address">Address</label>
    </div>
    <div class="col-50">
      <input type="text" id="address" name="address" placeholder="Your address here..">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="mno">MobileNO</label>
    </div>
    <div class="col-50">
      <input type="text" id="mno" name="mobileno" placeholder="Your mobile no..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="pword" class="form-group">Password</label>
    </div>
    <div class="col-50">
      <input type="password" id="pword" name="password" placeholder="Your password no..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Delivered">Delivered</label>
    </div>
    <div class="col-50">
      <input type="text" id="Delivered" name="delivered" placeholder="Your address to deliver..">
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
</div>
@endsection