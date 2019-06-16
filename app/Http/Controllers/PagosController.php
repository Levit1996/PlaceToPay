<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use Illuminate\Http\RedirectResponse;
use App\Usuario;
use App\PeticionPago;
use Illuminate\Database\Eloquent\Model;

class PagosController extends Controller{



  public function registrar_pagos(Request $request, $nonce){

    $referencia = str_shuffle("abc".uniqid());
    $referencia_fallido=$referencia;
    $documento = $request->input("documento");
    $codigo_respuesta=200;

    $data = new PeticionPago;
    $data->referencia_solicitud = $nonce;
    $data->referencia = $referencia;
    $data->documento_usuario = $request->input("documento");
    $data->descripcion = $request->input("descripcion");
    $data->monto = $request->input("monto");
    $data->estado= "APROBADO";
    $data->moneda ="COP";
    $data->codigo_respuesta=$codigo_respuesta;
    $data->entidad_financiera = $request->input("entidad_financiera");
    $data->tipo_cuenta = $request->input("tipo_cuenta");
    $data->direccion_IP = $request->ip();
    $data->returnUrl = "http://127.0.0.1:8000/api/test.placetopay.com/redirection/";
    $data->expiration = date('c');
    $data->userAgent = "PlacetoPay";



    if($data->save()){

      return redirect()->action('PagosController@respuesta_pago', [$referencia]);

    }else{

      $documento = $request->input("documento");
      $codigo_respuesta=0;

      $data = new PeticionPago;
      $data->referencia_solicitud = $nonce;
      $data->referencia = $referencia_fallido;
      $data->documento_usuario = $request->input("documento");
      $data->descripcion = $request->input("descripcion");
      $data->monto = $request->input("monto");
      $data->estado= "FALLIDO";
      $data->moneda ="COP";
      $data->codigo_respuesta=$codigo_respuesta;
      $data->entidad_financiera = $request->input("entidad_financiera");
      $data->tipo_cuenta = $request->input("tipo_cuenta");
      $data->direccion_IP = $request->ip();
      $data->returnUrl = "http://127.0.0.1:8000/api/test.placetopay.com/redirection/";
      $data->expiration = date('c');
      $data->userAgent = "PlacetoPay";

      return redirect()->action('PagosController@respuesta_pago', [$referencia_fallido]);

    }


  }


  public function respuesta_pago($referencia){


    $datos= PeticionPago::where('referencia', '=', $referencia)->get();

    foreach ($datos as $dato) {
      $codigo = $dato->codigo_respuesta;
    }


    if ($codigo == 200){

      return view("mensajes.respuesta_pago")->with("datos",$datos);

    }else{


      return view("mensajes.respuesta_pago_fallido")->with("datos",$datos);

    }



  }


  public function listar_pagos(){

  $datos = PeticionPago::join('usuarios', 'usuarios.documento', '=', 'peticion_pagos.documento_usuario')
  ->select('usuarios.nombres','usuarios.documento','usuarios.apellidos','peticion_pagos.referencia',
  'peticion_pagos.descripcion','peticion_pagos.monto','peticion_pagos.entidad_financiera','peticion_pagos.estado',
  'peticion_pagos.entidad_financiera','peticion_pagos.tipo_cuenta','peticion_pagos.direccion_IP','peticion_pagos.moneda')
  ->get();

  return view("pagos.listar_pagos")->with("datos",$datos);

  }


}
