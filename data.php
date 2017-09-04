<?php 

header("Content-Type:application/json");

$host="localhost";
$user="root";
$prod="";
$base="total";

$mysqli= new mysqli($host,$user,$prod,$base); 

   $query=sprintf("SELECT Population,csode,Name from country ORDER BY id ");

   $result=$mysqli->query($query);

   $data=array();

   foreach ($result as $row) {
   	
   	$data[]=$row;
   }

   $result->close();
   $mysqli->close();
   print json_encode($data);


 ?>