<p>NIlai TES</p>
<?php
$jsonobj = '{"Sina":75,"Rian":80,"Fatur":85}';

$arr = json_decode($jsonobj, true);

echo $arr["Sina"];
echo $arr["Rian"];
echo $arr["Fatur"];

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>