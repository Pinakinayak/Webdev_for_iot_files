<!doctype html>

<html lang="en-US">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>E-DustBin</title>

		<!-- Libs and Plugins CSS -->
        <link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="inc/animations/css/animate.min.css">
        <link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
        <link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
        <link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mobile.css">

		<!-- Skin CSS -->
         <!-- <link rel="stylesheet" href="css/skin/fresh-lime.css"> -->
         <!-- <link rel="stylesheet" href="css/skin/summer-orange.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/ice-blue.css"> -->
        <link rel="stylesheet" href="css/skin/night-purple.css">
        <!--<link rel="stylesheet" href="css/skin/cool-gray.css">-->
         <!-- Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->
	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">
        
            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">

                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">

                  <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="logo" href="index.html">E-DUSTBIN</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="body">Home</a></li>
                            <li><a class="page-scroll" href="#about-section">About</a></li>
                            <li><a class="page-scroll" href="history.php">History</a></li>
                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            <div>
                <br>
                <br><br>
            </div>
             <!-- Begin page header--> 
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>Live Readings</h2>
                            <p style="color:red;font-size:16px;font-weight:bolder">Data is updated every minute</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <!-- Begin Our sensors -->
                <div class="our-sensors">
                    <div class="container">
                        <div class="row">
                         <div class="col-sm-6">
                         <br><br><br>
                            <div class="col-sm-10">
                                <div class="sensor-bar wow slideInLeft" data-wow-delay="0.2s">

                                    <div class="progress-lebel">
                                        <h6>Average</h6>
                                    </div>
                                    <div class="progmean progress">
                                      <div class="progress-bar mean" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" >
                                      </div>
                                      <span class="tooltiptext s4"></span> 
                                    </div>
                                    
                                </div>
                            </div>
                            <br><br>
                            <div class="s4 col-sm-2">
                                        
                            </div>
                          </div>
                        <div class="col-lg-6">
                            <div class="col-sm-10">
                              <div class="sensor-bar wow slideInRight" data-wow-delay="0.4s">
                                    <div class="progress-lebel">
                                        <h6>Sensor 1</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar sensor1"  role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" >
                                      
                                      </div>
                                        <span class="tooltiptext s1"></span> 
                                    </div>
                                   
                                </div>

                            </div>
                            <div class="s1 col-sm-2">
                                        
                                    </div>
            <div>
                <br>
                <br><br><br>
               
            </div>
                            <div class="col-sm-10">
                                <div class="sensor-bar wow slideInRight" data-wow-delay="0.5s">
                                    <div class="progress-lebel">
                                        <h6>Sensor 2</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar sensor2" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" >
                                      </div>
                                      <span class="tooltiptext s2"></span> 
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="s2 col-sm-2">
                             </div>
            <div>
                <br>
                <br><br><br>
                
            </div>
                              <div class="col-sm-10">
                                <div class="sensor-bar wow slideInRight" data-wow-delay="0.6s">
                                    <div class="progress-lebel">
                                        <h6>Sensor 3</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar sensor3" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" >
                                      </div>
                                      <span class="tooltiptext s3"></span> 
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="s3 col-sm-2">
                                        
                            </div>
                          </div><!--col-sm-6 ends-->
                         
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End Our sensor -->
          </section>
          <br><br>
          <!-- End about section -->
          <div id="predict" class="wow slideInRight" data-wow-delay="2s"></div>
           <p style="font-size:18px;text-decoration:underline;margin-left:9%" class="wow slideInLeft" data-wow-delay="0.65s">Last 5 Records given below</p>
 <section class="wow slideInUp" data-wow-delay="0.8s">
   
        <div class="container">
       
                        <div class="row" id=contents>   
                           

                        </div>
        </div>

          </section>  


        <!-- Plugins JS -->
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
        <script src="inc/bootstrap/js/bootstrap.min.js"></script>
        <script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
        <script src="inc/stellar/js/jquery.stellar.min.js"></script>
        <script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script>
        <script src="inc/isotope.pkgd.min.js"></script>
        <script src="inc/classie.js"></script>
        <script src="inc/jquery.easing.min.js"></script>
        <script src="inc/jquery.counterup.min.js"></script>
        <script src="inc/smoothscroll.js"></script>

		<!-- Theme JS -->
		<script src="js/theme.js"></script>
      <!--custom js and jquery scripts-->
         <script type="text/javascript">    
                      $(document).ready(function() 
                        {hello();
                          window.setInterval(function(){
                                                        hello();
                                                      }, 60000);  });
                      
                      function hello(){var obj;
                        $(".progress").ready(function() 
                        {  
                           $.ajax(
                           {
                            type: 'POST',
                            url: 'calculate.php',
                            dataType:"JSON",
                            
                            success: function(result) 
                            {
                              if(result){
                                var json_text=JSON.stringify(result);//convert encoded to string
                                 obj=JSON.parse(json_text);//convert to obj
                               
                                startanimation(obj);
                              }
                             else{
                                alert("error");
                              }
                             }
                          })
                        })

                        
                        
                        //animation function
                        function startanimation (e) {
                            
                                if(e[0]>80)
                                {
                                  $('.sensor1').css("background-color", '#82013A'); 
                                }
                                if(e[1]>80)
                                {
                                  $('.sensor2').css("background-color", '#82013A'); 
                                }
                                if(e[2]>80)
                                {
                                  $('.sensor3').css("background-color",'#82013A'); 
                                }
                                if(e[3]>80)
                                {
                                  $('.mean').css("background-color", '#82013A'); 
                                }



                               $('.sensor1').animate({width:e[0]+"%"} , 1200,"linear" );
                                $('.sensor2').animate({width:e[1]+"%"}, 1200,"linear");
                                $('.sensor3').animate({width:e[2]+"%"}, 1200,"linear");
                                $('.mean').animate({width:e[3]+"%"}, 1200,"linear");

                                   }

                      $("#contents").load('view.php');
                         $("#predict").load('predict.php');

                     setTimeout(function() {
         
   
                                   $(".progress").ready(function()
                                   {
                                              var val=$(".sensor1").width() / $('.sensor1').parent().width() * 100;
                                              $(".s1").html(Math.round(val).toFixed(2) +"%");
                                   });
                                   $(".progress").ready(function()
                                   {
                                              var val=$(".sensor2").width() / $('.sensor2').parent().width() * 100;
                                              $(".s2").html(Math.round(val).toFixed(2) +"%");
                                   });
                                   $(".progress").ready(function()
                                   {
                                              var val=$(".sensor3").width() / $('.sensor3').parent().width() * 100;
                                              $(".s3").html(Math.round(val).toFixed(2) +"%");
                                   });
                                   $(".progress").ready(function()
                                   {
                                              var val=$(".mean").width() / $('.mean').parent().width() * 100;
                                              $(".s4").html(Math.round(val).toFixed(2) +"%");
                                   });
                                    }, 2000);             
                     }           
    </script>
    </div>
    
    </body>      
</html>