<?php

require_once 'connection.php';

$id = $_POST['id'];

$sql = "DELETE FROM phonebook WHERE id=$id";
$query = mysqli_query($db,$sql);

if ($query) {
  http_response_code(202);
}else{
  http_response_code(404);
}
