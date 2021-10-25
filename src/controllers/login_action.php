<?php

require_once 'db/database.php';
require_once 'lib/conn.php';
require_once 'config.php';

$db = getConnection($dsn, $dbuser, $dbpasswd);

if (($email = filter_input(INPUT_POST, 'email')) != null and ($passwd = filter_input(INPUT_POST, 'passwd')) != null) {
    
    if(auth($db, $email, $passwd)) {
        if($box == true) {
            setcookie("remember", $email, 0, '/', 'localhost');    
        }

        header('Location: ?url=dashboard');
    } else {
        header('Location: ?url=badlogin');
    }
} 