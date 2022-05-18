<p>NIlai TES</p>
<?php
$jsonobj = '{"Sina":75,"Rian":80,"Fatur":85}';

$obj = json_decode($jsonobj);

echo $obj->Sina;
echo $obj->Rian;
echo $obj->Fatur;
?>