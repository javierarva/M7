<?php

require_once 'config.php';
require_once 'lib/conn.php';

//Autentificación
function auth($db, $email, $passwd):bool {      
    try {   
        $stmt = $db -> prepare('SELECT * FROM users WHERE email=:email LIMIT 1');
        $stmt -> execute([':email'=>$email]);
        $count = $stmt -> rowCount();
        $row = $stmt -> fetchAll(PDO::FETCH_ASSOC);  
              
        if ($count == 1) {       
            $user = $row[0];
            $res = $_POST['passwd'] == $row[0]['passwd'];
            //$res = password_hash($passwd, $user['passwd']);
            //$res = password_verify($passwd,$user['passwd']);
            
            if ($res) {
                $_SESSION['uname'] = $user['uname'];
                $_SESSION['email'] = $user['email'];
                
                return true;
                
            } else {
                return false;
            }

        } else {
            return false;
        }

    } catch (PDOException $e) {
        return false;
    }
}

function register($stmt, $email, $uname, $passwd, $role) {
    try {
        $stmt = getConnection($dsn, $dbuser, $dbpasswd);
        $stmt = $db -> prepare("INSERT INTO users (uname, passwd, role, email) VALUES (?, ?, ?, ?)");

        $uname = $_SESSION['uname'];
        $passwd = $_POST['passwd'];
        $role = $_SESSION['role'];
        $email = $_SESSION['email'];
        
        $stmt->bindParam(1, $uname);
        $stmt->bindParam(2, $passwd);
        $stmt->bindParam(3, $role);
        $stmt->bindParam(4, $email);
        
        $stmt->execute();
    
    } catch(PDOException $e) {
        die($e->getMessage());
    }

    return $stmt;
}
