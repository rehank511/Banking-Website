<?php
$db = new PDO("mysql:dbname=project6;host=localhost", "root");
$rows = $db->query("SELECT name,	birth,	email,	phone,	country,	acctype, amount FROM accounts");

$outp = "";
foreach ($rows  as $row) {
  if($outp != "") {$outp .= ",";}
  $outp .= '{"name":"' . $db["name"] . '",';
    $outp .= '{"birth":"' . $db["email"] . '",';
      $outp .= '{"birth":"' . $db["birth"] . '"}';
        $outp .= '{"phone":"' . $db["phone"] . '",';
          $outp .= '{"country":"' . $db["country"] . '",';
            $outp .= '{"acctype":"' . $db["acctype"] . '",';
              $outp .= '{"amount":"' . $db["amount"] . '",';

}
$outp = '{"records":['.$outp.']}';
echo($outp);
?>
