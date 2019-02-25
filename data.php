<?php


$conn = mysqli_connect("localhost", "root", "landais40", "comtool");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//getting data from SQLiteDatabase
$result = mysqli_query($conn, "SELECT * FROM contacts");

$data = array();
while($row = mysqli_fetch_assoc($result))
{
  $data[] = $row;
}

$myJSON = json_encode($data);

echo $myJSON;

mysqli_close($conn);
