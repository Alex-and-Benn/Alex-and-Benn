<?php
$con=mysqli_connect('localhost', 'root', 'root', 'reseller');

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "connected";
}
$sql="INSERT INTO `reseller-contracts` (field1) VALUES ('$_POST[field1]')";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
} else {
  echo "1 record added";
}
mysqli_close($con);
?>