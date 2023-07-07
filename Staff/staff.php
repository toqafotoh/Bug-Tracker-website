<?php
//require_once '../models/customer.php';
require_once '../models/staff.php';
require_once '../controller/AUTHcontroller.php';
require_once '../models/person.php';
require_once '../controller/AUTHcontroller.php';
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="​Lessons &amp;amp; Practice">
  <meta name="description" content="">
  <title>staff main home</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="staff-main-home.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 5.8.6, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": ""
    }
    </script>
  <meta name="theme-color" content="#4551dd">
  <meta property="og:title" content="staff main home">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="en">
  <section
    class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-clearfix u-gradient u-section-1"
    id="sec-e5bf">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div alt="" class="u-image u-image-circle u-image-1" data-image-width="860" data-image-height="1064"
        data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"></div>
      <div
        class="u-bottom-left-radius-19 u-container-style u-gradient u-group u-shape-round u-top-left-radius-19 u-group-1">
        <div
          class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
          <h1 class="u-align-left u-text u-text-body-alt-color u-text-default u-text-1">
            <?php echo "hey " . $_SESSION["user_name"]; ?>
          </h1>
        </div>
      </div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div data-href="view bugs/ag_bugs.php" class="u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white
            u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span
                class="u-file-icon u-icon u-icon-1" data-animation-name="customAnimationIn"
                data-animation-duration="1750" data-animation-delay="500"><img src="images/bug.jpg" alt=""></span>
              <h4 class="u-text u-text-palette-1-base u-text-2">View&nbsp;Assigned&nbsp; &nbsp; &nbsp;
                &nbsp; bugs</h4>
            </div>
          </div>


          <div data-href="sulition/index.php"
            class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"><span
                class="u-file-icon u-icon u-icon-4" data-animation-name="customAnimationIn"
                data-animation-duration="1750" data-animation-delay="500"><img src="images/SEnd.webp" alt=""></span>
              <h4 class="u-text u-text-palette-1-base u-text-5">Send solution to customer&nbsp;</h4>
            </div>
          </div>
          <div data-href="history/viewhis.php"
            class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-5">
            <div data-href="sulition/index.php"
              class="u-container-layout u-similar-container u-valign-top u-container-layout-6"><span
                class="u-file-icon u-icon u-icon-5" data-animation-name="customAnimationIn"
                data-animation-duration="1750" data-animation-delay="500"><img src="images/hISTORY-1.png" alt=""></span>
              <h4 class="u-text u-text-palette-1-base u-text-6"> View bug history&nbsp;</h4>
            </div>
          </div>
          <div
            class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-6"
            data-href="../Main/home.php?logout">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7"><span
                class="u-file-icon u-icon u-icon-6" data-animation-name="customAnimationIn"
                data-animation-duration="1750" data-animation-delay="500"><img src="images/logout-1.jpg" alt=""></span>
              <h4 class="u-text u-text-palette-1-base u-text-7">Log out</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>