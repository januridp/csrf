<?php
require_once("config.php");
if(validation()==true)
{
	echo "Berhasil ".$_POST['nama'];
}else{
	echo "Gagal";
}
?>