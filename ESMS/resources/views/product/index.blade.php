@extends('admin.base')
@section('admindash')


<div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('products.create')}}"> Create a New Product </a>
            </div>
        </div>
    </div>
   
   <!-- success alert message -->
   @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
 
   
    
        
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>price</th>
            <th width="280px">Actions </th>
        </tr>
        @php
            $id = 0;
            @endphp
        @foreach($products as $product) 
        <tr>
           
            <td>{{++$id}}</td>
            <td>{{$product->pname}}</td>
            <td>{{$product->detail}}</td>
            <td>{{$product->price}}</td>
            <td>
                <form action="{{route('products.destroy',$product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('products.show',$product->id)}}"class="btn btn-info">show</a>
                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                
            </td>
        </tr>
        @endforeach
    </table>


@endsection