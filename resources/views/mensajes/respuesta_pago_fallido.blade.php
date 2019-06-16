@extends('layouts.app')

@section('title', 'Respuesta')

@section('content')


<form class="" action="{{url('api/test.placetopay.com/redirection/home')}}" method="get">
@foreach ($datos as $dato)
<h4  style="margin-top:40px; float:left; margin-left:380px;"><strong>Transacción #{{$dato->referencia}}</strong></h4>

<div class="card" style="width: 15rem; float:right; margin-top:75px; margin-right:325px;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item" style="padding: 40px; background-color: #F23209;"><p style="color:white; font-size:20px; text-align:center;" class="small">Total</p><p style="color:white; text-align:center;"><strong>{{$dato->moneda}} ${{$dato->monto}}</strong></p>
    <li class="list-group-item"></span>Referencia: <b>{{$dato->referencia}}</b> </li>
    <li class="list-group-item">Descripción: <b>{{$dato->descripcion}}</b> </li>
    <li class="list-group-item">Fecha: <b>{{$dato->created_at}}</b> </li>
    <li class="list-group-item">Sesión: <b>{{$dato->referencia_solicitud}}</b> </li>
  </ul>
</div>

<div class="card" style="float:left; margin-left:380px; width: 25rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item" style=" background-color: #F23209;"><P style="font-size:20px; text-align:center; color:white;">Estado de pago: <b>{{$dato->estado}}</b></p></span></li>
    <li class="list-group-item"></span>Banco: <b>{{$dato->entidad_financiera}}</b> </li>
    <li class="list-group-item">direccion IP: <b>{{$dato->direccion_IP}}</b>  </li>
    <li class="list-group-item">Estado: <b>{{$dato->estado}}</b></li>
    <li class="list-group-item">Código respuesta: <b>{{$dato->codigo_respuesta}}</b></li>
  </ul>
</div>
@endforeach


<button type="submit" style="margin-top:20px;  float:left; margin-left:380px; width: 25rem; font-size:15px; background-color:#34495E; border-color:#34495E;" class="btn btn-primary btn-lg btn-block"><i class="fa fa fa-mail-reply" style="font-size:15px;color:white"></i> Volver a la página del comercio</button>


</form>

@endsection
