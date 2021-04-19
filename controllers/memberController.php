<?php
require '../koneksi.php';
require '../models/Member.php';

if (!empty($_POST['login'])) {
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

    $member = new Member();
    $user = $member->getMember($username);
    if ($user) {
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['MEMBER'] = $user;
            header('location:../index.php');
			
        } else {
            header('location:../index.php?hal=login');
        }
    } else {
        header('location:../index.php?hal=login');
    }
}else {
    header('location:../index.php?hal=login');
}