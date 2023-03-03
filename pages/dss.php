<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DENR | DocumentSecuritySystem</title>
    <link rel="shortcut icon" href="../denrs.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Bootstrap_Files/libs/bootstrap/css/carousel.css" />
    <link rel="stylesheet" href="../Bootstrap_Files/libs/bootstrap/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<script src="../Bootstrap_Files/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
     <script type="text/javascript" src="../js/turn.min.js"></script>


     <style>
.cont {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: 350px;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color:#66ffc2;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.cont:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  white-space: nowrap; 
  color: black;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}


</style>
     
</head>
<body>

<div class="loader_bg">
      <div class="loader"></div>
  </div>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
        </button>
        
        <a style="height: 100px; width:100px;"  href="../DENRhomepage"><img style="height: 100px; width:100px;"
         class="navbar-brand" src="images/denr.png" alt=""></a>

         
         <label>
             <br>Republic of the Philippines<br><b> DEPARTMENT OF ENVIRONMENT AND NATURAL RESOURCES </b><p>Region 10, Macabalan, Cagayan de Oro City</p>   
         </label>
         
          
    </div>
</nav>
    <!-- /.navbar-header -->
    

    <!-- THUMBNAIL -->
<br>
<div class="container">
  <div class="row panel panel-default"><br>
      <div class="col-md-4">
        <div class="thumbnail">
         
            
           <img data-toggle="tooltip" data-placement="top" title="NOTE : for LPDD and ORED only." src="images/connected.png" style="width:100%; height:350px;">
           
              
           <div class="caption">
              
            
                <p>NOTE! If you are a region officer select REGION button.(Example: LPDD and ORED)</p>
               
                  <button data-toggle="modal" data-target="#itoggle" 
                 type="button" class="btn btn-success"><i class="fa fa-sitemap"></i> REGION</button>

                   
            </div>
        
        </div>
      </div>

        




            <div class="col-md-4">
        <div class="thumbnail">
            <img data-toggle="tooltip" data-placement="top" title="NOTE : FIELD OFFICES only." src="images/apartment.png"  style="width:100%; height:350px;">
            <div class="caption">
              
                <p>NOTE! If you are a field office select FIELD OFFICE button.(Example: All the FIELD OFFICES) </p>
                  <button data-toggle="modal" data-target="#fieldoffice"
                     type="button" class="btn btn-success"><i class="fa fa-bank"></i> FIELD OFFICES</button>
               
            </div>
        
        </div>
      </div>

      
      <div class="col-md-4">
        <div class="thumbnail">
            <img data-toggle="tooltip" data-placement="top" title="NOTE : For OFFICIALS ONLY." src="images/user.png"  style="width:100%; height:350px;">
            <div class="caption">
              
          
            <p>NOTE! If you are an official select OFFICIAL button.(EXAMPLE: The OFFICIALS.)</p>
                  <button data-toggle="modal" data-target="#officials"
                   type="button" class="btn btn-success"><i class="fa fa-street-view"></i> OFFICIAL</button>
                 
            </div>
        
        </div>
      </div>

<!-- INLINE THUMBNAIL UP TO THIS -->




<?php

            include ('modal/regionmodal.php');
            include ('modal/fieldmod.php');
            include ('modal/officialmod.php');

?>


<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    setTimeout(function() {
      $('.loader_bg').fadeToggle();
    }, 500);
</script>
    


    <!-- script -->
    <script src="../Bootstrap_Files/libs/bootstrap/js/html5shiv.min.js"></script>
    <script src="../Bootstrap_Files/libs/bootstrapjs/respond.min.js"></script>
    <script src="../Bootstrap_Files/libs/bootstrap/js/jquery.min.js"></script>
    <script src="../Bootstrap_Files/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>