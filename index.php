<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DENR | NSRS User's Manual</title>
  <link rel="shortcut icon" href="denrs.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Bootstrap_Files/libs/bootstrap/css/carousel.css" />
  <link rel="stylesheet" href="Bootstrap_Files/libs/bootstrap/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="js/jquery-3.2.1.min.js">
  <link rel="stylesheet" href="Bootstrap_Files/cssa/style.css">
  <link rel="stylesheet" href="Bootstrap_Files/cssa/home.css">
  <script type="text/javascript" src="js/turn.min.js"></script>

  <style>
 /* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  border: none;
  cursor: pointer;
  opacity: 0.8;
}

/* The popup form - hidden by default */
.form-popup {
  width: 100%;
  height: 100%;
  display: none;
  position: fixed;
  bottom: 0;
  border: 3px solid #f1f1f1;
  z-index: 9;
  background: var(--overlay-color); 
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}


/* Add styles to the form container */
.form-container {
 
  padding: 10px;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
  </style>
</head> 
 
<body>

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
            
            <img class="col-lg-5 col-md-5 col-sm-6 col-xs-8" style="position: absolute; top:100px; left: 150px;"  src="images/logo.png" height="40%" width="100%" alt=""> 
            <br>
            <br>
            <br>
            
               
                  <h4 class="col-lg-12 col-md-10 col-sm-8 col-xs-12" style="margin:0;padding:0;position: absolute;top:350px; left: 0;">DEPARTMENT OF ENVIRONMENT AND NATURAL RESOURCES</h4>
           
                <h4 class="col-lg-12 col-md-10 col-sm-8 col-xs-12" style="margin:0;padding:0;position: absolute;top:400px; left: 60px;">Region 10, Macabalan,Cagayan de Oro City 9000</h4>
            
            <div class="col-lg-12 col-md-10 col-xs-11" style="margin:0;padding:0;position: absolute; text-align:center; bottom:100px; left: -50px;" class="container col-lg-12 col-md-12 col-xs-2">
               
                  <button class="open-button bttn bttn-white" onclick="openForm()"> Select user manual</button>



            </div>
        </div>

    </div>

 </div>


</div>
 <div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <div class="menu" style="padding-top: 100px;">
          <ul>
            <li class="box"><a href="pages/ICTEN" style="color: white;  text-decoration: none;">ICTen Network Service Request System</a></li>
            <li class="box"><a href="pages/DSSmain" style="color: white;  text-decoration: none;">Document Security System</a></li>
            <li class="box"><a href="pages/DMSmain" style="color: white;  text-decoration: none;">Document Monitoring System</a></li>
            <li class="box" onclick="closeForm()"><a href="" style="color: white;  text-decoration: none;">Close</a></li>
            
          </ul>
        </div>
</div>   <!--  -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    setTimeout(function() {
      $('.loader_bg').fadeToggle();
    }, 1500);
</script>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


    <script src="assets/libs/bootstrap/js/html5shiv.min.js"></script>
    <script src="assets/libs/bootstrapjs/respond.min.js"></script>
    <script src="assets/libs/bootstrap/js/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>