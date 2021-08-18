<div class="aside-wrapper" id="main-nav">
    <aside>
        <div class="aside-logo-wrapper">
            <?php require_once("templates/logo.html"); ?>
        </div>
        <div class="links-wrapper">
            <a href="/my-account.php">
                <i class='bx bxs-user'></i>
                My account
            </a>
            <a href="#">
                <i class='bx bx-cog'></i>
                Settings
            </a>
            <?php
            if($_SESSION["accountType"]):
                $accountType = $_SESSION["accountType"];
                if($accountType == "admin"): ?>
                    <a href="/admin/admin.php">
                        <i class='bx bxs-user-account' ></i>
                        Admin panel
                    </a>
                <?php endif;
            endif;
        ?>
        </div>
    </aside>
</div>