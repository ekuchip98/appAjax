<?php
$json1 = '["h\u00e0 n\u1ed9i","hcm","\u0111\u00e0 n\u1eb5ng"]';
$json2 = '{"name":"Nguy\u1ec5n V\u0103n An","age":21,"location":"h\u00e0 n\u1ed9i"}';

$convert1 = json_decode($json1);
$convert2 = json_decode($json2);
echo "<pre>";
print_r($convert1);
print_r($convert2);
echo "</pre>";