<?php

// GET CURRENT DATE AND TIME
$currentTime = date_create();
$year = $currentTime->format('y');
$month = $currentTime->format('m');
$day = $currentTime->format('d');
$hour = $currentTime->format('H');
$minute = $currentTime->format('m');
$second = $currentTime->format('s');


if( $hour >= 5 && $hour < 12 ) {
    $welcome = "Good Morning";
} elseif( $hour >= 12 && $hour < 18 ) {
    $welcome = "Good Afternoon";
} else {
    $welcome = "Good Evening";
}

?>