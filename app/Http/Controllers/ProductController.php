<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('product.list', compact('products'));
    }
    public function create()
    {
        return view('product.create');
    }
    public function store(Request $request)
    {
        try {
            $validated = Validator::make($request->all(), [
                'name' => 'required',
                'quantity' => 'required|integer',
                'price' => 'required|numeric',
                'description' => 'nullable',
            ]);
            if ($validated->fails()) {
                return redirect()->route('product.create')->withInput()->withErrors($validated);
            }
            $product = new Product();
            $product->name = $request->name;
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->save();
            if ($request->image != null) {
                $image = $request->image;
                $ext = $image->getClientOriginalExtension();
                $imageName = time() . '.' . $ext;
                $image->move(public_path('image/product'), $imageName);
                $product->image = $imageName;
                $product->save();
            }
            return redirect()->route('product.list')->with('success', 'Product created successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function edit($id)
    {
        $product = Product::findorFail($id);
        return view('product.edit', compact('product'));
    }
    public function update(Request $request)
    {
        try {
            $validated = Validator::make($request->all(), [
                'id' => 'required|integer',
                'name' => 'required',
                'quantity' => 'required|integer',
                'price' => 'required|numeric',
                'description' => 'nullable',
            ]);

            $id = $request->id;
            $product = Product::findorFail($id);
            if ($validated->fails()) {
                return redirect()->route('product.edit')->withInput()->withErrors($validated->errors()->getMessages());
            }
            $product->name = $request->name;
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->save();
            if ($request->image != null) {

                $image = $request->image;
                $ext = $image->getClientOriginalExtension();
                $imageName = time() . '.' . $ext;
                $image->move(public_path('image/product'), $imageName);
                $product->image = $imageName;
                $product->save();
            }
            return redirect()->route('product.list')->with('success', 'Product updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function destroy($id)
    {
        try {
            $product = Product::findorFail($id);
            $product->delete();
            return redirect()->route('product.list')->with('success', 'Product deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
