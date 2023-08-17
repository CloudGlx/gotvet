<?php

function sendPayloadToEndpoint($url, $data) {
    $jsonPayload = json_encode($data);

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonPayload);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($jsonPayload)
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);

    if ($response === false) {
        // Request failed
        $error = curl_error($curl);
        curl_close($curl);
        return "Error: " . $error;
    } else {
        // Request successful
        curl_close($curl);
        return $response;
    }
}

