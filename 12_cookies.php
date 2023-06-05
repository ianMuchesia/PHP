<?php
//to set a cookie
//value is ian
setcookie('name', 'Ian', time() + 86400);


if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}