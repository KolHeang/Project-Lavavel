<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return response()->json([
            'status'=>200,
            'total'=>$product->count(),
            'result'=>$product
        ]);
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name'=>'required|string',
            'price'=>'required|numeric',
            'quantity'=>'required|integer',
        ]);
        if($validate->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validate->getMessageBag()->toArray()
            ]);
        }
        $product = new Product;
        $product->name        = $request->input('name');
        $product->description = $request->input('description');
        $product->price       = $request->input('price');
        $product->quantity    = $request->input('quantity');
        $product->save();
        return response()->json([
            'status'=>200,
            'result'=>"Product Added Successfully"
        ]);
    }
    public function show($id){
        $product = Product::find($id);
        if($product){
            return response()->json([
                'status'=>200,
                'result'=>$product
            ]);
        }else{
            return response()->json([
                'status'=>404,
                'result'=>"Product Not Found"
            ]);
        }
    }
    public function update(Request $request){
        $validate = Validator::make($request->all(),[
            'id'=>'required|integer',
            'name'=>'required|string',
            'price'=>'required|numeric',
            'quantity'=>'required|integer',
        ]);
        if($validate->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validate->getMessageBag()->toArray()
            ]);
        }
        $product = Product::find($request->id);
        if($product){
            $product->name        = $request->input('name');
            $product->description = $request->input('description');
            $product->price       = $request->input('price');
            $product->quantity    = $request->input('quantity');
            $product->save();
            return response()->json([
                'status'=>200,
                'result'=>"Product Updated Successfully"
            ]);
        }else{
            return response()->json([
                'status'=>404,
                'result'=>"Product Not Found"
            ]);
        }
    }
    public function destroy($id){
        $product = Product::find($id);
        if($product){
            $product->delete();
            return response()->json([
                'status'=>200,
                'result'=>"Product Deleted Successfully"
            ]);
        }else{
            return response()->json([
                'status'=>404,
                'result'=>"Product Not Found"
            ]);
        }
    }
}
