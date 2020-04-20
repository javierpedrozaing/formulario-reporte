<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/jquery.signature.css')}}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="{{asset('js/jquery.signature.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<div class="container">
  @include('layouts.header')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Ticket</th>
      <th scope="col">Cliente</th>
      <!--th scope="col">ACtividad</th>
      <th scope="col">Calificación</th-->
      <th scope="col"> ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($forms as $form)
      <tr>
        <td>{{$form->ticket_number}}</td>
        <td>{{$form->customer_name}}</td>
        <!--td>{{$form->activity_type}}</td>
        <td>{{$form->service_qualification}}</td-->
        <td>
             <a  class="btn btn-primary active" href="/show/{{$form->id}}">Visualizar</a>
             <a  class="btn btn-primary active" href="/edit/{{$form->id}}">Editar</a>
        </td>
      </tr>
    @endforeach

  </tbody>
</table>
  <div class="actions row">
    <div class="col-md-1 col-sm-12">
        <a href="/" class="btn btn-success"> << REGRESAR</a>
    </div>    
  </div>
</div>

