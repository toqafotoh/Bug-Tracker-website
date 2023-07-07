<?php
require_once '../../models/bug.php'; //tamam
require_once '../../controller/staff_control.php';
$b2 = new bugs();
$check = "not sent";
$new_st = new staff_controller();
if (isset($_POST['solu']) && isset($_POST["bugid"])) {
    $b2->setSolution($_POST['solu']);
    $bid = $_POST["bugid"];
    if ($new_st->sendsolution($b2, $bid)) {
        $check = "";
    }
    //$b1->setType($_POST["bug_type"]);

    //$c1->send_bug($b1);
}
//require_once '../../controller/AUTHcontroller.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>send solution</title>
</head>

<body>

    <a class="heading" href="../staff.php" target="_blank">
        Back</span>
    </a>
    <div class="content">

        <div class="container">
            <div class="row">
                <div class="col-md-5 mr-auto">
                    <h3 class="mb-3">Send solution</h3>
                    <p> code quality is not an option. Customers satisfaction is our no.1 priority .</p>
                    <p>The right solution could be right infront of our eyes but we dont have enough foresight to see
                        it.</p>
                    <p><img style="width: 520px;height: 320px;" src="images\1.png" alt="pc"></p>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <h3 class="heading">leave your solution here</h3>
                        <form class="mb-5" method="post" id="send a bug" name="send a bug">
                            <div class="row">


                                <div class="col-md-6 form-group">
                                    <label for="name" class="col-form-label">Bug ID</label>
                                    <input type="text" class="form-control" name="bugid" required>
                                </div>
                            </div>
                            <div class="row">
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="message" class="col-form-label"> Solution </label>
                                    <textarea class="form-control" name="solu" id="message" cols="30" rows="7"
                                        required></textarea>
                                </div>
                            </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Send" class="btn btn-block btn-primary rounded-0 py-2 px-4"
                                style="background-color: rgb(27, 183, 180);">
                            <span class="submitting"></span>
                        </div>
                    </div>

                    <?php
                    if ($check == "") {
                        ?>
                        <div class="btn btn-block btn-primary rounded-0 py-2 px-4">
                            Your answer submitted, check bug history for the response!
                            <?php
                    } ?>
                        </form>

                        <div id="form-message-warning mt-4"></div>
                        <div id="form-message-success">
                            Your bug was submitted, thank you!
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>

</body>

</html>