<?php

namespace PastaYPasto\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Image;
use App\Http\Controllers\Controller;

use Mail;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->project->all();
        return view('index')->with(['projects' => $projects, 'pass' => bcrypt('pass') ]);
    }
    public function sendContact(Request $request)
    {
        //Mail::send('emails.hola', $request,function ($m){
        $correo = $request->email;
        
        Mail::send('emails.hola', [ 'data'=>$request,'saludo'=>'ad' ],function ($m)use($correo){ 
            $m->from('websitepastaypasto@gmail.com', 'websitepastaypasto');
            $m->to($correo)->subject('websitepastaypasto');
        });

        //return "Se envio el email";
        return response()->json(['request'=> $request]);


    }
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
