<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | View Routine</title>
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
			font-family: 'Montserrat',sans-serif;
		}
	#boxxe
	{
		width:126px;
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
							
							</li>
						</ul>
						
					</div>
					
				</div>

		

		
			<h2>ROUTINES</h2>

		<hr />
		<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
		<thead>
				<tr>
					<th>Sl.No</th>
					<th>Routine Name</th>
					<th>Routine Details</th>
					<th>Delete Routine </th>
				</tr>
		</thead>
				<tbody>

				<?php
					$sno =0;
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
						$sno++;
						echo "<tr><td>".$sno."</td>";
						echo "<td>" . $rname . "</td>";   
						echo '<td><a href="editdetailroutine.php?id='.$rname.'"><input type="button" class="a1-btn a1-blue" value="Edit Details" ></a></td>';
						echo '<td><a href="deleteroutine.php?id='.$rname.'"><input type="button" class="a1-btn a1-blue" value = "Delete Routine"></a></td></tr>';
					}
					?>									
				</tbody>

		</table>
</div>

				
		
		
		
		
		
		
		

			

    	</div>

    </body>
</html>


										
