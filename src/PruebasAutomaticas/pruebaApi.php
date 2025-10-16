<?php
    //----------------------------------------------------------
    //Prueba 1.
    //Comprobar que los datos se insertar correctamente 
    //a traves de la api, propocinandole datos predefinidos
    //---------------------------------------------------------

    try{
        $url = "http://192.168.1.137/Proyecto-Aplicaciones-De-Biometr-a-Y-Medio-Ambiente/src/Api/postGuardarMediciones.php";
        $data = [
            'CO2' => 44.0,
            'Temperatura' => 33.0
        ];
    
        // Inicializa cURL
        $ch = curl_init($url);
        // Configura opciones
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        // Ejecuta la petición
        $response = curl_exec($ch);
        // Muestra la respuesta del servidor
        echo "Respuesta del servidor:\n";
        echo $response;
    }catch (Exception $error){
        echo "❌ Error en la prueba: " . $error->getMessage() . "\n";
    }
?>