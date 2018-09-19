<?php

namespace PastaYPasto\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class enviar extends Controller
{
    public function sendFran(Request $request)
    {
        //Mail::send('emails.hola', $request,function ($m){
        $correo = $request->email;
        
        Mail::send('emails.fran', [ 'data'=>$request,'saludo'=>'ad' ],function ($m)use($correo){
            $m->from('websitepastaypasto@gmail.com', 'websitepastaypasto');
            $m->to('kikinbmk10@gmail.mx')->subject('Franquisia');

        });

        //return "Se envio el email";
        return response()->json(['request'=> $request]);


    }
}
