<?php
    if(isset($_COOKIE['favouite_color'])){
        echo "Your Favourite color is" . $_COOKIE['favouite_color'];
    }else{
        echo "No favourite color set.";
    }
?>