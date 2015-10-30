<?php
$server="localhost";
$user="root";
$pass="";
$dbname="taxi";
if(!mysql_connect($server,$user,$pass)){
  //404
}else{
  mysql_select_db($dbname) or die(mysql_error());
  mysql_query("set names utf8");
  include "query.php";
}

 ?>
