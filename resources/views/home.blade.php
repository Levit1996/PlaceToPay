@extends('layouts.app')

@section('title', 'Crear pago')

@section('content')

  <style type="text/css">
  *{

    margin:auto;
    text-align: left;
  }

  </style>

  @php

  $seed = date('c');
  $secretKey = "024h1IlD";
  $nonce=0;

  if (function_exists('random_bytes')) {
    $nonce = bin2hex(random_bytes(16));
  } elseif (function_exists('openssl_random_pseudo_bytes')) {
    $nonce = bin2hex(openssl_random_pseudo_bytes(16));
  } else {
    $nonce = mt_rand();
  }

  $auth=array(
    'login'=>"6dd490faf9cb87a9862245da41170ff2",
    'tranKey'=>base64_encode(sha1($nonce.$seed.$secretKey, true)),
    "nonce"=>$nonce,
    'seed'=>$seed
  );


  @endphp



    <div class="row">

      <div clas="form-group" style="margin-top: 10px;">
        <div class="card " style="width: 35rem; height:30rem; margin-top: 10px; ">
          <img width="5" height="300" class="card-img-top" src="/imagenes/{{'nuevo-logo-place-to-pay.jpg'}}" alt="Card image cap">

          <div class="card-body">

            <a href="session/pagos/{{$nonce}}">
              <button style="margin-top: 20px;" class="btn btn-success">Realizar pago <i class="fa fa-exchange" style="font-size:15px;color:white"></i></button>
            </a>

            <a href="listar_pagos">
              <button  style="margin-top: 20px; margin-left:20px;" class="btn btn-primary">Listar intentos de pagos <i class="fa fa-database" style="font-size:15px;color:white"></i></button>
            </a>
          </div>
        </div>
      </div>

    </div>

@endsection
