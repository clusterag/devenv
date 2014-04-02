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
$hash = $_POST["hash"];
print($hash);
print(password_hash($hash));


?>