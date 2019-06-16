<?php 
$filename = "data/read_only.json";
$file = fopen( $filename, "r" );

if( $file == false ) {
   echo ( "Error in opening file" );
   exit();
}

$filesize = filesize( $filename );
$filetext = fread( $file, $filesize );


echo ( "File size : $filesize bytes" );
echo ( "<pre>$filetext</pre>" );

fclose( $file );


//https://www.php.net/manual/en/function.fopen.php


