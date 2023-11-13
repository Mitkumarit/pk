<?php $active = "home" ?>
<?php include  "header.php"; ?><br>
<div>
    <h4>
        <font color="red">
            <marquee> નોંધ: નમસ્કાર પાક વિકાસ ખેડૂત પોર્ટલ આપનું સ્વાગત છે. આ પોર્ટલ પર ખેતી લાયક અવનવી માહિતી તમને પ્રાપ્ત થતી રહેસે. આભાર....</marquee>
        </font>
    </h4>
</div>

<div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="v3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="v4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="v6.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="v5.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="v2.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light p-5 content">
    <h3 style="color: Green; text-decoration: underline; text-align: center; font-family: @Arial Unicode MS;">
                            મારૂ ખેતર</h3>

<center>નમસ્કાર,ખેડૂત મિત્રો <b> PAAK VIKAS </b> વેબપોર્ટલ માં આપનું  સ્વાગત છે.<br></center></
આ વેબ પોર્ટલ  સંપૂર્ણ પણે ખેડૂત મિત્રો  માટે જ  તૈયાર    કરવામાં  આવ્યું છે <br>
રાજ્યના ખેડૂતોને ખેતી માટે જરૂર પડતી ખેતી વિષેયક માહિતી સમયસર મળી રહે અને આધુનિક  કૃષિ વિષયક માહિતી આંગળીના ટેરવે ઉપલબ્ધ થઈ શકે તે માટે આ વેબ પોર્ટલ બનાવમાં આવ્યું છે.
આ પોર્ટલ માં સંપૂર્ણ પણે ગુજરાતી ભાષા &nbsp; નો ઉપયોગ કરવામાં આવ્યો છે  જેથી ખેડૂત મિત્રો ને દરેક માહિતી સમજવી ખૂબ સરળ રહે. આ પોર્ટલ મા તમને વિવિધ મેનુ જોવા મળશે જેમાં દવા,ખાતર,સલાહકારો,મુંજવતા પ્રશ્નો અને સંપર્ક જેવા મેનુ માં વિવિધ પ્રકાર ની કૃષિ માહિતી જોવા મળશે.



                            
</div>

<br><br>
<div class=container>
    <div class="row" >
        <div class="col">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row">
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
                        <?php include "connection.php";
                        $s = mysqli_query($con, "select * from khatar limit 4");
                        while ($r = mysqli_fetch_array($s)) {
                        ?>
                            <div class="col-lg-3 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <div class="d-flex justify-content-center">
                                        <img src="admin/<?php echo $r['photo']; ?>" class="img-fluid mx-auto" alt="Image" style='width: 263px; height:170px;'>
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

                <div class=" p-4 text-center"><a href="khatar.php" class="btn btn-info">વધુ જોવા માટે અહી ક્લિક </a></div>
            </div>
        </div>
    </div>
</div>
<div class="col">

</div>
<div class="col"></div>
</div>
</div>



<div class=container>
    <div class="row">
        <div class="col">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row">
                        <?php include "connection.php";
                        $s = mysqli_query($con, "select * from dava limit 4");
                        while ($r = mysqli_fetch_array($s)) {
                        ?>
                            <div class="col-lg-3 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <div class="d-flex justify-content-center">
                                        <img src="admin/<?php echo $r['photo']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                                    </div>
                                    <div class="why-text">
                                        <h2><?php echo $r['dava_title']; ?></h2>
                                        <p><?php echo nl2br($r['dava_short']); ?></p>

                                        <h5 align="center">
                                            <a href="dava_more.php?id=<?php echo $r['id']; ?>" class="btn btn-primary"> વધુ જોવો</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class=" p-4 text-center"><a href="dava.php" class="btn btn-info">વધુ જોવા માટે અહી ક્લિક </a></div>
            </div>
        </div>
    </div>
</div>
<div class="col">

</div>
<div class="col"></div>
</div>
</div>
</div>

<?php include "footer.php"; ?>
