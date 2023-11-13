<?php $active = "contact" ?>
<?php include "header.php"; ?><br>

<div>
    <h4>
        <font color="red">
            <marquee> નોંધ: ખેડૂત મિત્રો તમને ખેતી વિષયક કોઇ પણ  પ્રશ્ન હોય તો તે  પ્રશ્ન અમારા સુધી પહોચાડવા તમને આ પેજ મદદ રૂપ થશે...   </marquee>
        </font>
    </h4>
</div>

<div>
    <form action="" method="post" enctype="multipart/form-data">
        <table border="3" align="center" height="400" width="50%" class="more_detail" style="font-size: 18px;">
            <tr align="center">
                <td> નામ</td>
                <td> <input type="text" name="nm" placeholder="નામ દાખલ કરો" required></td>
            </tr>
            <tr align="center">
                <td>મોબાઈલ નંબર</td>
                <td> <input type="text" name="mo" placeholder="મોબાઈલ નંબર દાખલ કરો" required></td>
            </tr>
            <tr align="center">
                <td>પ્રશ્ન</td>
                <td> <textarea placeholder="તમારો પ્રશ્ન દાખલ કરો " name="q" required></textarea></td>
            </tr>
            <tr align="center">
                <td colspan="2"> <input type="submit" name="s" value="મોકલો "></td>
            </tr>
        </table>
    </form>
</div>



<?php
if (isset($_POST['s'])) {
    include "connection.php";
    $name = $_POST['nm'];
    $mobile = $_POST['mo'];
    $question = $_POST['q'];
    mysqli_query($con, "insert into contact(name,mobile,question) values('$name','$mobile','$question')");
    echo " <br> <div class='bg-success ' style='color:white; padding:15px;'>તમારો પ્રશ્ન સફળતા પૂર્વક મોકલાઈ ગયેલ છે  </div>";
}
?>
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
<?php include "footer.php"; ?>
