<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=cemdicom_sis_cemdi;charset=utf8','root','');
}
catch(Exception $e)
{
        die('Error  : '.$e->getMessage());
}
