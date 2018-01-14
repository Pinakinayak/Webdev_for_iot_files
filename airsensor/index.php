<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>Airquality</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Pinaki Nayak">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-style.css" rel="stylesheet">
    
    
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

  
   

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">    
  </head>
  <body>
  
  
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top" style="height:80px">
        <div class="container">
        <div class="navbar-header">
          
         
        </div> 
        <a class="navbar-brand" style="margin-left:33%;font-size:40px;color:lightgrey;margin-top:15px" href="index.html">Air Quality Sensors</a>
          <div class="navbar-collapse collapse">
            

            
          </div><!--/.nav-collapse -->
        </div>
    </div>
    <div>
    <br><br>	
    </div>
    <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2 style="font-size:34px;color:white">Live Sensor Values</h2>
                            <p style="color:#FF3333;font-size:19px;font-weight:bolder">Data is updated every <span style="text-decoration:underline">30 seconds</span></p>
                        </div>
                    </div>
                </div>
    <div class="container">
    
	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>MQ-1 SENSOR</dtitle>
		  		<hr>
	        	<div id="load1"></div>
	        	<h5 class="values1"></h5>
	        	<div class="col-sm-6">
	        		<dtitle>Max</dtitle>
		  		<hr>
		  		<p class=item>1023</p>
	        	</div>
	        	<div class="col-sm-6">
	        		<dtitle>Min</dtitle>
		  		<hr>
		  		<p class=item>0</p>
	        	</div>
	        	
			</div>
        </div>
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>MQ-2 SENSOR</dtitle>
		  		<hr>
	        	<div id="load2"></div>
	        	<h5 class="values2"></h5>
	        	<div class="col-sm-6">
	        		<dtitle>Max</dtitle>
		  		<hr>
		  		<p class=item>1023</p>
	        	</div>
	        	<div class="col-sm-6">
	        		<dtitle>Min</dtitle>
		  		<hr>
		  		<p class=item>0</p>
	        	</div>
	        	
			</div>
        </div>
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>MQ-3 SENSOR</dtitle>
		  		<hr>
		  		
	        	<div id="load3"></div>
	        	<h5 class="values3"></h5>
	        	<div class="col-sm-6">
	        		<dtitle>Max</dtitle>
		  		<hr>
		  		<p class=item>1023</p>
	        	</div>
	        	<div class="col-sm-6">
	        		<dtitle>Min</dtitle>
		  		<hr>
		  		<p class=item>0</p>
	        	</div>
	        	
			</div>
        </div>
        <div class="col-sm-3 col-lg-3">
      			<div class="dash-unit">
			  		<dtitle>MQ-4 SENSOR</dtitle>
			  		<hr>
		        	<div id="load4"></div>
		        	<h5 class="values4"></h5>
		        	<div class="col-sm-6">
		        		<dtitle>Max</dtitle>
			  		<hr>
			  		<p class=item>1023</p>
		        	</div>
		        	<div class="col-sm-6">
		        		<dtitle>Min</dtitle>
			  		<hr>
			  		<p class=item>0</p>
		        	</div>
		        	<div class="col-sm-12">
		        	
		        	<hr/>
		        	<p class=item></p>
	        		</div>
				</div>
        	</div>
       </div>  <!-- row 1 -->
       
         <div class="row">
        	
        
          
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>MQ-5 SENSOR</dtitle>
		  		<hr>
	        	<div id="load5"></div>
	        	<h5 class="values5"></h5>
	        	<div class="col-sm-6">
	        		<dtitle>Max</dtitle>
		  		<hr>
		  		<p class=item>1023</p>
	        	</div>
	        	<div class="col-sm-6">
	        		<dtitle>Min</dtitle>
		  		<hr>
		  		<p class=item>0</p>
	        	</div>
	        	
			</div>
        </div>
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>MQ-6 SENSOR</dtitle>
		  		<hr>
	        	<div id="load6"></div>
	        	<h5 class="values6"></h5>
	        	<div class="col-sm-6">
	        		<dtitle>Max</dtitle>
		  		<hr>
		  		<p class=item>1023</p>
	        	</div>
	        	<div class="col-sm-6">
	        		<dtitle>Min</dtitle>
		  		<hr>
		  		<p class=item>0</p>
	        	</div>
	        	
			</div>
        </div>
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>MQ-7 SENSOR</dtitle>
		  		<hr>
	        	<div id="load7"></div>
	        	<h5 class="values7"></h5>
	        	<div class="col-sm-6">
	        		<dtitle>Max</dtitle>
		  		<hr>
		  		<p class=item>1023</p>
	        	</div>
	        	<div class="col-sm-6">
	        		<dtitle>Min</dtitle>
		  		<hr>
		  		<p class=item>0</p>
	        	</div>
	        	
			</div>
        </div>
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>MQ-8 SENSOR</dtitle>
		  		<hr>
	        	<div id="load8"></div>
	        	<h5 class="values8"></h5>
	        	<div class="col-sm-6">
	        		<dtitle>Max</dtitle>
		  		<hr>
		  		<p class=item>1023</p>
	        	</div>
	        	<div class="col-sm-6">
	        		<dtitle>Min</dtitle>
		  		<hr>
		  		<p class=item>0</p>
	        	</div>
	        	
			</div>
        </div>
        </div>
        
        <!-- row 2 -->
         <div class="row">
        <div class="col-sm-4 col-lg-4">
      		<div class="dash-unit">
		  		<dtitle>MQ-9 SENSOR</dtitle>
		  		<hr>
	        	<div id="load9"></div>
	        	<h5 class="values9"></h5>
	        	<div class="col-sm-6">
	        		<dtitle>Max</dtitle>
		  		<hr>
		  		<p class=item>1023</p>
	        	</div>
	        	<div class="col-sm-6">
	        		<dtitle>Min</dtitle>
		  		<hr>
		  		<p class=item>0</p>
	        	</div>
	        	
			</div>
        </div>
        <div class="col-sm-4 col-lg-4">
      		<div class="dash-unit">
		  		<dtitle>PRESSURE SENSOR</dtitle>
		  		<hr>
	        	<div id="load10"></div>
	        	<h5 class="values10"></h5>
	        	<div class="col-sm-6">
	        		<dtitle>Max</dtitle>
		  		<hr>
		  		<p class=item>1023</p>
	        	</div>
	        	<div class="col-sm-6">
	        		<dtitle>Min</dtitle>
		  		<hr>
		  		<p class=item>0</p>
	        	</div>
	        	
			</div>
        </div>
        <div class="col-sm-4 col-lg-4">
      		<div class="dash-unit">
		  		<dtitle>BAROMETER SENSOR</dtitle>
		  		<hr>
	        	<div id="load11"></div>
	        	<h5 class="values11"></h5>
	        	<div class="col-sm-6">
	        		<dtitle>Max</dtitle>
		  		<hr>
		  		<p class=item>1023</p>
	        	</div>
	        	<div class="col-sm-6">
	        		<dtitle>Min</dtitle>
		  		<hr>
		  		<p class=item>0</p>
	        	</div>
	        	
			</div>
        </div>
        <div class="col-sm-1 col-lg-1"></div>       
        <div class="col-sm-4 col-lg-4">
      		<div class="dash-unit">
		  		<dtitle>HUMIDITY SENSOR</dtitle>
		  		<hr>
	        	<div id="load12"></div>
	        	<h5 class="values12"></h5>
	        	<div class="col-sm-6">
	        		<dtitle>Max</dtitle>
		  		<hr>
		  		<p class=item>100</p>
	        	</div>
	        	<div class="col-sm-6">
	        		<dtitle>Min</dtitle>
		  		<hr>
		  		<p class=item>0</p>
	        	</div>
	        	
			</div>
        </div>
        <div class="col-sm-2 col-lg-2"></div>
        <div class="col-sm-4 col-lg-4">
      		<div class="dash-unit">
		  		<dtitle>TEMPERATURE SENSOR</dtitle>
		  		<hr>
	        	<div id="load13"></div>
	        	<h5 class="values13"></h5>
	        	<div class="col-sm-6">
	        		<dtitle>Max</dtitle>
		  		<hr>
		  		<p class=item>50</p>
	        	</div>
	        	<div class="col-sm-6">
	        		<dtitle>Min</dtitle>
		  		<hr>
		  		<p class=item>0</p>
	        	</div>
	        	
			</div>
        </div>
       <div class="col-sm-1 col-lg-1"></div>
        
       
       </div>
        <div ><br><br><br><br><br><br><br></div>
        
         
	</div> <!-- /container -->
	


  
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
	
    

	
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="assets/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="assets/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src="assets/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="assets/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="assets/js/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="assets/js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="assets/js/highcharts.js"></script>
	


    <script type="text/javascript">


	$(document).ready(function() 
                        {hello();
                          window.setInterval(function(){
                                                        hello();
                                                      }, 30000);  });
		 function hello(){
		
		var obj;
		//startanimation(obj);

		 
                           $.ajax( 
                           {	
	                            type: 'POST',
	                            url: 'view.php',
	                            dataType:"JSON",
	                            success: function(result) 
	                            {
	                             
	                                var json_text=JSON.stringify(result);//convert encoded to string
	                                 obj=JSON.parse(json_text);//convert to obj
	                               		
	                                startanimation(obj);
	                              
	                             }
                          	})
                          
                        	




function ascii (a) { return String.fromCharCode(a); }

        function startanimation(obj)
		{	
			var ids=['load1','load2','load3','load4','load5','load6','load7','load8','load9','load10','load11','load12','load13'];
			var num=['1','2','3','4','5','6','7','8','9','10','11','12','13'];
			var color=['red','yellow','green'];
			var j=0;
			for(j=0;j<11;j++)
			{	
				var val=Math.round(obj[j]/100*1023).toFixed(1);
				chartcreater2(ids[j],obj[j],num[j],val);	
			}

			
			chartcreater(ids[11],obj[11],num[11]);
			chartcreater3(ids[12],obj[12],num[12]);

			
		}
		function col(val)
		{	
			if(val<=40)
			{
				return 'green';
			}else if(val <=90)
			{
				return 'yellow';
			}
			else
			{
				return 'red';
			}
			return "white";
		}

		function chartcreater3(i,k,l)
		{$(".values"+l).html((k/2)+ ascii(176)+" C");
			$(".values"+l).css("font-size","27px");
		info = new Highcharts.Chart({
			chart: {
				renderTo: i,
				margin: [0, 0, 0, 0],
				backgroundColor: null,
                plotBackgroundColor: 'none',
							
			},
			
			title: {
				text: null
			},

			tooltip: {
				formatter: function() { 
					return this.point.name +': '+ this.y +' %';
						
				} 	
			},
		    series: [
				{
				borderWidth: 2,
				borderColor: '#F1F3EB',
				shadow: false,	
				type: 'pie',
				name: 'SiteInfo',
				innerSize: '97%',
				data: [
					{ name: 'Used', y: k, color: col(k) },
					{ name: 'Rest', y: 100-(k), color: '#3d3d3d' }
				],
				dataLabels: {
					enabled: false,
					color: '#000000',
					connectorColor: '#000000'
				}
			}]
		});
				if(k<=40)
					$(".values"+l).css("color", "lightgreen");
				else if(k>40&&k<90)
					$(".values"+l).css("color", "yellow");
				else
					$(".values"+l).css("color", "red");

		}


		function chartcreater2(i,k,l,val)
		{$(".values"+l).html(val);
			$(".values"+l).css("font-size","27px");
		info = new Highcharts.Chart({
			chart: {
				renderTo: i,
				margin: [0, 0, 0, 0],
				backgroundColor: null,
                plotBackgroundColor: 'none',
							
			},
			
			title: {
				text: null
			},

			tooltip: {
				formatter: function() { 
					return this.point.name +': '+ this.y +' %';
						
				} 	
			},
		    series: [
				{
				borderWidth: 2,
				borderColor: '#F1F3EB',
				shadow: false,	
				type: 'pie',
				name: 'SiteInfo',
				innerSize: '97%',
				data: [
					{ name: 'Used', y: k, color: col(k) },
					{ name: 'Rest', y: 100-(k), color: '#3d3d3d' }
				],
				dataLabels: {
					enabled: false,
					color: '#000000',
					connectorColor: '#000000'
				}
			}]
		});
				if(k<=40)
					$(".values"+l).css("color", "lightgreen");
				else if(k>40&&k<90)
					$(".values"+l).css("color", "yellow");
				else
					$(".values"+l).css("color", "red");

		}





		function chartcreater(i,k,l)
		{$(".values"+l).html(k+'%');
		$(".values"+l).css("font-size","27px");
		info = new Highcharts.Chart({
			chart: {
				renderTo: i,
				margin: [0, 0, 0, 0],
				backgroundColor: null,
                plotBackgroundColor: 'none',
							
			},
			
			title: {
				text: null
			},

			tooltip: {
				formatter: function() { 
					return this.point.name +': '+ this.y +' %';
						
				} 	
			},
		    series: [
				{
				borderWidth: 2,
				borderColor: '#F1F3EB',
				shadow: false,	
				type: 'pie',
				name: 'SensorInfo',
				innerSize: '97%',
				data: [
					{ name: 'Used', y: k, color: col(k) },
					{ name: 'Rest', y: 100-(k), color: '#3d3d3d' }
				],
				dataLabels: {
					enabled: false,
					color: '#000000',
					connectorColor: '#000000'
				}
			}]
		});
		if(k<=40)
					$(".values"+l).css("color", "lightgreen");
				else if(k>40&&k<90)
					$(".values"+l).css("color", "yellow");
				else
					$(".values"+l).css("color", "red");
		}
	}
	
    </script>
  
</body></html>