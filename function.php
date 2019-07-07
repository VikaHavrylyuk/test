<?php

function router ($name)
{
    if (isset($_GET[$name])){
        include_once $_GET[$name] . ".php";
    }
    else {
        include_once "home.php";
    }
}
