<p> simple way to generate bcrypt password-hashes: </p>

<form name="hash" id="hash" action="hash.php" method="post" >

<div id="hash">
	<p>To be hashed:</p>
	<input type="password" name="hash" value="" >
</div>

<div id="submit">
	<input type="submit" value="generate hash">
</div>

</form>
<p>
<?php
$hash = password_hash($_POST["hash"], PASSWORD_BCRYPT);
print($hash);
$hash = "";


?>
</p>

