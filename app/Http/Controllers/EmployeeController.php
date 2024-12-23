<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\responeController;
use Exception;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
        try{
            $employees = Employee::orderBy('id', 'desc')->paginate(10);
            return view('staff.list',['employees' => $employees]);
        }
        catch(Exception $e){
            return responeController::error($e->getMessage());
        }
    }
    public function create()
    {
        return view('staff.create');
    }
    public function store(Request $request)
    {
        try{
            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'gender' => 'required',
                'dob' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'position' => 'required',
                'salary' => 'required',
                'address' => 'required',
            ]);
            if($validate->fails()){
                return responeController::error($validate->getMessageBag()->toArray());
            }
            $employee = new Employee();
            $employee->name = $request->name;
            $employee->gender = $request->gender;
            $employee->dob = date('Y-m-d', strtotime($request->dob));
            $employee->email = $request->email;
            $employee->phone = $request->phone;
            $employee->position = $request->position;
            $employee->salary = $request->salary;
            $employee->address = $request->address;
            $employee->save();
            if ($employee) {
                return redirect()->route('listEmployee')->with('success', 'Employee created successfully');
            } 
            else {
                return redirect()->back()->with('error', 'Failed to create employee');
            }
        }
        catch(Exception $e){
            return responeController::error($e->getMessage());
        }
    }
    public function show($id)
    {
        try{
            $employee = Employee::find($id);
            if($employee){
                return responeController::success($employee);
            }
            else{
                return responeController::error('Employee not found');
            }
        }
        catch(Exception $e){
            return responeController::error($e->getMessage());
        }
    }
    public function edit($id)
    {
        try{
            $employee = Employee::find($id);
            return view('staff.edit',['employee' => $employee]);
        }
        catch(Exception $e){
            return responeController::error($e->getMessage());
        }
    }
    public function update(Request $request)
    {
        try
        {
            $validate = Validator::make($request->all(), [
                'id' => 'required',
                'name' => 'required',
                'gender' => 'required',
                'dob' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'position' => 'required',
                'salary' => 'required',
                'address' => 'required',
            ]);
            if($validate->fails()){
                return responeController::error($validate->getMessageBag()->toArray());
            }   
            $employee = Employee::find($request->id);
            if($employee){
                $employee->name = $request->name;
                $employee->gender = $request->gender;
                $employee->dob = date('Y-m-d', strtotime($request->dob));
                $employee->email = $request->email;
                $employee->phone = $request->phone;
                $employee->position = $request->position;
                $employee->salary = $request->salary;
                $employee->address = $request->address;
                $employee->update();
                if ($employee) {
                    return redirect()->route('listEmployee')->with('success', 'Employee updated successfully');
                }
                else {
                    return redirect()->back()->with('error', 'Failed to update employee');
                }
            }
            else{
                return responeController::error('Employee not found');
            }
        }
        catch(Exception $e){
            return responeController::error($e->getMessage());
        }
    }
    public function destroy($id)
    {
        try{
            $employee = Employee::find($id);
            if($employee){
                $employee->delete();
                if ($employee) {
                    return redirect()->route('listEmployee')->with('success', 'Employee deleted successfully');
                }
                else {
                    return redirect()->back()->with('error', 'Failed to delete employee');
                }
            }
            else{
                return responeController::error('Employee not found');
            }
        }
        catch(Exception $e){
            return responeController::error($e->getMessage());
        }
    }
}
