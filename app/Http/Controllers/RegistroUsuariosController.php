<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Database\Eloquent\Model;

class RegistroUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    return view("home");

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($referencia)
    {
      $nonce=$referencia;
      return view("pagos.datos_usuario")->with("nonce", $nonce);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $nonce){

       $nonce=$nonce;
       $data = new Usuario;
       $data->tipo_documento=$request->input("tipo_documento");
       $data->documento=$request->input("documento");
       $documento=$request->input("documento");
       $data->nombres=$request->input("nombres");
       $data->apellidos=$request->input("apellidos");
       $data->email_Address=$request->input("email_Address");
       $data->celular=$request->input("celular");

     if($data->save()){
      return view("pagos.pagos_internet")->with("documento",$documento)->with("nonce",$nonce);
    }else{
       // return view("cofirmaciones.mjs_transanccion_rechazada");
    }


}


}
