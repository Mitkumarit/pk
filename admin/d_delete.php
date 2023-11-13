<?php
		include "connection.php";
		$id = $_GET['i'];
		mysqli_query($con,"delete from dava where id='$id'");
		header("location:d_view.php");
?>