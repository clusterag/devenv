<form name="session" id="session" action="session_set.php" method="post" >

<div id="user">
	<p>User:</p>
	<input type="text" name="user" value="" >
</div>

<div id="submit">
	<input type="submit" value="submit">
</div>

</form>
<?php

session_set_cookie_params(300);
session_start();
$_SESSION["user"] = $_POST["user"];



?>