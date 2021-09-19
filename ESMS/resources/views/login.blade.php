@extends('base')
@section('login')

<div class="container boxlogin">
    <div class="row">


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif


    <h2 class="title">Login Form</h2>
                    <form method="POST" action="{{url('checklogin')}}">
                        @csrf
                        <div class="row">
                        <div class="input-group">
                                    <label class="label">Enter Your UserName</label>
                                    <input class="input--style-4" type="text" name="email">
                                </div>
                        </div>

                        <div class="row">
                        <div class="input-group">
                                    <label class="label">Enter Password</label>
                                    <input class="input--style-4" type="password" name="password">
                                </div>
                        </div>

                        <div class="p-t-15" >
                           
                            <button class="glow-on-hover " type="submit" >Submit</button>
                        </div>
                    </form>

    </div>

    
</div>

<div class="container boxregister">
    <div class="row">
        <div class="title">
            <h2>Customers Register Here!</h2>
            <a href="{{url('customerreg')}}"><button class="glow-on-hover" type="button">Register!!</button></a>
            
        </div>
    </div>
    
</div>




                    
               <!--          <div class="row row-space">
                            <div class="col-2">
                                
                            </div>
                            <div class="col-2">
                                
                            </div>
                       </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Subject</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>    ---->
                        
                    
                



    


@endsection
