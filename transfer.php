<?php include("logo.html"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<link rel="stylesheet" href="project6.css">
<form action="http://localhost/Project6/transfer-submit.php" method="post">
  <fieldset>
  <legend>
    Transfer
  </legend>
  <div class="column">
	To (name):
	</div>
		<input type="text" name="nameto" pattern="[A-Za-z]+" required/>
  </br> <br>
    <div class="column">
  	From (name):
  	</div>
  		<input type="text" name="namefrom" pattern="[A-Za-z]+" required/>
    </br> <br>
      <div class="column">
      Amount:
      </div>
        <input type="number" name="tamount" required/>
  </br><br>
  <input type="submit" value="Transfer!">
    </fieldset>
  </form>
