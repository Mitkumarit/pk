<?php
		include "connection.php";
        $s = mysqli_query($con,"select * from register");
		$r = mysqli_fetch_array($s);
		$id = $r['id'];
		mysqli_query($con,"delete from register where id='$id'");
		header("location:f_view.php");
?>
<?php 
			include "connection.php";
			
		