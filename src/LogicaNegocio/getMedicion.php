<?php

//---------------------------------------------------------------------------
// dispositivo:Text --> recogerMediciones --> ID: Real, temperatura: Real, C02: Real
//----------------------------------------------------------------------------

function recogerMediciones ($conn){
    
    //Hago una sentencia sql
    $sql = "SELECT * FROM mediciones";

    //Ejcuta la sentencia y lo añado a una variable
    $datosRecogidos = $conn -> query($sql);

    //Declaro una array
    $mediciones = [];

    //Inserto los datos de la array para enseñarlos después
    if ($datosRecogidos && $datosRecogidos->num_rows > 0) {
        while ($fila = $datosRecogidos->fetch_assoc()) {
            $mediciones[] = $fila;
        }
    }

    //devuelvo la array que se mostrara en el html
    return $mediciones;
}

?>