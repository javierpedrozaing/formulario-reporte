$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {

        $('.new-sign').hide();
        // sign field
        var sig = $('#sign-customer').signature({ syncField: '#signatureJSONCUSTOMER', syncFormat: 'PNG' });
        //$('#sign-customer').signature('option', 'syncFormat', syncFormat);
        $('#disable').click(function() {
            var disable = $(this).text() === 'Disable';
            $(this).text(disable ? 'Enable' : 'Disable');
            sig.signature(disable ? 'disable' : 'enable');
        });
        $('#clear').click(function() {
            sig.signature('clear');
        });
        $('#json').click(function() {
            alert(sig.signature('toJSON'));
        });
        $('#saveSignature').click(function() {
            alert(sig.signature('toSVG'));
        });

        var sigps = $('#sign-ps').signature({ syncField: '#signatureJSON', syncFormat: 'PNG' });
        $('#disable').click(function() {
            var disable = $(this).text() === 'Disable';
            $(this).text(disable ? 'Enable' : 'Disable');
            sigps.signature(disable ? 'disable' : 'enable');
        });
        // sign field

        $("#saveForm").click(function(e) {
            e.preventDefault();
            //$('#toimagen').attr('src', $('#signatureJSON').val());

            console.log("signature json customer => ", $('#signatureJSONCUSTOMER').val());
            var data = $('form').serializeArray();
            var ps_sign = $('#signatureJSON').val();
            var customer_sign = $('#signatureJSONCUSTOMER').val();
            data[data.length] = { name: "ps_sign", value: ps_sign };
            data[data.length] = { name: "customer_sign", value: customer_sign };
            console.log("data final => ", data);
            $.ajax({
                    method: "POST",
                    url: "save",
                    data: data

                })
                .done(function(msg) {
                    if (msg['code'] == 200) {
                        console.log("data saved =>", msg['status']);
                        swal("Excelente!", msg['status'], "success");
                    } else {
                        swal("Ohh!", msg['status'], "error");
                    }

                })
                .fail(function() {
                    swal("Error!", "Todos los campos son obligatorios!", "error");
                });

        });


        $('#updateForm').click(function(e) {
            e.preventDefault();
            var data = $('form').serializeArray();
            var customer_sign = $('#signatureJSONCUSTOMER').val();
            data[data.length] = { name: "customer_sign", value: customer_sign };

            console.log("data final => ", data);
            $.ajax({
                    method: 'POST',
                    url: "/update",
                    data: data
                }).done(function(res) {
                    if (res['code'] === 200) {
                        console.log("data updated =>", res['status']);
                        swal("Excelente!", res['status'], "success");
                    }
                })
                .fail(function() {
                    swal("Error!", "No se pudo acutalizar los datos", "error");
                });

        });


        $("#edit-sign").click(function(e) {
            e.preventDefault();
            $(".new-sign").show();
            $(".new-sign").removeAttr('hidden');
            $(".new-sign input").attr('name', 'customer_sign');
            var sign_edit = $('#sign-customer-edit').signature({ syncField: '#signatureJSONCUSTOMER', syncFormat: 'PNG' });
            $(".old-sign").hide();
            $(this).hide();
        });

        function calculateTime() {
            //get values
            let date = new Date($('.date_activity').val()).toLocaleDateString();
            let valuestart = $(".initial_hour").val();
            let valuestop = $(".final_hour").val();

            var timeStart = new Date(date + " " + valuestart);
            var timeEnd = new Date(date + " " + valuestop);

            let hourDiff = diff_hours(timeEnd, timeStart);

            $(".total_time").val(hourDiff);

        }

        function diff_hours(dt2, dt1) {
            let diffMs = (dt2 - dt1); //milisegundos            
            let diffHrs = Math.floor((diffMs % 86400000) / 3600000); // hours
            let diffMins = Math.round(((diffMs % 86400000) % 3600000) / 60000);

            return diffHrs + " Horas y " + diffMins + " Minutos"

        }
        $("input[type='time']").change(function() {
            calculateTime();
        });
    });


});