<?php
		include "connection.php";
		$id = $_GET['id'];
		mysqli_query($con,"delete from trainings where id='$id'");
		header("location:t_view.php");
?>