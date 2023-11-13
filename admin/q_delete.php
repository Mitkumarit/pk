<?php
		include "connection.php";
		$id = $_GET['i'];
		mysqli_query($con,"delete from question where id='$id'");
		header("location:q_view.php");
?>