<?php
$jsondata = file_get_contents("movies.json");
$json = json_decode($jsondata, true);
echo $jsondata;
echo "<br>";
foreach ($json['movies'] as $item => $value) {
    echo $item . " " . $value;
}
