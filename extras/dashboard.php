<?php
session_start();



if(isset($_SESSION['name'])){
    echo '<h1> Welcome ' . $_SESSION['name'] . '</h1>';
    echo '<a href="/php/13_sessions.php">Home</a>';
    echo '<a href="/php/extras/logout.php">Logout</a>';
}else{
    echo '<h1>Welcome Guest</h1>';
    echo '<a href="/php/13_sessions.php">Login</a>';
}
