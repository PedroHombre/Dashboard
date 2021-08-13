<?php require_once("controllers/session-check.php"); 
      require_once("templates/head.php"); ?>

<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>

<?php

    $query = "SELECT account_type FROM users WHERE username = :username";
    $query_params = array(':username' => $_SESSION["username"]);
    try{
        $stmt = $pdo->prepare($query);
        $stmt->execute($query_params);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $account_type = $row["account_type"];
    } catch(PDOException $e) {
        die("ERROR: Statement error. " . $e->getMessage());
    }

?>

<p>Account type: <?php echo($account_type); ?></p>

<a href="/controllers/controller-logout.php">Logout</a>

<?php require_once("templates/footer.html"); ?>