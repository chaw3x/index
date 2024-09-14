<?php

namespace App\Http\Controllers;

use Exception;
use App\Http\Requests\EmailRequest;
use App\Mail\InformationSend;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmailRequest $request)
    {        
        // try {
            $request->mensaje = strip_tags($request->mensaje);
            $ip=(new Controller)->obtenerIP();
            $mmailDB=new Email();            
            $mmailDB->name=$request->nombre;
            $mmailDB->email=$request->email;
            $mmailDB->phone=$request->telefono;
            $mmailDB->message=$request->mensaje;
            $mmailDB->ip=$ip;
            $mmailDB->save();
            Mail::to('ing.frankcatamo@gmail.com')->send(new InformationSend($request));
            return redirect('/')->with('status', 'Correo enviado con éxito.');
        // } catch (Exception $e) {
        //     return view('welcome',['error' => 'Algo salió mal al intentar enviar el correo.']);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        //        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
