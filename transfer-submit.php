<?php include("logo.html"); ?>
<link rel="stylesheet" href="project6.css">
<?php $nameto = $_POST['nameto'];
$namefrom = $_POST['namefrom'];
htmlspecialchars($tamount = $_POST['tamount']);
$count = 0;
$db = new PDO("mysql:dbname=project6;host=localhost", "root");
$rows = $db->query("SELECT amount FROM accounts WHERE name = '$namefrom'");
foreach ($rows as $row) {
  $count = $row['amount'];
  $count = $count - $tamount;
}
if($rows->rowCount() === 0)
{
?>
<p> Account You tried to Send to Not Found!!!!
  <p>
<?php
}
$update = $db->exec("UPDATE accounts SET amount = '$count' WHERE name = '$namefrom'");
$count1 = 0;
$rows1 = $db->query("SELECT amount FROM accounts WHERE name = '$nameto'");
foreach ($rows1 as $row1) {
  $count1 = $row1['amount'];
  $count1 = $count1 + $tamount;
}
if($rows1->rowCount() === 0)
{
?>
<p> Your account Not Found!!!! <p>
  <?php
}
$update = $db->exec("UPDATE accounts SET amount = '$count1' WHERE name = '$nameto'");
if($rows1->rowCount() === 0 || $rows->rowCount() === 0)
{
}
else { ?>
  <ul>
    <li> You account balance: <?php print $count ?> </li>
  </ul>
  <?php
}
?>
<div>
	<ul>
    <li>
      <a href="accountdetails.php">
        <img src="details.png" alt="icon" />
        Check Account Details
      </a>
    </li>
		<li>
			<a href="transfer.php">
				<img src="transfer.png" alt="icon" />
				 Transfer Money
			</a>
		</li>
    <li>
      <a href="delete.php">
        <img src="delete.png" alt="icon" />
        Delete Account
      </a>
    </li>
	</ul>
</div>
