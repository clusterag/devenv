<p> simple way to check if the bcrypt password-hash was generated successfully: </p>

<form name="hash_verify" id="hash_verify" action="hash_verify.php" method="post" >

<div id="password">
	<p>Password:</p>
	<input type="password" name="password" value="" >
</div>

<div id="hash">
	<p>Hash:</p>
	<input type="text" name="hash" value="" >
</div>

<div id="submit">
	<input type="submit" value="check hash">
</div>

</form>

<?php
if (password_verify($_POST["password"], $_POST["hash"])) {
	print("<p>Password and hash correspond!</p>");
}
else {
	print("<p>Password and hash do not correspond, check both!</p>");
}


?>
