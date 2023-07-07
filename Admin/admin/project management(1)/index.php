<?php

require_once '..\admin_controller (1).php';
require_once '..\project_controller.php';
require_once '..\ticket.php';
require_once '..\bug.php';
$admin = new admin_controller;

if (isset($_POST['text-2']) && isset($_POST['text-1']) && isset($_POST['text'])) {
  if (!empty($_POST['text-2']) && !empty($_POST['text-1']) && !empty($_POST['text'])) {
    // Convert input values to integers
    $text2 = intval($_POST['text-2']);
    $text1 = intval($_POST['text-1']);
    $text = intval($_POST['text']);

    if (!$text2 || !$text1 || !$text || $text2 === 0 || $text1 === 0 || $text === 0) {
      ?>
            <script>
              document.title = "Something went wrong!";
              alert("All fields must be integers");
              document.getElementById("name-945b").value = "";
              document.getElementById("text-d5fc").value = "";
              document.getElementById("text-205f").value = "";
              window.location.reload(); 
            </script>
            <?php
    } else {
      $project = new project_controller;
      $project->staff_p = $text2;
      $project->customer_p = $text1;
      $project->bug_p = $text;
      $project->P_State = 0;
      $admin->add_project($project);
    }
  }
}
if (isset($_POST['update'])) {
  if (!empty($_POST['update'])) {
    $admin->set_project_state($_POST['update'], 1);
  }
}

if (isset($_POST['delete'])) {
  if (!empty($_POST['delete'])) {
    $admin->deleteproject($_POST['delete']);
  }
}

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Contact admin">
  <meta name="description" content="">
  <title>manage projects</title>
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
  data-home-page="https://website4828039.nicepage.io/contact-admin.html?version=5ca00560-e77e-4f99-8846-4cde8e15f9f6"
  data-home-page-title="contact admin" class="u-body u-xl-mode" data-lang="en">
  <header class="u-clearfix u-header u-header" id="sec-ab15">
    <div class="u-clearfix u-sheet u-sheet-1"></div>
  </header>
  <section class="u-align-center u-clearfix u-section-1" id="carousel_d1ea">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-black u-text-default u-text-1">manage project </h1>
      <div class="u-table u-table-responsive u-table-1">
        <table class="u-table-entity u-table-entity-1">
          <colgroup>
            <col width="9.1%">
            <col width="4.6%">
            <col width="18.6%">
            <col width="18.6%">
            <col width="20.3%">
            <col width="28.800000000000004%">
          </colgroup>
          <thead class="u-align-center u-table-header u-table-header-1">
            <tr style="height: 29px;">
              <th
                class="u-align-left u-border-2 u-border-grey-60 u-border-no-left u-border-no-right u-border-no-top u-table-cell u-table-cell-1">
                project id</th>
              <th
                class="u-align-left u-border-2 u-border-grey-60 u-border-no-left u-border-no-right u-border-no-top u-table-cell u-table-cell-2">
              </th>
              <th
                class="u-border-2 u-border-grey-60 u-border-no-left u-border-no-right u-border-no-top u-palette-1-base u-table-cell u-table-cell-3">
                <b>staff id</b>
                <br>
              </th>
              <th
                class="u-border-2 u-border-grey-60 u-border-no-left u-border-no-right u-border-no-top u-palette-4-base u-table-cell u-table-cell-4">
                <b>bug id</b>
              </th>
              <th
                class="u-border-2 u-border-grey-60 u-border-no-left u-border-no-right u-border-no-top u-palette-2-light-1 u-table-cell u-table-cell-5">
                customer id</th>
              <th
                class="u-border-2 u-border-grey-60 u-border-no-left u-border-no-right u-border-no-top u-palette-3-base u-table-cell u-table-cell-6">
                <b>project state</b>
              </th>
            </tr>
          </thead>
          <tbody class="u-align-center u-table-body u-table-body-1">
            <?php
            $res = $admin->view_projects();
            $columns = array("ID", "State", "Staff_ID", "Admin_ID", "Bug_ID", "Customer_ID");

            if ($res->num_rows > 0) {
              while ($row = $res->fetch_assoc()) {
                if ($row["State"] === "1") {
                  ?>
                        <tr style="height: 61px;">
                          <td
                            class="u-align-left u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-table-cell-13">
                            <?php echo $row["ID"]; ?>
                          </td>
                          <td class="u-align-left u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell"><a
                              href="#sec-b6f7">
                              <span class="u-file-icon u-icon u-text-palette-2-light-1 u-icon-1" data-href="delete button">
                                <img src="images/6861362-d8525f6e.png" alt="">
                              </span>
                            </a>
                          </td>
                          <td
                            class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-text-palette-1-base u-table-cell-15">
                            <?php echo $row["Staff_ID"]; ?>
                          </td>
                          <td class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-table-cell-16">
                            <?php echo $row["Bug_ID"]; ?>
                          </td>
                          <td class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-table-cell-17">
                            <?php echo $row["Customer_ID"]; ?>
                          </td>
                          <td
                            class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-text-palette-3-base u-table-cell-18">
                            <span class="u-dialog-link u-file-icon u-icon u-icon-4" data-href="#sec-4567"><img
                                src="images/4436481.png" alt=""></span>&nbsp;
                          </td>
                        </tr>
                        <?php
                }
                //foreach ($columns as $c)
                //$x=$row[$c];
                if ($row["State"] === "0") {
                  ?>
                        <tr style="height: 64px;">
                          <td
                            class="u-align-left u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-table-cell-13">
                            <?php echo $row["ID"]; ?>
                          </td>
                          <td
                            class="u-align-left u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-table-cell-14">
                            <a href="#sec-b6f7">
                              <span class="u-file-icon u-icon u-text-palette-2-light-1 u-icon-1" data-href="delete button">
                                <img src="images/6861362-d8525f6e.png" alt="">
                              </span>
                            </a>
                          </td>
                          <td
                            class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-text-palette-1-base u-table-cell-15">
                            <?php echo $row["Staff_ID"]; ?>
                          </td>
                          <td class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-table-cell-16">
                            <?php echo $row["Bug_ID"]; ?>
                          </td>
                          <td class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-table-cell-17">
                            <?php echo $row["Customer_ID"]; ?>
                          </td>
                          <td
                            class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-text-palette-3-base u-table-cell-18">
                            <span class="u-dialog-link u-file-icon u-icon u-icon-4" data-href="#sec-4567"><img
                                src="images/6752767.png" alt=""></span>&nbsp;
                          </td>
                        </tr>

                        <?php
                }
              }
            }

            ?>

          </tbody>
        </table>
      </div>
      <style>
        .button-container {
          text-align: center;
          margin: 20px 0;
        }

        .button-container a {
          display: inline-block;
          margin-right: 10px;
        }
      </style>

      <div class="button-container">
        <a href="#sec-b6f6" class="u-btn u-btn-rectangle u-button-style u-dialog-link u-palette-4-base u-btnn-1">add
          project</a>
        <a href="#sec-b6f7" class="u-btn u-btn-rectangle u-button-style u-dialog-link u-palette-4-base u-btnn-2">delete
          project</a>
        <a href="#sec-b6f8" class="u-btn u-btn-rectangle u-button-style u-dialog-link u-palette-4-base u-btnn-3">Set
          finished</a>
        <a href="../../adminmain.php" class="u-btn u-btn-rectangle u-button-style u-palette-4-base u-btnn-4">back to
          home page</a>
      </div>
    </div>
  </section>

  <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-dialog-section-4"
    id="sec-b6f7">
    <div class="u-container-style u-dialog u-white u-dialog-1">
      <div class="u-container-layout u-container-layout-1">
        <div class="u-form u-form-1">
          <form method="post" style="padding: 30px;">
            <div class="u-form-group u-form-name">
              <label for="project-id" class="u-label">Project ID</label>
              <input type="text" id="project-id" name="delete" class="u-input u-input-rectangle u-radius-37"
                required="">
            </div>
            <div class="u-align-center u-form-group u-form-submit" style="margin-top: 20px;">
              <button
                class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-3-base u-radius-24 u-btn-1">Delete</button>
              <input type="submit" value="Submit" class="u-form-control-hidden">
            </div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="2baf7ac4-6b7e-1545-245d-40c08e86a931">
          </form>
        </div>
      </div>
      <button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style="">
          <use xlink:href="#svg-efe9"></use>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
          xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9">
          <rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16">
          </rect>
          <rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2">
          </rect>
        </svg>
      </button>
    </div>
  </section>

  <style>
    .u-dialog-section-4 .u-dialog-1 {
      width: 400px;
      min-height: 200px;
      height: auto;
      margin: 164px auto 60px calc(((100% - 1140px) / 2) + 370px);
    }

    .u-dialog-section-4 .u-container-layout-1 {
      padding: 0;
    }

    .u-dialog-section-4 .u-form-1 {
      height: 150px;
      width: 400px;
      margin: 0 -5px;
    }

    .u-dialog-section-4 .u-form-group-2 {
      margin-left: 0;
    }

    .u-dialog-section-4 .u-form-group-3 {
      margin-left: 0;
    }

    .u-dialog-section-4 .u-btn-1 {
      background-image: none;
    }

    .u-dialog-section-4 .u-icon-1 {
      width: 20px;
      height: 20px;
    }

    @media (max-width: 1199px) {
      .u-dialog-section-4 .u-dialog-1 {
        width: 400px;
        margin-left: calc(((100% - 940px) / 2) + 370px);
      }

      .u-dialog-section-4 .u-form-1 {
        margin-right: 0;
        margin-left: 0;
        width: 400px;
      }
    }

    @media (max-width: 767px) {
      .u-dialog-section-4 .u-dialog-1 {
        width: 90%;
        margin-left: 5%;
        margin-right: 5%;
      }

      .u-dialog-section-4 .u-form-1 {
        margin-right: 0;
        margin-left: 0;
        width: 100%;
      }
    }
  </style>



  <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-dialog-section-4"
    id="sec-b6f8">
    <div class="u-container-style u-dialog u-white u-dialog-1">
      <div class="u-container-layout u-container-layout-1">
        <div class="u-form u-form-1">
          <form method="post" style="padding: 30px;">
            <div class="u-form-group u-form-name">
              <label for="project-id" class="u-label">Project ID</label>
              <input type="text" id="project-id" name="update" class="u-input u-input-rectangle u-radius-37"
                required="">
            </div>
            <div class="u-align-center u-form-group u-form-submit" style="margin-top: 20px;">
              <button
                class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-3-base u-radius-24 u-btn-1">Set
                finished</button>
              <input type="submit" value="Submit" class="u-form-control-hidden">
            </div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="2baf7ac4-6b7e-1545-245d-40c08e86a931">
          </form>
        </div>
      </div>
      <button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style="">
          <use xlink:href="#svg-efe9"></use>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
          xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9">
          <rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16">
          </rect>
          <rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2">
          </rect>
        </svg>
      </button>
    </div>
  </section>

  <style>
    .u-dialog-section-4 .u-dialog-1 {
      width: 400px;
      min-height: 200px;
      height: auto;
      margin: 164px auto 60px calc(((100% - 1140px) / 2) + 370px);
    }

    .u-dialog-section-4 .u-container-layout-1 {
      padding: 0;
    }

    .u-dialog-section-4 .u-form-1 {
      height: 150px;
      width: 400px;
      margin: 0 -5px;
    }

    .u-dialog-section-4 .u-form-group-2 {
      margin-left: 0;
    }

    .u-dialog-section-4 .u-form-group-3 {
      margin-left: 0;
    }

    .u-dialog-section-4 .u-btn-1 {
      background-image: none;
    }

    .u-dialog-section-4 .u-icon-1 {
      width: 20px;
      height: 20px;
    }

    @media (max-width: 1199px) {
      .u-dialog-section-4 .u-dialog-1 {
        width: 400px;
        margin-left: calc(((100% - 940px) / 2) + 370px);
      }

      .u-dialog-section-4 .u-form-1 {
        margin-right: 0;
        margin-left: 0;
        width: 400px;
      }
    }

    @media (max-width: 767px) {
      .u-dialog-section-4 .u-dialog-1 {
        width: 90%;
        margin-left: 5%;
        margin-right: 5%;
      }

      .u-dialog-section-4 .u-form-1 {
        margin-right: 0;
        margin-left: 0;
        width: 100%;
      }
    }
  </style>






  <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-dialog-section-4"
    id="sec-b6f6">
    <div class="u-container-style u-dialog u-white u-dialog-1">
      <div class="u-container-layout u-container-layout-1">
        <div class="u-form u-form-1">
          <form method="post" style="padding: 30px; ">
            <div class="u-form-group u-form-name">
              <label for="name-945b" class="u-label">staff id</label>
              <input type="text" id="name-945b" name="text-2" class="u-input u-input-rectangle u-radius-37" required="">
            </div>
            <div class="u-form-group u-form-group-2">
              <label for="text-d5fc" class="u-label">customer id</label>
              <input type="text" placeholder="" id="text-d5fc" name="text-1"
                class="u-input u-input-rectangle u-radius-37" required="required">
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="text-205f" class="u-label">bug id</label>
              <input type="text" placeholder="" id="text-205f" name="text" class="u-input u-input-rectangle u-radius-37"
                required="required">
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <button
                class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-3-base u-radius-24 u-btn-1">add<br>
              </button>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="2baf7ac4-6b7e-1545-245d-40c08e86a931">
          </form>
        </div>
      </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link"
          preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style="">
          <use xlink:href="#svg-efe9"></use>
        </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
          xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9">
          <rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16">
          </rect>
          <rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2">
          </rect>
        </svg></button>
    </div>
  </section>
  <style>
    .u-dialog-section-4 .u-dialog-1 {
      width: 548px;
      min-height: 385px;
      height: auto;
      margin: 164px auto 60px calc(((100% - 1140px) / 2) + 164px);
    }

    .u-dialog-section-4 .u-container-layout-1 {
      padding: 0;
    }

    .u-dialog-section-4 .u-form-1 {
      height: 381px;
      width: 558px;
      margin: 0 -5px;
    }

    .u-dialog-section-4 .u-form-group-2 {
      margin-left: 0;
    }

    .u-dialog-section-4 .u-form-group-3 {
      margin-left: 0;
    }

    .u-dialog-section-4 .u-btn-1 {
      background-image: none;
    }

    .u-dialog-section-4 .u-icon-1 {
      width: 20px;
      height: 20px;
    }

    @media (max-width: 1199px) {
      .u-dialog-section-4 .u-dialog-1 {
        width: 548px;
        margin-left: calc(((100% - 940px) / 2) + 164px);
      }

      .u-dialog-section-4 .u-form-1 {
        margin-right: 0;
        margin-left: 0;
        width: 548px;
      }
    }

    @media (max-width: 991px) {
      .u-dialog-section-4 .u-dialog-1 {
        margin-left: calc(((100% - 720px) / 2) + 164px);
      }
    }

    @media (max-width: 767px) {
      .u-dialog-section-4 .u-dialog-1 {
        width: 540px;
        margin-left: calc(((100% - 540px) / 2));
      }

      .u-dialog-section-4 .u-form-1 {
        width: 540px;
      }
    }

    @media (max-width: 575px) {
      .u-dialog-section-4 .u-dialog-1 {
        width: 340px;
        margin-left: calc(((100% - 340px) / 2));
      }

      .u-dialog-section-4 .u-form-1 {
        width: 340px;
      }
    }
  </style>

  <head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <div class="col-lg-6" style="margin-top: 50px; border-top: 1px solid black;">
    <div class="card">
      <div class="card-body" style=" margin-bottom:50%; ">
        <h2
          style="text-align: center; font-family: Arial, sans-serif; font-size: 38px; font-weight: bold; margin-top: 100px;">
          projects progress</h2>
        <!-- Pie Chart -->
        <canvas id="pieChart"
          style="max-height: 500px; display: block; box-sizing: border-box; height: 500px; width: 565px; margin-top: 44px;"
          width="707" height="500"></canvas>
        <script>
          document.addEventListener("DOMContentLoaded", () => {
            new Chart(document.querySelector('#pieChart'), {
              type: 'pie',
              data: {
                labels: [
                  'Finished',
                  'unFinished',
                ],
                datasets: [{
                  label: 'projects ds',
                  data: [300, 50],
                  backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)'
                  ],
                  hoverOffset: 4
                }]
              }
            });
          });
        </script>
        <!-- End Pie CHart -->

      </div>

    </div>

  </div>
</body>

</html>