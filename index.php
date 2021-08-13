<?php require_once("controllers/session-check.php"); 
      require_once("templates/head.php"); ?>

<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
<a href="/controllers/controller-logout.php">Logout</a>

<?php require_once("templates/footer.html"); ?>