<?php

include('../config.php');

session_start();

if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $stmt = $conn->prepare("SELECT * FROM t_login WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $count = $result->num_rows;

    if($count > 0)
    {
        $role = $row['role'];

        if($role == 'admin')
        {
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'Admin';
            $_SESSION['admin_logged_in'] = true;
            header('location:../index.php');
        }
        elseif($role == 'dokter')
        {
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'Dokter';
            $_SESSION['dokter_logged_in'] = true;
            header('location:../index.php');
        }
    }
    else
    {
        $error_message = "Username atau password Anda salah.";
    }
}

if(isset($_POST['userlogin']))
{
    $_SESSION['log'] = 'Logged';
    $_SESSION['user_logged_in'] = true;
    header('location:../index.php');
}

?>