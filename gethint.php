<?php
$input = $_GET['q'];

include "connection.php";
$s = mysqli_query($con,"select * from question_category where main_option='$input'");
?>
<select name="sub" required id="suboption">
	<option> કોઈ એક વિકલ્પ પસંદ કરો  </option>
<?php 
while($r = mysqli_fetch_array($s))
{  
?>
	
	<option  value="<?php echo $r['sub_option']; ?>"> <?php echo $r['sub_option']; ?> </option>
<?php 
}
?>
</select>
