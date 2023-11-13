<?php session_start();
if(isset($_SESSION['aid']))
{

include "menu.php" ?>


<div class="container-fluid pt-4 px-4">
<div class="row">
     <div class="col-sm-12 col-xl-12">
        
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="bg-secondary rounded h-100 p-4">
                         <h6 class="mb-4">Event<a href="f_view.php" class="d-flex flex-row-reverse"> Registered Farmer </a><a href="t_view.php" class="d-flex flex-row-reverse"> View </a><a href="search_view.php" class="d-flex flex-row-reverse"> Search </a><a href="export.php" class="d-flex flex-row-reverse"> Export Mo Numbers </a> </h6>

                         	<div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="id" required>
                                <label for="floatingInput">ID</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="title" required>
                                <label for="floatingInput">Event Name</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;" name="s_detail" required></textarea>
                                <label for="floatingTextarea">Event Short Details</label>
                            </div>
                                        <div class="form-floating mb-3">
                                <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="img" required>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;" name="details" required></textarea>
                                <label for="floatingTextarea">Full Details</label>
                            </div>
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
                    $id = $_POST['id'];
                    $title = $_POST['title'];
                    $s_detail = $_POST['s_detail'];
                    $img = "training/".$_FILES['img']['name'];
                    $details = $_POST['details'];
                    move_uploaded_file($_FILES['img']['tmp_name'], $img);
                    mysqli_query($con,"insert into trainings(id,event_title,event_short, photo, details) values('$id','$title','$s_detail','$img','$details')");
                    echo "<div class='bg-success ' style='color:white; padding:15px;'>Event Uploaded Success</div>";
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