<?php 

	$query= "delete from categories where id = ".$_GET['id'];
	$result=query($query);
	if ($result) {
		header("location:index.php?page=admin/catagory/index.php");
	}


 ?>