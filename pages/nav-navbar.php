<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/libs/bootstrap/css/carousel.css" />
    <link rel="stylesheet" href="../assets/libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../vendor/fontawesome-free/css/fontawesome.min.css">
</head>
<body>
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
         class="navbar-brand" src="../img/trsn.png" alt=""></a>

         
         <label>
             <br>Republic of the Philippines<br><b> DEPARTMENT OF ENVIRONMENT AND NATURAL RESOURCES </b><p>Region 10, Macabalan, Cagayan de Oro City</p>   
         </label>
         
          
    </div>
</nav>
    <!-- /.navbar-header -->
    

 <div id="sidebar">
  <div class="toggle-btn" onclick="toggleSidebar()"><a>
   <span></span>
   <span></span>
   <span></span>
  </a>
  </div>
  <ul>
  <li data-toggle="collapse" data-target="#demo">Pop up window  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="caret"></span></li>
  <div id="demo" class="collapse">
   <ul>
     <li>Step 1</li>
     <li>Step 2</li>
     <li>Step 3</li>
     <li>Step 4</li>
     <li>Step 5</li>
   </ul>
    </div>
   <li>Explore</li>
   <li>Sell</li>
   <li>Buy</li>
  </ul>
 </div>
 

 <script type="text/javascript">
  function toggleSidebar(){
   document.getElementById("sidebar").classList.toggle('active');
  }
 </script>
 <script>
$(document).ready(function(){
    $(".dropdown-toggle").dropdown();
});
</script>
 <!-- script -->
    <script src="../assets/libs/bootstrap/js/html5shiv.min.js"></script>
    <script src="../assets/libs/bootstrapjs/respond.min.js"></script>
    <script src="../assets/libs/bootstrap/js/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>