<?php
session_start();
require_once '../models/person.php';
require_once '../controller/AUTHcontroller.php';

if ($_SESSION["user_role"] != 'admin') {
    header("location:../Login/login.php");
}
//echo $_SESSION["user_role"];
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Lessons &amp;amp; Practice">
    <meta name="description" content="">
    <title>admin home page</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="admin-home-page.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.8.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "url": "/"
}</script>
    <meta name="theme-color" content="#18922c">
    <meta property="og:title" content="admin home page">
    <meta property="og:type" content="website">
    <link rel="canonical" href="/">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="en">
    <section
        class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-clearfix u-gradient u-section-1"
        id="sec-e5bf" data-animation-name="" data-animation-duration="0" data-animation-delay="0"
        data-animation-direction="">
        <div
            class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
            <div alt="" class="u-image u-image-circle u-image-1" data-image-width="1080" data-image-height="1080"
                data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"></div>
            <div
                class="u-bottom-left-radius-19 u-container-align-left u-container-style u-gradient u-group u-shape-round u-top-left-radius-19 u-group-1">
                <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-container-layout-1">
                    <h2 class="u-align-left u-text u-text-body-alt-color u-text-default u-text-1">
                        <?php
                        echo "hello " . $_SESSION["user_name"];
                        ?>
                    </h2>
                </div>
            </div>
            <div class="u-layout-grid u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-1"
                        data-href="#">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"
                            data-href="manage_staff/ManageStaff.php"><span
                                class="u-border-2 u-border-palette-3-base u-file-icon u-icon u-icon-circle u-icon-1"
                                data-animation-name="customAnimationIn" data-animation-duration="1750"
                                data-animation-delay="500"><img src="images/staffmanagement.jpg" alt=""></span>
                            <h4 class="u-align-center u-text u-text-palette-4-base u-text-2">manage staffs</h4>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-2"
                        data-href="#">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"
                            data-href="admin/project management(1)/index.php"><span
                                class="u-border-2 u-border-palette-3-base u-file-icon u-icon u-icon-circle u-icon-2"
                                data-animation-name="customAnimationIn" data-animation-duration="1750"
                                data-animation-delay="500"><img src="images/manageproject.jpg" alt=""></span>

                            <h4 class="u-align-center u-text u-text-palette-4-base u-text-3">manage projects</h4>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-3">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"
                            data-href="admin/hhh/index.php"><span
                                class="u-border-2 u-border-palette-3-base u-file-icon u-icon u-icon-circle u-icon-3"
                                data-animation-name="customAnimationIn" data-animation-duration="1750"
                                data-animation-delay="500" data-href="#"><img src="images/bug-1.jpg" alt=""></span>
                            <h4 class="u-align-center u-text u-text-palette-4-base u-text-4">view bugs</h4>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-4"
                        data-href="#">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"
                            data-href="contact/cont.php"><span
                                class="u-border-2 u-border-palette-3-base u-file-icon u-icon u-icon-circle u-icon-4"
                                data-animation-name="customAnimationIn" data-animation-duration="1750"
                                data-animation-delay="500"><img src="images/contact-1.jpg" alt=""></span>
                            <h4 class="u-align-center u-text u-text-palette-4-base u-text-5">contact cutomers</h4>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-5">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6"
                            data-href="admin/viewfeedback/index.php"><span
                                class="u-border-2 u-border-palette-3-base u-file-icon u-icon u-icon-circle u-icon-5"
                                data-animation-name="customAnimationIn" data-animation-duration="1750"
                                data-animation-delay="500"><img src="images/feedback.jpg" alt=""></span>
                            <h4 class="u-align-center u-text u-text-palette-4-base u-text-6"> view feedbacks</h4>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-file-link u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-6"
                        data-href="../Main/home.php?logout">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7"><span
                                class="u-border-2 u-border-palette-3-base u-file-icon u-icon u-icon-circle u-icon-6"
                                data-animation-name="customAnimationIn" data-animation-duration="1750"
                                data-animation-delay="500"><img src="images/logout-1.jpg" alt=""></span>
                            <h4 class="u-align-center u-text u-text-palette-4-base u-text-7">logout</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="https://nicepage.com/templates" target="_blank">
            <span>Free Templates</span>
        </a>
        <p class="u-text">
            <span>created with</span>
        </p>
        <a class="u-link" href="" target="_blank">
            <span>Offline Website Builder</span>
        </a>.
    </section>

</body>

</html>