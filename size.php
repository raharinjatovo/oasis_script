<?php
header('Content-Type: text/html; charset=utf-8');

$data= utf8_encode(explode('</title>', explode('<title>', file_get_contents("https://www.youtube.com/watch?v=r_dlNCqmNkA"))[1])[0]);
$str = "<p>this -&gt; &quot;</p>  &#39;\n";


// note that here the quotes aren't converted
echo str_replace("&#39;", "'", $data);