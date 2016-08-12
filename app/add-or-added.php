<?php
	function message($id){
		require("connection.php");
		$query = "SELECT cart FROM items WHERE PID=".$id;
		$result=mysqli_query($con, $query);
		while($row = mysqli_fetch_array($result)){
			if($row['cart'] == 0){
				return "Add to cart";
			}else{
				return "Added!";
			}
		}
	}
?>