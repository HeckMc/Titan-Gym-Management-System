<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | Edit Member</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		body{
			font-family: 'Montserrat',sans-serif;
		}
 	#button1
	{
	width:126px;
	}
	#boxxe
	{
		width:230px;
	}
	.page-container .sidebar-menu #main-menu li#hassubopen > a {
	background-color: #2b303a;
	color: #ffffff;
	}

	</style>

</head>
    <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="../../images/logo.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	

					</div>
				
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">
							<li>
								
							</li>
						</ul>
					</div>
			</div>
			<h3>EDIT MEMBER DETAILS</h3>
			<hr/>
			<?php
	    	$id = $_GET['id'];
			$filep = fopen("member_details.txt","r");
							$counter=0;
							while(! feof($filep)){
								$counter = $counter+1;
								$line1 = fgets($filep);
								if(feof($filep)){
									break;
								}
								if($line1[0]=='*'){  //This means that the record is deleted , so no need to display
									$counter = $counter - 1;
									continue;
								}
								$pos1 = strpos($line1,"|");
								$memID = substr($line1,0,$pos1);
								$rem_string=substr($line1,$pos1+1);
								$pos1 = strpos($rem_string,"|");
								$uname = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1=strpos($rem_string,"|");
								$stname = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1=strpos($rem_string,"|");
								$city = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"|");
								$zipcode = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"|");
								$state = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"|");
								$gender = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"|");
								$dob = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"|");
								$mobNo = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"|");
								$email = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"|");
								$doj = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"#");
								$plan = substr($rem_string,0,$pos1);
								if($id == '"'.$memID.'"'){
								break;
							}
						}	
			?>


			
			
			<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:600px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>EDIT MEMBER PROFILE</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="edit_mem_submit.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">User ID:</td>
           	   <td height="35"><input id="boxxe" type="text" name="uid" readonly required value=<?php echo $memID?>></td>
         	   </tr>
             <tr>
               <td height="35">NAME:</td>
               <td height="35"><input id="boxxe" type="text" name="uname" value='<?php echo $uname?>'></td>
             </tr>
             <tr>
               <td height="35">GENDER:</td>
               <td height="35"><select id="boxxe" name="gender" id="gender" required>

						<option <?php if($gender == 'Male'){echo("selected");}?> value="Male">Male</option>
						<option <?php if($gender == 'Female'){echo("selected");}?> value="Female">Female</option>
						</select></td><br>
             </tr>
			  <tr>
               <td height="35">MOBILE:</td>
               <td height="35"><input id="boxxe" type="number" name="phone" maxlength="10" value=<?php echo $mobNo?>></td>
             </tr>
             <tr>
               <td height="35">EMAIL:</td>
               <td height="35"><input id="boxxe" type="email" name="email" required value=<?php echo $email?>></td>
             </tr>
			 <tr>
               <td height="35">DATE OF BIRTH:</td>
               <td height="35"><input type="date" id="boxxe" name="dob" value=<?php echo $dob?>></td>
             </tr>
			 <tr>
               <td height="35">JOINING DATE:</td>
               <td height="35"><input type="date" id="boxxe" name="jdate" value=<?php echo $doj?>></td>
             </tr>

			<tr>
               <td height="35">STREET NAME:</td>
               <td height="35"><input type="text" id="boxxe" name="stname" value='<?php echo $stname?>'></td>
             </tr>

			 <tr>
               <td height="35">STATE:</td>
               <td height="35"><input type="text" id="boxxe" name="state" value='<?php echo $state?>'></td>
             </tr>
			 <tr>
               <td height="35">CITY:</td>
               <td height="35"><input type="text" id="boxxe" name="city" value='<?php echo $city?>'></td>
             </tr>
             <tr>
               <td height="35">ZIPCODE:</td>
               <td height="35"><input type="text" id="boxxe" name="zipcode" value='<?php echo $zipcode?>'></td>
             </tr>
             <br>
            
             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="UPDATE" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   
			
			
			
			
					

    	</div>

  
</body>
</html>	


