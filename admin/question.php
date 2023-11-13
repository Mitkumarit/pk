<script>
function callme(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("result").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>

<?php  session_start();
if(isset($_SESSION['aid']))
{ 
include "menu.php" ?>

<?php
include "connection.php";
$s = mysqli_query($con,"select distinct main_option from question_category");
?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">


                    <div class="col-sm-12 col-xl-12">
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Question <a href="q_view.php" class="d-flex flex-row-reverse"> View </a> </h6>
                            <label for="floatingSelect">Select This Opation</label>
                            <div class="form-floating mb-3"> 
                           
                                <select name="main" onchange="return callme(this.value);" required>
                                    <?php while($r = mysqli_fetch_array($s))
                                    {
                                    ?>  
                                         <option value="<?php echo $r['main_option']; ?>"> <?php echo $r['main_option']; ?> </option>
                                    <?php 
                                    }
                                    ?>
                                </select>
                                <div id="result"></div>  
                                
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="title" required>
                                <label for="floatingInput">Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="pdf" required>
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
                       // include "gethint.php";
                        include "connection.php";  
                        $main = $_POST['main'];
                        $sub = $_POST['sub'];
                        $title = $_POST['title'];
                        $pdf = "question_pdf/".$_FILES['pdf']['name'];
                        
                        move_uploaded_file($_FILES['pdf']['tmp_name'], $pdf);
                        mysqli_query($con,"insert into question(category,subject, title, pdf) values('$main','$sub','$title','$pdf')");
                        echo "<div class='bg-success ' style='color:white; padding:15px;'>Question Uploaded Success</div>"; 
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