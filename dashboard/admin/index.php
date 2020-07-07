<!DOCTYPE html>
<html lang="en">
<head> 

    
    <title>Titan Gym | Dashboard </title>

    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <style>
    	.page-container .sidebar-menu #main-menu li#dash > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}
		.contents{
			border:1px solid black;
		}
		.para{
			background: #fff;
  			margin-bottom: 1px;
  			padding: 5px;
			font-size: 14px;
			
		}
		.para h2{
			font-size:30px;
			color:purple;
			text-decoration:underline;
			font-family: "Lucida Console", Courier, monospace;
		}
		.para p{
			font-size: 15px;
			border: 1px;
		}
		.details p{
			
			font-size:20px;
		}
		body{
			font-family: 'Montserrat',sans-serif;
		}
		.heading{
			font-weight:900;
			text-align:center;
			color:red;
			font-family: 'Alegreya SC';
			text-decoration:underline;
		}
	</style>
</head>
    <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a>
					<img src="../../images/logo.png" alt="Image" width="192" height="100" />
				</a>
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					
				</a>
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
			<div class="main-head">
			<h2>TITAN GYM</h2>
			</div>
			<hr>
			<div class="heading"><h2><strong>OPEN FROM 7AM-9PM EVERY DAY</strong></h2><br></div>
			<div class="contents">	
				<div class ="para">		
					<p>Titan Fitness gym membership only gives you access to Titan Fitness indoor gym. It is one of the biggest indoor gyms in Bangalore.
				</div>
				<div class ="para"> 
					<p>If classes aren’t to your liking, or you feel you need to squeeze in just one more session between martial art or fitness workouts, then our well equipped gym is ideal for you. 
				</div>
				<div class ="para">	
					<p>Qualified instructors are on hand at all times in case you get into difficulty, and are available for personal training should you want to up your game even more.
				</div>
				<div class ="para">	
					<p>You can also train in comfort as Titan gym is fully air-conditioned, which we are sure you will welcome. However don’t expect it to be blasting cold as we like to keep your body’s nice and warm to help you during your workout.
				</div>		
			</div>	
			<div class="heading"><h2><strong>A GLANCE OF THE TITAN GYM EQUIPMENT</strong></h2></div>
			
			<div class="details">
			<table class="table table-striped table-hover table-bordered">
				<tbody>
					<tr>
						<td>Cable Cross</td>
						<td>Treadmills</td>
						<td>VKR Tower</td>
					</tr>
					<tr>
						<td>Back Machines</td>
						<td>Spinning Bikes </td>
						<td>Preacher Curl</td>
					</tr>
					<tr>
						<td>Smith Machine</td>
						<td>TRX Cable</td>
						<td>Leg Machines</td>
					</tr>
					<tr>
						<td>Bench Press</td>
						<td>Recruitment Bikes</td>
						<td>Calf Machine</td>
					</tr>
					<tr>
						<td>Masses of Dumbbells!</td>
						<td>Concept II Rowers</td>
						<td>Ab Machines</td>
					</tr>
					<tr>
						<td>Bumper Plates and Bars</td>
						<td>Cross-trainers</td>
						<td>Stretching Area</td>
					</tr>
			</tbody>
		</table>
	</div>
    </body>
</html>
