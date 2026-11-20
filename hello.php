<?php
// Hello.php - Returns data as JSON, not HTML

header('Content-Type: application/json; charset=utf-8');

$rresponse = [
    "message" => "Hello, from the servers!",
    'student' => 'John clark M. joven',
    'course' => 'IPT 2',
    'time' => date('Y-m-d H:i:s')
];


    // Return the response as JSON
    echo json_encode($rresponse, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    ?>