<?php
		include "connection.php";
		$id = $_GET['i'];
		mysqli_query($con,"delete from salahkaro where id='$id'");
		header("location:s_view.php");
?>