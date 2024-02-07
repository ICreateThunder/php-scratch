<?php

$data = ['foo' => 'bar'];
header('Content-Type: application/json'); 
echo json_encode($data);

?>