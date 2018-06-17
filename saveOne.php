<?php

require_once 'connection.php';

$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$tel_num = $_POST['telephoneNumber'];

$sql = "INSERT INTO phonebook VALUE(NULL, '$first_name', '$last_name', '$tel_num') ";
$query = mysqli_query($db,$sql);

if ($query) {
  http_response_code(200);
}else {
  http_response_code(404);
}
