@extends('admin.base')
@section('admindash')

<div>
    <div class="row">
      <div class="col lg-7"><h1>Add a New Product</h1></div>
    
      <div class="col lg-5">
      <a class="btn btn-primary" href="{{route('products.index')}}"> Back</a>
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


</div>
<form action="{{route('products.store')}}" method="post">
  @csrf
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter product name" id="name" name="pname">
    </div>
  
  
  <div class="form-group">
    <label for="Detail">Detail:</label>
    <input type="text" class="form-control" placeholder="Enter detail" id="detail" name="detail">
    </div>
    <div class="form-group">
    <label for="price">Price:</label>
    <input type="number" class="form-control" placeholder="Enter price" id="price" name="price">
    </div>
  
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>


@endsection