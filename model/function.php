<?php
$con = mysqli_connect("localhost","cemdicom_siscem","2404@Cemdi2022","cemdicom_sis_cemdi");
mysqli_set_charset($con,'utf8'); 

function db_query($query) {
    
    $connection = mysqli_connect("localhost","cemdicom_siscem","2404@Cemdi2022","cemdicom_sis_cemdi");
    mysqli_set_charset($connection,'utf8'); 
    $result = mysqli_query($connection,$query);
    return $result;
}
 function insert($tblname,$form_data){
	
	$fields = array_keys($form_data);
	$sql="INSERT INTO ".$tblname." (".implode(',', $fields).")  VALUES('".implode("','", $form_data)."')";
	 echo $sql;
	return db_query($sql);

}
function delete($tblname,$field_id,$id){

	$sql = "delete from ".$tblname." where ".$field_id."=".$id."";
	return db_query($sql);
}
function edit($tblname,$form_data,$field_id,$id){
	$sql = "UPDATE ".$tblname." SET ";
	$data = array();

	foreach($form_data as $column=>$value){

		$data[] =$column."="."'".$value."'";

	}
	$sql .= implode(',',$data);
	$sql.=" where ".$field_id." = ".$id."";
	return db_query($sql); 
}
function select_id($tblname,$field_name,$field_id){
	$sql = "Select * from ".$tblname." where ".$field_name." = ".$field_id."";
	$db=db_query($sql);
	$GLOBALS['row'] = mysqli_fetch_object($db);

	return $sql;

}
function copiar($fuente, $destino)
{
    if(is_dir($fuente))
    {
        $dir=opendir($fuente);
        while($archivo=readdir($dir))
        {
            if($archivo!="." && $archivo!="..")
            {
                if(is_dir($fuente."/".$archivo))
                {
                    if(!is_dir($destino."/".$archivo))
                    {
                        mkdir($destino."/".$archivo);
                    }
                    copiar($fuente."/".$archivo, $destino."/".$archivo);
                }
                else
                {
                    copy($fuente."/".$archivo, $destino."/".$archivo);
                }
            }
        }
        closedir($dir);
    }
    else
    {
        copy($fuente, $destino);
    }
}


?>
