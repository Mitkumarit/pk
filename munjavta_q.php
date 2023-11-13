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
<script>
                    window.embeddedChatbotConfig = {
                    chatbotId: "H9oD1ZrmVa0b8Kd7j0gGb",
                    domain: "www.chatbase.co"
                    }
                    </script>
                    <script
                    src="https://www.chatbase.co/embed.min.js"
                    chatbotId="H9oD1ZrmVa0b8Kd7j0gGb"
                    domain="www.chatbase.co"
                    defer>
                    </script>
<script>
function callme2() {
  str = document.getElementById('suboption').value

  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("result2").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "mun_select.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>
<?php $active = "munjavta_q" ?>
<?php include "header.php"; ?><br>
<div class="container">
    <div>
  <h4 ><font color="red" > <marquee> નોંધ: ખેડૂત મિત્રો આ પેજ મા તમને બાગાયત તેમજ ખેતીવાડીને લગતા પાકો ના મુંજવતા પ્રશ્ન ના ઉકેલ ની માહિતી પ્રાપ્ત થશે... </marquee> </font></h4>
</div>
  <div class="row" style="padding: 20; text-align: center; font-size: 5px;"><h1>
    :: મૂંઝવતા પ્રશ્નો :: </h1>
  </div><br>



<div class="row" style="padding: 10;">
  <div class="col">
  <form action="" method="post" enctype="multipart/form-data">
	<?php
		include "connection.php";
		$s = mysqli_query($con,"select distinct main_option from question_category");
	?>

	<select name="main" onchange="return callme(this.value);" required id="mainoption" class="form-inline">
    <option> કોઈ એક વિકલ્પ પસંદ કરો  </option>
    <?php while($r = mysqli_fetch_array($s))
    {
    ?>
         <option value="<?php echo $r['main_option']; ?>"> <?php echo $r['main_option']; ?> </option>
    <?php
    }
    ?>

  </select>
  </div>
    <div id="result"></div>
    <div class="col" id="result"></div>
   <div class="col"> <input type="button" name="" value="આગળ" onclick="callme2()"> </div></div>
    <div id="result2"></div>
  </form>


<div>
<script defer="">
str = document.getElementById("mainoption")
callme2(str.value)
</script>
</div>
</div>

<?php include "footer.php"; ?>
