<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | Detail Routine</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<style>
    	body{
			font-family:'Montserrat',sans-serif;
		}
		.page-container .sidebar-menu #main-menu li#routinehassubopen > a {
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
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>
				<h2>Routine Detail</h2>
				<hr/>

		<?php
		$name=$_GET['id'];
		$fp = fopen("routine_details.txt","r");
					$count=0;
					while(!feof($fp)){
						$count++;
						$line1 = fgets($fp);
						if(feof($fp)){
							break;
						}
						if($line1[0]=='*'){
							$count--;
							continue;
						}
						$pos1 = strpos($line1,"|");
						$rname = substr($line1,0,$pos1);
						$rem_string = substr($line1,$pos1+1);
						$pos1 = strpos($rem_string,"|");
						$day1 = substr($rem_string,0,$pos1);
						$rem_string = substr($rem_string,$pos1+1);
						$pos1 = strpos($rem_string,"|");
						$day2 = substr($rem_string,0,$pos1);
						$rem_string = substr($rem_string,$pos1+1);
						$pos1 = strpos($rem_string,"|");
						$day3 = substr($rem_string,0,$pos1);
						$rem_string = substr($rem_string,$pos1+1);
						$pos1 = strpos($rem_string,"|");
						$day4 = substr($rem_string,0,$pos1);
						$rem_string = substr($rem_string,$pos1+1);
						$pos1 = strpos($rem_string,"|");
						$day5 = substr($rem_string,0,$pos1);
						$rem_string = substr($rem_string,$pos1+1);
						$pos1 = strpos($rem_string,"#");
						$day6 = substr($rem_string,0,$pos1);
						if($name == $rname){
							break;
						}
					}
		?>

		<div id=print>
		<table width="619" height="673" border="1" align="center">
  <tr>
    <td height="87" colspan="2" align="center"><strong>Routine Name:&nbsp;&nbsp;&nbsp;<?php echo $rname ?> </strong>
    </tr>
  <tr>
    <td width="186" height="103">Day 1:</td>
    <td width="417"><?php echo $day1 ?></td>
  </tr>
  <tr>
    <td height="96">Day 2:</td>
    <td><?php echo $day2 ?></td>
  </tr>
  <tr>
    <td height="87">Day 3:</td>
    <td><?php echo $day3 ?></td>
  </tr>
  <tr>
    <td height="92">Day 4:</td>
    <td><?php echo $day4 ?></td>
  </tr>
  <tr>
    <td height="84">Day 5:</td>
    <td><?php echo $day5 ?></td>
  </tr>
  <tr>
    <td height="75">Day 6:</td>
    <td><?php echo $day6 ?></td>
  </tr>
        </table></div>
   	</div>

    </body>
	<div class="back-button">
	<a href="viewroutine.php" class="w3-btn w3-black">Go Back</a>
	</div>
	<style>
		.back-button{
			position: relative;
			left:43%;
		}
	</style>
</html>


										
