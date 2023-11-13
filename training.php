<?php $active = "training" ?>
<?php include  "header.php"; ?><br>
<div>
    <h4>
        <font color="red">
            <marquee> નોંધ: આ પેજ પર તમને અવનવી ટ્રેનિંગ તથા કાઉન્સિલ પ્રોગ્રામના લેટેસ્ટ માહિતી મળી રહેશે.</marquee>
        </font>
    </h4>
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





                    <div align="center">
                        <?php include "connection.php";
                        $s = mysqli_query($con, "select * from trainings");
                        while ($r = mysqli_fetch_array($s)) {
                        ?>
                            <div class="col-lg-4 col-md-6 special-grid drinks" >
                                <div class="gallery-single fix">
                                    <div class="d-flex justify-content-center" >
                                        <img src="admin/<?php echo $r['photo']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                                    </div>
                                    <div class="why-text">
                                        <h2><?php echo $r['event_title']; ?></h2>
                                        <p><?php echo nl2br($r['event_short']); ?></p>

                                        <h5 align="center">
                                            <a href="training_more.php?id=<?php echo $r['id']; ?>" class="btn btn-primary">વધુ જોવો </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div><div class="col">

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
