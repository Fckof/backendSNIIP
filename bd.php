<?php 
	$connect=new mysqli('localhost','root','root','hex') or die("Не подключилось..");
	$result=$connect->query("SELECT * FROM hex_status");
	if (count($result)==0){
		echo "Нет записей";
	}
	$data=array();

	while ($row=$result->fetch_assoc()) {
		$data[]=$row;
	}
	echo json_encode($data);
 ?>