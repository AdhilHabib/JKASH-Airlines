<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome JKASH Airlines Administrator
		</title>
		<link rel="stylesheet" type="text/css" href="main.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<style>
			body{
				background-image: url('slide1.jpeg');
			}
			*{
				text-align:center;
				color:black;
			}
			a{
				font-size:25px;
				color:black;
			}
			table,td, tr{
				margin:auto;
			}
		</style>
	</head>
	
	<body>
	
		<div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<h2>Welcome Administrator!</h2>
		<table cellpadding="5">
		
			<tr>
				<td class="admin_func"><a href="admin_view_booked_tickets.php"><i class="fa fa-ticket" aria-hidden="true"></i> View List of Booked Tickets for a Flight</a>
				</td>
			</tr>
			<tr></tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="admin_func"><a href="add_flight_details.php"><i class="fa fa-bars" aria-hidden="true"></i> Add Flight Schedule Details</a>
				</td>
			</tr>
			<tr></tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr></tr><tr></tr><tr></tr>
			<!-- <tr>
				<td class="admin_func"><a href="modify_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Modify Flight Schedule Details</a>
				</td>
			</tr> -->
			<tr>
				<td class="admin_func"><a href="delete_flight_details.php"><i class="fa fa-remove" aria-hidden="true"></i> Delete Flight Schedule Details</a>
				</td>
			</tr>
			<tr></tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="admin_func"><a href="add_jet_details.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Aircrafts Details</a>
				</td>
			</tr>
			<tr></tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="admin_func"><a href="activate_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Activate Aircraft</a>
				</td>
			</tr>
			<tr></tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="admin_func"><a href="deactivate_jet_details.php"><i class="fa fa-window-close" aria-hidden="true"></i> Deactivate Aircraft</a>
				</td>
			</tr>
		</table>

	</body>
</html>