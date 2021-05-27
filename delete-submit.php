<?php include("logo.html"); ?>
<link rel="stylesheet" href="project6.css">
<?php
$name = $_POST['name'];
$db = new PDO("mysql:dbname=project6;host=localhost", "root");
$rows = $db->query("DELETE FROM accounts WHERE name = '$name'");
if($rows->rowCount() === 0)
{
?>
<p> Account Not Found!!!! <p>
<?php } ?>

<div>
	<ul>
		<li>
			<a href="account.html">
				<img src="open.png" alt="icon" />
				Open an Account
			</a>
		</li>
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
	</ul>
</div>
