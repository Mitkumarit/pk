<?php
		include "connection.php";
		$id = $_GET['i'];
		mysqli_query($con,"delete from khatar where id='$id'");
		header("location:k_view.php");
?>