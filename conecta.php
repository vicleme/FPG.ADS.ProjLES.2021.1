<?php

$db = @mysqli_connect('localhost', 'id16538609_gocare', 'Querocafe$2021', 'id16538609_bancogocare');
if (!$db) {
 echo "Error: " . mysqli_connect_error();
 exit();
}

  mysqli_set_charset($db,"utf8");

?>