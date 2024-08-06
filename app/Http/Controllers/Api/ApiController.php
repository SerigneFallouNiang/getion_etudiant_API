<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
  
     // Login API - POST (email, password)
     public function login(Request $request){
        //Validation
        $request->validate([
             "email" => "required|email",
            "password" => "required"
        ]);

        $token = auth()->attempt([
            "email" => $request->email,
            "password" => $request->password
        ]);

        if(!$token){
            return response()->json([
                "status" => false,
                "message"=>"Veuillez vousauthentifiez !"
            ]);
        }
        return response()->json([
            "status" => true,
            "message" => "User logged in succcessfully",
            "token" => $token,
            "expires_in" => auth()->factory()->getTTL() * 60
        ]);
     }


     public function logout()
     {
        auth()->logout();
        return response()->json(["message" => "Déconnexion réussie"]);
     }
}
