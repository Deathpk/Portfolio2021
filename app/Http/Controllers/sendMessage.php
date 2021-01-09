<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMe;

class sendMessage extends Controller
{
    public function sendMessageViaEmail(Request $request)
    {
       $dadosRemetente =[
           'nome'=>$request->nome,
           'email'=>strtolower($request->email),
           'mensagem'=>$request->mensagem
        ];
        Mail::send(new contactMe($dadosRemetente));
        
        if(Mail::failures()){
            return redirect('/')->with('error' ,'Email não enviado , tente novamente!');
        }
        return redirect('/')->with('success', 'Mensagem enviada com sucesso!');

    }
}
