<?php
include 'koneksi.php';
$username_member = $_POST['username_member'];
$password_member = $_POST['password_member'];
$login    = mysqli_query($connect, "select * from member where username_member='$username_member' and password_member='$password_member' ");
$result   = mysqli_num_rows($login);
if($result>0){
    $user = mysqli_fetch_array($login);
    session_start();
    $_SESSION['username_member'] = $user['username_member'];
    header("location:index.php");
}else{
    header("location:login.php?kondisi=true");
}