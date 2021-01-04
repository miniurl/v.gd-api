<?php

// Put this VGD_Error snippet in the index.php
// Customize the code below for your own project

if (substr($titledestination, 0, 9) == "VGD_Error") {
    $errorcode = $_GET['errorcode'];
    if ($errorcode == 1) {
        echo "<center><a href='/?ref=VGD_Error'>This is a 400 error, Bad Request, there was a problem with the original long URL provided. Click Here To Try Shorten Another Link</a></center>";
    } elseif ($errorcode == 2) {
        echo "<center><a href='/?ref=VGD_Error'>This is a 406 error, Not Acceptable, there was a problem with the short URL provided (for custom short URLs). Click Here To Try Shorten Another Link</a></center>";
    } elseif ($errorcode == 3) {
        echo "<center><a href='/?ref=VGD_Error'>This is a 502 error, Bad Gateway, rate limit was exceeded. Click Here To Try Shorten Another Link</a></center>";
    } elseif ($errorcode == 4) {
        echo "<center><a href='/?ref=VGD_Error'>This is a 503 error, Service Unavailable, any other error (includes potential problems with our service such as a maintenance period). Click Here To Try Shorten Another Link</a></center>";
    } else {
        echo "<center><a href='/?ref=VGD_Error'>This is a VGD error, which means you've clicked on a bad link or entered an invalid URL<br>Error code 1 - there was a problem with the original long URL provided<br>Error code 2 - there was a problem with the short URL provided (for custom short URLs)<br>Error code 3 - rate limit was exceeded<br>Error code 4 - any other error (includes potential problems with our service such as a maintenance period)<br>Click Here To Try Shorten Another Link</a></center>";
    }
}

?>
