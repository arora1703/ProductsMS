<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request,[
            'product_name'=>'required',
            'category'=>'required',
            'status'=>'required',
        ]);
        $product= new Product();
        $product->product_name=$request->input('product_name');
        $product->category=$request->input('category');
        $product->status=$request->input('status');
        $product->save();
        return redirect('/')->with('success','Product has been added');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('list', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->product_name = $request->input('product_name');
        $product->category = $request->input('category');
        $product->status = $request->input('status');
        $product->update();
        return redirect('/')->with('warning','Products Updated Successfully');
    }
    public function view($id)
    {
        $product = Product::find($id);
        return view('showProduct',compact('product'));
    }
    public function delete($id) {

        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/')->with('danger','Product has been delete');
   }
}
