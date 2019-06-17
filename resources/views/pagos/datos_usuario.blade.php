@extends('layouts.app')

@section('title', 'Resgistro de usuarios')

@section('content')

  <style type="text/css">
  *{

    margin:auto;
    text-align: left;
  }

  </style>

  <form class="container" action="{{url('api/test.placetopay.com/redirection/session/pagos/registro_usuarios',$nonce)}}"  method="POST">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="row">

      <center>

        <div clas="form-group" style="margin-top: 10px;">
          <div class="card " style="width: 40rem; height:60rem; margin-top: 10px; ">
            <img width="5" height="300" class="card-img-top" src="/imagenes/{{'nuevo-logo-place-to-pay.jpg'}}" alt="Card image cap">

            <div class="card-body">
              <p style="color:red;">* obligatorio</p>
              <label style="margin-top:10px;">Nombres <span style="font-size:20px; color:red;">*</span></label>
              <input type="text" style="width: 35rem;" name="nombres" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" title="Solo ingrese letras" required class="form-control">
              <label>Apellidos <span style="font-size:20px; color:red;">*</span></label>
              <input type="text" name="apellidos" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" title="Solo ingrese letras" required class="form-control">
              <label for="">Tipo de documento <span style="font-size:20px; color:red;">*</span></label>
              <select name="tipo_documento" class="form-control">
                <option>CC</option>
                <option>TI</option>
              </select>
              <label>Número de documento <span style="font-size:20px; color:red;">*</span></label>
              <input type="number" name="documento" title="Solo ingrese números" required class="form-control">
              <label>Email <span style="font-size:20px; color:red;">*</span></label>
              <input type="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" name="email_Address" required="" class="form-control">
              <label>Celular <span style="font-size:20px; color:red;">*</span></label>
              <input type="number" name="celular" title="Solo ingrese números" required="" class="form-control">
              <br>
              <button style="background-color:#34495E;" type="submit" style="margin-top: 20px;" class="btn btn-primary">Continuar <i class="fa fa-mail-forward" style="font-size:15px;color:white"></button>
              </form>
              <form action="{{url('api/test.placetopay.com/redirection/home')}}" method="get">
                <button style="margin-left:20px" type="submit" class="btn btn-danger"><i class="fa fa fa-close" style="font-size:15px;color:white"></i> Cancelar proceso</button>
              </form>

            </div>

          </div>

        </div>


      </div>

    </center>



  @endsection
