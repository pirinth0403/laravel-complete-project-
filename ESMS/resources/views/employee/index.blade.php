@extends('admin.base')
@section('admindash')

<div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('users.create')}}"> Entroll New Employee </a>
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
            <th>email</th>
            <th>mobile</th>
            <th width="280px">Actions </th>
        </tr>
       
        <tr>
        @php
            $id = 0;
            @endphp
        @foreach($employees as $user) 
        <tr>
           
            <td>{{++$id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td> {{$user->mobileno}}</td>
            <td>
                <form action="{{route('users.destroy',$user->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('users.show',$user->id)}}"class="btn btn-info">show</a>
                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                
            </td>
        </tr>
        @endforeach
        </tr>
        
    </table>
    

@endsection