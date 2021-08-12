<?php
$csvdata = 'Burch Jr, Philip H., The American establishment, Research in political economy 6(1983), 83-156';
$a = explode(',', $csvdata);
$info = print_r($a, true);
echo "<pre>$info</pre>";
?>