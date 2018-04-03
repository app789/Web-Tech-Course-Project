<?php
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}

$row = $_GET["row"];
echo $row;
//$c_no = $row['Complaint_number'];

$db_host = 'localhost:3307'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'lab'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
	if($_SESSION['request'] != true){
		$sql = "UPDATE complaints SET Status='accepted' WHERE Complaint_number=$row";
		$query = mysqli_query($conn, $sql);

		if (!$query) {
			die ('SQL Error: ' . mysqli_error($conn));
		}
		else{
			header("location: view-complaints.php");
		}
	}
	else{
		$sql = "UPDATE Requests SET Status='accepted' WHERE req_no=$row";
		$query = mysqli_query($conn, $sql);

		if (!$query) {
			die ('SQL Error: ' . mysqli_error($conn));
		}
		else{
			header("location: view-requests.php");
		}
	}

?>