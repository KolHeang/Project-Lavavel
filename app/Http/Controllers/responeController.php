<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class responeController extends Controller
{
    public static function success($data)
    {
        return response()->json([
            'status' => 200,
            'result' => $data
        ], 200);
    }
    public static function error($data)
    {
        return response()->json([
            'status' => 400,
            'result' => $data
        ], 400);
    }
    public static function notFound($data)
    {
        return response()->json([
            'status' => 404,
            'result' => $data
        ], 404);
    }
}
