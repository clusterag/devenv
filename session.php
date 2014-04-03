<form name="session" id="session" action="session.php" method="post" >

<div id="user">
	<p>User:</p>
	<input type="text" name="user" value="" >
</div>

<div id="submit">
	<input type="submit" value="submit">
</div>

</form>
<?php

session_start();
if (isset($_SESSION["user"])){
	echo($_SESSION["user"]);
}
else {
	$_SESSION["user"] = $_POST["user"];
}


?>