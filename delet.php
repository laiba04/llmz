<?php

	include('connection.php');
		$row_id=$_GET['id'];
		$delete_query="DELETE FROM product where id =".$row_id."";

	if($con->query($delete_query))
	{
		header('Location: detail.php?message="deleted sucessfully"');
	}
	else
	{
		header('Location: detail.php?message="something went wrong!"');
	}
?>