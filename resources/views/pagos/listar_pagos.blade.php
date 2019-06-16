
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
<form class="" action="{{url('api/test.placetopay.com/redirection/home')}}" method="get">


  <div class="container" style="margin-top: 50px;">
    <center>
      <h3 style="align:center;"><strong>Intentos de pagos - PlacetoPay</strong></h3>
      <button type="submit" class="btn" style="margin-bottom:20px; float:right;  font-size:15px; color:white; background-color:#34495E; border-color:#34495E;" class="btn btn-primary btn-lg btn-block">Regresar <i class="fa fa fa-mail-reply-all" style="font-size:15px;color:white"></i> </button>

    </center>
    <table id="listaPagos" class="table table-striped" style="width: 100%; text-align:center;">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Referencia pago</th>
          <th scope="col">Documento usuario</th>
          <th scope="col">Nombre usuario</th>
          <th scope="col">Descripción</th>
          <th scope="col">Monto</th>
          <th scope="col">Moneda</th>
          <th scope="col">Banco</th>
          <th scope="col">Estado</th>
          <th scope="col">Direccion IP</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datos as $dato)
          <tr>
            <td>{{$dato->referencia}}</td>
            <td>{{$dato->documento}}</td>
            <td>{{$dato->nombres}} {{$dato->apellidos}}</td>
            <td>{{$dato->descripcion}}</td>
            <td>{{$dato->monto}}</td>
            <td>{{$dato->moneda}}</td>
            <td>{{$dato->entidad_financiera}}</td>
            <td>{{$dato->estado}}</td>
            <td>{{$dato->direccion_IP}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <center>
      <button type="submit" class="btn" style="margin-top:20px;  font-size:15px; color:white; background-color:#34495E; border-color:#34495E;" class="btn btn-primary btn-lg btn-block"> Regresar <i class="fa fa fa-mail-reply-all" style="font-size:15px;color:white"></i></button>
    </center>
  </div>
</div>
</div>


<script type="text/javascript">

$(document).ready(function() {

  $("#listaPagos").DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
    }
  });


} );



</script>
