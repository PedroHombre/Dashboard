<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- META TAGS -->
        <meta name="charset" value="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- STYLES -->
        <link rel="stylesheet" type="text/css" href="css/preloader.css">
        <link rel='stylesheet' type="text/css" href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css'>
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <!-- SCRIPTS -->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!-- AUTOMATIC TITLE -->
        <title><?php echo $page_title ?> - Dashboard</title>
    </head>
    <body class="darkmode">
        <?php require_once("templates/preloader.html"); ?>
        <?php require_once "db/config.php"; ?>