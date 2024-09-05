<?php 
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $request = array(
        'message' => 'Hello World!'
        
    );
    echo json_encode($request);
}else{
    http_response_code(405);
    echo json_encode(array('message' => 'Method Not Allowed'));
}
?>
