<?php

$file = fopen("sample-file.txt", 'a');
echo "file created";

fwrite($file, "Learn JAVA \n");

echo "file written successfully ";

fclose($file);