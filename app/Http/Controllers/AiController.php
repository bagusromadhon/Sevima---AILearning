<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;



class AiController extends Controller
{
 public function index(){
    $messages = collect(session('messages', []))->reject(fn($messages)=>
    
    $messages['role'] == 'system');

    return view('AI/index',[
        'messages'=> $messages
    ]);
 }
 public function store(Request $request){
    $messages = $request->session()->get('messages',[
     ['role' => 'system', 'content' => 'you are Laravel chatgpt clone']   
    ]);
    $messages[] = ['role' => 'user', 'content' => $request->input('message')];
    // $response = OpenAI::chat()->create([
    //     'model' => 'gpt-3.5-turbo',
    //     'messages'=>$messages
    // ]);
    $response = OpenAI::chat()->create([
        'model' => 'gpt-3.5-turbo',
        'messages' => $messages
    ]);
    $messages[] = ['role' => 'assistant','content'=> $response->choices[0]->
    message->content];
    $request->session()->put('messages',$messages);
    return redirect('/');
 }
}
