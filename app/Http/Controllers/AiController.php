<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;



class AiController extends Controller
{
 public function index(){
    $messages = collect(session('messages', []))->reject(fn($messages)=>
    
    $messages['role'] === 'system');

    return view('AI/index',[
        'messages'=> $messages
    ]);
 }
 public function store(Request $request)
{
    $inputMessage = $request->input('message');
    $formattedMessage = "Saya mau belajar tentang topik \"$inputMessage\". Tuliskan 20% hal yang perlu saya ketahui untuk menguasai 80% ilmu tersebut";

    $messages = $request->session()->get('messages', [
        ['role' => 'system', 'content' => 'you are Laravel chatgpt clone']
    ]);

    $messages[] = ['role' => 'user', 'content' => $formattedMessage];

    $response = OpenAI::chat()->create([
        'model' => 'gpt-3.5-turbo',
        'messages' => $messages
    ]);

    $messages[] = ['role' => 'assistant', 'content' => $response->choices[0]->message->content];

    $request->session()->put('messages', $messages);
    return redirect('/ai');
}

 public function destroy(Request $request ){
    $request->session()->forget('messages');
    return redirect('/ai');
 }
}
