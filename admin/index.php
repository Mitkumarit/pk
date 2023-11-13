<?php session_start(); ?>

<style>
* {
  box-sizing: border-box;
  padding: 1px;
  font-family: Arial, Helvetica, sans-serif;
}

#heading1{
    text-align: center;
    padding: 30px;
}
img{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
 
}
.myForm{
    max-width:500px;
   margin: auto;
   margin-top: 10px;
  }
  .input-container {
    
    display: flex;
    width: 100%;
    margin-bottom: 15px;
    
  }
  .icon {
    padding: 10px;
    background: darkorange;
    color: white;
    min-width: 50px;
    text-align: center;
  }
  .input-field {
    width: 100%;
    padding: 10px;
    outline: none;
    border: none;
    border-bottom: 3px solid darkcyan;
  }
  .input-field:focus {
    border: 2px solid darkcyan;
  }

  .bttn {
    background-color:darkorange;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }
  .bttn:hover {
    opacity: 1;
    background-color: darkcyan;
  }  
  a:hover{
    color: blueviolet;
}
.icon:hover{
    background-color: darkcyan;
}
</style>
<html>
    <head>
        <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
       <h1 id="heading1">Login Here</h1>
       <img src="admin_img.png" alt="Login Logo" style="width:230px; height:150px;">
     <div>
         <form action="" class="myForm" name="myForm" method="post">
             <div class="input-container">
                 <i class="fa fa-envelope icon"></i>
                 <input type="text" placeholder="Admin_Id" name="adminid" class="input-field" required>
             </div>
             <div class="input-container" >
                <i class="fa fa-key icon"></i>
                <input type="password" placeholder="Password" name="password" class="input-field"  required>
               </div>
            <div><input type="submit" value="Login" class="bttn" name="s"></div>
         </form>
     </div>
    </body>
</html>



<?php

 if(isset($_POST['s']))
 {

    include "connection.php";
    $a = $_POST['adminid'];
    $p = $_POST['password'];
    $s = mysqli_query($con,"select * from admin where adminid='$a' and password='$p'");

    //check valid or not 
    if($r = mysqli_fetch_array($s))
    {
        $_SESSION['aid'] = $a;
        header("location:contact.php");
    
    }
    else
    {
        //not success
        echo "<div style='color:red; background-color:black; padding:10px;'> Please valid Admin Id and Password then Continue </div>";
        
    }

}
?>