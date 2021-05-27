<?php include("logo.html"); ?>
<link rel="stylesheet" href="project6.css">
<?php
$name = $_POST["name"];
$birth = $_POST["birth"];
htmlspecialchars($email = $_POST["email"]);
htmlspecialchars($phone = $_POST["phone"]);
$country = $_POST["country"];
$type = $_POST["acctype"];
htmlspecialchars($amount = $_POST["amount"]);
$db = new PDO("mysql:dbname=project6;host=localhost", "root");
$addacc = $db->exec("INSERT INTO accounts (name, birth, email, phone, country, acctype, amount)
VALUES ('$name','$birth', '$email', '$phone', '$country', '$type', '$amount')");

$rows = $db->query("SELECT * FROM accounts WHERE name = '$name'");
foreach ($rows as $row)
{?>
  <ul>
    <li>  <strong> Name: </strong><?= $row["name"] ?> </li>
     <li> <strong> BirthDate: </strong><?= $row["birth"] ?> </li>
      <li> <strong> Email: </strong><?= $row["email"] ?> </li>
       <li> <strong> Phone:</strong> <?= $row["phone"] ?> </li>
        <li> <strong> Country of Residence:</strong> <?= $row["country"] ?> </li>
         <li> <strong> Account Type: </strong><?= $row["acctype"] ?> </li>
          <li> <strong> Amount Deposited:</strong> $<?= $row["amount"] ?> </li>
         </ul>
         <?php }
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
