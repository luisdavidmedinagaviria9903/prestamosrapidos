<?php


// file_put_contents('test.txt', file_get_contents('php://input') );

// file_put_contents('test.txt', json_encode($_REQUEST) );
// $data=error_log(json_encode($_REQUEST), 0);


// $url = 'http://localhost:8010/rapicredit/servicios/registroSolicitud';

// $context = stream_context_create(array(
//     'http' => array(
//         'method' => 'POST',
//         'header' => 'Content-type: application/x-www-form-urlencoded',
//         'content' => http_build_query(
//             array(
//                 'auth' => json_encode($_REQUEST),
                
//             )
//         ),
//         'timeout' => 60
//     )
// ));

// $resp = file_get_contents($url, FALSE, $context);
// print_r($resp); 
 

/* ================================================= */


// $data = array("name" => "Hagrid", "age" => "36");  
// error_log(json_encode($_REQUEST), 0);
// //$data = $_REQUEST;                                                                
// //$data_string = json_encode($data);                                                                                   
                                                                                                                     
// $ch = curl_init('http://localhost:8010/rapicredit/servicios/registroSolicitud');                                                                      
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
//     'Content-Type: application/json/x-www-form-urlencoded',                                                                                
//     'Content-Length: ' . strlen($data_string))                                                                       
// );                                                                                                                   
                                                                                                                     
// $result = curl_exec($ch);


// $data= json_decode($_REQUEST);
// $datos = (json_decode($_REQUEST);



//  $monto = $datos["Cantidad"];
//  $dias = $datos["Dias"];
//  $cedula = $datos["Cedula"];

// $opts = array('http' =>
//     array(
//         'method'  => 'POST',
//         'header'  => 'Content-type: application/json/x-www-form-urlencoded',
//         'content' => json_decode($_REQUEST)
//     )
// );

// $context = stream_context_create($opts);

// $result = file_get_contents('http://localhost:8010/rapicredit/servicios/registroSolicitud', false, $context);

// $url = 'http://localhost:8010/rapicredit/servicios/registroSolicitud/';
// // $dataJson = (json_encode($_REQUEST));
// // $datos = json_decode($dataJson, true);

// $datos = $_REQUEST;

// $context = stream_context_create(array(
//     'http' => array(
//         'method' => 'POST',
//         'header' => 'Content-type: application/x-www-form-urlencoded',
//         'content' => http_build_query(
//             array(
//                 'documento' => $datos["Cedula"],
//                 'tipoProducto' => 1,
//                 'monto' => $datos["Cantidad"],
//                 'plazo' => $datos["Dias"]
                
                
//             )
//         ),
//         'timeout' => 10
//     )
// ));

// $resp = file_get_contents($url, FALSE, $context);
// print_r($resp);







// 'Cedula' => utf8_encode($_REQUEST['Cedula']),
// 'Monto' => utf8_encode($_REQUEST['Cantidad']),
// 'dias' => utf8_encode($_REQUEST['Dias'])





























// var_dump(
//  $_REQUEST,
//  json_decode($_REQUEST, JSON_NUMERIC_CHECK)
// );

// //Simulador
// $cantidad=$_REQUEST["Cantidad"];
// $dias = $_REQUEST["Días"];
// $totalApagar = $_REQUEST["Total_a_Pagar"];
// $pPlataforma = $_REQUEST["pPlataforma"];
// $pIntereses = $_REQUEST["pIntereses"];
// $pAval1 = $_REQUEST["pAval1"];
// $pAval2 = $_REQUEST["pAval2"];
// $Aval = $_REQUEST["Aval"];
// $Plataforma = $_REQUEST["Plataforma"];
// $Intereses = $_REQUEST["Intereses"];
// $IVA = $_REQUEST["IVA"];

//Simulador
//echo $_REQUEST['Cantidad'];
// echo $dias = $_REQUEST["Días"];
// echo $totalApagar = $_REQUEST["Total_a_Pagar"];
// echo $pPlataforma = $_REQUEST["pPlataforma"];
// echo $pIntereses = $_REQUEST["pIntereses"];
// echo $pAval1 = $_REQUEST["pAval1"];
// echo $pAval2 = $_REQUEST["pAval2"];
// echo $Aval = $_REQUEST["Aval"];
// echo $Plataforma = $_REQUEST["Plataforma"];
// echo $Intereses = $_REQUEST["Intereses"];
// echo $IVA = $_REQUEST["IVA"];



// //Infor Basica
// $Email = $_REQUEST["Email"];
// $Nombres = $_REQUEST["Nombres"];
// $Apellidos = $_REQUEST["Apellidos"];
// $Cédula = $_REQUEST["Cédula"];
// $Estado_Civil = $_REQUEST["Estado_Civil"];
// $Fecha_de_expedición = $_REQUEST["Fecha_de_expedición"];
// $Celular = $_REQUEST["Celular"];
// $Ciudad = $_REQUEST["Ciudad"];
// $Personas_a_cargo = $_REQUEST["Personas_a_cargo"];
// $Fecha_de_Nacimiento = $_REQUEST["Fecha_de_Nacimiento"];
// $Nivel_de_estudios = $_REQUEST["Nivel_de_estudios"];
// $Sexo = $_REQUEST["Sexo"];

// //Info residencial
// $Dirección =$_REQUEST["Dirección"];
// $Tipo_de_vivienda = $_REQUEST["Tipo_de_vivienda"];
// $Tiempo_de_permanencia = $_REQUEST["Tiempo_de_permanencia"];


// //Info Laboral
// $Tipo_de_trabajador = $_REQUEST["Tipo_de_trabajador"];
// $Actividad_Laboral_Empleado = $_REQUEST["Actividad_Laboral_Empleado"];
// $Actividad_Laboral_Independiente = $_REQUEST["Actividad_Laboral_Independiente"];

// //Info financiera
// $Entidad_Bancaria = $_REQUEST["Entidad_Bancaria"];
// $Tipo_de_cuenta = $_REQUEST["Tipo_de_cuenta"];
// $Número_de_tu_cuenta = $_REQUEST["Número_de_tu_cuenta"];
// $Total_ingresos_netos_mensuales = $_REQUEST["Total_ingresos_netos_mensuales"];
// $Total_gastos_mensuales = $_REQUEST["Total_gastos_mensuales"];

// //Info referencia
// $Nombre_ref_personal = $_REQUEST["Nombre_ref__personal"];
// $Apellido_ref_personal = $_REQUEST["Apellido_ref__personal"];
// $Ciudad_ref_personal = $_REQUEST ["Ciudad_ref__personal"];
// $Teléfono_ref_personal = $_REQUEST ["Teléfono_ref__personal"];


// $Nombre_ref__familiar = $_REQUEST ["Nombre_ref__familiar"];
// $Apellido_ref__familiar = $_REQUEST ["Apellido_ref__familiar"];
// $Ciudad_ref__familiar = $_REQUEST ["Ciudad_ref__familiar"];
// $Telefono_ref__familiar = $_REQUEST ["TeléfonoTeléfono_ref__familiar"];


// $En_que_utilizares_el_prestamo = $_REQUEST ["¿En qué utilizarás el préstamo?"];
// $Quién_te_refirió = $_REQUEST ["¿Quién te refirió?"];
// $centrales_de_riesgo = $_REQUEST ["ACEPTO_SER_CONSULTADO_EN_CENTRALES_DE_RIESGO_Y_LOS_T\u00c9RMINOS_Y_CONDICIONES"];






// //Infor Basica
// echo $Email = $_REQUEST["Email"];
// echo $Nombres = $_REQUEST["Nombres"];
// echo $Apellidos = $_REQUEST["Apellidos"];
// echo $Cédula = $_REQUEST["Cédula"];
// echo $Estado_Civil = $_REQUEST["Estado_Civil"];
// echo $Fecha_de_expedición = $_REQUEST["Fecha_de_expedición"];
// echo $Celular = $_REQUEST["Celular"];
// echo $Ciudad = $_REQUEST["Ciudad"];
// echo $Personas_a_cargo = $_REQUEST["Personas_a_cargo"];
// echo $Fecha_de_Nacimiento = $_REQUEST["Fecha_de_Nacimiento"];
// echo $Nivel_de_estudios = $_REQUEST["Nivel_de_estudios"];
// echo $Sexo = $_REQUEST["Sexo"];
 
//  //Info residencial
// echo $Dirección =$_REQUEST["Dirección"];
// echo $Tipo_de_vivienda = $_REQUEST["Tipo_de_vivienda"];
// echo $Tiempo_de_permanencia = $_REQUEST["Tiempo_de_permanencia"];

//  //Info Laboral
// echo $Tipo_de_trabajador = $_REQUEST["Tipo_de_trabajador"];
// echo $Actividad_Laboral_Empleado = $_REQUEST["Actividad_Laboral_Empleado"];
// echo $Actividad_Laboral_Independiente = $_REQUEST["Actividad_Laboral_Independiente"];

//  //Info financiera
// echo $Entidad_Bancaria = $_REQUEST["Entidad_Bancaria"];
// echo $Tipo_de_cuenta = $_REQUEST["Tipo_de_cuenta"];
// echo $Número_de_tu_cuenta = $_REQUEST["Número_de_tu_cuenta"];
// echo $Total_ingresos_netos_mensuales = $_REQUEST["Total_ingresos_netos_mensuales"];
// echo $Total_gastos_mensuales = $_REQUEST["Total_gastos_mensuales"];
 
//  //Info referencia
// echo $Nombre_ref_personal = $_REQUEST["Nombre_ref__personal"];
// echo $Apellido_ref_personal = $_REQUEST["Apellido_ref__personal"];
// echo $Ciudad_ref_personal = $_REQUEST ["Ciudad_ref__personal"];
// echo $Teléfono_ref_personal = $_REQUEST ["Teléfono_ref__personal"];

// echo $Nombre_ref__familiar = $_REQUEST ["Nombre_ref__familiar"];
// echo $Apellido_ref__familiar = $_REQUEST ["Apellido_ref__familiar"];
// echo $Ciudad_ref__familiar = $_REQUEST ["Ciudad_ref__familiar"];
// echo $Teléfono_ref__familiar = $_REQUEST ["Teléfono_ref__familiar"];
 
// echo $En_qué_utilizarás_el_préstamo = $_REQUEST["¿En qué utilizarás el préstamo?"];
// echo $Quién_te_refirió = $_REQUEST ["¿Quién te refirió?"];
// echo $centrales_de_riesgo = $_REQUEST ["ACEPTO_SER_CONSULTADO_EN_CENTRALES_DE_RIESGO_Y_LOS_T\u00c9RMINOS_Y_CONDICIONES"];









// echo "<h1>Prueba formcraft </h1>";
// $json = file_get_contents("test.txt");


// $array = json_decode($json, true);


// $simularCredito = " |cantidad: ".$array['Cantidad']."| Dias: ".$array['Días']." |    ";

// echo $simularCredito;



// echo "<br><br><br><br>";
// var_dump($array);


?>