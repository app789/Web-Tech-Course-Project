<?php


// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}

$_SESSION['request'] = true;

$db_host = 'localhost:3307'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'lab'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM Requests';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lab Mgmt</title>
	<link rel="icon" type="image/png" href="images/4-star-dragonball.png"/>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
	<script>
	
	
	</script>
</head>
<body>
	
	<table class="data-table">
		<caption class="title">Requests</caption>
		<thead>
			<tr>
				<th>No</th>
				<th>System number</th>
				<th>Requested Software</th>
				
				<th>Submitted by</th>
				<th>Status</th>
				
				<th>Action</th>
				
				
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		//$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			$r_no = $row['req_no'];
			//echo $c_no;
			//$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$row['req_no'].'</td>
					<td>'.$row['system_no'].'</td>
					<td>'.$row['install_request'].'</td>
					<td>'.$row['status'] . '</td>
					<td>'.$row['submitted_by'] . '</td>
					
					<td><a href="update.php?row='.$r_no.'"><button id="button" >Accept</button></a></td>
					
					
				</tr>';
			//$total += $row['amount'];
			//$no++;
		}?>
		</tbody>
		<a style="font-size:large;padding:20px;color:red;" href="welcome.php" class="btn btn-danger">Home</a>
		<!--<tfoot>
			<tr>
				<th colspan="4">TOTAL</th>
				<th><?=number_format($total)?></th>
			</tr>
		</tfoot>-->
	</table>
</body>
</html>