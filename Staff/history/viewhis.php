<?php
require_once '../../controller/staff_control.php';
$status = new staff_controller;
$statuses = $status->view_his($_SESSION["user_id"]);
?>


  <!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.9.14, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "manage staff",
		"url": "/"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <link rel="canonical" href="/">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="https://website4828039.nicepage.io/Home.html?version=e208dce7-63c8-48d7-b49e-dbc64a1ec98c" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en">
    <section class="u-align-center u-clearfix u-section-1" id="sec-c553">
      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <table class="u-table-entity u-table-entity-1">
          <colgroup>
            <col width="6.2%">
            <col width="39.6%">
            <col width="17.8%">
            <col width="36.4%">
          </colgroup>
          <thead class="u-black u-table-header u-table-header-1">
            <tr style="height: 26px;">
              <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-1">ID</th>
              <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-2"> Description</th>
              <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-3">bug type</th>
              <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-4">Solution</th>
            </tr>
          </thead>
          
          <?php

foreach ($statuses as $stat) {

    ?>
    <tbody>
    <tbody class="u-table-alt-grey-5 u-table-body">
            <tr style="height: 75px;">
            <td class="u-border-1 u-border-grey-30 u-first-column u-grey-50 u-table-cell u-table-cell-5">
                <?php echo $stat["ID"] ?>
            </td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">
                <?php echo $stat["Description"] ?>
            </td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">
                <?php echo $stat["type"] ?>
            </td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">
                <?php echo $stat["Solution"] ?>
            </td>


        </tr>
    <?php }
?>
         
      
    </section>
    
    
    <a class="u-link" href="../staff.php" target="_blank">
        <span>Back</span>
      </a>  
    
    
    
    
   
  
</body></html>              