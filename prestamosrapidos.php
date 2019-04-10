<?php  

$datos = $_REQUEST;

$url = 'http://localhost:8010/rapicredit/servicios/registroCliente/';

 
$contextInfoCliente = stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query(
            array(

                /* Info Basica */
                'email' => utf8_encode($datos["Email"]),
                'documento' => utf8_encode($datos["Cedula"]),
                'nombre1' => utf8_encode($datos["Nombres"]),
                'apellido1' => utf8_encode($datos["Apellidos"]),
                'sexo' => 1,
                'celular' => utf8_encode($datos["Celular"]),
                'fechaNacimiento' => '1999-03-12',
                'ciudad' => 1,
                'edad' => 18,
                'fechaExpedicion' => '2017-03-30', //No se envió
                'estadoCivil' => 1,
                'numeroPersonasDependientes' => utf8_encode($datos["Personas_a_cargo"]),

                /* Info Residencial */
                'dirreccion' => utf8_encode($datos["Direccion"]),
                'tipoVivienda' => 2,
                'tiempoPermanenciaVivienda' => 2,

                /* Info Laboral */
                'tipoTrabajador' => 2,
                'actividadLaboral' => 16,

                /* Info referencia */
                // Referencia Personal \\
                'nombresRP' => utf8_encode($datos["Nombre_ref__personal"]),//No se envió
                'apellidoRP' => utf8_encode($datos["Apellido_ref__personal"]),//No se envió
                'telefonoRP' => utf8_encode($datos["Telefono_ref__personal"]),//No se envió
                'ciudadRP' => 1,//No se envió
                // Referencia Familiar \\
                'nombresRF' => utf8_encode($datos["Nombre_ref__familiar"]),//No se envió
                'apellidoRF' => utf8_encode($datos["Apellido_ref__familiar"]),//No se envió
                'telefonoRF' => utf8_encode($datos["Telefono_ref__familiar"]),//no se envió
                'ciudadRF' => 1,//No se envió

                /* Info Financiera */
                'banco' => 2,
                'tipoCuentaBancaria' => 2,
                'numeroCuenta' => utf8_encode($datos["Numero_de_tu_cuenta"]),
                'ingresoMensual' => utf8_encode($datos["Total_ingresos_netos_mensuales"]),
                'egresoMensual' => utf8_encode($datos["Total_gastos_mensuales"]),

                /* Info Academica */
                'nivelEstudio' => 5,
                'terminado' => 1,

            




            )
        ),
        'timeout' => 10
    )
));

$respuestaInfoCliente = file_get_contents($url, FALSE, $contextInfoCliente);
print_r($respuestaInfoCliente);






















