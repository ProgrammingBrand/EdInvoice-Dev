<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'facturas'
) or die(mysqli_error($mysqli));

?>
