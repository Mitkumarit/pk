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
			<th>Name</th>
			<th>Village</th>
			<th>Age</th>
			<th>Mobile</th>
			<th>Land</th>
            <th>Event</th>
			<th>Delete</th>
			
		</tr>
		<?php
           
			include "connection.php";
        
            $event=$_GET[event];
			$s = mysqli_query($con,"select * from register where event='$event'");
            
		while($r = mysqli_fetch_array($s))
		{
		?>
		<tr>
                <td><?php echo $r['id']; ?></td>
				<td><?php echo $r['name']; ?></td>
				<td><?php echo $r['village']; ?></td>
				<td><?php echo $r['age']; ?></td>
				<td><?php echo $r['mobile']; ?></td>
                <td><?php echo $r['land']; ?></td>
                <td><?php echo $r['event']; ?></td>
				<td><a href="f_delete.php?i=<?php echo $r['mobile']; ?>">DELETE</a></td>
				
			
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



