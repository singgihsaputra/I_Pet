<?php
	include("config.php");
	
	$hasil;
	
	$hewan = mysql_query("SELECT ID,NAMA FROM hewan");  
	while($h = mysql_fetch_array($hewan)){
		$data['id'] = $h['ID']; 
	    $data['nama'] = $h['NAMA'];
		$hasil[] = $data;
	} 
	

	header('content-type: application/json');
    echo json_encode($hasil);