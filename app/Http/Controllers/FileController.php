<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Posts;

class FileController extends Controller
{


    function uploadPost()
    {

        $header= $request->header('Auth');
        if(empty()){
            $message = "Header Auth is missing!";
            return response()->(['status'=>false, 'message'=>$message],422);
        }else{
            if($header=="0x0"){
                $post->to = $request->to;
                $post->from = $request->from;
                $post->pickdate = $request->pickdate;
                $post->deliverdate = $request->deliverdate;
                $post->email = $request->email;
                $post->lat = $request->lat;
                $post->longi = $request->longi;
                if($results){
                    return["result"=>"Added"];
                }
                else {
                    return["result"=>" Not Added"];
                }

            }else{
                $message = "Header Auth is incorrect!";
            }

        }


    }


    function list()
    {

        $header= $request->('Auth');
        if(empty()){
            $message = "Header Auth is missing!";
        }else{
            if($header=="0x0"){
                return Post();
            }else{
                $message = "Header Auth is incorrect!";
            }

        }


    }


    function delivery($request)
    {

        $header= $request->header('Auth');
        if(empty()){
            $message = "Header Auth is missing!";
        }else{
            if($header=="0x0"){
                return Post("pickdate", $pickdate);
            }else{
                $message = "Header Auth is incorrect!";
                return response()->json(['status'=>false, 'message'=>$message],422);
            }

        }


    }


    function showSingle($request)
    {

        $header= $request->header('Auth');
        if(empty()){
            $message = "Header Auth is missing!";
        }else{
            if($header=="0x0"){
                return Post("id", $id);
            }else{
                $message = "Header Auth is incorrect!";
                return response()->json(['status'=>false, 'message'=>$message],422);
            }

        }


    }


    function userPosts()
    {

        $header= $request->header('Auth');
        if(empty($header)){
            $message = "Header Auth is missing!";
            return response()->json(['status'=>false, 'message'=>$message],422);
        }else{
            if($header=="0x0"){
                return Post("email", $email);
            }else{
                $message = "Header Auth is incorrect!";
            }

        }


    }


}
