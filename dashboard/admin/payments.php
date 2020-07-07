<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | Payments</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
		body{
			font-family:'Montserrat',sans-serif;
		}
    	.page-container .sidebar-menu #main-menu li#paymnt > a {
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

		<h2>PAYMENTS</h2>

		<hr />
		<div class="table-responsive">
		<table class="table table-hover table-striped table-bordered" id="table-1" border=1>
			<thead>
				<tr>
					<th>S No </th>
					<th>Member ID</th>
					<th>Name</th>
					<th>Phone</th>
					<th>E-Mail</th>
					<th>Gender</th>
					<th>Current Plan</th>
					<th>Action</th>
				</tr>
			</thead>

				<tbody>

				<?php
					$sno=0;
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
						$sno++;
							echo "<tr><td>" .$sno. "</td>";
							echo "<td>" . $memID . "</td>";
							echo "<td>" . $uname . "</td>";
							echo "<td>" . $mobNo . "</td>";
							echo "<td>" . $email . "</td>";
							echo "<td>" . $gender . "</td>";
							echo "<td>" . $plan . ' Plan'."</td>";
							echo '<td> <a href=make_payments.php?id="'.$memID.'"><button style="background:blue;" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Add Payment"><i class="glyphicon glyphicon-plus"></i></button>';
							     }
							

					?>									
				</tbody>

		</table>
</div>

    	</div>

    </body>
</html>


