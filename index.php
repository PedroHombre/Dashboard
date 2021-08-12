<?php require_once("controllers/session-check.php"); ?>

<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
<a href="/controllers/logout-controller.php">Logout</a>