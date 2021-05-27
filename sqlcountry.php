<?php
$db = new PDO("mysql:dbname=project6;host=localhost", "root");
$rows = $db->query("SELECT country FROM countries");

$outp = "";
foreach ($rows  as $row) {
  if($outp != "") {$outp .= ",";}
  $outp .= '{"country":"' . $row["country"] . '"}';
}
$outp = '{"records":['.$outp.']}';
echo($outp);
?>
