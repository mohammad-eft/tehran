<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller{
    public function insert(){
        $message=Message::where('user_id' , Auth::id())->get();
        return view('message' , ['message'=>$message]);
    }
    public function store(Request $request){
        $role=Auth::user()->load('role');
        $role_id=false;
        if($role->role[0]->id==1){
            $role_id=true;
        }
        Message::create([
            "user_id"=>$request->id,
            "message"=>$request->message,
            "isAdmin"=>$role_id?1:0,
        ]);
        if($role_id==true){
            return redirect()->back();
        }else{
            return to_route('message.insert');
        }
    }
}
