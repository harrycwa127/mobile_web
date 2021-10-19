<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "storytelling";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM video";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "VideoID: " . $row["videoID"]. " - Email: " . $row["email"]. " - Mark: " . $row["mark"]. " - VideoName: " . $row["videoName"]. " - DateTime: " . $row["dateTimes"]. " - Comments: " . $row["comments"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

// <?php 
// include("public/php/routing.php");
// ?>
?>