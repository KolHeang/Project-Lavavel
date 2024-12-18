<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $order = orders::all();
        $result = [];
        foreach ($order as $order) 
        {
            $result[] = [
                'id' => $order->id,
                'name' => $order->user->name,
                'product' => $order->product->name,
                'quantity' => $order->quantity,
            ];
        }
        return response()->json([
            'status' => 200,
            'result' => $result
        ], 200);
    }
}
