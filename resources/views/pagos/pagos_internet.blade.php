@extends('layouts.app')

@section('title', 'Realizar pago')

@section('content')

  <style type="text/css">
  *{

    margin:auto;
    text-align: left;
  }

  </style>

  <form class="container" action="{{url('api/test.placetopay.com/redirection/session/pagos/realizar_pago',$nonce)}}" method="POST">

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="documento" value="{{$documento}}">
    <input type="hidden" name="nonce" value="{{$nonce}}">
    <div class="row">
      <center>
      <div clas="form-group" style="margin-top: 10px;">
        <div class="card " style="width: 40rem; height:50rem; margin-top: 10px;  ">
          <img width="5" height="300" class="card-img-top" src="/imagenes/{{'nuevo-logo-place-to-pay.jpg'}}" alt="Card image cap">
          <div class="card-body">
            <p style="color:red;">* obligatorio</p>
            <label style="margin-top:10px;">Tipo de cuenta <span style="font-size:20px; color:red;">*</span></label>
            <select name="tipo_cuenta" class="form-control" required>
              <option></option>
              <option>Personas</option>
              <option>Empresas</option>
            </select>
            <label for="">Seleccione entidad financiera <span style="font-size:20px; color:red;">*</span></label>
            <select name="entidad_financiera" class="form-control" required>
              <option></option>
              <option value"Prueba">Banco de prueba</option>
            </select>
            <label>Descripción del pago <span style="font-size:20px; color:red;">*</span></label>
            <input type="text" style="width: 35rem;" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" title="Solo ingrese letras" name="descripcion" required class="form-control">
            <label>Total a pagar <span style="font-size:20px; color:red;">*</span></label>
            <input id="principalnumber" type="text" name="monto" required placeholder="COP" class="form-control">
            <br>
            <button style="background-color:#34495E;" type="submit" style="margin-top: 20px;" class="btn btn-primary">Continuar <i class="fa fa-mail-forward" style="font-size:15px;color:white"></button>
          </div>
        </div>
      </div>

      <center>

    </div>

  </form>

  <script type="text/javascript">

  $("#principalnumber").keyup(function () {
        var valActual = $(this).val();
        var nuevoValor = conComas(valActual);
        $(this).val(nuevoValor);
    });

  function conComas(valor) {
    var nums = new Array();
    var simb = ","; //Éste es el separador
    valor = valor.toString();
    valor = valor.replace(/\D/g, "");   //Ésta expresión regular solo permitira ingresar números
    nums = valor.split(""); //Se vacia el valor en un arreglo
    var long = nums.length - 1; // Se saca la longitud del arreglo
    var patron = 3; //Indica cada cuanto se ponen las comas
    var prox = 2; // Indica en que lugar se debe insertar la siguiente coma
    var res = "";

    while (long > prox) {
        nums.splice((long - prox),0,simb); //Se agrega la coma
        prox += patron; //Se incrementa la posición próxima para colocar la coma
    }

    for (var i = 0; i <= nums.length-1; i++) {
        res += nums[i]; //Se crea la nueva cadena para devolver el valor formateado
    }

    return res;
}

  </script>


@endsection
