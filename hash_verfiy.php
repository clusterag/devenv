<form name="hash_verify" id="hash_verify" action="hash_verify.php" method="post" >

<div id="password">
	<p>To be hashed:</p>
	<input type="text" name="password" value="" >
</div>

<div id="hash">
	<p>Hash:</p>
	<input type="text" name="hash" value="" >
</div>

<div id="submit">
	<input type="submit" value="generate hash">
</div>

</form>

<?php
if (password_verify($_POST["password"], $_POST["hash"])) {
	print("True");
}
else {
	print("False");
}


?>