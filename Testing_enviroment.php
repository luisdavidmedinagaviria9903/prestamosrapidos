<?php  

$datos = $_REQUEST;
/************************************************************************/
/*                          Section client                             */  
/**********************************************************************/
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
                'sexo' => utf8_encode($datos["Sexo"]),
                'celular' => utf8_encode($datos["Celular"]),
                'fechaNacimiento' => utf8_encode($datos["Fecha_de_Nacimiento"]),
                'ciudadId' => utf8_encode($datos["Ciudad"]),
                'edad' => utf8_encode($datos["Edad"]),
                'fechaExpedicionDocumento' => utf8_encode($datos["Fecha_de_expedición"]), //No se envió
                'estadoCivil' => utf8_encode($datos["Estado_Civil"]),
                'numeroPersonasDependientes' => utf8_encode($datos["Personas_a_cargo"]),

                /* Info Residencial */
                'dirreccion' => utf8_encode($datos["Direccion"]),
                'tipoVivienda' => utf8_encode($datos["Tipo_de_vivienda"]),
                'tiempoPermanenciaVivienda' => utf8_encode($datos["Tiempo_de_permanencia"]),

                /* Info Laboral */
                'tipoTrabajador' => utf8_encode($datos["Tipo_de_trabajador"]),
                'actividadLaboral' => utf8_encode($datos["Actividad_Laboral_Empleado"]),

                /* Info referencia */
                // Referencia Personal \\
                'nombrePer' => utf8_encode($datos["Nombre_ref__personal"]),//No se envió
                'apellidoPer' => utf8_encode($datos["Apellido_ref__personal"]),//No se envió
                'telefonoPer' => utf8_encode($datos["Telefono_ref__personal"]),//No se envió
                'ciudad' => utf8_encode($datos["Ciudad_ref__personal"]),//No se envió
                // Referencia Familiar \\
                'nombreFam' => utf8_encode($datos["Nombre_ref__familiar"]),//No se envió
                'apellidoFam' => utf8_encode($datos["Apellido_ref__familiar"]),//No se envió
                'telefono' => utf8_encode($datos["Telefono_ref__familiar"]),//no se envió
                'ciudad2' => utf8_encode($datos["Ciudad_ref__familiar"]),//No se envió

                /* Info Financiera */
                'entidadBancariaId' => utf8_encode($datos["Entidad_Bancaria"]),
                'tipoCuentaBancaria' => utf8_encode($datos["Tipo_de_cuenta"]),
                'numeroCuenta' => utf8_encode($datos["Numero_de_tu_cuenta"]),
                'ingresoMensual' => utf8_encode($datos["Total_ingresos_netos_mensuales"]),
                'egresoMensual' => utf8_encode($datos["Total_gastos_mensuales"]),

                /* Info Academica */
                'nivelEstudio' => utf8_encode($datos["Nivel_de_estudios"]),
                'terminado' => 1




            )
        ),
        'timeout' => 10
    )
));

$respuestaInfoCliente = file_get_contents($url, FALSE, $contextInfoCliente);
print_r($respuestaInfoCliente);

