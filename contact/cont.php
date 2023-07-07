<?php
require_once '../manage_staff/admin_controller.php';
require_once '../../models/message.php';
$m = new admin_controller();
$ms = $m->get_msg();

//echo "yayyyyyy!!!!";
if (isset($_POST["message"]) && isset($_POST["c"])) {
    //  echo "yayyyyyy!!!!";

    $msg = new msgs();
    $msg->setContent($_POST["message"]);
    $msg->setCustid($_POST['c']);

    // echo $msg->getContent() . "" . $msg->getDate();
    $m = new admin_controller();
    $m->sendmessage($msg);
    //echo count($ms);
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Contact admin">
    <meta name="description" content="">
    <title>contact admin</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="contact-admin.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.9.14, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">






    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "manage staff",
        "url": "/"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="contact admin">
    <meta property="og:type" content="website">
    <link rel="canonical" href="/">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body
    data-home-page="https://website4828039.nicepage.io/contact-admin.html?version=3df5d705-8620-4a25-8fcc-7eb3b503442d"
    data-home-page-title="contact admin" class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-white u-section-1" id="carousel_3318">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-shape u-shape-svg u-text-palette-1-base u-shape-1" data-animation-name="customAnimationIn"
                data-animation-duration="1500" data-animation-delay="500">
                <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style="">
                    <use xlink:href="#svg-988f"></use>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    xml:space="preserve" class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-988f"
                    style="enable-background:new 0 0 160 160;">
                    <path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
    s80-35.8,80-80S124.2,0,80,0L80,0z"></path>
                </svg>
            </div>
            <div class="u-border-20 u-border-palette-1-base u-image u-image-circle u-preserve-proportions u-image-1"
                alt="" data-image-width="600" data-image-height="401" data-animation-name="customAnimationIn"
                data-animation-duration="1500" data-animation-delay="250"></div>
            <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-container-align-center u-container-style u-layout-cell u-palette-1-dark-1 u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <div class="u-list u-list-1">
                                    <div class="u-repeater u-repeater-1">
                                        <div
                                            class="u-container-align-left u-container-style u-list-item u-palette-1-dark-1 u-repeater-item u-list-item-1">
                                            <div class="u-container-layout u-similar-container u-container-layout-2">
                                                <h5 class="u-align-left u-text u-text-1"><span
                                                        class="u-file-icon u-icon u-text-white u-icon-1"><img
                                                            src="images/597177-39fea02a.png" alt=""></span>&nbsp;Call Us
                                                </h5>
                                                <p class="u-align-left u-text u-text-2">55555-66666-9999999</p>
                                            </div>
                                        </div>
                                        <div
                                            class="u-container-style u-list-item u-palette-1-dark-1 u-repeater-item u-list-item-2">
                                            <div class="u-container-layout u-similar-container u-container-layout-3">
                                                <h5 class="u-align-left u-text u-text-3"><span
                                                        class="u-file-icon u-icon u-text-white u-icon-2"><img
                                                            src="images/3177361-cd9ee2c6.png"
                                                            alt=""></span>&nbsp;Location
                                                </h5>
                                                <p class="u-align-left u-text u-text-4"> Faculty of Computers and
                                                    Information,<br>Ain Helwan, Helwan, Egypt.
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="u-container-align-left u-container-style u-list-item u-palette-1-dark-1 u-repeater-item u-list-item-3">
                                            <div class="u-container-layout u-similar-container u-container-layout-4">
                                                <h5 class="u-align-left u-text u-text-5"><span
                                                        class="u-file-icon u-icon u-text-white u-icon-3"><img
                                                            src="images/447114-f6e8f45b.png"
                                                            alt=""></span>&nbsp;Business Hours
                                                </h5>
                                                <p class="u-align-left u-text u-text-6">Mon – Fri …… 10 am – 8 pm, Sat,
                                                    Sun ....… Closed</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-align-center u-container-style u-grey-10 u-layout-cell u-size-30 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-5">
                                <h2 class="u-align-center u-text u-text-default u-text-7">Contact admin</h2>

                                <?php
                                if (isset($_POST["message"]) && isset($_POST["c"])) {
                                    ?>
                                    <div
                                        class="u-border-2 u-border-grey-50 u-container-style u-group u-palette-1-base u-radius-25 u-shape-round u-group-1">
                                        <div class="u-container-layout u-container-layout-6">
                                            <?php echo "<br>" . $_POST["message"]; ?>
                                        </div>
                                    </div>
                                    <?php

                                }
                                ?>


                                <?php

                                if ($ms) {
                                    foreach ($ms as $l) {
                                        ?>
                                        <div
                                            class="u-border-2 u-border-grey-50 u-container-style u-group u-palette-5-light-1 u-radius-25 u-shape-round u-group-2">
                                            <div class="u-container-layout u-container-layout-7">
                                                <?php echo $l['Customer_ID'] . ":" . $l['content']; ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }


                                ?>


                                <div class="u-expanded-width u-form u-form-1">
                                    <form method="post">
                                        <input placeholder="Enter your message" rows="4" cols="50" id="message-360b"
                                            name="message" class="u-input u-input-rectangle" required></input>
                                        <input placeholder="customer id : " rows="4" cols="50" id="" name="c"
                                            class="u-input u-input-rectangle" required></input>
                                </div>
                                <div class="u-align-center u-form-group u-form-submit u-label-none">
                                    <button
                                        class="u-btn u-btn-round u-btn-submit u-button-style u-radius-19">send</button>
                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="u-palette-1-base u-shape u-shape-circle u-shape-2" data-animation-name="customAnimationIn"
            data-animation-duration="1500" data-animation-delay="500"></div>
        </div>
    </section>

</body>

</html>