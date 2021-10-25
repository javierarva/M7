<?php

require_once 'db/database.php';

if (($email = filter_input(INPUT_POST, 'email')) != null and ($uname = filter_input(INPUT_POST, 'uname')) != null 
and ($passwd = filter_input(INPUT_POST, 'passwd')) != null and ($role = filter_input(INPUT_POST, 'role')) != null) {
    
    if(register($stmt, $email, $uname, $passwd, $role)) {
         header('Location: ?url=dashboard');
    }

} 