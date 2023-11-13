<?php
		include "connection.php";
		$id = $_GET['i'];
		mysqli_query($con,"delete from contact where id='$id'");
		header("location:contact.php");
?>