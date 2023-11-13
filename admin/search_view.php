<?php session_start();
if(isset($_SESSION['aid']))
{

include "menu copy.php" ?>


<div class="container-fluid pt-4 px-4">
<div class="row">
     <div class="col-sm-12 col-xl-12">
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="bg-secondary rounded h-100 p-4">
                         

                            <div class="form-control" class="form-floating mb-3">
                            	<select for="floatingInput" name="event" class="form-control" id="floatingInput" required>
                                  <option >તમારો રજિસ્ટર્ડ પ્રોગ્રામ પસંદ કરો</option>
								  <option value="Agriculture Drone">Agriculture Drone</option>
								  <option value="દિવેલા વિશેની માહિતી">દિવેલા વિશેની માહિતી</option>
                                  <option value="Contract Farminng">Contract Farminng</option>
								  <option value="Organic Farming">Organic Farming</option>
								  <option value="Integrated farming System">Integrated farming System</option>
								  <option value="Bio Fual">Bio Fual</option>
								</select>
                            </div><br>


                    
                            <div class="form-floating mb-3">
                                <input type="submit" name="ins" value="Upload" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                            </div>
                            

                        </div>
                    </div>
                </form>
                
                <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-12" style="background-color: white;">

                    <?php
           
           include "connection.php";
               if(isset($_POST['ins']))
               {
                   include "connection.php";
                   
                   $event = $_POST['event'];

           $s = mysqli_query($con,"select * from register where event ='$event'");
           $var = mysqli_query($con,"select count(name) as cou FROM register WHERE event ='$event';");
       
           while($r1 = mysqli_fetch_array($var))
           {
           ?>
           <br>
           <th>
               <td><?php echo "<b><font color=\"red\">Total Number Of Farmer</font> </b>: "; ?></td>
           </th>
           <th>
               <td> <?php echo "<b><font color=\"blue\">"?><?php echo $r1['cou']; ?></font> </b>
              </td>
           </th>
           
           
       <?php
           }
       ?>

<table border=1 align="center" width=90% cellspacing="10" cellpadding="12">
        <tr></tr>
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
                if(isset($_POST['ins']))
                {
                    include "connection.php";
                    
                    $event = $_POST['event'];

			$s = mysqli_query($con,"select * from register where event ='$event'");
			
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
			}}
            
        }
		?>
        

	</table>
    
   <br>
</div>
</div>
<br><br><br><br><br><br>
</div>

<form action="training.php">
<div>
        <input style="background-color:red" type="submit" name="bkt" value="Back" placeholder="name@example.com">
</div>
</form>





<?php include "footer.php"; 
}
else
{
    header("location:index.php");
}
?>