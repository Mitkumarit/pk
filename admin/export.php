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
                                  <option >પ્રોગ્રામ પસંદ કરો</option>
								  <option value="Agriculture Drone">Agriculture Drone</option>
								  <option value="દિવેલા વિશેની માહિતી">દિવેલા વિશેની માહિતી</option>
								  <option value="Contract Farminng">Contract Farminng</option>
								  <option value="Organic Farming">Organic Farming</option>
								  <option value="Integrated farming System">Integrated farming System</option>
								  <option value="Bio Fual">Bio Fual</option>
								</select>
                            </div><br>
                            <div class="form-floating mb-3">
                                <input type="submit" name="ins" value="Export File" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                            </div>
							<div >
                                <input style="background-color:red" type="submit" name="bk" value="Back to page" 
                                    placeholder="name@example.com">
                            </div>
                        </div>
                    </div>
                </form>
</div></div></div>
<?php
include "connection.php";
if(isset($_POST['ins']))
{
    include "connection.php";
                   
    $event = $_POST['event'];
	$sql="select * from register where event ='$event'";
	$res=mysqli_query($con,$sql);
	$html='<table><tr><td>Mobile</td></tr>';
	while($row=mysqli_fetch_assoc($res)){
		$html.='<tr><td>'.$row['mobile'].'</td></tr>';
	}
	$html.='</table>';
	header('Content-Type:application/xls');
	header('Content-Disposition:attachment;filename=list.xls');
	echo $html;
}
elseif(isset($_POST['bk']))
{
	header("location:training.php");
}
?>

<?php include "footer.php"; 
}
else
{
    header("location:index.php");
}
?>