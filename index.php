
<?php
include "config.php";

if(isset($msg))
{
echo $msg;
}
?>

<!DOCTYPE html>


<!-- HEAD SECTION -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="first web site portfolio">

    <meta name="keywords" content="monportfolio">
    
    <title> Portfolio / Bouhzam Othmane </title>
     

    
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--FONTAWESOME MAIN STYLE -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--CUSTOM STYLE -->
    <link href="assets/css/style.css" rel="stylesheet" />
    
</head>
    <!--END HEAD SECTION -->
<body>   

     <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="#">BOUHZAM OTHMANE</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right ">
                    <li><a href="#header-section"><?php echo $lang['entrer']; ?></a></li>
                    <li><a href="#about-section"><?php echo $lang['entrer1']; ?></a></li>
                    <li><a href="#products-section">PORTFOLIO</a></li>
                    <li><a href="#contact-section">CONTACT</a></li>
                    
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
     <!-- HEADER SECTION -->
    <div id="header-section">

        <div class="container">
            <div class="row centered">
                <div class="col-md-8 col-md-offset-2">
                    <h1><strong id="h"> </strong>       
                     
                    </h1>
                     <br /> <br /> <br />
                    <h2><strong id="h"><?php echo $lang['entrer2']; ?></strong></h2>
                     <br />

                  <a href="#about-section">  <i class="fa fa-angle-double-down fa-5x down-icon"></i> </a>
                </div>
            </div>
           
        </div>
       
    </div> 
      <!--END HEADER SECTION -->
    <!--ABOUT SECTION -->
    <div id="about-section" >
        <div class="container" >
            <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 " data-scrollreveal="enter top and move 100px, wait 0.3s">
                    <h1> <?php echo $lang['title1']; ?> </h1>
                    <h4>
                       
                    </h4>
                </div>
            </div>
            <!-- ./ Main Heading-->
            <div class="row main-low-margin text-center">
                <div class="col-md-3 " data-scrollreveal="enter left and move 100px, wait 0.4s">
                    <img class="img-circle" src="assets/img/team/team2.png" alt="">
                    <h4><strong>BOUHZAM OTHMANE</strong> </h4>
                    <p>
                       <strong> <?php echo $lang['des']; ?></strong>

                    </p>
                    <p>
                       <a href="https://www.facebook.com/othmane.bzm
                        "><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                        
                        <a href="https://github.com/othmanebouhzam"><i class="fa fa-github-square fa-2x color-google-plus"></i></a>
                        <a href="https://www.linkedin.com/in/othmane-bouhzam-a00173105/"><i class="fa fa-linkedin-square fa-2x color-linkedin"></i></a>
                        

                    </p>

                </div>
             
                <div class="col-md-7 col-sm-7 col-md-offset-1  text-justify" data-scrollreveal="enter right and move 100px, wait 0.4s">
                    
                    <p>
                     
                     <?php echo $lang['description']; ?>
                    </p>
                    <p>
                       

                    </p>
                </div>
            </div>
              <!-- ./ Row Content-->
        </div>
    </div>
    <!-- END ABOUT SECTION -->
   
   
    <!--PROJET -->
    <div id="products-section" >
         <div class="container" >
            <div class="row main-top-margin text-center" data-scrollreveal="enter top and move 100px, wait 0.3s">
                <div class="col-md-8 col-md-offset-2 ">
                    <h1><strong> <?php echo $lang['tit']; ?></strong></h1>
                    <h4>
                       

                    </h4>
                </div>
            </div>
            
        </div>
    </div>
<!--start-->
 <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">EPOCKETS
        <small>Capgemini</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid imgPortfolio" src="img/ProjetPrinc.png" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3"><?php echo $lang['projet1']; ?></h3>
          <p> <?php echo $lang['deprojet1']; ?> </p>
          <h3 class="my-3"><?php echo $lang['dprojet']; ?> </p> </h3>
          <ul>
            <li> <?php echo $lang['liste1']; ?> </li>
            <li><?php echo $lang['liste2']; ?></li>
            <li> <?php echo $lang['list33']; ?> </li>
            <li> <?php echo $lang['liste4']; ?></li>
          </ul>
        </div>

      </div>
      <!-- /.row -->

      <!-- Autre Projects Row -->
      <h3 class="my-4"><strong> <?php echo $lang['autreprojet']; ?></strong></h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          
            <img class="img-fluid imgPortfolio" src="img/MOCKUP12.png" alt="">
          </a>
          <div >
          <h3 style="text-align: center;" class="my-3"><strong><?php echo $lang['projet2']; ?></strong> </h3>
          <p> <?php echo $lang['desprojet2']; ?> </p>
        
        </div>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          
            <img class="img-fluid imgPortfolio" src="img/MOCKUP2.png" alt="">
          
          <div >
          <h3 style="text-align: center;" class="my-3"><strong><?php echo $lang['projet1111']; ?></strong> </h3>
          <p><?php echo $lang['projet234']; ?></p>
          
        </div>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          
            <img class="img-fluid imgPortfolio" src="img/MOCKUP3.png" alt="">
          
          <div >
          <h3 style="text-align: center;" class="my-3"><strong> <?php echo $lang['projet1010']; ?></strong></h3>
          <p><?php echo $lang['projet234']; ?></p>
         
        </div>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          
            <img class="img-fluid imgPortfolio" src="img/MOCKUP4.png" alt="">
          
          <div >
          <h3 style="text-align: center;" class="my-3"><strong><?php echo $lang['projet1010']; ?></strong></h3>
          <p><?php echo $lang['projet234']; ?></p>
                 </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<!--end-->


    <!--END WORK/PRODUCTS SECTION -->
    <!--CONTACT SECTION -->
    <div id="contact-section">
        <div class="container" >
            <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 " data-scrollreveal="enter top and move 100px, wait 0.3s">
                    <h1>Contact</h1>
                    <h4>
                       <?php echo $lang['contact1']; ?> <br />
                    </h4>
                </div>
            </div>

            <!-- ./ Main Heading-->
            <div class="row">
                <div class="col-md-12  col-sm-12 ">
                    <div class="col-md-6  " data-scrollreveal="enter left and move 100px, wait 0.4s">
                        <h3> <?php echo $lang['add']; ?></h3>
                        <hr />
                        <p>
                        N°259, quartier elqods,
                            unité3,<br />
                            Youssoufia.Maroc.<br />                          
                        Tél : 06.99.39.00.53<br />
                        Email: othmane.bzm15@gmail.com<br />
                            </p>
                       
                    </div>
                    <div class="col-md-6  " data-scrollreveal="enter right and move 100px, wait 0.4s">
                        <h3><?php echo $lang['contact2']; ?>  </h3>
                        <hr />
                        <form action="contact.php" method="post" >
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="namecontactName" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="contactEmail" placeholder="E-mail">
                                    </div>
                                </div>
                            </div>
                              <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="contactSubject" placeholder="subject">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="tele" placeholder="Tél">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <textarea  id="message" name="contactMessage" class="form-control" rows="3"  placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="submit"> <?php echo $lang['smessage']; ?>  </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
             <!-- ./ Row Content-->
        </div>
    </div>  
    <!--END CONTACT SECTION --> 
    <!--FOOTER SECTION -->
    <div id="footer">
        <div class="container">
            <div class="row ">
               				
		
            </div>
            
        </div>
     
                 <div >
                  <ul>
                    <a href="index.php?lang=fr" style="position: fixed;bottom:12px;right:25px"><img width=10% height=10%  src="img/flag-fr.png"></a>
                    <a href="index.php?lang=en" style="position: fixed;bottom:12px;right:65px"><img width=10% height=10% src="img/flag-en.png"></a>
                  </ul>
                </div>  
    </div>  
    <!--END FOOTER SECTION --> 
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY LIBRARY -->
    <script src="assets/js/jquery.js"></script>
    <!-- CORE BOOTSTRAP LIBRARY -->
    <script src="assets/js/bootstrap.min.js"></script>
     <!-- SCROLL REVEL LIBRARY FOR SCROLLING ANIMATIONS-->
    <script src="assets/js/scrollReveal.js"></script>
       <!-- CUSTOM SCRIPT-->
    <script src="assets/js/custom.js"></script>
</body>
</html>
