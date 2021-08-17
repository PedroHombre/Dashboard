<?php require_once("controllers/session-check.php");
      require_once("controllers/controller-index.php");
      require_once("templates/head.php"); ?>

<div class="body-wrapper">
    <?php require_once("templates/aside.php"); ?>
    <div class="page-content">
        <p>test</p>
        <?php 
            if($_SESSION["accountType"]){ 
                $accountType = $_SESSION["accountType"];
                echo htmlspecialchars($accountType);
                if($accountType == "admin"){
                    echo '<br /><a href="admin.php">Admin panel</a>';
                }
            }
        ?>
        <p><a href="/controllers/controller-logout.php">Logout</a></p>
    </div>
</div>

<?php require_once("templates/footer.html"); ?>