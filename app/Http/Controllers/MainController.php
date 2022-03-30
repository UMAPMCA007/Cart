<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\product;
class MainController extends Controller
{
   public function admin()
   {
    return view('admin');
   }
    public function product()
    {
        $products=Admin::all();
        $products1=product::all();
        return view('product',compact('products','products1'));
    }

    public function postAdmin(Request $request)
    {
       $data=$request->validate([
           'product_name'=>'required',
           'price'       =>'required',
           'stock'       =>'required'
       ]);

       $admin=new Admin();
       $admin->product_name = $request->product_name;
       $admin->price        = $request->price;
       $admin->stock        = $request->stock;
       $admin->save();

       $products=Admin::all();
        return redirect()->route('product')->with('products',$products);
    }

    public function postProduct(Request $request)
    {
        $request->all();
        $name = $request->item_name ;
        $price =$request->price;;
        $quantity=$request->quantity;

            product::create([
                'item_name' =>json_encode( $name),
                'price' => json_encode($price),
                'quantity'=>json_encode($quantity)
            ]);

        return redirect()->route('product');
    }
    public function viewProduct()
    {
        return redirect()->route('product')->with('product',$product);
    }



}
