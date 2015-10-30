<?php
  $surname=$_POST['surname'];
  $name=$_POST['name'];
  $tel=$_POST['tel'];
  include "../config.php";
  $sql=mysql_query("SELECT * FROM users WHERE mobile='{$tel}'");
  if($sql){
    mysql_query("INSERT INTO users(login,password,name,s)");
  }
?>
