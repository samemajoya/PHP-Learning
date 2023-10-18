<?php

$global_var = "I'm a global variable!";

function access_global(){
    echo $GLOBALS['global_var'];
}
access_global();

?>