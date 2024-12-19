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
            $employee->dob = $request->dob;
            $employee->email = $request->email;
            $employee->phone = $request->phone;
            $employee->position = $request->position;
            $employee->salary = $request->salary;
            $employee->address = $request->address;
            $employee->save();
            return responeController::success('Employee created successfully');
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
                $employee->dob = $request->dob;
                $employee->email = $request->email;
                $employee->phone = $request->phone;
                $employee->position = $request->position;
                $employee->salary = $request->salary;
                $employee->address = $request->address;
                $employee->update();
                return responeController::success('Employee updated successfully');
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
