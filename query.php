<?php
function selectname(){
  $sql=mysql_query("SELECT name FROM settings");
  $result=mysql_fetch_array($sql);
  echo $result['name'];
}

?>
