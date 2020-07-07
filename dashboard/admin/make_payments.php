<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | Make Payment</title>
     <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
		body{
			font-family: 'Montserrat',sans-serif;
		}
    	.page-container .sidebar-menu #main-menu li#paymnt > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}
	#boxx
	{
		width:220px;
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

		<h3>MAKE PAYMENT</h3>

		<hr />
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
        <div class="a1-card-8 a1-light-gray" style="width:500px; height:220px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>MAKE PAYMENT</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="submit_payments.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">MEMBERSHIP ID:</td>
           	   <td height="35"><input type="text" name="m_id" id="boxx" value="<?php echo $memID; ?>" readonly/></td>
         	   </tr>
			   
			   <tr>
               <td height="35">NAME:</td>
               <td height="35"><input type="text" name="u_name" id="boxx" value="<?php echo $uname; ?>" placeholder="Member Name" maxlength="30" readonly/>
                 
             </tr>
             <tr>
               <td height="35">CURRENT PLAN</td>
               <td height="35"><input type="text" name="prevPlan" id="boxx" value="<?php echo $plan; ?>" readonly></td></td>
             </tr>
             <tr>
               <td height="35">SELECT NEW PLAN:</td>
               <td height="35"><select name="plan" id="boxx" required onchange="myplandetail(this.value)">
							<option value="">-- Please select --</option>
							<?php
								$filep = fopen("plan_details.txt","r");
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
									$ext1 = substr($line1,0,$pos1);
									$rem_string=substr($line1,$pos1+1);
									$pos1 = strpos($rem_string,"|");
									$ext2 = substr($rem_string,0,$pos1);
									$rem_string = substr($rem_string,$pos1+1);
									$pos1=strpos($rem_string,"|");
									$ext3 = substr($rem_string,0,$pos1);
									$rem_string = substr($rem_string,$pos1+1);
									$pos1=strpos($rem_string,"|");
									$ext4 = substr($rem_string,0,$pos1);
									$rem_string = substr($rem_string,$pos1+1);
									$pos1 = strpos($rem_string,"#");
									$ext5 = substr($rem_string,0,$pos1);
									
											echo "<option value=".$ext2.">".$ext2."</option>";
								}
							   
								// $query = "select * from plan where active='yes'";
							    
							    // //echo $query;
							    // $result = mysqli_query($con, $query);
							    
							    // if (mysqli_affected_rows($con) != 0) {
							    //     while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							    //         echo "<option value=" . $row['pid'] . ">" . $row['planName'] . "</option>";
							            
							    //     }
							    // }
							    
							?>
						</select></td></td>
             </tr>
             
		   
            
             <tr>
			  <table id="plandetls">
             </table>
			 
            
           </table></td>
		   
         </tr>
		  <tr>
               <td height="35">&nbsp;</td>
               <td height="35">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 
			     <input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="ADD PAYMENT" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
         </table>
       </form>
    </div>
    </div>   
		
		
		
		


		</div>


    </body>
</html>
