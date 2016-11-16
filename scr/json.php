<?php
$dbz = new PDO('mysql:host=localhost;dbname=bkd_mcd;charset=utf8mb4', 'root', '');
$re = $dbz->prepare('SELECT nama,pt,ilmu,nira FROM nira');
	$re->execute();
	echo json_encode($re->fetchAll(PDO::FETCH_ASSOC));