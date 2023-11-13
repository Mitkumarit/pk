<?php session_start();
include "menu copy.php" ?>


<div class="container-fluid pt-4 px-4">
<div class="row">
     <div class="col-sm-12 col-xl-12">
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="bg-secondary rounded h-100 p-4">
                         <h4 class="mb-4">નોંધણી કરો</h4>

                         	<div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="name" required>
                                <label for="floatingInput">ખેડૂતનું નામ</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="village" required>
                                <label for="floatingInput">ખેડૂતનું ગામ</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="age" required>
                                <label for="floatingInput">ખેડૂતની ઉમર</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="mobile" required>
                                <label for="floatingInput">ખેડૂતોનો મોબાઇલ નંબર</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="land" required>
                                <label for="floatingInput">ખેડૂતોની અંદાજીત જમીન</label>
                            </div>

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
                <?php
                if(isset($_POST['ins']))
                {
                    include "connection.php";
                    $name = $_POST['name'];
                    $village = $_POST['village'];
                    $age = $_POST['age'];
                    $mobile = $_POST['mobile'];
                    $land = $_POST['land'];
                    $event = $_POST['event'];
                    mysqli_query($con,"insert into register(name,village,age, mobile, land, event) values('$name','$village','$age','$mobile','$land','$event')");
                    echo "<div class='bg-success ' style='color:white; padding:15px;'>તમારી નોધણી સફળતાપૂર્વક થઈ ગઈ છે. વર્કશોપ માટે ની વધારે ડિટેલ તેમજ જોઇન કરવા માટેની લિંક તમને તમારા મોબાઇલ નંબર પર મેસેજ દ્વારા મોકલવામાં આવશે</div>";
                }
                ?>

                        


</div>



<?php include "footer.php"; 
?>