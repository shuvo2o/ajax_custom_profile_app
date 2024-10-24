<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   function UserRegistration(Request $request){
    try {
        User::create($request->input());
        return response()->json(['status'=>'succes', 'message'=>'user registration Succesfull']);
        
    } catch (Exception $exception) {
        return response()->json([
            'status' => 'failed', 'message'=>$exception->getMessage()
        ]);
    }
   }
}
