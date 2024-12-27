<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view('register');
    }
    public function store(Request $request)
    {
       // Validate the request data
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string|unique:users|max:255',
            'email'    => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6',
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
            return redirect()->route('getLogin')->with('success', 'Registration successful. Please login.');
        }
    }
    public function getLogin()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'email'    => 'required|email',
                'password' => 'required'
            ]);
            if($validator->fails()) {
                return response()->json([
                    'errors' => $validator->getMessageBag()->toArray()
                ], 422);
            }
            $credentials = $request->only('email', 'password');
            if (auth()->attempt($credentials)) {
                $user = auth()->user();
                $token = $user->createToken('auth_token')->plainTextToken;
                return redirect()->route('listEmployee')->with('success', 'Login successful');
            } 
            else {
                return redirect()->back()->with('error', 'Invalid credentials');
            }
        }catch(Exception $e){
            return response()->json([
                'status' => 500,
                'result' => $e->getMessage(),
            ], 500);
        }
    }
    public function logout()
    {
        try{
            Auth::logout();
            return  redirect()->route('getLogin')->with('success', 'Logout successful');
        }
        catch(Exception $e){
            return response()->json([
                'status' => 500,
                'result' => $e->getMessage(),
            ], 500);
        }
    }

}
