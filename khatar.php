<?php $active = "khatar" ?>
<?php include  "header.php"; ?><br>
<div>
    <h4>
        <font color="red">
            <marquee> નોંધ: ખેડૂત મિત્રો આ પેજ મા તમને વિવિધ પ્રકાર ના ખાતરો ના નામ તેમની  કિંમત,ભાવ અને વજન તેમજ ક્યા પાક માં તે ખાતર નો કેમ ઉપયોગ કરવો તે વિષે ની માહિતી પ્રાપ્ત થશે... </marquee>
        </font>
    </h4>
</div>
<div>
    <img src="khatar.png" class="img">
</div><br>



<div class=container>
    <div class="row">
        <div class="col">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row">
                        <?php include "connection.php";
                        $s = mysqli_query($con, "select * from khatar");
                        while ($r = mysqli_fetch_array($s)) {
                        ?>
                            <div class="col-lg-4 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <div class="d-flex justify-content-center">
                                        <img src="admin/<?php echo $r['photo']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                                    </div>
                                    <div class="why-text">
                                        <h2><?php echo $r['khatar_title']; ?></h2>
                                        <p><?php echo nl2br($r['khatar_short']); ?></p>

                                        <h5 align="center">
                                            <a href="khatar_more.php?id=<?php echo $r['id']; ?>" class="btn btn-primary">વધુ જોવો </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</div>
<div class="col">

</div>
<div class="col"></div>
</div>
</div>

</div>
<?php include "footer.php"; ?>
<style type="text/css">
    .img {
        height: 400px;
        width: 1400px;
    }
</style>
