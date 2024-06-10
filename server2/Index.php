<?php

    // Este es un ejemplo simple de un servidor PHP


    // Obtener el método de la solicitud (GET, POST, etc.)

    $method = $_SERVER['REQUEST_METHOD'];


    // Obtener la ruta de la solicitud

    $path = $_SERVER['REQUEST_URI'];


    // Configurar el tipo de contenido de la respuesta como JSON

    header('Content-Type: application/json');


    // Crear un arreglo para la respuesta

    $response = array(

        'method' => $method,

        'path' => $path,

        'message' => '¡Hola desde el servidor PHP!'

    );


    // Enviar la respuesta como JSON

    echo json_encode($response);

?>