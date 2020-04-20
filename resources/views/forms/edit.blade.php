<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/jquery.signature.css')}}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="{{asset('js/jquery.signature.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('js/sketch.js')}}" type="text/javascript"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">


<div class="container">
@include('layouts.header')
<form>
    <!--  HEADER -->
    <div class="header row">
            <div class="col-sm-3">
                <label for="tiquet" >Número de Ticket:</label>
                <input type="text" name="ticket" disabled value="{{$form->ticket_number}}">
            </div>

            <div class="form-group title col-sm-6">
                <h2>REPORTE DE ACTIVIDADES</h2>
            </div>

            <div class="form-group col-sm-3" >
                <img class="logo img-fluid" src="{{asset('images/logo.jpg')}}" alt="">
            </div>
        </div>
        <!--  HEADER -->



    <!-- DATOS DEL CLIENTE -->
    <h3>DATOS DEL CLIENTE</h3>
    <div class="customer-data row">
        <div class="form-group field-large">
            <label for="name-customer">Nombre del Cliente:</label>
            <input  class="field-large" type="text" name="customer_name" value="{{$form->customer_name}}">
        </div>
        <div class="form-group field-medium">
            <label for="address">Dirección:</label>
            <input type="text" name="address" value="{{$form->customer_address}}">
        </div>
        <div class="form-group field-small right">
                <label for="phone">Teléfono:</label>
                <input  type="text" name="phone" value="{{$form->customer_phone}}">
            </div>
        <div class="form-group field-medium">
            <label for="contact-name">Nombre de Contacto:</label>
            <input type="text" name="contact_name" value="{{$form->contact_name}}">
        </div>

        <div class="form-group field-small right">
            <label for="position">Cargo:</label>
            <input  type="text" name="position" value="{{$form->customer_position}}">
        </div>
        <div class="form-group field-medium left">
                <label for="email">Email:</label>
                <input  type="email" name="customer_email" value="{{$form->customer_email}}">
        </div>
    </div>
    <!-- DATOS DEL CLIENTE -->


    <!-- DATOS DE LA ACTIVIDAD -->
    <h3>DATOS DE LA ACTIVIDAD</h3>
    <div class="activity-data row" >
        <div class="form-group activity col-md-12">
            <p class="type-activity">Tipo de Actividad</p>
            <table>
                <tr>
                    <td> <input type="checkbox" value="soporte" disabled name="activity_type"
                        @if ( $form->activity_type == 'soporte' ) checked @endif></td>
                    <td> <input type="checkbox" value="mantenimiento" disabled name="activity_type"
                        @if ( $form->activity_type == 'mantenimiento' ) checked @endif></td>
                    <td> <input type="checkbox" value="correctivo" disabled name="activity_type"
                        @if ( $form->activity_type == 'correctivo' ) checked @endif></td>
                    <td> <input type="checkbox" value="instalacion" disabled name="activity_type"
                        @if ( $form->activity_type == 'instalacion' ) checked @endif></td>
                    <td> <input type="checkbox" value="tunning" disabled name="activity_type"
                        @if ( $form->activity_type == 'tunning' ) checked @endif></td>
                    <td> <input type="checkbox" value="capacitacion" disabled name="activity_type"
                        @if ( $form->activity_type == 'capacitacion' ) checked @endif></td>
                    <td> <input type="checkbox" value="traslado" disabled name="activity_type"
                        @if ( $form->activity_type == 'traslado' ) checked @endif></td>
                    <td> <input type="checkbox" value="entregacom" disabled name="activity_type"
                        @if ( $form->activity_type == 'entregacom' ) checked @endif></td>
                    <td> <input type="checkbox" value="otro" disabled   name="activity_type"
                        @if ( $form->activity_type == 'otro' ) checked @endif></td>
                </tr>
                <tr>
                    <td> <span>Soporte</span> </td>
                    <td><span>Mantenimiento</span></td>
                    <td><span>Correctivo</span></td>
                    <td><span>Instalación</span></td>
                    <td><span>Tunning</span></td>
                    <td><span>Capacitación</span></td>
                    <td><span>Translado</span></td>
                    <td><span>Entrega Comp.</span></td>
                    <td><span>Otro</span></td>
                </tr>
            </table>
        </div>

        <div class="col-md-12 other-activity">
            <p>En caso de marcar OTRO por favor describa la actividad</p>
            <span disabled class="other_activity_type" type="text" name="other-activity">{{$form->other_activity_type}}</span>
        </div>

    </div>
    <!-- DATOS DE LA ACTIVIDAD -->


    <!-- EQUIPO -->
    <div class="data-pc row">
            <div class="col-md-3">
                <p>Tipo de equipo</p>
            </div>

            <div class="col-md-3">
                <textarea name="pc_type" id="" cols="30" rows="5" disabled>{{$form->pc_type}}</textarea>
            </div>

            <div class="col-md-3">
                <p>Serial</p>
            </div>

            <div class="col-md-3">
                <textarea name="pc_serial" id="" cols="30" rows="5" disabled>{{$form->pc_serial}}</textarea>
            </div>
    </div>
    <!-- EQUIPO -->

    <div class="datetime row">
        <div class="col-md-3">
            <p>Fecha</p>
            <input type="date" name="date" disabled value="{{$form->date}}" >
        </div>
        <div class="col-md-3">
            <p>Hora Inicial</p>
            <input type="time" name="initial_hour" disabled value="{{$form->initial_hour}}">
        </div>
        <div class="col-md-3">
            <p>Hora Final</p>
            <input type="time" name="final_hour" disabled value="{{$form->final_hour}}">
        </div>
        <div class="col-md-3">
            <p>Tiempo Total</p>
            <input type="text" name="total_time" disabled value="{{$form->total_time}}">
        </div>

    </div>

    <!-- OBSERVACIONES -->
    <div class="observation row">
        <div class="col-md-3">
            <br>
            <h5>Observaciones y detalle de la actividad: </h5>
            <textarea name="observations" id="" cols="140" disabled rows="10"> {{$form->observations}} </textarea>
        </div>
    </div>
    <!-- OBSERVACIONES -->
    <div class="cliente">
        <div class="head-footer">
            <div class="col-md-6"><strong>Por parte del cliente</strong> </div>
        </div>
        <div class="footer row">
            <div class="content-name">
                <label>Nombre: </label>
                <input type="text" class="field-custom" name="customer_sign_name"  value="{{$form->customer_sign_name}}">
            </div>
            <div class="content-position">
                <label>Cargo: </label>
                <input type="text" class="field-custom" name="customer_sign_position"  value="{{$form->customer_sign_position}}">
            </div>
            <div class="content-sign old-sign">
                <label>Firma: </label>
                <div class="content">
                    <img src="{{$form->customer_sign}}" alt="">                    
                </div>                
            </div>
            <p class="badge badge-success" id="edit-sign">Actualizar<br/>Firma</p>

            <!-- HABILITAR SI EL USUARIO QUIERE EDITAR LA FIRMA-->
            <div class="content-sign new-sign">
                <label>Firma cliente: </label>
                <div id="sign-customer-edit" class="field-custom" ></div>
                <input type="text" hidden name="" value="">
                <img id="saveimg-sign-customer"  alt="" style="display: none; border: 1px solid #ccc" />
            </div>
            <div class="content-date">
                <label>Fecha: </label>
                <input type="date" class="field-custom"  value="{{$form->customer_date}}" name="customer_date">
            </div>
        </div>
    </div>
    <div class="pss">
            <div class="head-footer">
            <div class="col-md-6"><strong>Por parte de Professional Service</strong></div>
        </div>
        <div class="footer row">
            <div class="content-name">
                <label>Nombre: </label>
                <input type="text" class="field-custom" name="ps_sign_name" disabled value="{{$form->ps_sign_name}}">
            </div>
            <div class="content-position">
                <label>Cargo: </label>
                <input type="text" class="field-custom" name="ps_sign_position" disabled value="{{$form->ps_sign_position}}">
            </div>
            <div class="content-sign">
                <label>Firma: </label>
                <div class="content">
                    <img src="{{$form->ps_sign}}" alt="">
                </div>
            </div>
            <div class="content-date">
                    <label>Fecha: </label>
                    <input type="date" class="field-custom" name="ps_date" disabled value="{{$form->ps_date}}">
            </div>
        </div>
    </div>
    
    <div class="activity-data calification row" >
        <div class="form-group activity col-md-12">
            <p class="type-activity">Calificación del servicio</p>
            <table>
                <input type="hidden" name="formId" value="{{$form->id}}">
                <tr>
                    <td> <input type="radio" disabled value="excelente" name="service_qualification"
                        @if($form->service_qualification == 'excelente') checked @endif ></td>
                    <td> <input type="radio" disabled value="bueno" name="service_qualification"
                        @if($form->service_qualification == 'bueno') checked @endif ></td>
                    <td> <input type="radio" disabled value="regular" name="service_qualification"
                        @if($form->service_qualification == 'regular') checked  @endif ></td>
                    <td> <input type="radio" disabled value="deficiente" name="service_qualification"
                        @if($form->service_qualification == 'deficiente') checked @endif ></td>
                    <td> <input type="radio" disabled value="malo" name="service_qualification"
                        @if($form->service_qualification == 'deficiente') checked @endif ></td>
                </tr>
                <tr>
                    <td> <span>Excelente</span> </td>
                    <td><span>Bueno</span></td>
                    <td><span>Regular</span></td>
                    <td><span>Deficiente</span></td>
                    <td><span>Malo</span></td>
                </tr>
            </table>
        </div>

    </div>
    <!-- CALIFICACIÓN -->


    <!-- Comentarios -->
    <div class="observation row">
        <div class="col-md-3">
            <br>
            <h5>Comentarios al servicio: </h5>
            <textarea name="service_comments" id="" cols="140" rows="10" disabled > {{$form->service_comments}}</textarea>
        </div>
    </div>
    <!-- Comentarios -->
    <div class="actions row">
        <div class="col-md-3 col-sm-6">
            <a href="/list" class="btn btn-success active" id="showforms"> << REGRESAR </a>
        </div>
        <div class="col-md-2 col-sm-12">
            <button type="button" class="btn btn-primary active" id="updateForm">ACTUALIZAR</button>
        </div>
    </div>
    <div id="signatureJSONCUSTOMER" hidden>
    </div>
</form>
</div>



