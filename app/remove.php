<?php 
	require_once("connection.php");
	if(isset($_GET['id']) && is_numeric($_GET['id'])){
		$id=$_GET["id"];
		$query = "UPDATE items SET cart=0 WHERE PID=".$id;
		$res=mysqli_query($con,$query);
		if($res){
			header("location:cart.php");
			exit;
		}else{
			echo "error while deleting records".mysqli_error($con);
		}
	}else{
		echo "Donot try this!";
	}
?>