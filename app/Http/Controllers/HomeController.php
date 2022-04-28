<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;  
use App\Models\Product;
use App\Models\order;




class HomeController extends Controller
{
    public function redirect() 
    {  
        $usertype=Auth::user()->usertype; 

        if($usertype=='1')     
        {
            return view ('admin.home'); 
        }
        else 
        {
            $data = product::paginate(3);
            $user = auth()->user();
            $count=order::where('phone',$user->phone)->count();
            return view('user.home',compact('data','count'));         
        } 
    } 
    public function index() 
    {
        if(Auth::id()) 
        {
            return redirect('redirect');
        }
       else 
        { 
            $data = product::paginate(3);
            return view('user.home',compact('data'));   
        } 
             
    }  
    public function search(Request $request) 
    { 
         $search=$request->search;

         if($search == '') {
            $data = product::paginate(3);
            return view('user.home',compact('data'));   
         }
         $data = product::where('title','Like','%'.$search.'%')->get();

         return view ('user.home',compact('data'));

    }  


    public function orderfood(Request $request ,$id) {
        
            if(Auth::id()) {

                $user = auth()->user();
                $product=product::find($id);
                $order = new order(); 

                $order->name = $user->name;
                $order->phone = $user->phone;
                $order->address = $user->address;
                $order->product_title= $product->title;
                $order->price= $product->price;
                $order->quantity = $request->quantity;

                $order->save();

                return redirect()->back()->with('message','Product ordered sucessfully');
            } 
            else {
                return redirect('login'); 
            }       
    }

    public function showorder() {
        $user=auth()->user();
        $order=order::where('phone',$user->phone)->get();   
        $count=order::where('phone',$user->phone)->count();
        return view ('user.showorder',compact('count','order'));
    }  
 
} 
 
