<!DOCTYPE html>
<html lang="en">
<head>

	<title>Titan Gym | Health Status</title>
  <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <style>
		 body{
			 font-family:'Montserrat',sans-serif;
		 }
    	.page-container .sidebar-menu #main-menu li#health_status > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}

    </style>
	
	<style>
 	#button1
	{
	width:126px;
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

		<h2>HEALTH STATUS</h2>

		<hr />
		<div class="table-responsive">
		<table class="table table-hover table-striped table-bordered">
			<thead>
				<tr><h2>
					<th>S No</th>
					<th>Member ID</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Date Of Birth</th>
					<th>Calories</th>
					<th>Height</th>
					<th>Weight</th>
					<th>Fat</th>
					<th>Action</th></h2>
				</tr>
			</thead>
				<tbody>

						<?php
							$sno=0;
							$filep = fopen("health_details.txt","r");
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
								$gender = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1=strpos($rem_string,"|");
								$dob = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"|");
								$contact = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"|");
								$doj = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"|");
								$calorie = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"|");
								$height = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"|");
								$weight = substr($rem_string,0,$pos1);
								$rem_string = substr($rem_string,$pos1+1);
								$pos1 = strpos($rem_string,"#");
								$fat = substr($rem_string,0,$pos1);
								$sno++;
											echo "<tr><td>".$sno."</td>";
							                echo "<td>" . $memID . "</td>";

							                echo "<td>" . $uname . "</td>";

							                echo "<td>" . $gender . "</td>";

							                echo "<td>" . $dob . "</td>";

							                echo "<td>" . $calorie . "</td>";

							                echo "<td>" . $height . "</td>";

							                echo "<td>" . $weight ."</td>";
							                
											echo "<td>" . $fat . "</td>";

											echo '<td> <a href=health_status_entry.php?id="'.$memID.'"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit Health Details"><i class="glyphicon glyphicon-pencil"></i></button>';
							}
						?>									
					</tbody>
				</table>
				</div>
    	</div>

    </body>
</html>

