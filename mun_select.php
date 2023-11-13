<?php
$input = $_GET['q'];

include "connection.php";
$s = mysqli_query($con,"select * from question where subject='$input'");
?>
<table border="3" align="center" width="50%" cellpadding="20" class="more_detail">
	<tr align="center">
		<th>વિષય/પ્રવૃત્તિ</th>
		<th>લિંક</th>
	</tr>
<?php
while($r = mysqli_fetch_array($s))
{
?>
	<tr align="center">
		<td><?php echo $r['title']; ?></td>
		<td><a href="<?php echo "admin/".$r['pdf']; ?>">જોવા માટે અહીં ક્લીક કરો</a></td>
	</tr>
<?php
}
?>
</table>
