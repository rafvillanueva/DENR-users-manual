
<!--Show Due Documents-->
<div class="form-popup" id="showdue">
    <div class="" style="margin-top: -20px;">
      <div class="">
      <div style="margin-top: 20px;"></div>
     <div class="panel">
        <div class="body">
           <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </div>
        </div>
    </div>
    		<div class="dataContainer">
    <center>

            <div id="easyPaginate">
            <div>
                <table>
                <tr>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                <img style="margin: 125px 20px 130px 20px;" width="100%" height="50%" src="dmsimg/today.jpg" />
                </th>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <h1 style="font-family: serif; font-weight: bold;">DOCUMENTS DUE TODAY</h1>
                        <p>You can see all the documents due today.</p>
                </th>
                </tr>
                </table>
            </div>
            <div>
                <table>
                <tr>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                <img style="margin: 125px 20px 130px 20px;" width="100%" height="50%" src="dmsimg/tomorow.jpg"/>
                </th>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <h1 style="font-family: serif; font-weight: bold;">DOCUMENTS DUE tomorrow</h1>
                        <p>You can see all the documents due tomorrow.</p>
                </th>
                </tr>
                </table>
            </div>
            <div>
                <table>
                <tr>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                <img style="margin: 125px 20px 130px 20px;" width="100%" height="50%" src="dmsimg/due.jpg"/>
                </th>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <h1 style="font-family: serif; font-weight: bold;">OVERDUE DOCUMENTS</h1>
                        <p>You can see all the records of overdue documents</p>
                </th>
                </tr>
                </table>
            </div>
            </div>
           </center>     
            </div>
   		</div>
		</div>
 </div>    			
</div>
 
 <!--ADD DOCUMENTS--> 
<div class="form-popup" id="addocs">
    <div class="" style="margin-top: -20px;">
      <div class="">
        
     <div class="panel">
        <div class="body">
            <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancel1" onclick="closepage()">Close</button>
            </div>
        </div>
    </div>

<div class="dataContainer">
    
          <center>
            <div id="easyPaginate1">
            <div>
                <table style="margin-bottom: 90px;">
                <tr>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                <img style="margin: 125px 20px 130px 20px;" width="100%" height="50%" src="dmsimg/typedoc.jpg" />
                </th>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <h1 style="font-family: serif; font-weight: bold;">SELECT THE TYPES OF DOCUMENTS YOU ADD</h1>
                        <a href="addocs/incomingcom.php" target="_blank" class="btn btn-danger">INCOMING COMMUNICATION</a><br>
                        <a href="addocs/idapproval.php" target="_blank" class="btn btn-danger">INTERNAL DOCUMENTS(For Approval)</a><br>
                        <a href="addocs/financialdocs.php" target="_blank" class="btn btn-danger">FINANCIAL DOCUMENTS</a><br>
                        <a href="addocs/idactivity.php" target="_blank" class="btn btn-danger">INTERNAL DOCUMENTS(Activity Reports)</a>
                </th>
                </tr>
                </table>
            </div>
            </div> 
            </center>
            
        </div>  
    </div>             
</div>
</div>

 <!--incoming view--> 
<div class="form-popup" id="views">
    <div class="" style="margin-top: -20px;">
      <div class="">
        
     <div class="panel">
        <div class="body">
            <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancel2" onclick="closeview()">Close</button>
            </div>
        </div>
    </div>
        <div class="dataContainer">
            <center>
            <div id="easyPaginate2">
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr  class="col-xs-12">
                    <th>
                      <center>
                      <h1 style="font-weight: bold;margin-left: 470px;">VIEW</h1>
                      <h4 style="margin-left: 470px;">You can see all the document or the progressing document</h4>
                      </center>
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 0px 20px 0px 20px;" width="100%" height="65%" src="dmsimg/incoming/view.jpg" />
                    </td>
                    </tr>
                    </table>
                </div>
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr class="col-xs-12">
                    <th>
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                      <td>
                    <img style="margin: 95px 20px 0px 20px;" width="100%" height="65%" src="dmsimg/incoming/view1.jpg" />
                    </td>
                    </tr>
                    </table>
                </div>
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr class="col-xs-12">
                    <th >
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 185px 20px 185px 20px;" width="100%" height="50%" src="dmsimg/incoming/view2.jpg" />
                    </td>
                    </tr>
                    </table>
                </div>
            </div> 
            </center>        
        </div>  
    </div>             
</div>
</div>
 <!--incoming edit--> 
<div class="form-popup" id="edit">
    <div class="" style="margin-top: -20px;">
      <div class="">
        
     <div class="panel">
        <div class="body">
            <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancel3" onclick="closeincomingedit()">Close</button>
            </div>
        </div>
    </div>
        <div class="dataContainer">
            <center>
            <div id="easyPaginate3">
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr  class="col-xs-12">
                    <th>
                      <center>
                      <h1 style="font-weight: bold; margin-left: 470px;">EDIT</h1>
                      <h5 style=" margin-left: 470px;">You can edit or input the form if you are a authorize personnesl.</h5>
                      <h5 style=" margin-left: 470px;">SAVE- Click the save icon if you are done in editing and inputting datas. </h5>
                      <h5 style=" margin-left: 470px;">HOME- Click the home icon to go back on the main page </h5>
                      </center>
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 0px 20px 0px 20px;" width="100%" height="65%" src="dmsimg/incoming/edit.jpg" />
                    </td>
                    </tr>
                    </table>
                </div>
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr class="col-xs-12">
                    <th>
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                      <td>
                    <img style="margin: 95px 20px 46px 20px;" width="100%" height="65%" src="dmsimg/incoming/edit1.jpg" />
                    </td>
                    </tr>
                    </table>
                </div>
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr class="col-xs-12">
                    <th >
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 208px 20px 208px 20px;" width="100%" height="50%" src="dmsimg/incoming/edit2.jpg" />
                     </td>
                    </tr>
                    </table>
                </div>
            </div> 
            </center>        
        </div>  
    </div>             
</div>
</div>
 <!--incoming track--> 
<div class="form-popup" id="track">
    <div class="" style="margin-top: -20px;">
      <div class="">
        
     <div class="panel">
        <div class="body">
            <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancel4" onclick="closetrack()">Close</button>
            </div>
        </div>
    </div>
        <div class="dataContainer">
            <center>
            <div id="easyPaginate3">
            <div>
                <table style="margin-bottom: 90px;">
                <tr>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                <img style="margin: 125px 20px 130px 20px;" width="100%" height="50%" src="dmsimg/incoming/timeline.jpg" />
                </th>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <h1 style="font-family: serif; font-weight: bold;">DOCUMENT TIMELINE/TRACKING</h1>
                        <p>You can see where the document is heading and when it has finished or has complied</p>
                        <h3>DOCUMENT REFERAL</h3>-you can see if the documents is refered to whom and it has recieved. 
                        <h3>COMPLIANCE INSTRUCTION</h3>-you can see here if the document is already complied
                    </th>
                    </tr>
                </table>
            </div>
            </div> 
            </center>
        </div>  
    </div>             
</div>
</div>
 <!--internal app view--> 
<div class="form-popup" id="views1">
    <div class="" style="margin-top: -20px;">       
     <div class="panel">
        <div class="body">
            <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancelin1" onclick="closeinview()">Close</button>
            </div>
        </div>
    </div>
        <div class="dataContainer">
            <center>
            <div id="easyPaginatein1">
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr  class="col-xs-12">
                    <th>
                      <center>
                      <h1 style="font-weight: bold; margin-left: 470px;">VIEW</h1>
                      <h4 style=" margin-left: 470px;">You can see all the document or the progressing document</h4>
                      </center>
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 0px 20px 0px 20px;" width="100%" height="65%" src="dmsimg/internalapproval/view.jpg" />
                    </td>
                    </tr>
                    </table>
                </div>
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr class="col-xs-12">
                    <th >
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 115px 20px 115px 20px;" width="100%" height="50%" src="dmsimg/internalapproval/view2.jpg" />
                    </td>
                    </tr>
                    </table>
                </div>
            </div> 
            </center>        
        </div>  
    </div> 
</div>         
 <!--internal app edit--> 
<div class="form-popup" id="internal1">
    <div class="" style="margin-top: -20px;">       
     <div class="panel">
        <div class="body">
            <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancelinternal" onclick="closeinternaledit()">Close</button>
            </div>
        </div>
    </div>
        <div class="dataContainer">
            <center>
            <div id="easyPaginatein2">
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr  class="col-xs-12">
                    <th>
                      <center>
                      <h1 style="font-weight: bold; margin-left: 470px;">EDIT</h1>
                      <h5 style="margin-left: 470px;">You can edit or input the form if you are a authorize personnesl.</h5>
                      <h5 style="margin-left: 470px;">SAVE- Click the save icon if you are done in editing and inputting datas. </h5>
                      <h5 style="margin-left: 470px;">HOME- Click the home icon to go back on the main page </h5>
                      </center>
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 0px 20px 0px 20px;" width="100%" height="60%" src="dmsimg/internalapproval/editin1.jpg" />
                    </td>
                    </tr>
                    </table>
                </div>
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr class="col-xs-12">
                    <th >
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 120px 20px 120px 20px;" width="100%" height="50%" src="dmsimg/internalapproval/editin2.jpg" />
                    </td>
                     </tr>
                    </table>
                </div>
            </div> 
            </center>        
        </div>  
    </div>             
</div>
 <!--internal app track--> 
<div class="form-popup" id="track1">
    <div class="" style="margin-top: -20px;">       
     <div class="panel">
        <div class="body">
            <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancelin3" onclick="closeintrack()">Close</button>
            </div>
        </div>
    </div>
        <div class="dataContainer">
            <center>
            <div id="easyPaginatein3">
            <div>
                <table style="margin-bottom: 90px;">
                    <tr>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                <img style="margin: 125px 20px 130px 20px;" width="100%" height="50%" src="dmsimg/internalapproval/timelinein.jpg" />
                </th>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <h1 style="font-family: serif; font-weight: bold;">DOCUMENT TIMELINE/TRACKING</h1>
                        <p>You can see where the document is heading and when it has finished or has complied</p>
                        <h3>DOCUMENT REFERAL</h3>-you can see if the documents is refered to whom and it has recieved. 
                        <h3>COMPLIANCE INSTRUCTION</h3>-you can see here if the document is already complied
                </th>
                </tr>
                </table>
            </div>
            </div> 
            </center>
        </div>  
    </div>             
</div>
 <!--fiancial view--> 
<div class="form-popup" id="finviews">
    <div class="" style="margin-top: -20px;">       
     <div class="panel">
        <div class="body">
            <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancelin1" onclick="closefinview()">Close</button>
            </div>
        </div>
    </div>
        <div class="dataContainer">
            <center>
            <div id="easyPaginatefin1">
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr  class="col-xs-12">
                    <th>
                      <center>
                      <h1 style="font-weight: bold; margin-left: 470px;">VIEW</h1>
                      <h4 style=" margin-left: 470px;">You can see all the document or the progressing document</h4>
                      </center>
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 0px 20px 0px 20px;" width="100%" height="65%" src="dmsimg/financial/view.jpg" />
                    </td>
                    </tr>
                    </table>
                </div>
            </div> 
            </center>        
        </div>  
    </div> 
</div>         
 <!--financial edit--> 
<div class="form-popup" id="finedit">
    <div class="" style="margin-top: -20px;">       
     <div class="panel">
        <div class="body">
            <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancelinternal" onclick="closefinedit()">Close</button>
            </div>
        </div>
    </div>
        <div class="dataContainer">
            <center>
            <div id="easyPaginatefin2">
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr  class="col-xs-12">
                    <th>
                      <center>
                      <h1 style="font-weight: bold; margin-left: 470px;">EDIT</h1>
                      <h5 style="margin-left: 470px;">You can edit or input the form if you are a authorize personnesl.</h5>
                      <h5 style="margin-left: 470px;">SAVE- Click the save icon if you are done in editing and inputting datas. </h5>
                      <h5 style="margin-left: 470px;">HOME- Click the home icon to go back on the main page </h5>
                      </center>
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 0px 20px 0px 20px;" width="100%" height="60%" src="dmsimg/financial/edit.jpg" />
                    </td>
                    </tr>
                    </table>
                </div>
            </div> 
            </center>        
        </div>  
    </div>             
</div>
 <!--financial track--> 
<div class="form-popup" id="fintrack">
    <div class="" style="margin-top: -20px;">       
     <div class="panel">
        <div class="body">
            <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancelin3" onclick="closefintrack()">Close</button>
            </div>
        </div>
    </div>
        <div class="dataContainer">
            <center>
            <div id="easyPaginatefin3">
            <div>
                <table style="margin-bottom: 90px;">
                    <tr>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                <img style="margin: 125px 20px 130px 20px;" width="100%" height="50%" src="dmsimg/financial/timeline.jpg" />
                </th>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <h1 style="font-family: serif; font-weight: bold;">DOCUMENT TIMELINE/TRACKING</h1>
                        <p>You can see where the document is heading and when it has finished or has complied</p>
                        <h3>DOCUMENT REFERAL</h3>-you can see if the documents is refered to whom and it has recieved. 
                        <h3>COMPLIANCE INSTRUCTION</h3>-you can see here if the document is already complied
                </th>
                </tr>
                </table>
            </div>
            </div> 
            </center>
        </div>  
    </div>             
</div>
 <!--internal activity view--> 
<div class="form-popup" id="activityviews">
    <div class="" style="margin-top: -20px;">       
     <div class="panel">
        <div class="body">
            <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancelin1" onclick="closeviewactivity()">Close</button>
            </div>
        </div>
    </div>
        <div class="dataContainer">
            <center>
            <div id="easyPaginateact1">
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr  class="col-xs-12">
                    <th>
                      <center>
                      <h1 style="font-weight: bold; margin-left: 470px;">VIEW</h1>
                      <h4 style=" margin-left: 470px;">You can see all the document or the progressing document</h4>
                      </center>
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 0px 20px 0px 20px;" width="100%" height="65%" src="dmsimg/internalactivity/view.jpg" />
                    </td>
                    </tr>
                    </table>
                </div>
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr class="col-xs-12">
                    <th >
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 155px 20px 156px 20px;" width="100%" height="60%" src="dmsimg/internalactivity/view1.jpg" />
                    </td>
                    </tr>
                    </table>
            </div> 
            </center>        
        </div>  
    </div> 
</div>         
 <!--internal activity edit--> 
<div class="form-popup" id="activityedit">
    <div class="" style="margin-top: -20px;">       
     <div class="panel">
        <div class="body">
            <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancelinternal" onclick="closeeditactivity()">Close</button>
            </div>
        </div>
    </div>
        <div class="dataContainer">
            <center>
            <div id="easyPaginateact2">
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr  class="col-xs-12">
                    <th>
                      <center>
                      <h1 style="font-weight: bold; margin-left: 470px;">EDIT</h1>
                      <h5 style="margin-left: 470px;">You can edit or input the form if you are a authorize personnesl.</h5>
                      <h5 style="margin-left: 470px;">SAVE- Click the save icon if you are done in editing and inputting datas. </h5>
                      <h5 style="margin-left: 470px;">HOME- Click the home icon to go back on the main page </h5>
                      </center>
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 0px 20px 0px 20px;" width="100%" height="60%" src="dmsimg/internalactivity/edit.jpg" />
                    </td>
                    </tr>
                    </table>
                </div>
                <div>
                    <table style="margin-bottom: 20px; width: 100%;">
                    <tr class="col-xs-12">
                    <th >
                    </th>
                    </tr>
                    <tr class="col-xs-12">
                    <td>
                    <img style="margin: 163px 20px 164px 20px;" width="100%" height="60%" src="dmsimg/internalactivity/edit1.jpg" />
                    </td>
                    </tr>
                    </table>
            </div> 
            </center>        
        </div>  
    </div>             
</div>
 <!--internal activity track--> 
<div class="form-popup" id="activitytrack">
    <div class="" style="margin-top: -20px;">       
     <div class="panel">
        <div class="body">
            <div style="margin-right: 10px; float: right;">
                <button type="button" class="btn cancelin3" onclick="activitytrack()">Close</button>
            </div>
        </div>
    </div>
        <div class="dataContainer">
            <center>
            <div id="easyPaginateact3">
            <div>
                <table style="margin-bottom: 90px;">
                    <tr>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                <img style="margin: 125px 20px 130px 20px;" width="100%" height="50%" src="dmsimg/internalactivity/timeline.jpg" />
                </th>
                <th class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <h1 style="font-family: serif; font-weight: bold;">DOCUMENT TIMELINE/TRACKING</h1>
                        <p>You can see where the document is heading and when it has finished or has complied</p>
                        <h3>DOCUMENT REFERAL</h3>-you can see if the documents is refered to whom and it has recieved. 
                        <h3>COMPLIANCE INSTRUCTION</h3>-you can see here if the document is already complied
                </th>
                </tr>
                </table>
            </div>
            </div> 
            </center>
        </div>  
    </div>             
</div>
<!--Paging-->
<script >
    $('#easyPaginate').easyPaginate({
    paginateElement: 'div',
    elementsPerPage: 1,
    effect: 'climb'
});
</script>
<script >
    $('#easyPaginate1').easyPaginate({
    paginateElement: 'div',
    elementsPerPage: 1,
    effect: 'climb'
});
</script>
<script >
    $('#easyPaginate2').easyPaginate({
    paginateElement: 'div',
    elementsPerPage: 1,
    effect: 'climb'
});
</script>
<script >
    $('#easyPaginate3').easyPaginate({
    paginateElement: 'div',
    elementsPerPage: 1,
    effect: 'climb'
});
</script>
<script >
    $('#easyPaginatein1').easyPaginate({
    paginateElement: 'div',
    elementsPerPage: 1,
    effect: 'climb'
});
</script><script >
    $('#easyPaginatein2').easyPaginate({
    paginateElement: 'div',
    elementsPerPage: 1,
    effect: 'climb'
});
</script><script >
    $('#easyPaginatein3').easyPaginate({
    paginateElement: 'div',
    elementsPerPage: 1,
    effect: 'climb'
});
</script>
<script >
    $('#easyPaginatefin1').easyPaginate({
    paginateElement: 'div',
    elementsPerPage: 1,
    effect: 'climb'
});
</script><script >
    $('#easyPaginatefin2').easyPaginate({
    paginateElement: 'div',
    elementsPerPage: 1,
    effect: 'climb'
});
</script><script >
    $('#easyPaginatefin3').easyPaginate({
    paginateElement: 'div',
    elementsPerPage: 1,
    effect: 'climb'
});
</script>
<script >
    $('#easyPaginateact1').easyPaginate({
    paginateElement: 'div',
    elementsPerPage: 1,
    effect: 'climb'
});
</script><script >
    $('#easyPaginateact2').easyPaginate({
    paginateElement: 'div',
    elementsPerPage: 1,
    effect: 'climb'
});
</script><script >
    $('#easyPaginateact3').easyPaginate({
    paginateElement: 'div',
    elementsPerPage: 1,
    effect: 'climb'
});
</script>