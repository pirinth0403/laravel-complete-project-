<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use validator;
use App\Models\User;

class MainController extends Controller
{
    function login(){
        return view('login');
    }

    function customerreg(){
        return view('customers.register');
    }

    function successlogin()
   		{
      			return view('admin.base');
   		}
   function checklogin(Request $request)
   		{
			// Validation
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required|alphaNum|min:5'
            ]);
    

        //Authentication

            $user_data = array(
                'email' => $request->get('email'),
                'password' => $request->get('password')
            );
            if(Auth::attempt($user_data))
                {
                    if(Auth::user()->role =='admin'){
                        return view('admin.admindashboard');
                    }elseif(Auth::user()->role =='employee'){
                        return view('employee.base');
                    }elseif(Auth::user()->role =='customer'){
                        return view('customers.dash');
                    }
                }else{
                    return back()->with('error','Wrong Login Details');
                }
                
    
		}


        function showmain(User $users){
            $users = User::all();
            return view('show',compact('users'));
        }

        public function show(User $users)
        {
            return view('employee.show',compact('users'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Product  $product
         * @return \Illuminate\Http\Response
         */
        public function edit(User $users)
        {
            return view('employee.edit',compact('users'));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Product  $product
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, User $users)
        {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
    
            $users->update($request->all());
            return redirect()->route('employee.index')->with('success','Product updated Successfully!');
        }


        public function store(){

        }
    
}
