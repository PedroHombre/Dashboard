<div class="aside-wrapper" id="main-nav">
    <aside>
        <div class="account-profile-img">
            <a href="/my-account.php">
                <div class="profile-img"></div>
            </a>
        </div>
        <div class="links-wrapper">
            <a href="/index.php" <?php if($pageName == "Home"){ ?>class="active"<?php } ?>>
                <i class='bx bxs-home'></i>
            </a>
            <a href="/my-account.php">
                <i class='bx bxs-user'></i>
            </a>
            <a href="#">
                <i class='bx bx-cog'></i>
            </a>
            <?php
                if($_SESSION["accountType"]):
                    $accountType = $_SESSION["accountType"];
                    if($accountType == "admin"): ?>
                        <a href="/admin/admin.php">
                            <!-- <i class='bx bxs-user-account' ></i> -->
                            <i class='bx bxs-crown' ></i>
                        </a>
                    <?php endif;
                endif;
            ?>
        </div>
        <div class="logout-btn">
            <a href="/controllers/controller-logout.php">
                <!-- <i class='bx bx-log-out' ></i> -->
                <i class='bx bx-power-off' ></i>
            </a>
        </div>
    </aside>
</div>