<?php
function conectarBD(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dbname";

  $con = mysqli_connect($servername,$username,$password,$dbname);
  if(!$con){
    die("Connection failed: ".mysqli_connect_error());
  }
  return $con;
}

function closeDb($mysql){
  mysql_close($mysql);
}

function getFruits(){
  $conn = conectarBD();
  $sql = "SELECT name, units, quantuty, price, country FROM fruits";
  $result = mysql_query($conn,$sql);
  closeDb();
  return $result;
}

function getFruitsByName($fruit_name){
  $conn = conectarBD();
  $sql = "SELECT name, units, quantuty, price, country FROM fruits WHERE name LIKE '%".$fruit_name."%' ";
  $result = mysql_query($conn,$sql);
  closeDb();
  return $result;
}

function getCheapestFruits($cheap_price){
  $conn = conectarBD();
  $sql = "ELECT name, units, quantuty, price, country FROM fruits WHERE price <= '".$cheap_price."'";
  $result = mysql_query($conn,$sql);
  closeDb();
  return $result
}
?>