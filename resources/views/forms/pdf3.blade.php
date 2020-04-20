<link rel="stylesheet" href="{{base_path('public/css/main.css')}}">
<div class="container">
<form>
    <!--  HEADER -->

    <table class="table table-hover">
        <tbody>
            <tr>
                <td><label for="tiquet" >Número de Ticket:</label><br>
                    <input type="text" name="ticket" disabled value="{{$form->ticket_number}}"></td>
                <td><h2>REPORTE DE ACTIVIDADES</h2></td>
                <td><img class="logo img-fluid" src="{{base_path('public/images/logo.jpg')}}" alt="" style="width:40%;"></td>
            </tr>
        </tbody>
    </table>

    <!-- DATOS DEL CLIENTE -->
    <h3>DATOS DEL CLIENTE</h3>
    <table class="table table-hover">
        <tbody>
            <tr>
                <td>
                    <label for="name-customer">Nombre del Cliente:</label>
                    <input  class="field-large" type="text" name="customer_name" value="{{$form->customer_name}}" disabled>
                </td>

            </tr>
            <tr>
                <td>
                    <label for="address">Dirección:</label>
                    <input type="text" name="address" value="{{$form->customer_address}}" disabled>
                </td>
                <td>
                    <label for="phone">Teléfono:</label>
                    <input  type="text" name="phone" value="{{$form->customer_phone}}" disabled>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="contact-name">Nombre de Contacto:</label>
                    <input type="text" name="contact_name" value="{{$form->contact_name}}" disabled>
                </td>

                <td>
                    <label for="position">Cargo:</label>
                    <input  type="text" name="position" value="{{$form->customer_position}}" disabled>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:</label>
                    <input  type="email" name="customer_email" disabled value="{{$form->customer_email}}">
                </td>
            </tr>
        </tbody>
    </table>



    <!-- DATOS DEL CLIENTE -->
    <!-- DATOS DE LA ACTIVIDAD -->
    <h3>DATOS DE LA ACTIVIDAD</h3>
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
                    <td> <input type="checkbox" value="translado" disabled name="activity_type"
                        @if ( $form->activity_type == 'translado' ) checked @endif></td>
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


        <div class="col-md-12 other-activity">
            <p>En caso de marcar OTRO por favor describa la actividad</p>
            <span disabled class="other_activity_type" type="text" name="other-activity">{{$form->other_activity_type}}</span>
        </div>

    <!-- DATOS DE LA ACTIVIDAD -->
    <!-- EQUIPO -->

        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>
                            <p>Tipo de equipo</p>
                    </td>
                    <td>
                            <textarea name="pc_type" id="" cols="30" rows="5" disabled>{{$form->pc_type}}</textarea>
                    </td>
                    <td>
                            <p>Serial</p>
                    </td>
                    <td>
                            <textarea name="pc_serial" id="" cols="30" rows="5" disabled>{{$form->pc_serial}}</textarea>
                    </td>
                </tr>
            </tbody>
        </table>
    <!-- EQUIPO -->

    <table class="table table-hover">
        <tbody>
            <tr>
                <td><p>Fecha</p><input type="date" name="date" value="{{$form->date}}" ></td>
                <td><p>Hora Inicial</p><input type="time" name="initial_hour" disabled value="{{$form->initial_hour}}"></td>
                <td><p>Hora Final</p><input type="time" name="final_hour" disabled value="{{$form->final_hour}}"></td>
                <td><p>Tiempo Total</p><input type="text" name="total_time" disabled value="{{$form->total_time}}"></td>
            </tr>
        </tbody>
    </table>

    <!-- OBSERVACIONES -->
    <div class="observation row">
        <div class="col-md-3">
            <br>
            <h5>Observaciones y detalle de la actividad: </h5>
            <textarea name="observations" id="" cols="140" disabled rows="10"> {{$form->observations}} </textarea>
        </div>
    </div>
    <!-- OBSERVACIONES -->

    <table>
        <thead>
            <tr>
                <th><strong>Por parte del cliente</strong></th>
                <th><strong>Por parte de Professional Service</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                        <label>Nombre: </label>
                        <input type="text" class="field-custom" name="customer_sign_name" disabled value="{{$form->customer_sign_name}}">
                </td>
                <td>
                        <label>Nombre: </label>
                        <input type="text" class="field-custom" name="ps_sign_name" disabled value="{{$form->ps_sign_name}}">
                </td>
            </tr>
            <tr>
                <td>
                        <label>Cargo: </label>
                        <input type="text" class="field-custom" name="customer_sign_position" disabled value="{{$form->customer_sign_position}}">
                </td>
                <td>
                        <label>Cargo: </label>
                        <input type="text" class="field-custom" name="ps_sign_position" disabled value="{{$form->ps_sign_position}}">
                </td>
            </tr>
            <tr>
                <td>
                        <label>Firma: </label>
                        <img src="{{base_path('public/uploads/')}}ps-{{$form->id}}.png" alt="">
                </td>
                <td>
                        <label>Firma: </label>
                        <img src="{{base_path('public/uploads/')}}customer-{{$form->id}}.png" alt="">
                </td>
            </tr>
            <tr>
                <td>
                        <label>Fecha: </label>
                        <input type="date" class="field-custom" disabled vlaue="{{$form->customer_date}}" name="customer_date">
                </td>
                <td>
                        <label>Fecha: </label>
                        <input type="date" class="field-custom" name="ps_date" disabled value="{{$form->ps_date}}">
                </td>
            </tr>
        </tbody>
    </table>

    <p class="type-activity">Calificación del servicio</p>
    <table>
        <tr>
            <td> <input type="radio" value="excelente" name="service_qualification"
                @if($form->service_qualification == 'excelente') checked @endif ></td>
            <td> <input type="radio" value="bueno" name="service_qualification"
                @if($form->service_qualification == 'bueno') checked @endif ></td>
            <td> <input type="radio" value="regular" name="service_qualification"
                @if($form->service_qualification == 'radio') checked @endif ></td>
            <td> <input type="radio" value="deficiente" name="service_qualification"
                @if($form->service_qualification == 'deficiente') checked @endif ></td>
            <td> <input type="radio" value="malo" name="service_qualification"
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
</form>
</div>



