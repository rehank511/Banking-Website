<?php include("logo.html"); ?>
<link rel="stylesheet" href="project6.css">
<?php $name = $_POST['name'];
$db = new PDO("mysql:dbname=project6;host=localhost", "root");
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
         if($rows->rowCount() === 0)
         {
       ?>
       <p> Account Not Found!!!! <p>
       <?php } ?>
       <div>
       	<ul>
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
