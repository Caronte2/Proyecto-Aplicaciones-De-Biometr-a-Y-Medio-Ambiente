# Proyecto-Aplicaciones-De-Biometr-a-Y-Medio-Ambiente
5º Proyecto del Grado en tecnologías interactivas.

En este proyecto se propone monitorizar el ambiente distribuida basada en crowsensing movil participativo. El crowsensing consiste en una técniva en la que un gran grupo de personas que tienen disposivos móviles capaces de detectar y computar, comparten datos colectivamente y extraen información para medir, mapear, analizar , estimar o inferir cualquier proceso de interés común.

La aplicación consta de tres componentes principales:

·Un Nodo sensor móvil Bluetooth LE:
    -Sensor electroquímico sensible a un único tipo de contaminante (para reducir el coste). Hemos escogido Ozono, por disponibilidad y por poder realizar una calibración

    -Front-end analógico para polarizar el sensor y amplificar y acondicionar su salida (configurable por software para adaptarse a cada tipo de sensor)

    -Convertidor A/D (puede estar integrado en el microcontrolador)

    -Batería, circuito cargador de batería, regulador de tensión y conector mini USB

    -Microcontrolador encargado de leer el sensor, aplicar las correcciones (offset, ganancia y dependencia con la temperatura y humedad), promediar y enviar periódicamente datos por Bluetooth LE (BLE) a un teléfono móvil

    -Una interfaz BLE con antena integrada

·Un app en un télefono móvil donde se muestra al usuario datos y mapas de contaminación, asi como noticias e información. Por otro lado el usuario envia regularmente medidas de geoposición del sensor a un servidor remoto. El usuario puede realizar una fotografía al skyline urbano.


·Una aplicación en servidor, un Pc ubicado en la Upv, que recibe datos de cientos o miles de sensore y aplica una cadena de procesado a los datos.

    -Reducción de variabilidad en medidas consecutivas de un mismo sensor y reducción de variabilidad combinando las medidas de sensores cercanos (Matlab)

    -Generación de un mapa con Matlab que podamos alentar a un software GIS (ArcGIS)

    -Generación mediante ArcGIS de mapas de contaminación aplicando técnicas de interpolación habitualmente empleadas en geoestadística para aplicaciones ambientales

    -Corrección de las lecturas de cada sensor por comparación con un estación de medida de la GVA cuando el usuario pasa junto a esta