<?php
require_once 'connection.php';

$sql = "SELECT * FROM phonebook";
$query = mysqli_query($db, $sql);

$result = mysqli_fetch_all($query,MYSQLI_ASSOC);

if($query){
  echo json_encode($result);
}else {
    http_response_code(404);
}
