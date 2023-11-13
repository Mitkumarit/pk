<?php  session_start();
if(isset($_SESSION['aid']))
{ 
include "menu.php"; ?>



            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <div class="col-sm-12 col-xl-12">
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Salahkaro <a href="s_view.php" class="d-flex flex-row-reverse"> View </a> </h6>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="cate" required>
                                    <option value="જીલ્લા ખેતીવાડી અધિકારી">  જીલ્લા ખેતીવાડી અધિકારી </option>
                                    <option value="નાયબ નિયામક (વિસ્તરણ)">  નાયબ નિયામક (વિસ્તરણ)</option>
                                    <option value="નાયબ નિયામક (તાલિમ)">  નાયબ નિયામક (તાલિમ)</option>
                                    <option value="જીલ્લા આત્મા ઓફિસર">   જીલ્લા આત્મા ઓફિસર </option>
                                    <option value="નાયબ / મદદનીશ પશુપાલન નિયામક"> નાયબ / મદદનીશ પશુપાલન નિયામક </option>
                                    <option value="નોડલ અધિકારી (મિલ્ક યુનિયન)">   નોડલ અધિકારી (મિલ્ક યુનિયન) </option>

                                </select>
                                <label for="floatingSelect">Select This Opation</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="city" name="city" required>
                                <label for="floatingPassword">City</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="hodo" required>
                                <label for="floatingInput">Hodo</label>
                            </div>
                  			<div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="name" required>
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="mo">
                                <label for="floatingInput">Phone</label>
                            </div>
                           <div class="form-floating mb-3">
                                <input type="submit" value="Upaload" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="ins">
                            </div>
                        </div>
                    </div>
                </div>

            </form>
                 <?php
                    if (isset($_POST['ins']))
                    {
                        include "connection.php";  
                        $cate = $_POST['cate'];
                        $city = $_POST['city'];
                        $hodo = $_POST['hodo'];
                        $name = $_POST['name'];
                        $mo = $_POST['mo'];
                        mysqli_query($con,"insert into salahkaro(category,city,hodo,name,phone) values('$cate','$city','$hodo','$name','$mo')");
                        echo "<div class='bg-success ' style='color:white; padding:15px;'>salahkaro Uploaded Success</div>"; 
                    }
                ?>


            </div>




<?php include "footer.php"; 
}
else
{
    header("location:index.php");
}
?>