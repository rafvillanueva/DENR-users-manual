<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DENR | DSS</title>
    <link rel="shortcut icon" href="../denrs.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../Bootstrap_Files/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/turn.min.js"></script>
    <link rel="stylesheet" href="../Bootstrap_Files/libs/bootstrap/css/carousel.css" />
    <link rel="stylesheet" href="../Bootstrap_Files/libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../Bootstrap_Files/cssa/style.css">
    <link rel="stylesheet" href="../Bootstrap_Files/cssa/dssmain.css">
    <link rel="stylesheet" href="../../Bootstrap_Files/cssa/modalstyle.css">
    <link rel="stylesheet" href="../../Bootstrap_Files/cssa/regionmod.css">
    <script type="text/javascript" src="../js/sweetalert.min.js"> //this is the script tag and the src denotes the location of the file sweetalert.min.js

		
	  </script>


</head>
<body>

<!-- burger button -->

<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>
    <div class="menu">
      <div>
        <div>
          <ul>
            <li class="box"><a href="../DENRhomepage">Home</a></li>
            <li class="box"><a href="../pages/ICTEN">ICTen Network Service Request System</a></li>
            <li class="box"><a href="../pages/DSSmain">Document Security System</a></li>
            <li class="box"><a href="../pages/DMSmain">Document Monitoring System</a></li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>


<!-- burger button -->
  
  <div class="loader_bg">
      <div class="loader"></div>
  </div>

    
  <!--  -->
    
<div class="skew container-fluid clearfix">

<div class="skew-image">
    
</div>
<div class="row">
    <div class="skew-wrapper col-lg-6 col-md-7 col-xs-8">
        <div class="skew-content-bg"></div>
        <div class="skew-content">

        <!-- content -->
        <div class="media" style="left:200px;">
          <img src="../images/dsslogin.jpg" class="media-object"  >
   


        <!-- content -->

        
    </div>

</div>
</div>


<div class="container col-lg-6 col-md-3 col-xs-4" style="top:-40px;">
  
 

 
  <div class="media-body">
      
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <h1 style="font-family: serif; font-weight: bold;">DOCUMENT SECURITY SYSTEM</h1>
      <h1 style="font-family: serif; font-weight: bold;">USER'S MANUAL</h1>
       <br>
      <br>
      <br>
    <h3 class="media-heading">Login Form</h3>
    <p> Sign in the assign accounts to direct in the form menus.</p>
    <p> Please click the button below to show the form menus.<b style="color:blue;"><kbd>Region</kbd>,<kbd>Field Office</kbd>,<kbd>Official</kbd>.</b></p>
        <div class="caption">                     
                <p style="font-weight: bold;">1. If you are a region officer click the button.(Example: LPDD and ORED)</p>
                  <button data-toggle="modal" data-target="#itoggle" 
                 type="button" class="btn btn-success"><i class="fa fa-sitemap"></i> REGION</button>
        </div><br>
        <div class="caption">   
                <p style="font-weight: bold;">2. If you are a field office click button.(Example: All the FIELD OFFICES) </p>
                  <button data-toggle="modal" data-target="#fieldoffice"
                     type="button" class="btn btn-success"><i class="fa fa-bank"></i> FIELD OFFICES</button>       
        </div><br>
        <div class="caption">
                <p style="font-weight: bold;">3. If you are an official click the button.(EXAMPLE: The OFFICIALS.)</p>
                  <button data-toggle="modal" data-target="#officials"
                   type="button" class="btn btn-success"><i class="fa fa-street-view"></i> OFFICIAL</button>
        </div>
  </div>
</div>

                  <script>
	              function caLz()
	            {
	
		            	swal ("Nice ", "Successfully login", "success");
			      return false;
	            }
                  </script>
          
      </div>
      
    </div>
  </div>
<?php

            include ('modal/regionmodal.php');
            include ('modal/fieldmod.php');
            include ('modal/officialmod.php');

?>
     <!-- script -->
    <!-- script -->
    <script src="../Bootstrap_Files/libs/bootstrap/js/html5shiv.min.js"></script>
    <script src="../Bootstrap_Files/libs/bootstrapjs/respond.min.js"></script>
    <script src="../Bootstrap_Files/libs/bootstrap/js/jquery.min.js"></script>
    <script src="../Bootstrap_Files/libs/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    setTimeout(function() {
      $('.loader_bg').fadeToggle();
    }, 1500);
    </script>

</body>
</body>
</html>