<?php require_once("controllers/session-check.php");
      require_once("controllers/controller-index.php");
      require_once("controllers/controller-time.php");
      require_once("templates/head.php"); ?>

<div class="body-wrapper">
    <?php require_once("templates/aside.php"); ?>
    <div class="page-content">
        <div class="homescreen-info">
            <div class="account-name-wrapper">
                <h1><?php echo $welcome; ?>,</h1>
                <h2><?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
            </div>
        </div>
    </div>
</div>

<?php require_once("templates/footer.html"); ?>