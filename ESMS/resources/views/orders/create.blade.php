@extends('customers.base')
@section('customerdash')
   <!-- error messages --> 
<div class="container">
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
<form action="{{route('orders.store')}}" method="post">
  @csrf
  {{$products->pname}}
  <br/>
  <br/>
  <label for="price">employeeName</label>
  <select name="employee_id">
      @foreach($employees as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
      
  </select>

  <br/>
  <br/>
  {{$products->price}}
  <br/>
  
  <input type="text" name="products_id" value="{{$products->id}}" class="form-control" placeholder="Detail">
  <input type="hidden"  name="customer_id" value="{{Auth::user()->id}}">
  <br/>
  <br/>
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>

</div>


@endsection