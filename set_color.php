<?php
    $color = "blue";
    setcookie("favouite_color",$color,time()+ (84600 *30));//30days
    echo "Favourite color cookie set!";
?>