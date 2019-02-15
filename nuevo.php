<?php
			//Obtenemos el JSON desde localbitcoins
			$data = file_get_contents("https://localbitcoins.com//bitcoinaverage/ticker-all-currencies/");
 
			//Decodificamos para extraer el array
			$decode = json_decode($data, true);
 
                        /* Cuando paso var_dump a $decode, me arroja un array de longitud 72
                       Esta longitud representa 72 objetos y cada objeto contiene a su vez un array anidado, 
                       los objetos contienen posición=>valor, donde lo que quería era tomar sólo su valor */
 
			//Este es un objeto, el Caso del Bolívar Fuerte Venezolano
			$vef = $decode{'VEF'};
 
			// Un Título para Bolívar Fuerte
			echo "<h2 id='vef'><strong>Bolívar Fuerte Venezolano (VEF)</strong></h2>";
 
			// Creamos la tabla para vaciar los datos VEF
			echo "<table>";
				echo "<tbody>";
					echo "<tr>";
						// Promedio VEF 1 Hora
						$prom_1 = $vef['avg_1h'];
						// Configuramos el formato numero
						$vef_num1 = number_format($prom_1, 2, ',', '.');
                                                //Introducimos los valores en la celdas, idem para el resto
						echo "<td><strong>Prom 1H:</strong></td>";
						echo "<td>$vef_num1</td>";
					echo "</tr>";
					echo "<tr>";
						// Promedio VEF 6 Horas
						$prom_6 = $vef['avg_6h'];
						// Configuramos el formato numero
						$vef_num6 = number_format($prom_6, 2, ',', '.');
						echo "<td><strong>Prom 6H:</strong></td>";
						echo "<td>$vef_num6</td>";
					echo "</tr>";
					echo "<tr>";
						// Promedio VEF 12 Horas
						$prom_12 = $vef['avg_12h'];
						// Configuramos el formato numero
						$vef_num12 = number_format($prom_12, 2, ',', '.');
						echo "<td><strong>Prom 12H:</strong></td>";
						echo "<td>$vef_num12</td>";
					echo "</tr>";
					echo "<tr>";
						// Promedio VEF 24 Horas
						$prom_24 = $vef['avg_24h'];
						// Configuramos el formato numero
						$vef_num24 = number_format($prom_24, 2, ',', '.');
						echo "<td><strong>Prom 24H:</strong></td>";
						echo "<td>$vef_num24</td>";
					echo "</tr>";
					echo "<tr>";
						// Volumen en Bitcoin
						$prom_btc = $vef['volume_btc'];
						// Configuramos el formato numero
						$vef_btcv = number_format($prom_btc, 8, ',', '.');
						echo "<td><strong>Vol en BTC:</strong></td>";
						echo "<td>$vef_btcv</td>";
					echo "</tr>";
				echo "</tbody>";
			echo "</table>";