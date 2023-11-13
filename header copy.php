  <!DOCTYPE html>
   <html lang="en">

   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>PAAK VIKAS</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="img/favicon.ico" rel="icon">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">

         <div class="header_midil">
            <img src="b1.png" class="header_image"/>
          </div>
         <div class="header_bo">
            <div class="container">
               <div class="row">
                  <div class="col-md-9 col-sm-7">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item <?php if($active =="home") echo "active" ?>">
                                 <a class="nav-link" href="index.php"><i  class="bi-house"></i >  Home </a>
                              </li>
                              <li class="nav-item <?php if($active =="khatar") echo "active" ?>">
                                 <a class="nav-link" href="khatar.php">ખાતર</a>
                              </li>
                              <li class="nav-item <?php if($active =="dava") echo "active" ?>">
                                 <a class="nav-link" href="dava.php">દવા</a>
                              </li>
                              <li class="nav-item <?php if($active =="salahkar") echo "active" ?>">
                                 <a class="nav-link" href="salahkar.php">સલાહકરો</a>
                              </li>
                              <li class="nav-item <?php if($active =="munjavta_q") echo "active" ?>">
                                 <a class="nav-link" href="munjavta_q.php">મૂંઝવતા પ્રશ્નો</a>
                              </li>
                              <li class="nav-item <?php if($active =="contact") echo "active" ?>">
                                 <a class="nav-link" href="contact.php">સંપર્ક</a>
                              </li>
                              <li class="nav-item <?php if($active =="training") echo "active" ?>">
                                 <a class="nav-link" href="training.php">ટ્રેનિંગ પ્રોગ્રામ</a>
                              </li>
                              <li class="nav-item <?php if($active =="video gallary") echo "active" ?>">
                                 <a class="nav-link" href="index1.php">વિડિયો ગેલેરી</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
