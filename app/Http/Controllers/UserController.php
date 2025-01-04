<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('users.index', compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string|unique:users|max:255',
            'email'    => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);  
        if($validator->fails()) {
            return response()->json([
                'errors' => $validator->getMessageBag()->toArray()
            ], 422);
        }
        // Create a new user
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if($user){
            return redirect()->route('user.list')->with('success', 'create user successful');
        }
        else{
            return redirect()->back()->with('error', 'Failed to create user');
        }
    }
    public function edit($id)
    {
        try{
            $user = User::find($id);
            if($user){
                return view('users.edit',compact('user'));
            }
            else{
                return redirect()->back()->with('error', 'User not found');
            }
        }
        catch(Exception $e){
            return responeController::error($e->getMessage());
        }
    }
    public function update(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'name'     => 'required|string|max:255',
                'email'    => 'required|string|email|max:255',
                'password' => 'required|string|min:6|confirmed',
                'id'       => 'required|integer',
            ]);
            if($validator->fails()) {
                return responeController::error($validator->getMessageBag()->toArray());
            }
            $user = User::find($request->id);
            if($user){
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->update();
                return redirect()->route('user.list')->with('success', 'update user successful');
            }
            else{
                return redirect()->back()->with('error', 'User not found');
            }
        }
        catch(Exception $e){
            return responeController::error($e->getMessage());
        }
    }
    public function destroy($id)
    {
        try{
            $user = User::find($id);
            if($user){
                $user->delete();
                return redirect()->route('user.list')->with('success', 'delete user successful');
            }
            else{
                return redirect()->back()->with('error', 'User not found');
            }
        }
        catch(Exception $e){
            return responeController::error($e->getMessage());
            }
        }

}
