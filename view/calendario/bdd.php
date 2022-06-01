<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=cemdicom_sis_cemdi;charset=utf8','cemdicom_siscem','2404@Cemdi2022');
}
catch(Exception $e)
{
        die('Error  : '.$e->getMessage());
}
