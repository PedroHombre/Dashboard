<?php

if( $_SESSION['loginCount'] === 0 ) {
    header("location: welcome.php");
}

?>