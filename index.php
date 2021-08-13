<?php require_once("controllers/session-check.php"); 
      require_once("controllers/controller-index.php");
      require_once("templates/head.php"); ?>

<div class="body-wrapper">
    <div class="aside-wrapper" id="main-nav">
        <aside>
            <div class="aside-icon-wrapper">
                <a class="hamburger-btn" onclick="asideToggle()">
                    <span class="hamburger"></span>
                </a>
            </div>
        </aside>
    </div>
    <div class="page-content">

    </div>
</div>

<?php require_once("templates/footer.html"); ?>