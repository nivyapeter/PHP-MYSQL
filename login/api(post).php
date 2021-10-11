<?php
$url ="https://reqres.in/api/users";

$data_array  = array(
  'name' => 'john',
  'job' => 'web developer'
);

$data = http_build_query($data_array);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

header('content-type:json');
$res = curl_exec(($ch));
if($e = curl_error($ch)){
  echo $e;
}
else {
  $decoded = json_decode($res);
  print_r($decoded);
}
curl_close($ch);
?>