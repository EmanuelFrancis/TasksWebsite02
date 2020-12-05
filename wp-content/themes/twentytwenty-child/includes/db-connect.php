<?php

$dbServername = "localhost";
$dbUsername = "emanfran_admin";
$dbPassword = "G~l=]+o@=Y}^";
$dbName = "emanfran_emanuelf_Tasks";

$connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$connect){
  echo 'Not Connected To Server';
}else {
  echo "Connected";
  echo "<br>";
  echo "<br>";
}
