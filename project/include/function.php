<?php 
	include 'conn.php';

function fetch_all($table){
	global $conn;
	$query="select *from ".$table;
	$result=mysqli_query($conn,$query);
	if (!$result) {
		die(mysqli_error($conn));
	}
	return $result;
}

function fetch_children($table,$sub_menu_id){
	global $conn;
	$query="select *from ".$table." where id=".$sub_menu_id;
	$result_submenu=mysqli_query($conn,$query);
	$sub_menu=mysqli_fetch_assoc($result_submenu);
	return $sub_menu;
}

function query($query){
	global $conn;
	$result=mysqli_query($conn,$query);
	return $result;
}

function redirect($location){
	header("location: ".$location);
}

 ?>