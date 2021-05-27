<?php include("logo.html"); ?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<link rel="stylesheet" href="project6.css">
</head>
<body>
<form action="http://localhost/Project6/delete-submit.php" method="post">
  <fieldset>
  <legend>
    Delete Account
  </legend>
  <div class="column">
	Name:
	</div>
		<input type="text" name="name" pattern="[A-Za-z]+" required/>
  </br><br>
  <input type="submit" value="Delete!!!">
    </fieldset>
  </form>
</body>
