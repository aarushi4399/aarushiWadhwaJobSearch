<?php
include "./db.php";
?>
<?php session_start(); ?>
<?php ob_start(); ?>
<?php
// GLOBAL $username;
if (isset($_POST['login'])) {


    $email = $_POST['email'];
    $password = $_POST['password'];



    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    // $hashformat = "$2y$10$";
    // $salt = "matrimonialuser123456789";

    // $hash_and_salt = $hashformat . $salt;
    // $password = crypt($password, $hash_and_salt);

    $query = "SELECT * FROM users WHERE email = '{$email}'";
    $select_user_query = mysqli_query($connection, $query);
   
    while ($row = mysqli_fetch_assoc($select_user_query)) {

        $db_password  = $row['password'];
        $db_email  = $row['email'];
    }



    if ($email !== $db_email && $password !== $db_password) {
        header("Location: ../../vendorLogin.php");
        $_SESSION['failed'] = 'failed';
    } else if ($email == $db_email && $password == $db_password) {
        header("Location: ../../admin_v/dashboard.php");
        $_SESSION['email'] = $email;
    } else {
        header("Location: ../../vendorLogin.php");
        $_SESSION['failed'] = 'failed';
    }
}