<?php
require_once '../models/person.php';
require_once '../controller/AUTHcontroller.php';
$error_msg = "";
if (
    isset($_POST['first_name']) && isset($_POST["age"]) && isset($_POST["email"]) && isset($_POST["Password"])
    && isset($_POST["phone"])
) {
    $name = $_POST['first_name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $password1 = $_POST['Password'];
    $email = $_POST['email'];
    //  echo " email is :" . $email . "<br> password : " . $password1 . "<br> gender is : " . $gender . "<br>phone is  : " . $phone . "<br> age is :  " . $age .
    //    "<br> first name is : " . $name;
    $p = new person();
    $a = new auth;
    $p->setName($name);
    $p->setAge($age);
    $p->setPhone($phone);
    $p->setGender($gender);
    $p->setEmail($email);
    $p->setPassword($password1);
    $p->setRoleid('customer');
    // echo "from oop <br> email is :" . $p->getemail() . "<br> password : " . $p->getPassword() . "<br> gender is : "
    //   . $p->getGender() . "<br>phone is  : " . $p->getPhone() . "<br> age is :  " . $p->getAge() .
    // "<br> first name is : " . $p->getName();
    if ($a->register($p)) {
        header("location:../customer/customer.php");

    } else {
        $error_msg = $_SESSION["emsg_error"];
    }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>Sign up</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div id="bg"></div>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Sign up <a href="login.php">already have an
                            account?</a></h2>
                    <form method="POST">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="first_name" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name" placeholder="optional">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Age</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="text" name="age" required>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" value="m" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="f" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Password</label>
                                <input class="input--style-4" type="password" name="Password" required>
                            </div>
                        </div>

                        <div class="p-t-15">

                            <button class="btn btn--radius-2 btn--blue" type="submit">
                                Submit</button>


                        </div>

                        <?php
                        if ($error_msg != "") {
                            ?>
                            <div class="p-t-15">

                                <span style="background-color:tomato " class="btn btn--radius-2 btn--blue">

                                    <?php
                                    echo $error_msg
                                        ?>
                                </span>
                            </div>
                            <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->