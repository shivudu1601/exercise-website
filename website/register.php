<?php
include 'dbconn.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if (insertUser($username,$password)) {

    
    $_SESSION['username'] = $username;
    header("Location: firstpage.html?error=Registration failed");
}

function insertUser($username,$password){
    global $conn;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, password)VALUES(?, ?)");
    $stmt->bind_param("ss",$username, $hashedPassword);

    return $stmt->execute();
}
?>