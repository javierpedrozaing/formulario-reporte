<style>
h1,h2,h3,h4,h5, label{
    font-weight: bold;
}
table{
    width:100%;
}

.page-break {
    page-break-after: always;
}

</style>
<div class="container">
    <table>
        <tr>
            <td><h2>REPORTE DE ACTIVIDADES</h2></td>
            <!--<td><img src="{{asset('images/logo.png')}}" alt="logo" style="heigh:50px;" alt=""></td>-->
        </tr>
    </table>
    <table>
        <tr>
            <td><label for="tiquet" >Número de Ticket:</label></td>
            <td><input type="text" name="ticket" value="{{$form->ticket_number}}" disabled></td>
        </tr>
        <hr>
        <tr>
            <td><h4>DATOS DEL CLIENTE</h4></td>
        </tr>
        <tr>
            <td><label for="name-customer">Nombre del Cliente:</label></td>
            <td><input  class="field-large" type="text" name="customer_name" value="{{$form->customer_name}}" disabled></td>
        </tr>
        <tr>
            <td><label for="address">Dirección:</label></td>
            <td><input type="text" name="address" value="{{$form->customer_address}}" disabled></td>
        </tr>
        <tr>
            <td><label for="phone">Teléfono:</label></td>
            <td><input  type="text" name="phone" value="{{$form->customer_phone}}" disabled></td>
        </tr>
        <tr>
            <td><label for="contact-name">Nombre de Contacto:</label></td>
            <td><input type="text" name="contact_name" value="{{$form->contact_name}}" disabled></td>
        </tr>
        <tr>
            <td><label for="position">Cargo:</label></td>
            <td><input  type="text" name="position" value="{{$form->customer_position}}" disabled></td>
        </tr>
    </table>
    <hr>
    <h4>DATOS DE LA ACTIVIDAD</h4>
    <h4>Tipo de actividad</h4>
    <table>
        <tr>
            @if ( $form->activity_type == 'soporte' )
                <td> <span>Soporte</span> </td>
            @endif

            @if ( $form->activity_type == 'mantenimiento' )
                <td><span>Mantenimiento</span></td>
            @endif

            @if ( $form->activity_type == 'correctivo' )
                <td><span>Correctivo</span></td>
            @endif

            @if ( $form->activity_type == 'instalacion' )
                <td><span>Instalación</span></td>
            @endif

            @if ( $form->activity_type == 'tunning' )
                <td><span>Tunning</span></td>
            @endif

            @if ( $form->activity_type == 'capacitacion' )
                <td><span>Capacitación</span></td>
            @endif

            @if ( $form->activity_type == 'translado' )
                <td><span>Translado</span></td>
            @endif

            @if ( $form->activity_type == 'entregacom' )
                <td><span>Entrega Comp.</span></td>
            @endif

            @if ( $form->activity_type == 'otro' )
                <td><span>Otro</span></td>
            @endif
        </tr>
        <tr>
            <td><p style="width:800px;">En caso de marcar OTRO por favor describa la actividad</p></td>
            <td><input disabled class="other_activity_type" type="text" name="other-activity"> </td>
        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <td><label for="">Tipo de equipo:</label></td>
            <td><textarea name="pc_type" id="" cols="30" rows="5" disabled>{{$form->pc_type}}</textarea></td>
        </tr>
        <tr>
            <td><label for="">serial:</label></td>
            <td><textarea name="pc_serial" id="" cols="30" rows="5" disabled>{{$form->pc_serial}}</textarea></td>
        </tr>
        <tr>
            <td><label for="">Fecha:</label></td>
            <td><input type="text" name="date" value="{{$form->date}}" ></td>
        </tr>
        <tr>
            <td><label for="">Hora Inicial:</label></td>
            <td><input type="text" name="initial_hour" disabled value="{{$form->initial_hour}}"></td>
        </tr>
        <tr>
            <td><label for="">Hora Final: </label></td>
            <td><input type="text" name="final_hour" disabled value="{{$form->final_hour}}"></td>
        </tr>
        <tr>
            <td><label for="">Tiempo Total: </label></td>
            <td><input type="text" name="total_time" disabled value="{{$form->total_time}}"></td>
        </tr>
    </table>
    <div class="page-break"></div>
    <table>
        <tr>
            <td> <h4>Observaciones y detalle de la actividad: </h4></td>
        </tr>
        <tr>
            <td><textarea name="observations" id="" cols="140" disabled rows="10"> {{$form->observations}} </textarea></td>
        </tr>
    </table>

    <table>
        <thead style="width:1200px;">
            <tr>
                <th>Por parte del cliente</th>
                <th>Por parte de Professional Service</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><label>Nombre: </label><input type="text" class="field-custom" name="customer_sign_name" disabled value="{{$form->customer_sign_name}}"></td>
                <td><label>Nombre: </label><input type="text" class="field-custom" name="ps_sign_name" disabled value="{{$form->ps_sign_name}}"></td>
            </tr>
            <tr>
                <td><label>Cargo: </label><input type="text" class="field-custom" name="customer_sign_position" disabled value="{{$form->customer_sign_position}}"></td>
                <td><label>Cargo: </label>  <input type="text" class="field-custom" name="ps_sign_position" disabled value="{{$form->ps_sign_position}}"></td>
            </tr>
            <tr>
                <td><label>Firma: </label><input type="text" hidden name="customer_sign" value="customer_sign"></td>
                <td><label>Firma: </label><input type="text" hidden name="ps_sign" value="ps_sign"></td>
            </tr>
            <tr>
                <td><label>Fecha: </label><input type="text" class="field-custom" disabled value="{{$form->customer_date}}" name="customer_date"></td>
                <td><label>Fecha: </label><input type="text" class="field-custom" name="ps_date" disabled value="{{$form->ps_date}}"></td>
            </tr>
        </tbody>
    </table>
    <hr>
        <h4>Calificación del servicio </h4>
        <table>
                <tr>
                    @if($form->service_qualification == 'excelente')
                        <td> <span>Excelente</span> </td>
                    @endif
                    @if($form->service_qualification == 'bueno')
                        <td><span>Bueno</span></td>
                    @endif
                    @if($form->service_qualification == 'radio')
                        <td><span>Regular</span></td>
                    @endif
                    @if($form->service_qualification == 'deficiente')
                        <td><span>Deficiente</span></td>
                    @endif
                    @if($form->service_qualification == 'malo')
                        <td><span>Malo</span></td>
                    @endif
                </tr>
        </table>
        <hr>
        <h4>Comentarios al servicio: </h4>
        <table>
            <tr>
                <td><textarea name="service_comments" id="" cols="140" rows="10" disabled > {{$form->service_comments}}</textarea></td>
            </tr>
        </table>
</div>
