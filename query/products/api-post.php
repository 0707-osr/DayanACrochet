<?php

class Response{
    public $Status = 200;
    public $Message = "ok";
    public $Data;
    public function __construct($status,$message,$data = null)
    {
        $this->Status = $status;
        $this->Message = $message;
        $this->Data = $data;
    }
}

// include('connection.php');
header("content-type: application/json; charset=utf-8");
if($_SERVER['REQUEST_METHOD']!='POST'){
    print_r(json_encode(new Response(404,"not found")));
    http_response_code(404);
    return;
}

$body= file_get_contents("php://input");
$dataJson=json_decode($body,true);
print_r(json_encode(new Response(201,"ok",$dataJson)));
http_response_code(201);

// echo count($dataJson);
// echo $dataJson;

// for($i=0;$i<count($dataJson);$i++){
//     $stmt="INSERT INTO pedido_guardado VALUES(0,5,".$dataJson[$i]['id'].",now())";
//     $query = mysqli_query($conection, $stmt) or die ("errror datos");
// }