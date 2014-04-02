<form name="hash" id="hash" action="hash.php" method="post" >

<div id="hash">
	<p>To be hashed:</p>
	<input type="text" name="hash" value="" >
</div>

<div id="submit">
	<input type="submit" value="generate hash">
</div>

</form>

<?php
$hash = password_hash($_POST["hash"], PASSWORD_BCRYPT);
print($hash);
$hash = "";


?>