<?php
$temperaturas = array("Enero" => 12, "Febrero" => 13, "Marzo" => 17, "Abril" => 19,
"Mayo" => 25, "Junio" => 31, "Julio" => 34, "Agosto" => 34, "Septiembre" => 28, "Octubre"
=> 23, "Noviembre" => 16, "Diciembre" => 13);


?><h3>Gráficos Temperaturas Mensuales</h3><?php
//recorrer un array

foreach ($temperaturas as $mes => $temp) {
    echo "$mes.........";

    // Imprimir una imagen por cada grado de temperatura
    for ($i = 0; $i < $temp; $i++) {
        echo "<img src='imagenes/barraTemp.png' style='border: 1px solid black' />";
    }

    echo "$temp".'ºC'."<br>";
}
?>

<h3>Gráficos Temperaturas Mensuales</h3>
<?php
$temperaturass = array("Enero" => 12.5, "Febrero" => 13.9,
"Marzo" => 14.1, "Abril" => 19, "Mayo" => 25, "Junio" => 31,
"Julio" => 34.4, "Agosto" => 34.45, "Septiembre" => 28,
"Octubre" => 23, "Noviembre" => 16, "Diciembre" => 13.346);

//var_dump($temperaturas);

foreach ($temperaturass as $mess => $tempp) {
    echo "$mess.........";

    // Imprimir una imagen por cada grado de temperatura
    for ($i = 0; $i < $tempp; $i++) {
        echo "<img src='imagenes/barraTemp.png' style='border: 1px solid black' />";
    }
    // Convertir el número a una cadena
    $numeroComoCadena = strval($tempp);


    // Verificar si la cadena contiene un punto decimal
    if (strpos($numeroComoCadena, '.') !== false) {

        echo "<img src='imagenes/decimoBarraTemp.jpg' style='border: 1px solid black' />";

    } 

    echo "$tempp".'ºC'."<br>";
}



?>
