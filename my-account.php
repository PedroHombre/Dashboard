<?php require_once("controllers/session-check.php");
      require_once("controllers/controller-myaccount.php");
      require_once("templates/head.php"); ?>

<div class="body-wrapper">
      <?php require_once("templates/aside.php"); ?>
      <div class="page-content">
            <h2><?php echo $pageName; ?></h2>
            <form action = "" method = "POST" enctype = "multipart/form-data">
                  <input type = "file" name = "image" />
                  <input type = "submit"/>
                  <ul>
                        <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
                        <li>File size: <?php echo $_FILES['image']['size'];  ?>
                        <li>File type: <?php echo $_FILES['image']['type'] ?>
                  </ul>
            </form>
      </div>
</div>

<?php require_once("templates/footer.html"); ?>