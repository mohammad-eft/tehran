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
        Message::create([
            "user_id"=>$request->id,
            "message"=>$request->message,
            "isAdmin"=>0,
        ]);
        return to_route('message.insert');
    }
}
