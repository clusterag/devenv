<form name="session" id="session" action="session.php" method="post" >

<div id="user">
	<p>User:</p>
	<input type="text" name="user" value="" >
</div>

<div id="submit">
	<input type="submit" value="submit">
</div>

</form>
<p>current:</p>
<?php

session_start();
echo($_SESSION["user"]);
$_SESSION["user"] = $_POST["user"];



?>