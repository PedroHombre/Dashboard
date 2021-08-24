<?php
// PAGE TITLE
$page_title = "Welcome " . ($_SESSION["username"]) . " - Dashboard";

// PAGE NAME
$pageName = "Home";

$loginCount = $_SESSION["loginCount"];
echo $loginCount;
echo $_SESSION["loginCount"];
if(!isset($_SESSION["loginCount"])) {
    echo "nima";
}

?>