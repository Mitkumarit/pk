<?php session_start();
if(isset($_SESSION['aid']))
{
 include "menu.php"; ?>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-12" style="background-color: white;">

<table border=1 align="center" width=90% cellspacing="10" cellpadding="12">
		<tr>
			<th>Id</th>
			<th>Category</th>
			<th>City</th>
			<th>Hodo</th>
			<th>Name</th>
			<th>Phone No</th>
			<th>Delete</th>
			
		</tr>
		<?php 
			include "connection.php";
			$s = mysqli_query($con,"select * from salahkaro");


		while($r = mysqli_fetch_array($s))
		{
		?>
		<tr>
				<td><?php echo $r['id']; ?></td>
				<td><?php echo $r['category']; ?></td>
				<td><?php echo $r['city']; ?></td>
				<td><?php echo $r['hodo']; ?></td>
				<td><?php echo $r['name']; ?></td>
				<td><?php echo $r['phone']; ?></td>
				
				<td><a href="s_delete.php?i=<?php echo $r['id']; ?>">DELETE</a></td>
				
			
		</tr>
		<?php
			}
		?>

	</table>
</div>
</div>
</div>

<?php include "footer.php"; 
}
else
{
    header("location:index.php");
} 
?>



