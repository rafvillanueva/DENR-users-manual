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
      		<center><h1 style="font-family: serif; font-weight: bold;">INTERNAL DOCUMENTS</h1><h4>(For Approval)</h4><h2 style="font-family: serif; font-weight: bold;">DOCUMENT MONITORING SYSTEM</h2><h2>USER'S MANUAL</h2></center>
		</div>
		<div>
			<img  width="100%" height="100%" src="images/idapproval/approval.jpg"><br><br>
		 </div>
		 <div>
			<img  width="100%" height="100%" src="images/idapproval/approval1.jpg"><br><br>
		 </div>
		<div >
			<h4 style="margin-left: 10px; font-weight: bold;">1. CREATOR'S INPUT</h4>
			<img  width="100%" height="45%" src="images/idapproval/create.jpg"><br><br>
			<div class="container">
		          <label style="font-weight: bold;" >1.CREATOR</label><p>- name of the creator</p>
		          <label style="font-weight: bold;" >2.DATE CREATED</label><p>- input the date</p>
		          <label style="font-weight: bold;" >3.DOCUMENT CLASSIFICATIO</label><p>- there is a two types of document confidential and circulation</p>
		          <label style="font-weight: bold;" >4.ORIGINAL DOCUMENT</label><p>- uplaod the original file in this section click the upload file.</p>
		         
		    </div>
		 </div>
		 <div>
		 	<h3 style="margin-top: 39px;"></h3>
			<img  width="100%" height="45%" src="images/idapproval/create1.jpg"><br><br>
			<div class="container">
				<label style="font-weight: bold;" >5.DOCUMENT NUMBER</label><p>- the document number is auto generate. it will give you a document number.</p>
		        <label style="font-weight: bold;" >6.TIME CREATE:</label><p>- input the time you created the file.0</p>
		        <label style="font-weight: bold;" >7.LEVEL OF PRIORITY</label><p>- type of level low, normal and high</p>
		        <label style="font-weight: bold;" >8.SUBJECT</label><p>- Input the subject of your created file.</p>
		        <label style="font-weight: bold;" >SAVE ICON</label><p>- Click the save icon if you are done. </p>
		    </div>
		 </div>
		 <div>
			<h4 style="margin-left: 10px; font-weight: bold;">2. FORWARD THE DOCUMENT FOR APPROVAL</h4>
			<img  width="100%" height="45%" src="images/idapproval/revision.jpg"><br><br>
			<div class="container">
		          <label style="font-weight: bold;" >1.DATE RECIEVED BY OARD </label>-OARD can input the date after they recieved.<br>
		          <label style="font-weight: bold; margin-left: 20px;">1A.DATE RETURNED TO CREATOR FOR REVISION</label><p style="margin-left: 20px;">-The OARD will input the date returned if the document need to be revise.</p>
		          <label style="font-weight: bold; margin-left: 20px;">1B.DATE RECEIVED BY OARD AFTER REVISION</label><p style="margin-left: 20px;">-The OARD will input the date after they recieved the revised document.</p>
		          <label style="font-weight: bold;" >2.DATE RECIEVED BY ORED </label>-ORED can input the date after OARD recieved.<br>
		          <label style="font-weight: bold; margin-left: 20px;">2A.DATE RETURNED TO CREATOR FOR REVISION</label><p style="margin-left: 20px;">-The ORED will input the date returned if the document need to be revise.</p>
		          <label style="font-weight: bold; margin-left: 20px;">2B.DATE RECEIVED BY ORED AFTER REVISION</label><p style="margin-left: 20px;">-The ORED will input the date after they recieved the revised document.</p>
		         
		    </div>
		 </div>
		 <div>
		 	<h3 style="margin-top: 39px;"></h3>
			<img  width="100%" height="45%" src="images/idapproval/revision1.jpg"><br><br>
			<div class="container">
				<label style="font-weight: bold;" >3. DATE RECEIVED BY CREATOR</label><p>- Creator will input the date after the OARD and ORED approved the document.</p>
		        <label style="font-weight: bold;" >4. FINAL ACTION BY THE CREATOR</label><p>- If the document is already approved click the uplaod file button and upload</p><p> the file and input the date. </p>
		        <label style="font-weight: bold;" >5. DATE RELEASED</label><p>- Input the date released or it  will be send.</p>
		        <label style="font-weight: bold; margin-left: 20px;">5A.MODE</label><p style="margin-left: 20px;">- Choose which method to send the document.  </p>
		         
		 	</div>
		 </div>
		 <div>
			<img src=../../images/frontpage/backpage4.jpg alt="" width="100%" height="100%">
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