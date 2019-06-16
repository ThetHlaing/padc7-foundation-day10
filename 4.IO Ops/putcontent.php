<?php

$file = 'data/read_write.json';
$json = json_decode(file_get_contents($file));

var_dump($json);

$newobj = new stdClass();
$newobj->name = "New Name";
$newobj->phone = "0832983232";
array_push($json->contacts, $newobj);


file_put_contents($file, json_encode($json));


// https://www.php.net/manual/en/function.file-put-contents.php