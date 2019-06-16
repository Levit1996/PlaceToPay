@extends('layouts.app')

@section('title', 'Crear pago')

@section('content')

  <style type="text/css">
  *{

    margin:auto;
    text-align: left;
  }

  </style>

  <form class="container" action="{{url('/guardar_usuario')}}"  method="POST">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="row">

      <div clas="form-group" style="margin-top: 10px;">
        <div class="card " style="width: 40rem; height:35rem; margin-top: 10px; ">
          <div class="card-body">
            <label>Nombres</label>
            <input type="text" style="width: 35rem;" name="nombres" required="" class="form-control">
            <label>Apellidos</label>
            <input type="text" name="apellidos" required="" class="form-control">
            <label for="">Tipo de documento:</label>
            <select name="tipo_documento" class="form-control">
              <option>CC</option>
              <option>TI</option>
            </select>
            <label>Número de documento</label>
            <input type="number" name="documento" required="" class="form-control">
            <label>Email</label>
            <input type="text" name="email_Address" required="" class="form-control">
            <label>Celular</label>
            <input type="number" name="celular" required="" class="form-control">

            <button type="submit" style=" margin-top: 20px;" class="btn btn-primary">Continuar</button>
          </div>
        </div>
      </div>

    </div>


  </form>


@endsection
