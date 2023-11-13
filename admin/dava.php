<?php  session_start();
if(isset($_SESSION['aid']))
{ 
include "menu.php" ?>
<div class="container-fluid pt-4 px-4">
<div class="row">
     <div class="col-sm-12 col-xl-12">
            <form action="" method="post" enctype="multipart/form-data">
                        <div class="bg-secondary rounded h-100 p-4">
                         <h6 class="mb-4">Dava <a href="d_view.php" class="d-flex flex-row-reverse"> View </a> </h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="title" required>
                                <label for="floatingInput">Dava Name</label>
                            </div>
                           <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" name="s_detail" style="height: 150px;" required></textarea>
                                <label for="floatingTextarea">Small Details</label>
                            </div>                            <div class="form-floating mb-3">
                                <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="img" required>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" name="details" style="height: 150px;" required></textarea>
                                <label for="floatingTextarea">Details</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="submit" name="ins" value="Upload" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                    if (isset($_POST['ins']))
                    {
                        include "connection.php";  
                        $title = $_POST['title'];
                        $s_detail = $_POST['s_detail'];
                        $img = "dava/".$_FILES['img']['name'];
                        $details = $_POST['details'];
                        move_uploaded_file($_FILES['img']['tmp_name'], $img);
                        mysqli_query($con,"insert into dava(dava_title,dava_short, photo, details) values('$title','$s_detail','$img','$details')");
                        echo "<div class='bg-success ' style='color:white; padding:15px;'>dava Uploaded Success</div>"; 
                    }
                ?>
                        


</div>
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