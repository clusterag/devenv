<?php

session_start();
echo($_SESSION["user"]);
$_SESSION["user"] = "test";

?>