<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.signature.css')}}">
    <link rel="stylesheet" media="screen and (max-width: 1024px)" href="{{asset('css/smallscreen.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{asset('js/jquery.signature.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<div class="container content">
@include('layouts.header')
<form>

    <!--  HEADER -->
    <div class="header row">
        <div class="col-sm-3">
            <label for="tiquet" >Número de Ticket:</label>
            <input type="text" name="ticket">
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
            <input  class="field-large" type="text" name="customer_name">
        </div>
        <div class="form-group field-medium">
            <label for="address">Dirección:</label>
            <input type="text" name="address">
        </div>
        <div class="form-group field-small right">
                <label for="phone">Teléfono:</label>
                <input  type="text" name="phone">
            </div>
        <div class="form-group field-medium">
            <label for="contact-name">Nombre de Contacto:</label>
            <input type="text" name="contact_name">
        </div>

        <div class="form-group field-small right">
            <label for="position">Cargo:</label>
            <input  type="text" name="position">
        </div>


        <div class="form-group field-medium left">
            <label for="email">Email:</label>
            <input  type="email" name="customer_email">
        </div>

    </div>
    <!-- DATOS DEL CLIENTE -->


    <!-- DATOS DE LA ACTIVIDAD -->
    <h3>DATOS DE LA ACTIVIDAD</h3>
    <div class="activity-data row" >
        <div class="form-group activity col-sm-12">
            <p class="type-activity">Tipo de Actividad</p>
            <table class="table">
                <tr>
                    <td> <input type="checkbox" value="soporte" name="activity_type"></td>
                    <td> <input type="checkbox" value="mantenimiento" name="activity_type"></td>
                    <td> <input type="checkbox" value="correctivo" name="activity_type"></td>
                    <td> <input type="checkbox" value="instalacion" name="activity_type"></td>
                    <td> <input type="checkbox" value="tunning" name="activity_type"></td>
                    <td> <input type="checkbox" value="capacitacion" name="activity_type"></td>
                    <td> <input type="checkbox" value="translado" name="activity_type"></td>
                    <td> <input type="checkbox" value="entregacom" name="activity_type"></td>
                    <td> <input type="checkbox" value="otro" name="activity_type"></td>
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

        <div class="col-sm-12 other-activity">
            <p>En caso de marcar OTRO por favor describa la actividad</p>
            <input type="text" name="other-activity">
        </div>
    </div>
    <!-- DATOS DE LA ACTIVIDAD -->


    <!-- EQUIPO -->
    <div class="data-pc row">
            <div class="col-md-3 col-sm-8">
                <p>Tipo de equipo</p>
            </div>

            <div class="col-md-3 col-sm-3" >
                <textarea name="pc_type" id="" ></textarea>
            </div>

            <div class="col-md-3 col-sm-8">
                <p>Serial</p>
            </div>

            <div class="col-md-3 col-sm-3">
                <textarea name="pc_serial" id="" ></textarea>
            </div>
    </div>
    <!-- EQUIPO -->

    <div class="datetime row">

        <div class="col-md-3 col-md-12">
            <p>Fecha</p>
            <input type="date" name="date" data-date-format="DD MMMM YYYY"  class="date_activity">
        </div>
        <div class="col-md-3 col-sm-12">
            <p>Hora Inicial</p>
            <input type="time" name="initial_hour" class="initial_hour">
        </div>
        <div class="col-md-3 col-sm-12">
            <p>Hora Final</p>
            <input type="time" name="final_hour" class="final_hour">
        </div>
        <div class="col-md-3 col-sm-12">
            <p>Tiempo Total</p>
            <input type="text" name="total_time" class="total_time">
        </div>

    </div>

    <!-- OBSERVACIONES -->
    <div class="observation row">
        <div class="col-md-3">
            <br>
            <h5>Observaciones y detalle de la actividad: </h5>
            <textarea name="observations" id="" ></textarea>
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
                <input type="text" class="field-custom" name="customer_sign_name">
            </div>
            <div class="content-position">
                <label>Cargo: </label>
                <input type="text" class="field-custom" name="customer_sign_position">
            </div>
            <div class="content-sign">
                <label>Firma cliente: </label>
                <div id="sign-customer" class="field-custom" ></div>
                <input type="text" hidden name="customer_sign" value="">
                <img id="saveimg-sign-customer"  alt="" style="display: none; border: 1px solid #ccc" />
            </div>
            <div class="content-date">
                <label>Fecha: </label>
                <input type="date" class="field-custom" name="customer_date">
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
                <input type="text" class="field-custom" name="ps_sign_name">
            </div>
            <div class="content-position">
                <label>Cargo: </label>
                <input type="text" class="field-custom" name="ps_sign_position">
            </div>
            <div class="content-sign">
                <label>Firma PSS: </label>
                <input type="text" hidden name="ps_sign" value="">
                <img id="saveimg-sign-ps" alt="" style="display: none; border: 1px solid #ccc" />
                <div id="sign-ps" class="field-custom" ></div>
            </div>
            <div class="content-date">
                <label>Fecha: </label>
                <input type="date" class="field-custom" name="ps_date">
            </div>
        </div>
    </div>

    
    
    <div class="activity-data calification row" >
        <div class="form-group activity col-md-12">
            <p class="type-activity">Calificación del servicio</p>
            <table>
                <tr>
                    <td> <input type="radio" value="excelente" name="service_qualification"></td>
                    <td> <input type="radio" value="bueno" name="service_qualification"></td>
                    <td> <input type="radio" value="regular" name="service_qualification"></td>
                    <td> <input type="radio" value="deficiente" name="service_qualification"></td>
                    <td> <input type="radio" value="malo" name="service_qualification"></td>
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
            <textarea name="service_comments" id="" ></textarea>
        </div>
    </div>
    <!-- Comentarios -->
    <div class="actions">
        <div class="col-md-3 col-sm-6">
            <button type="button" class="btn btn-primary active" id="saveForm">GUARDAR</button>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="/list" class="btn btn-success active" id="showforms">VER LISTADO </a>
        </div>
    </div>

<div id="signatureJSONCUSTOMER" hidden>
</div>

<div id="signatureJSON" hidden>
</div>

</form>
</div>
<body>

</body>
</html>
