@extends('customers.base')
@section('customerdash')

    <div class="container">
    
   
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
                <a href="{{route('placeorder',['products'=>$product->id])}}"><button class="btn btn-primary"> PlaceOrder</button></a>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection