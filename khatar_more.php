<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
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
<?php $active = "khatar" ?>
    <?php include "header.php"; ?><br>
<div>
    <h4>
        <font color="red">
            <marquee> નોંધ: ખેડૂત મિત્રો આ પેજ મા તમને વિવિધ પ્રકાર ના ખાતરો ના નામ તેમની  કિંમત,ભાવ અને વજન તેમજ ક્યા પાક માં તે ખાતર નો કેમ ઉપયોગ કરવો તે વિષે ની માહિતી પ્રાપ્ત થશે... </marquee>
        </font>
    </h4>
</div>

    <table border="1" width="75%" height="75%" align="center" class="more_detail">
        <?php include 'connection.php';
        $id = $_GET['id'];
        $s = mysqli_query($con, "select * from khatar where id='$id'");
        while ($r = mysqli_fetch_array($s)) {
        ?>
            <tr align="center" style="font-weight: 600;font-size:20px">
                <td colspan="3"><?php echo $r['khatar_title']; ?></td>
            </tr>
            <tr>
                <td rowspan="2" align="center"><img src="<?php echo "admin/" . $r['photo']; ?>" width="150" height="200"></td>
                <td width="200" style="padding-left: 20px;">ક્રમ નં </td>
                <td align="left" style="padding-left: 20px;"><?php echo $r['id']; ?></td>
            </tr>
            <tr>
                <td style="padding-left: 20px;">ખાતર વિગત </td>
                <td style="padding-left: 20px;"><?php echo nl2br($r['khatar_short']); ?> </td>
            </tr>
            <tr>
                <td colspan="3" style="padding-left: 20px;"><?php echo nl2br($r['details']); ?> </td>
            </tr>

        <?php }  ?>

    </table>
    <?php include "footer.php"; ?>
</body>

</html>
