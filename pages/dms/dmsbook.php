<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>DENR | DOCUMENT MONITORING SYSTEM</title>
	<link rel="shortcut icon" href="../../denrs.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../Bootstrap_Files/libs/bootstrap/css/carousel.css" />
    <link rel="stylesheet" href="../../Bootstrap_Files/libs/bootstrap/css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script type="text/javascript" src="../../Bootstrap_Files/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/turn.min.js"></script>
  <link rel="stylesheet" href="../../Bootstrap_Files/libs/bootstrap/js/jquery.min.js">
  <link rel="stylesheet" href="../../Bootstrap_Files/libs/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../../Bootstrap_Files/cssa/style.css">
	<link rel="stylesheet" href="../../Bootstrap_Files/cssa/loaders.css">

<script src="a/js/jquery.easyPaginate.js"></script>
<script src="a/js/jquery.easyPaginate1.js"></script>
	
	  
	<style>
  #easyPaginate img {display:block;margin-bottom:10px;}
  .easyPaginateNav a {padding:5px;}
  .easyPaginateNav a.current {font-weight:bold;text-decoration:underline;}
    body{
      overflow: hidden;
    }
    #flipbook{
      position: absolute;
      left: 30px;
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

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  width: 100%;
  height: 100%;
  display: none;
  bottom: 0;
  z-index: 9; 
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
            <li class="box"><a href="../../index.php">Home</a></li>
            <li class="box"><a href="../icten.php">ICTen Network Service Request System</a></li>
            <li class="box"><a href="../dssmain.php">Document Security System</a></li>
            <li class="box"><a href="../dmsmain.php">Document Monitoring System</a></li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
    <div class="loader_bg">
      <div class="loader"></div>
  </div>

<?php
include('paging.php');
?>

<!--flipbook-->
	<div id="flipbook">
		<div>
      <center><img style="margin-top: 30px; " width="40%" height="40%" src="logo/logo.png"></center>
      <center><h1 style="font-family: serif; font-weight: bold;">DOCUMENT MONITORING SYSTEM</h1><h1>USER'S MANUAL</h1></center>
		</div>
		<div style="border-right:2px solid #5f9ea0;">
			<img  width="100%" height="60%" src="dmsimg/main.jpg"><br><br>
		    <div class="container">
          <label style="font-weight: bold;" >1.HOME ICON</label>- Click home icon to return to the home page.<br>
          <label style="font-weight: bold;" >2.SEARCH BAR</label>- Input the characters you want to search and Enter.<br>
          <label style="font-weight: bold;" >3.SHOW DUE DOCUMENTS</label>- Click the button to show all the Due Documents<br>
          <a class="open1 btn btn-danger" onclick="openForm()">SHOW DUE DOCUMENTS</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click
        </div>
    </div>
		<div>
			<img src="dmsimg/main1.jpg"alt="" width="100%" height="60%"><br><br>
    <div class="container">
          <label style="font-weight: bold;" >4.ADD DOCUMENTS</label>- Click the button to show all the Types of Documents.<br>
          <a class="open2 btn btn-danger" onclick="openpage()">ADD DOCUMENTS</a>&nbsp;<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Please click<br><br>  
          <label style="font-weight: bold;" >5.TITLE DOCUMENTS</label>- Click the Title Document and all the document records will appear below.<br>-the other instructions are in the next page.
          
    </div>
			   
		</div> 
		<div style="border-right:2px solid #5f9ea0;">
			<img src=dmsimg/incoming/incomingdocu1.jpg alt="" width="100%" height="70%">
      <div class="container">
          <label style="font-weight: bold;" >1.INCOMING DOCUMENTS</label><p>-All the Records will appear the Document Number, Suject, Document deadline and ARTA deadline.</p>
          <label style="font-weight: bold;" >2.VIEW</label><p>-Click to View the process documents.</p>
          <a class="open3 btn btn-danger" style="width: 15%; margin-left: 10%;" onclick="openview()">VIEW</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click<br>
		  </div>
    </div>

		<div >
			<img src=dmsimg/incoming/incomingdocu2.jpg alt="" width="100%" height="70%">
      <div class="container">
          <label style="font-weight: bold;" >3.EDIT</label>- Click to edit the documents.<br>
          <a class="incomingopen btn btn-danger" style="width: 15%; margin-left: 10%;" onclick="openincomingedit()">EDIT</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click<br>
          <label style="font-weight: bold;" >4.TRACK</label>- Click to track the documents.<br>
         <a class="open5 btn btn-danger" style="width: 15%; margin-left: 10%;" onclick="opentrack()">TRACK</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click
        </div>
		</div>

		<div style="border-right:2px solid #5f9ea0;">
      <img src=dmsimg/internalapproval/internalapp1.jpg alt="" width="100%" height="60%">
      <img style="margin-left:20px;" src=dmsimg/internalapproval/advisory1.jpg alt="" width="97%" height="15%">
      <div class="container">
          <label style="font-weight: bold; margin-bottom: -5px;  margin-top: 10px;" >1.INTERNAL DOCUMENTS(FOR APPROVAL)</label><p style="margin-bottom: -5px;">-All the Records will appear the Document Number and Subject.</p><p>-if you click the internal documents(for approval) the ADVISORY will appear the image above.</p>
          <label style="font-weight: bold;" >2.VIEW</label>- Click to View the process documents.<br>
          <a style="margin-top: -5px; width: 15%; margin-left: 10%;" class="open6 btn btn-danger" onclick="openviewin1()">VIEW</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click<br>
      </div>
    </div>

		<div >
      <img src=dmsimg/internalapproval/internalapp2.jpg alt="" width="100%" height="60%">
      <img style="margin-right:20px;" src=dmsimg/internalapproval/advisory2.jpg alt="" width="97%" height="15%">
      <div class="container">
          <label style="font-weight: bold; margin-top: 10px;" >3.EDIT</label>- Click to edit the documents.<br>
          <a style="margin-top: -5px; width: 15%; margin-left: 10%;" class="internaledit btn btn-danger" onclick="openinternaledit()">EDIT</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click<br>
          <label style="font-weight: bold;" >4.TRACK</label>- Click to track the documents.<br>
          <a style="margin-top: -5px; width: 15%; margin-left: 10%;" class="openin8 btn btn-danger" onclick="opentrackin1()">TRACK</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click
        </div>
    </div>
    <div style="border-right:2px solid #5f9ea0;">
      <img src=dmsimg/financial/finance1.jpg alt="" width="100%" height="70%">
      <div class="container">
          <label style="font-weight: bold; margin-bottom: -5px;" >1.FIANANCIAL DOCUMENTS</label><p style="margin-bottom: -5px;">-All the Records will appear the Document Number and Subject.</p>
          <label style="font-weight: bold;" >2.VIEW</label>- Click to View the process documents.<br>
          <a style="margin-top: -5px; width: 15%; margin-left: 10%;" class="open6 btn btn-danger" onclick="openviewfin()">VIEW</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click<br>
      </div>
    </div>

    <div >
      <img src=dmsimg/financial/finance.jpg alt="" width="100%" height="70%">
      <div class="container">
          <label style="font-weight: bold;" >3.EDIT</label>- Click to edit the documents.<br>
          <a style="margin-top: -5px; width: 15%; margin-left: 10%;" class="internaledit btn btn-danger" onclick="openeditfin()">EDIT</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click<br>
          <label style="font-weight: bold;" >4.TRACK</label>- Click to track the documents.<br>
          <a style="margin-top: -5px; width: 15%; margin-left: 10%;" class="openin8 btn btn-danger" onclick="opentrackfin()">TRACK</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click
        </div>
    </div>
    <div style="border-right:2px solid #5f9ea0;">
      <img src=dmsimg/internalactivity/activity.jpg alt="" width="100%" height="70%">
      <div class="container">
          <label style="font-weight: bold; margin-bottom: -5px;" >1.INTERNAL DOCUMENTS(ACTIVITY REPORTS)</label><p style="margin-bottom: -5px;">-All the Records will appear the Document Number and Subject.</p>
          <label style="font-weight: bold;" >2.VIEW</label>- Click to View the process documents.<br>
          <a style="margin-top: -5px; width: 15%; margin-left: 10%;" class="open6 btn btn-danger" onclick="openviewactivity()">VIEW</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click<br>
      </div>
    </div>

    <div >
      <img src=dmsimg/internalactivity/activity1.jpg alt="" width="100%" height="70%">
      <div class="container">
          <label style="font-weight: bold;" >3.EDIT</label>- Click to edit the documents.<br>
          <a style="margin-top: -5px; width: 15%; margin-left: 10%;" class="internaledit btn btn-danger" onclick="openeditactivity()">EDIT</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click<br>
          <label style="font-weight: bold;" >4.TRACK</label>- Click to track the documents.<br>
          <a style="margin-top: -5px; width: 15%; margin-left: 10%;" class="openin8 btn btn-danger" onclick="opentrackactivity()">TRACK</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click
        </div>
    </div>
    <div style="border-right:2px solid #5f9ea0;">
      <img src=dmsimg/acted/acted.jpg alt="" width="100%" height="70%">
      <div class="container">
          <label style="font-weight: bold;">1.ACTED CASES</label><p>-All the Records will appear the Document Number and Subject.</p>
      </div>
    </div>

    <div >
      <img src=dmsimg/acted/acted1.jpg alt="" width="100%" height="70%">
      <div class="container">
          <label style="font-weight: bold;" >2.VIEW</label>- Click to edit the documents.<br>
          <a style=" width: 15%; margin-left: 10%;" class="internaledit btn btn-danger" onclick="openviewcases()">VIEW</a><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Please click<br>
        </div>
    </div>
    <div style="border-right:2px solid #5f9ea0;">
      <img src=dmsimg/summary.jpg alt="" width="100%" height="70%">
      <div class="container">
          <label style="font-weight: bold;">1.MONTHLY SUMMARY</label><p>-you can download all the summarries of documents  </p>
          <label style="font-weight: bold;">2.YEAR</label><p>-click and select the year </p>
          <label style="font-weight: bold;">3.MONTH</label><p>-click and select the month </p>
      </div>
    </div>

    <div >
      <img src=dmsimg/summary1.jpg alt="" width="100%" height="70%">
      <div class="container">
          <label style="font-weight: bold;" >4.DOWNLOAD</label><p>-Click the download button and wait in the step 5.</p>
          <label style="font-weight: bold;" >5.DOWNLOADED FILES</label><p> -Wait the dowloaded file to complete.</p>
        </div>
    </div>
    <div>
			<img src=../images/frontpage/backpage4.jpg alt="" width="100%" height="100%">
		</div>

		
	</div>



<script type="text/javascript">
	$('#flipbook').turn({
		width:1300,
    height:600,
		page:1,
		autoCenter:true,
		duration:2000
	})
</script>
<?php
include('a/js/modalscript.php');
?>
	<script src="assets/libs/bootstrap/js/html5shiv.min.js"></script>
  	<script src="assets/libs/bootstrapjs/respond.min.js"></script>
  	<script src="assets/libs/bootstrap/js/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    setTimeout(function() {
      $('.loader_bg').fadeToggle();
    }, 1500);
    </script>
</body>
</html>