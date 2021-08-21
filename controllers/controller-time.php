<?php

$currentTime = date_create();

$hour = $currentTime->format('H');


if( $hour >= 5 && $hour < 12 ) {
    $welcome = "Good Morning";
} elseif( $hour >= 12 && $hour < 18 ) {
    $welcome = "Good Afternoon";
} else {
    $welcome = "Good Evening";
}

?>