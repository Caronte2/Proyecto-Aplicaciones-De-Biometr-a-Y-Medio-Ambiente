<?php

//---------------------------------------------------------------------------
// dispositivo:Text --> recogerMediciones --> ID: Real, temperatura: Real, C02: Real
//----------------------------------------------------------------------------

function recogerMediciones ($conn){
    $sql = "SELECT * FROM mediciones";
    $datosRecogidos = $conn -> query($sql);

    $mediciones = [];

    if ($datosRecogidos && $datosRecogidos->num_rows > 0) {
        while ($fila = $datosRecogidos->fetch_assoc()) {
            $mediciones[] = $fila;
        }
    }
    return $mediciones;
}

?>