<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="{{base_path('public/css/main.css')}}">
<style>
    .input{height:auto!important;font-size:14px;vertical-align:middle}.content-tables{border:1px solid #ccc;padding:20px}.content-tables .signing{padding-left:30px}.content-tables .customerdata{margin-top:-120px;padding-left:0}.signing img{margin:10px 0}
</style>

<div class="container">
<form>
    <!--  HEADER -->
    <div class="header row">
            <div class="col-sm-3">
                <label for="tiquet" >Número de Ticket:</label>
                <span class="input">{{$form->ticket_number}}</span>
            </div>

            <div class="form-group title col-sm-6">
                <h2>REPORTE DE ACTIVIDADES</h2>
            </div>

            <div class="form-group col-sm-3" >
                <img class="logo img-fluid" src="{{base_path('public/images/logo.jpg')}}" alt="">
            </div>
        </div>
        <!--  HEADER -->

    <!-- DATOS DEL CLIENTE -->
    <h3>DATOS DEL CLIENTE</h3>
    <div class="content-tables">
        <table>
            <tr>
                <td>
                    <strong for="name-customer">Nombre del Cliente:</strong>
                    <span  class="field-large input" type="text" name="customer_name">{{$form->customer_name}} </span>
                </td>
            </tr>
        </table>

        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>
                        <label for="address">Dirección:</label>
                        <span class="input" type="text" name="address">{{$form->customer_address}}</span>
                    </td>
                    <td>
                        <label for="phone">Teléfono:</label>
                        <span class="input" type="text" name="phone">{{$form->customer_phone}}</span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="contact-name">Nombre de Contacto:</label>
                        <span class="input" type="text" name="contact_name" >{{$form->contact_name}}</span>
                    </td>

                    <td>
                        <label for="position">Cargo:</label>
                        <span class="input" type="text" name="position">{{$form->customer_position}}</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email:</label>
                        <span class="input" type="email" name="customer_email">{{$form->customer_email}}</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- DATOS DEL CLIENTE -->

    <!-- DATOS DE LA ACTIVIDAD -->
    <h3>DATOS DE LA ACTIVIDAD</h3>
    <div class="content-tables">
        <table style="width:200px;">
            <tr>
                <td><strong class="type-activity">Tipo de Actividad</strong></td>
            </tr>
        </table>

        <table style="width:800px;">
                <tr>
                    <td> <input type="checkbox" value="soporte" name="activity_type"
                        @if ( $form->activity_type == 'soporte' ) checked @endif></td>
                    <td> <input type="checkbox" value="mantenimiento" name="activity_type"
                        @if ( $form->activity_type == 'mantenimiento' ) checked @endif></td>
                    <td> <input type="checkbox" value="correctivo" name="activity_type"
                        @if ( $form->activity_type == 'correctivo' ) checked @endif></td>
                    <td> <input type="checkbox" value="instalacion" name="activity_type"
                        @if ( $form->activity_type == 'instalacion' ) checked @endif></td>
                    <td> <input type="checkbox" value="tunning" name="activity_type"
                        @if ( $form->activity_type == 'tunning' ) checked @endif></td>
                    <td> <input type="checkbox" value="capacitacion" name="activity_type"
                        @if ( $form->activity_type == 'capacitacion' ) checked @endif></td>
                    <td> <input type="checkbox" value="translado" name="activity_type"
                        @if ( $form->activity_type == 'translado' ) checked @endif></td>
                    <td> <input type="checkbox" value="entregacom" name="activity_type"
                        @if ( $form->activity_type == 'entregacom' ) checked @endif></td>
                    <td> <input type="checkbox" value="otro"   name="activity_type"
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
            <br/><br/>
        @if ( $form->activity_type == 'otro' )
        <div>
            <strong>En caso de marcar OTRO por favor describa la actividad</strong>
            <span disabled class="other_activity_type" type="text" name="other-activity">{{$form->other_activity_type}}</span>
        </div>
        <br/>
        @endif
    </div>

    <!-- DATOS DE LA ACTIVIDAD -->
    <!-- EQUIPO -->
    <div class="content-tables">
        <table class="table">
            <tbody>
            <tr>
                <td>
                    <strong>Tipo de equipo</strong>
                </td>
                <td>
                    <span name="pc_type" id="" class="input">{{$form->pc_type}}</span>
                </td>
                <td>
                    <strong>Serial</strong>
                </td>
                <td>
                    <span name="pc_serial" id="" class="input">{{$form->pc_serial}}</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <!-- EQUIPO DATE-->
    <div class="content-tables" style="height: 50px;">
        <div class="col-md-3">
            <p>Fecha:</p>
            <span class="input" type="date" name="date" >{{$form->date}}</span>
        </div>
        <div class="col-md-3">
            <p>Hora Inicial:</p>
            <span class="input" type="time" name="initial_hour">{{$form->initial_hour}}</span>
        </div>
        <div class="col-md-3">
            <p>Hora Final:</p>
            <span class="input" type="time" name="final_hour">{{$form->final_hour}}</span>
        </div>
        <div class="col-md-3">
            <p>Tiempo Total:</p>
            <span class="input" type="text" name="total_time">{{$form->total_time}}</span>
        </div>

    </div>

    <!-- OBSERVACIONES -->
    <div class="content-tables">
        <strong>Observaciones y detalle de la actividad: </strong>
        <span name="observations" id=""> {{$form->observations}} </span>
    </div>

    <!-- OBSERVACIONES -->
    <div class="content-tables">
    <table class="customerdata">
            <thead>
                <tr>
                    <th class="signing"><strong>Por parte del cliente</strong><br/><br/></th>
                    <th><strong>Por parte de Professional Service</strong><br/><br/></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="signing">
                        <label>Nombre: </label>
                        <span type="text" class="field-custom" name="customer_sign_name">{{$form->customer_sign_name}}</span>
                    </td><br/>
                    <td>
                        <label>Nombre: </label>
                        <span type="text" class="field-custom" name="ps_sign_name">{{$form->ps_sign_name}}</span>
                    </td><br/>
                </tr>
                <tr>
                    <td class="signing">
                        <label>Cargo: </label>
                        <span type="text" class="field-custom" name="customer_sign_position">{{$form->customer_sign_position}}</span>
                    </td><br/>
                    <td>
                        <label>Cargo: </label>
                        <span type="text" class="field-custom" name="ps_sign_position">{{$form->ps_sign_position}}</span>
                    </td><br/>
                </tr>
                <tr>
                    <td class="signing">
                        <label>Firma: </label>
                        <img src="{{base_path('public/uploads/')}}customer-{{$form->id}}.png" alt="">
                    </td><br/>
                    <td>
                        <label>Firma: </label>
                        <img src="{{base_path('public/uploads/')}}ps-{{$form->id}}.png" alt="">
                    </td><br/>
                </tr>
                <tr>
                    <td class="signing">
                        <label>Fecha: </label>
                        <span type="date" class="field-custom" name="customer_date">{{$form->customer_date}}</span>
                    </td><br/>
                    <td>
                        <label>Fecha: </label>
                        <span type="date" class="field-custom" name="ps_date">{{$form->ps_date}}</span>
                    </td>
                </tr>
            </tbody>
    </table>
    </div>
    <br/>
    <div class="content-tables">
        <strong class="type-activity">Calificación del servicio</strong>
        <table>
            <tr>
                <td> <input type="radio" value="excelente" name="service_qualification"
                    @if($form->service_qualification == 'excelente') checked @endif ></td>
                <td> <input type="radio" value="bueno" name="service_qualification"
                    @if($form->service_qualification == 'bueno') checked @endif ></td>
                <td> <input type="radio" value="regular" name="service_qualification"
                    @if($form->service_qualification == 'regular') checked @endif ></td>
                <td> <input type="radio" value="deficiente" name="service_qualification"
                    @if($form->service_qualification == 'deficiente') checked @endif ></td>
                <td> <input type="radio" value="malo" name="service_qualification"
                    @if($form->service_qualification == 'deficiente') checked @endif ></td>
            </tr>
            <tr class="calification">
                <td> <span>Excelente</span> </td>
                <td><span>Bueno</span></td>
                <td><span>Regular</span></td>
                <td><span>Deficiente</span></td>
                <td><span>Malo</span></td>
            </tr>
        </table>
    </div>
    <!-- CALIFICACIÓN -->
    <br/>
    <!-- Comentarios -->
    <div class="content-tables">
        <strong>Comentarios al servicio: </strong>
        <span name="service_comments" id="" > {{$form->service_comments}}</span>
    </div>
    <!-- Comentarios -->
</form>
</div>



