<form name="cookie" id="cookie" action="cookie_set.php" method="post" >

<div id="user">
	<p>User:</p>
	<input type="text" name="user" value="" >
</div>

<div id="submit">
	<input type="submit" value="submit">
</div>

</form>
<?php

setcookie("user", $_POST["user"], time() + 500);

?>