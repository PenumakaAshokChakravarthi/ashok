<?php

		include_once 'header.php';
		   ?>

	<!-- #page-title -->
	<section id="page-title"  style="background: url(img/resources/about.jpg) center center no-repeat;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- .title -->
					<div class="title pull-left">
						<h1>Complaint Form</h1>
					</div> <!-- /.title -->
					<!-- .page-breadcumb -->
					<div class="page-breadcumb pull-right">
						<i class="fa fa-home"></i> <a href="http://www.vignanlara.org">Vignan's Lara</a> <i class="fa fa-angle-right"></i> <span><a href="grievancehome.php">Grievance Redressal</a></span>
					</div> <!-- /.page-breadcumb -->
				</div>
			</div>
		</div>
	</section> <!-- /#page-title -->
	
	<!-- #blog-post -->
	<section id="blog-post">
		<div class="container">
			<div class="row">

				
			
				<!-- .blog-content -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog-content">
					<!-- article -->
					<article >
						
						<div class="post-meta clearfix">
							
								
							<!--<div class="post-title">
								<h2>Form for lodging complaints of SC/ST Students / Teaching / Non-Teaching Staff</h2>
								
							</div>-->

							<!--<center><h2><font size="" color="#FF0033">Form for lodging complaints of SC/ST Students / Teaching / Non-Teaching Staff</font></h2></center><br><br>-->
	<form  id="contactform" action="redresselnext.php" name="f" method="post" onSubmit="return chklogfrm(f.regno.value)"> 
			
        
      <div  class="form">

    		<center>
    		<table><tr><td><p class="contact"><label for="name">Register No</label></td><td width="100"></td><td><input id="name" name="regno" placeholder="Enter Register Number" required="" tabindex="1" type="text"> </p></td></tr>
					
				<!--<tr><td><p class="contact"><label for="name">Gender </label></td><td width="100"></td><td><select class="select-style gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select></p></td></tr>

 <tr><td><p class="contact"><label for="name">Branch Sought</label></td><td width="100"></td><td><select class="select-style gender" name="branch" required>
            <option value="">Select Branch</option>
			 <option value="applied">Applied</option>

			 <option value="biotesh">Biotech</option>
            <option value="bsh">BSH</option>
<option value="chemical">Chemical</option>
			 <option value="Civil">Civil</option>
            <option value="CSE">CSE</option>
            
            
            <option value="ECE">ECE</option>
			<option value="EEE">EEE</option>
			<option value="IT">IT</option>
			<option value="Mechanical">Mechanical</option>
			<option value="mba">MBA</option>
			 <option value="others">Others</option>
            </select></p></td></tr>

<tr><td><p class="contact"><label for="name">Year</label></td><td width="100"></td><td><select class="select-style gender" name="exam">
            <option value="">Select Year if you are Student</option>
            <option value="i">I Year</option>
            <option value="ii">II Year</option>
            <option value="iii">III Year</option>
			<option value="iv">IV Year</option>
            </select></p></td></tr>

			

<tr><td><p class="contact" ><label for="name">Reg No./ Emp Id</label></td><td width="100"></td><td>
    			<input id="name" name="rank" placeholder="Enter Reg No / Emp Id" required="" tabindex="1" type="text"></p></td></tr> 


				<tr><td><p class="contact" ><label for="name">Nature of Complaint</label></td><td width="100"></td><td>
    			<textarea rows="4" cols="50" name="comp" placeholder="Enter Complaint" required="" tabindex="1"></textarea></p> </td></tr>-->



				






    		<tr><td></td><td width="100"></td><td>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Proceed" type="submit"> </td></tr></table></center>
			
			</div> 
   </form> 

						<!--<a href="#" class="read-more">View Profile</a>-->
					</article> <!-- /article -->

					<!-- article -->
					

				</div> <!-- /.blog-content -->

				<!-- .sidebar -->

			</div>
		</div>
	</section> <!-- /#blog-post -->
<div id="logerr">
		<?php
		
			if(isset($_SESSION['ERRMSG_ARR']))
			{
					if($_SESSION['ERRMSG_ARR']!='')
					{
							echo $_SESSION['ERRMSG_ARR'];
							unset($_SESSION['ERRMSG_ARR']);
					}
			}
		
		?>
	</div>


<script type="text/javascript">
		function chklogfrm(regno)
		{
			//alert("sdf");
			if(regno=="")
			{
			//alert("sdf");
				document.getElementById("logerr").innerHTML="<font color='#FF0000' style='text-align:justify;font-size:11px;font-family:Verdana, Arial, Helvetica, sans-serif'><b>Required fields are empty.</b></font>";
				return false;
			}
			/*if(vmd.length!=9)
			{
				document.getElementById("logerr").innerHTML="<font color='#820000' style='text-align:justify;font-size:11px;font-family:Verdana, Arial, Helvetica, sans-serif'>Invalid VMID/PASSWORD</font>";
				return false;
			}*/
		}
	</script>




	<!-- footer -->
<?php

		include_once 'footer.php';
		   ?>
	
  <style>
  UL1 {
	MARGIN: 10px 0px 15px; LIST-STYLE-TYPE: none
}
UL1 LI {
	PADDING-RIGHT: 0px; PADDING-LEFT: 17px; BACKGROUND: url(img/list_marker.gif) no-repeat 0px 6px; PADDING-BOTTOM: 1px; COLOR: #333; LINE-HEIGHT: 21px; PADDING-TOP: 0px; font-size: 14px;
}
 UL1 LI A {
	COLOR: #333;! important
}
</style>

 <script language="JavaScript">
<!--
function openPop(form) {
var url=(form.dir.options[form.dir.selectedIndex].value);
myWindow = window.open(url, 'myWindow', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no,width=500,height=400');
}
// -->
</script>


  <script type="text/javascript">
<!--
function popup(url) 
{
 var width  = 700;
 var height = 500;


 var left   = (screen.width  - width)/2;
 var top    = (screen.height - height)/2;
 var params = 'width='+width+', height='+height;
 params += ', top='+top+', left='+left;
 params += ', directories=no';
 params += ', location=no';
 params += ', menubar=no';
 params += ', resizable=yes';
 params += ', scrollbars=yes';
 params += ', status=no';
 params += ', toolbar=no';
 newwin=window.open(url,'windowname5', params);
 if (window.focus) {newwin.focus()}
 return false;
}
// -->
</script>
