<?php
session_start();
require_once('../model/function.php');
$sql = 'UPDATE usuarios SET online = "0" WHERE idusuario ='.$_SESSION['idusuario'].'';
$result = db_query($sql);
session_destroy();
echo'<script> 
<!--
window.location.replace("/index.php"); 
-->
</script>';
 

  echo $sql ;
  

?>
