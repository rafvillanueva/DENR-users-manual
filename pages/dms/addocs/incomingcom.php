<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>DENR | DOCUMENT MONITORING SYSTEM</title>
	<link rel="shortcut icon" href="../../../denrs.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../../Bootstrap_Files/libs/bootstrap/css/carousel.css" />
    <link rel="stylesheet" href="../../../Bootstrap_Files/libs/bootstrap/css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script type="text/javascript" src="../../../Bootstrap_Files/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="../../../js/turn.min.js"></script>
	<link rel="stylesheet" href="../../../Bootstrap_Files/libs/bootstrap/js/jquery.min.js">

	<link rel="stylesheet" href="../../../Bootstrap_Files/cssa/style.css">
	
	<style>
		body{
			overflow: hidden;
		}
		#flipbook{
			position: absolute;
			left: 200px;
		}
		#flipbook .page{
			background: #fff;
		}
		#flipbook .shadow,
        #flipbook.shadow{
          -webkit-box-shadow: 0 4px 10px #666;
          -moz-box-shadow: 0 4px 10px #666;
          -ms-box-shadow: 0 4px 10px #666;
          -o-box-shadow: 0 4px 10px #666;
          box-shadow: 0px 4px 10px 1px #666;
        }
      
	.box {
		border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #3498db;
	padding: 14px 10px;
	width: 300px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: .5s;
	cursor: pointer;
	}

	.box:hover{
		width:350px;
		background: #2ecc71;
	}



	</style>
</head>
<body>
	<br>


	<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>
    <div class="menu">
      <div>
        <div>
          <ul>
          	<li class="box"><a href="../../../index.php">Home</a></li>
            <li class="box"><a href="../../icten.php">ICTen Network Service Request System</a></li>
            <li class="box"><a href="../../dssmain.php">Document Security System</a></li>
            <li class="box"><a href="../../dmsmain.php">Document Monitoring System</a></li>
            <li class="box"><a href="../../dss.php">Return</a></li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>

	<div id="flipbook">
		<div>
      		<center><img style="margin-top: 30px; " width="40%" height="40%" src="../logo/logo.png"></center>
      		<center><h1 style="font-family: serif; font-weight: bold;">INCOMING DOCUMENTS</h1><h2 style="font-family: serif; font-weight: bold;">DOCUMENT MONITORING SYSTEM</h2><h2>USER'S MANUAL</h2></center>
		</div>

		<div style="border-right:2px solid #5f9ea0;">
			<img  width="100%" height="100%" src="../images/COR(agent contractor etc)/step1.jpg">
		</div>

		
	</div>


<script type="text/javascript">
	$('#flipbook').turn({
		width:1000,
        height:600,
		page:1,
		autoCenter:true,
		duration:2000
	})
</script>


	<script src="../../../Bootstrap_Files/libs/bootstrap/js/html5shiv.min.js"></script>
  	<script src="../../../Bootstrap_Files/libs/bootstrapjs/respond.min.js"></script>
  	<script src="../../../Bootstrap_Files/libs/bootstrap/js/jquery.min.js"></script>
    <script src="../../../Bootstrap_Files/libs/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>