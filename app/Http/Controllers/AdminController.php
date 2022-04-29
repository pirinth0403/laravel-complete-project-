<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Orderfood;

class AdminController extends Controller
{
    public function product() {
        return view ('Admin.product');
    }
    public function uploadproduct(Request $request) {
        $data = new product;

        $image=$request->file;
        $imagename = time(). '.' .$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);    
        $data->image=$imagename;   

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;
        $data->save();


        return redirect()->back()->with('message','Product Added sucessfully');

    }
    public function showproduct() {
        $data = product::all();
        return view ('admin.showproduct',compact('data')); 
    }

    public function deleteproduct($id) {
        $data=product::find($id);
        $data->delete(); 
        return redirect()->back()->with('message','product deleted'); 
    }
    public function updateview($id) { 
        $data=product::find($id); 
        //$data->update();  
        return view('admin.updateview',compact('data'));
        
    }
    public function updateproduct(Request $request ,$id) {
        $data=product::find($id);

        $image=$request->file;

        if($image) {
        $imagename = time(). '.' .$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);    
        $data->image=$imagename;   
        } 

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;
        $data->save();


        return redirect()->back()->with('message','Product updated  sucessfully');
    }

    public function showfoodorders(){
        $order=orderfood::all();
        return view('admin.showfoods',compact('order'));
    }

     public function updatestatus($id){
        $order = orderfood::find($id);
        $order->status ='delevered';
        $order->save();

        return redirect()->back();
        
    }

}
