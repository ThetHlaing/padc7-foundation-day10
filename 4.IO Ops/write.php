<?php
$filename = "data/write_only.json";
$file = fopen($filename, "w");

if ($file == false) {
    echo ("Error in opening file");
    exit();
}

$newObj = new stdClass();
$newObj->test = "testing";
$newObj->testing2 = "testing2";

fwrite($file, json_encode($newObj));

fclose($file);


//https://php.net/manual/en/function.fwrite.php
