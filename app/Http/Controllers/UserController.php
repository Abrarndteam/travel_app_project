<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Model\Users;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    function registerUser($request)
    {

        $header= $request->header('Authorization');
        if($header){
            $message = "Header Auth is missing!";
        }else{
            if($header=="0x0"){
                if (User('email', $request->email)) {
                    return response([
                        'message' => 'email exist',
                        'status' => 'failed'
                    ], 200);
                }
                $user = User([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'country_code' => $request->country_code,
                    'format_val' => $request->format_val,
                    'valid' => $request->valid,
                ]);
                // $token = $user->createToken($request->email)->plainTextToken;

                return response([
                    // 'token' => $token,
                    'message' => 'registration success',
                    'status' => 'success'
                ], 201);

            }else{
                $message = "Header Auth is incorrect!";
                return response()->json(['status'=>false, 'message'=>$message],422);
            }

        }


    }


    public function login($request)
    {

        $header= $request->header('Auth');
        if($header){
            $message = "Header Auth is missing!";
        }else{
            if($header=="0x0x"){
                $user = User('email', $request->email);
                if ($user && ($request->password)) {
                    // $token = $user->createToken($request->email)->plainTextToken;

                    return response([
                        // 'token' => $token,
                        'message' => 'login success',
                        'status' => 'success'
                    ], 200);
                }
                return response([
                    'message'=> 'credentials are incorrect',
                    'status' => 'failed'

                ],401);

            }else{
                $message = "Header Auth is incorrect!";
            }

        }


    }


    function logout($request)
    {

        $header= $request->header('Auth');
        if(empty()){
            $message = "Header Auth is missing!";
        }else{
            if($header=="090078601"){
                Auth::logout();
            }else{
                $message = "Header Auth is incorrect!";
                return response()->json(['status'=>false, 'message'=>$message],422);
            }

        }


    }


    public function profile(Request)
    {

        $header= $request->header('Auth');
        if(empty()){
            $message = "Header Auth is missing!";

        }else{
            if($header=="1234567"){
                return User($id);
            }else{
                $message = "Header Auth is incorrect!";
                return response()->json(['status'=>false, 'message'=>$message],422);
            }

        }


    }


    function search($Request)
    {

        $header= $request->header('Authorization');
        if(empty()){
            $message = "Header Auth is missing!";
        }else{
            if($header=="0900786"){
                return User("email", $email);
            }else{
                $message = "Header Auth is incorrect!";
            }

        }


    }

}
