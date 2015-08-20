var Script = function () {

    $().ready(function() {

        $("#nameForm").validate({
            rules: {
                name: 'required'
            },
            messages: {
                name: "Este campo es requerido"
            }
        });

        $("#clientForm").validate({
            rules: {
                firstname: 'required',
                lastname: 'required',
                passport: {
                    required: true,
                    minlength: 5,
                    maxlength: 5
                },
                quantity_car_used: {
                    required: true,
                    digits: true
                },
                rent_total_amount: {
                    required: true,
                    number: true
                }
            },
            messages: {
                firstname: "Este campo es requerido",
                lastname: "Este campo es requerido",
                passport: "Este campo es requerido y debe tener 5 caracteres",
                quantity_car_used: "Este campo es requerido y solo debe contener números",
                rent_total_amount: "Este campo es requerido y solo debe contener números decimales"
            }
        });

        $("#carForm").validate({
            rules: {
                sheet_number: {
                    required: true
                },
                quantity_km: {
                    required: true,
                    digits: true
                },
                price_by_hour: {
                    required: true,
                    number: true
                }
            },
            messages: {
                sheet_number: "Este campo es requerido y su formato es: 4785DTD",
                quantity_km: "Este campo es requerido y solo debe contener números",
                price_by_hour: "Este campo es requerido y solo debe contener números decimales"
            }
        });
    });
}();