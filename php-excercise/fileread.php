<?php

$file = fopen("sample-file2.text",'r');

$data = fread($file, filesize("sample-file2.text"));

echo $data;

fclose($file);