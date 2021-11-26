<?php
$url=array();
$servername = "81.19.215.20";
$username = "tinadymg_main";
$dbname = "tinadymg_main";
$password = "Mbola2017$";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM videos_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id_list"]. " - videos_url: " . $row["videos_url"]. " <br>";
  $url[]= $row["videos_url"];
  }
} else {
  echo "0 results";
}
$conn->close();
$arrLength = count($url);
echo $arrLength;
$random=rand(1,$arrLength);
echo '<style>
    .vid-border {
        -webkit-box-shadow: -1px -4px 26px -2px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -1px -4px 26px -2px rgba(0, 0, 0, 0.75);
        box-shadow: -1px -4px 26px -2px rgba(0, 0, 0, 0.75);
        position: relative;
        height: 480px;
        width: 854px;
        border: 10px solid rgb(255, 255, 255);
        overflow: hidden;
    }
    
    #vid {
        position: absolute;
        top: -5px;
        left: -5px;
        height: 480px;
        width: 854px;
    }
</style>

<iframe width="808" height="400" src="'.$url[$random].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
';


?>