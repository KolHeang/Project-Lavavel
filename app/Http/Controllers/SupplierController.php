<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::orderBy('id', 'desc')->paginate(10);
        return view('supplier.list', compact('supplier'));
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name'    => 'required|unique:suppliers,name',
                'email'   => 'required|unique:suppliers,email',
                'address' => 'required',
                'phone'   => 'required|numeric|min:10|unique:suppliers,phone',
            ]);
            if ($validator->fails()) {
                return redirect()->route('supplier.create')->withErrors($validator)->withInput();
            }
            $supplier = new Supplier();
            $supplier->name = $request->name;
            $supplier->email = $request->email;
            $supplier->address = $request->address;
            $supplier->phone = $request->phone;
            $supplier->save();
            return redirect()->route('supplier.list')->with('success', 'Create supplier success');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit(Supplier $supplier)
    {
        //
    }

    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    public function destroy(Supplier $supplier)
    {
        //
    }
}
