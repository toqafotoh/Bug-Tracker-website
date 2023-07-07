<?php
require_once '..\admin_controller (1).php';
require_once '..\customer.php';


?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="All Bugs">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Home.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 5.9.14, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">



  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "url": "/",
    "logo": "images/default-logo.png"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Home">
  <meta property="og:type" content="website">
  <link rel="canonical" href="/">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body data-home-page="https://website4849627.nicepage.io/Home.html?version=b8420812-a793-41c2-ba0f-067ab78affbe"
  data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en">
  <header class="u-clearfix u-header u-header" id="sec-8f5f">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">

      <nav class="u-align-right u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
          <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
            href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-0 u-unstyled u-nav-1">
            <li class="u-nav-item"><a
                class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-1-base"
                href="../../adminmain.php" style="padding: 0px 20px;">Home</a>
            </li>

          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../../adminmain.php">Home</a>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>
  <section class="u-align-center u-clearfix u-section-1" id="carousel_7405">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-text u-text-1">All Bugs</h2>
      <div class="u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="7.2%">
            <col width="31.1%">
            <col width="21.8%">
            <col width="20%">
            <col width="19.899999999999984%">
          </colgroup>
          <thead class="u-align-center u-palette-4-base u-table-header u-table-header-1">
            <tr style="height: 37px;">
              <th class="u-table-cell">ID</th>
              <th class="u-table-cell">Staff ID</th>
              <th class="u-table-cell">Customer ID</th>
              <th class="u-table-cell">Type</th>
              <th class="u-table-cell">State</th>
            </tr>
          </thead>
          <tbody class="u-align-center u-table-body u-table-body-1">
            <?php

            $admin = new admin_controller;

            $res = $admin->view_bugs();

            if ($res->num_rows > 0) {
              while ($row = $res->fetch_assoc()) {
                ?>
                <tr style="height: 60px;">
                  <td
                    class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-first-column u-palette-4-base u-table-cell u-table-cell-6">
                    <?php echo $row['ID'] ?>
                  </td>
                  <td class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-table-cell">
                    <?php echo $row['Staff_ID'] ?>
                  </td>
                  <td class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-table-cell">
                    <?php echo $row['customer_id'] ?>
                  </td>
                  <td class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-table-cell">
                    <?php echo $row['type'] ?>
                  </td>
                  <td class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-table-cell">
                    <?php echo $row['State'] ?>
                  </td>
                </tr>
                <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-section-2" id="sec-c034">
    <div class="u-clearfix u-sheet u-sheet-1"></div>
  </section>





</body>

</html>