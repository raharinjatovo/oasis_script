<?php
$url='';
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


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM videos_list ORDER BY rand()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
  $url= $row["videos_url"];
  }
} else {
  echo "0 results";
}
$conn->close();
$target_url = $url;
$userAgent = 'Googlebot/2.1 (http://www.googlebot.com/bot.html)';

// make the cURL request to $target_url
$ch = curl_init();
curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
curl_setopt($ch, CURLOPT_URL,$target_url);
curl_setopt($ch, CURLOPT_FAILONERROR, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$html= curl_exec($ch);
if (!$html) {
echo "<br />cURL error number:" .curl_errno($ch);
echo "<br />cURL error:" . curl_error($ch);
exit;
}
preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
$youtube_id = $match[1];
$data= utf8_encode(explode('</title>', explode('<title>', $html)[1])[0]);
$str = "<p>this -&gt; &quot;</p>  &#39;\n";


// note that here the quotes aren't converted
$title= str_replace("&#39;", "'", $data);

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
<h1>'.$title.'</h1>
<iframe class="elementor-video vid-border" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" src="https://www.youtube.com/embed/'.$youtube_id.'?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=http%3A%2F%2Ffeofanantenana.org&amp;widgetid=1" id="widget2" width="640" height="360" frameborder="0"></iframe>				
';


?>