<?php
$mysqli = new mysqli("localhost","eaglhwox_user",";e3k..6-#63_","eaglhwox_datas");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>