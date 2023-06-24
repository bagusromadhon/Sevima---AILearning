<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AiController extends Controller
{
 public function index(){
    $messages = collect(session('messages', []))->reject(fn($messages)=>
    
    $messages['role'] == 'system');

    return view('AI/index.blade.php',[
        'messages'=> $messages
    ]);
 }
 public function store(Request $request){
    $messages = $request->session()->get('messages',[
     ['role' => 'system', 'content' => 'you are Laravel chatgpt clone']   
    ]);
    $messages[] = ['role' => 'user', 'content' => $request->input('message')];
    $response = OpenAI::chat()->create([
        'model' => 'gpt-3.5-turbo',
        'messages'=>
    ])
 }
}
