<?php
	include("config.php");
	
	$hasil;
	
	$hewan = mysql_query("SELECT DESKRIPSI,FOTO FROM perawatan where ID=1");  
	while($h = mysql_fetch_array($hewan)){
		$data['deskripsi'] = $h['DESKRIPSI']; 
	    $data['foto'] = $h['FOTO'];
		$hasil[] = $data;
	} 
	

	header('content-type: application/json');
    echo json_encode($hasil);