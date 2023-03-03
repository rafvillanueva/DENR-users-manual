<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
    .modalheader
    {
	background: #54bae3;
    color: white;
  
    }
    .modalfooter
    {
	background:#54bae3;
    color: white;
  
    }
    
    </style>
</head>
<body>
    <!-- Modal -->
  <div class="modal fade" id="fieldoffice" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header modalheader">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Field Office</h4>
        </div>
        <div class="modal-body">
          

                 <div class="panel panel-default">
                      <div class="panel-heading" style="color:red;"> <span class="fa fa-user"> CTALAKAG | CMANOLOFORTICH | CVALENCIACITY | CDONCARLOS | PCAMIGUIN | COROQUITACITY | ETC..  </span></div>
                        <div class="panel-body">
                      <img width="100%" src="images/forms1.jpg">
                  <br>
                  <br>
                  <br>
                          <div class="row">
                          
                          
                            <div class="col-lg-4">

                                <form action="fieldoffice/treecutpermit.php" method="post" class="form-group" target="_blank">
                                  <button  type="submit" class="div3 font" >Tree Cutting Permit for DPWH</button>
                                </form>
                            </div>
                            
                            <div class="col-lg-4">


                            </div>

                                
                            <div class="col-lg-4">
                          
                                <form action="fieldoffice/viewreport.php" method="post" class="form-group" target="_blank">
                                   <button  type="submit" class="div3 font" >View Summary Report</button>
                                </form>
                            </div>
                           
                      </div>

                   </div>
                  </div>


<!-- end row -->

        </div>
        <div class="modal-footer modalfooter">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>