<?php
/*$connection = new mysqli("localhost", "root", "", "phpmyadmin");
if ($connection->connect_error) {
echo "ERROR IN THIS CONNECTION " . $connection->connect_error;
echo "think again hoshos";
} else {
echo "worked yayyyy!!!";
}*/
require_once '../models/person.php';
require_once '../controller/AUTHcontroller.php';
$pl = new person();
$error_msg = "";
/*if (isset($_POST['email']) && isset($_POST["password"])) {
//ben4oof etba3to wala la2a 
echo ($_POST['email']) . $_POST["password"];
if (!empty($_POST['email']) && !empty($_POST["password"])) {
$p = new person();
$a = new auth;
$p->setEmail($_POST['email']);
$p->setPassword($_POST["password"]);
$a->login($p);
}
}*/
if (isset($_GET["logout"])) {
    session_start();
    session_destroy();

}
if (isset($_POST['emailI']) && isset($_POST["passwordI"])) {
    $email = $_POST['emailI'];
    $password = $_POST['passwordI'];
    //echo " email is :" . $email . " password : " . $password;
    $p = new person();
    $a = new auth;
    $p->setEmail($email);
    $p->setPassword($password);
    // echo "email from peron: " . $p->getEmail() . " and password is : " . $p->getPassword();
    if (!$a->login($p)) {
        $error_msg = "error";
    } else {
        if ($_SESSION["user_role"] == 'customer') {
            //go to customer page
            header("location:../customer/customer.php");
        } elseif ($_SESSION["user_role"] == 'admin') {
            header("location:../Admin/adminmain.php");
        } elseif ($_SESSION["user_role"] == 'staff') {
            header("location:../Staff/staff.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="bg"></div>

    <form method="post">
        <div class="form-field">
            <input type="email" name="emailI" placeholder="Email / Username" required />
        </div>

        <div class="form-field">
            <input type="password" name="passwordI" placeholder="Password" required />
        </div>

        <div class="form-field">
            <button class="btn" type="submit">Log in</button>
        </div>
        <?php
        if ($error_msg != "") {
            ?>
            <div class="form-field">

                <p class="btn" style="background-color:tomato "> wrong email or password </p>
            </div>
            <?php
        }
        ?>

    </form>
    <!-- partial -->

</body>

</html>