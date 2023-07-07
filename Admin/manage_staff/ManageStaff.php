<?php
require_once 'staff.php';
require_once '../../models/person.php';
require_once 'admin_controller.php';
require_once 'db_controller.php';
$adminController = new admin_controller;

///////////Add new staff//////////////
if (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['role']) && isset($_POST['gender']) && isset($_POST['phone'])) {
  if (!empty($_POST['id']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['age']) && !empty($_POST['role']) && !empty($_POST['gender']) && !empty($_POST['phone'])) {
    $staff = new person;

    $staff->id = $_POST['id'];
    $staff->email = $_POST['email'];
    $staff->password = $_POST['password'];
    $staff->age = $_POST['age'];
    $staff->roleid = $_POST['role'];
    $staff->name = $_POST['name'];
    $staff->gender = $_POST['gender'];
    $staff->phone = $_POST['phone'];
    //echo "<br>" . $staff->phone . "<br>" . $staff->age . "<br>" . $staff->password . "<br>" . $staff->email . "<br>" . $staff->id;
    if (($adminController->addStaff($staff)) && (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['role']) && isset($_POST['gender']) && isset($_POST['phone']))) {

      echo '<script type="text/javascript">
      window.onload = function() { alert ("New member added successfully"); }
      </script>';
    } elseif (!($adminController->addStaff($staff)) && (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['role']) && isset($_POST['gender']) && isset($_POST['phone']))) {
      echo '<script type="text/javascript">
      window.onload = function() { alert ("the id entered aleardy exist"); }
      </script>';
    }
  }

}


/////Update staff info////////

$adminController = new admin_controller;
$db = new db_controller;
$connect = mysqli_connect($db->dbHost, $db->dbUser, $db->dbpassword, $db->dbname);
if (isset($_GET['id_update']) && isset($_GET['email_update']) && isset($_GET['password_update']) && isset($_GET['phone_update'])) {
  if (!empty($_GET['id_update']) && !empty($_GET['email_update']) && !empty($_GET['password_update']) && !empty($_GET['phone_update'])) {
    $staff = new person;

    $staff->id = $_GET['id_update'];
    $staff->email = $_GET['email_update'];
    $staff->password = $_GET['password_update'];
    $staff->phone = $_GET['phone_update'];

    $query2 = mysqli_query($connect, " select * from account where ID = $staff->id ;");
    //$result = $db->select($query2) ;
    if (mysqli_num_rows($query2) != 0) {
      mysqli_query($connect, " UPDATE account  SET `e-mail` = '$staff->email'  , PassWord = '$staff->password' , `phone number` = $staff->phone where id = $staff->id ");

      echo '<script type="text/javascript">
    window.onload = function() { alert ("member info updated successfully"); }
    </script>';

    } else if ((mysqli_num_rows($query2) == 0) && isset($_GET['id_update']) && isset($_GET['email_update']) && isset($_GET['password_update']) && isset($_GET['phone_update'])) {

      echo '<script type="text/javascript">
    window.onload = function() { alert ("member not exist"); }
    </script>';
    }
  }
}

////////Delete staf members////////////
if (isset($_POST['id_deleted'])) {
  if (!empty($_POST['id_deleted'])) {

    if ($adminController->deleteStaff($_POST['id_deleted'])) {

      echo '<script type="text/javascript">
           window.onload = function() { alert ("member deleted successfully"); }
           </script>';

    } else if (!($adminController->deleteStaff($_POST['id_deleted'])) && isset($_POST['id_deleted'])) {

      echo '<script type="text/javascript">
           window.onload = function() { alert ("member not exist"); }
           </script>';
    }
  }
}



/////////////view all staff members////////
$admin = new admin_controller;
$staffs = $admin->getAllStaff();



///////////Set staff rate////////
if (isset($_POST['id_rate'])) {
  if (!empty($_POST['id_rate'])) {
    $staff = new staff;
    $staff->id = $_POST['id_rate'];
    $staff->rate = $_POST['rate_set'];
    $query2 = mysqli_query($connect, " select * from account where ID = $staff->id ;");
    //$result = $db->select($query2) ;
    if (mysqli_num_rows($query2) != 0) {
      mysqli_query($connect, " UPDATE staff  SET rate = $staff->rate  where id = $staff->id ");

      echo '<script type="text/javascript">
      window.onload = function() { alert ("member Rate updated successfully"); }
      </script>';

    } else if ((mysqli_num_rows($query2) == 0) && isset($_POST['id_rate']) && isset($_POST['rate_set'])) {

      echo '<script type="text/javascript">
      window.onload = function() { alert ("member not exist"); }
      </script>';
    }
  }
}
?>




<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="manage_staff/nicepage.css" media="screen">
  <link rel="stylesheet" href="manage_staff/Home.css" media="screen">
  <script class="u-script" type="text/javascript" src="manage_staff/jquery-1.9.1.min.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="manage_staff/nicepage.js" defer=""></script>







  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Home">
  <meta property="og:type" content="website">
  <link rel="canonical" href="/">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>
<h1 style="text-align: center; font-weight:bold ;">Staff Members</h1>

<body class="u-body u-xl-mode" data-lang="en">
  <section class="u-align-center u-clearfix u-section-1" id="sec-c553">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <?php
        if (count($staffs) == 0) {
          echo "No staff memebers there!!";
        } else {
          ?>
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 26px;">
                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-1">id</th>
                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-2">name</th>
                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-3">role</th>
                <th class="u-border-1 u-border-black u-palette-1-base u-table-cell u-table-cell-4">phone number</th>
              </tr>

              <?php

              foreach ($staffs as $staff) { ?>

                <tr style="height: 75px;">
                  <td class="u-border-1 u-border-grey-30 u-first-column u-grey-50 u-table-cell u-table-cell-5">
                    <?php echo $staff['ID'] ?>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <?php echo $staff['Name'] ?>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <?php echo $staff['role'] ?>
                  </td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <?php echo $staff['phone number'] ?>
                  </td>
                </tr>
                <?php
              }
        }
        ?>
          </thead>
        </table>
      </div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <a href="#sec-b7a6"
                class="u-btn u-btn-round u-button-style u-custom-item u-dialog-link u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1"><span
                  class="u-file-icon u-icon u-icon-1"><img src="images/3416075.png" alt=""></span>&nbsp;add a staff
              </a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <a href="#sec-8401"
                class="u-btn u-btn-round u-button-style u-custom-item u-dialog-link u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2"><span
                  class="u-file-icon u-icon u-icon-2"><img src="images/471709.png" alt=""></span>&nbsp;rate a staff
              </a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <a href="#sec-986a"
                class="u-btn u-btn-round u-button-style u-custom-item u-dialog-link u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-3"><span
                  class="u-file-icon u-icon u-icon-3"><img src="images/2355330.png" alt=""></span>&nbsp;edit a staff
              </a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-4">
              <a href="#sec-80ad"
                class="u-btn u-btn-round u-button-style u-custom-item u-dialog-link u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-4"><span
                  class="u-file-icon u-icon u-icon-4"><img src="images/3388913.png" alt=""></span>&nbsp;remove a staff
              </a>
            </div>
          </div>
        </div>
      </div>
      <a href="../adminmain.php"
        class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-5"><span
          class="u-file-icon u-icon u-icon-5"><img src="images/25694.png" alt=""></span>&nbsp;back to home
      </a>
    </div>
  </section>








  <section
    class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-dialog-section-4"
    id="sec-b7a6">
    <div class="u-container-style u-dialog u-white u-dialog-1">
      <div class="u-container-layout u-container-layout-1">
        <div class="u-form u-form-1">
          <form method="post">
            <div class="form-field">
              <label class="labell">ID</label>
              <input type="text" name="id" placeholder="id" required class="update" />
            </div>
            <br>
            <div class="form-field">
              <label class="labell">Email</label>
              <input type="email" class="update" class="inputt" name="email" placeholder="enter email" required />
            </div>
            <br>
            <div class="form-field">
              <label class="labell">Password</label>
              <input type="password" name="password" placeholder="password" required class="update" />
            </div>
            <br>
            <div class="form-field">
              <label class="labell">Age</label>
              <input type="text" name="age" placeholder="age" required class="update" />
            </div>
            <br>
            <div class="form-field">
              <label class="labell">Role</label>
              <input type="text" name="role" placeholder="role" required class="update" />
            </div>
            <br>
            <div class="form-field">
              <label class="labell">Name</label>
              <input type="text" class="update" name="name" placeholder="name" required />
            </div>
            <br>
            <div class="form-field">
              <label class="labell">Gender</label>
              <input class="update" type="text" type="text" name="gender" placeholder="gender" required />
            </div>
            <br>
            <div class="form-field">
              <label class="labell">Phone Number</label>
              <input class="update" type="text" name="phone" placeholder="phone_number" required />
            </div>
            <br>
            <div class="form-field">
              <button class="update" type="submit" style=" width : 200px">Submit</button>
            </div>

            <!-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
              <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
              <input type="hidden" value="" name="recaptchaResponse">
              <input type="hidden" name="formServices" value="643596c05aef1944bb7e67897fe63151">
          -->
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
      width: 800px;
      min-height: 250px;
      margin: 60px auto;
    }

    .inputt {
      background-color: #77aad9;
      border-radius: 30px;
      width: 200px;
      height: 40px;
    }

    .labell {
      font-size: larger;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-weight: bold;
    }

    .u-dialog-section-4 .u-container-layout-1 {
      padding: 30px;
    }

    .u-dialog-section-4 .u-form-1 {
      height: 658px;
      --thumb-color: #478ac9;
      --thumb-hover-color: #77aad9;
      --track-color: #c0c0c0;
      --track-active-color: #478ac9;
      margin: 0 auto 0 0;
    }

    .u-dialog-section-4 .u-form-group-1 {
      margin-left: auto;
      margin-right: auto;

    }

    .u-dialog-section-4 .u-form-group-2 {
      margin-left: auto;
      margin-right: auto;

    }

    .u-dialog-section-4 .u-form-group-3 {
      --progress: 19%;
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-4 .u-form-group-4 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-4 .u-form-group-5 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-4 .u-form-group-6 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-4 .u-form-group-7 {
      margin-left: auto;
      margin-right: auto;
      margin-top: 10px;
    }

    .u-dialog-section-4 .u-btn-1 {
      border-style: none;
      letter-spacing: 1px;
      background-image: none;
      text-transform: uppercase;
      font-weight: 600;
      margin-left: auto;
      margin-right: auto;
      width: 100%;
      padding: 10px 31px 10px 29px;
    }

    .u-dialog-section-4 .u-icon-1 {
      width: 20px;
      height: 20px;
    }

    @media (max-width: 991px) {
      .u-dialog-section-4 .u-dialog-1 {
        width: 720px;
      }
    }

    @media (max-width: 767px) {
      .u-dialog-section-4 .u-dialog-1 {
        width: 540px;
      }

      .u-dialog-section-4 .u-container-layout-1 {
        padding-left: 10px;
        padding-right: 10px;
      }
    }

    @media (max-width: 575px) {
      .u-dialog-section-4 .u-dialog-1 {
        width: 340px;
      }
    }
  </style>
  <section
    class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-dialog-section-5"
    id="sec-8401">
    <div class="u-container-style u-dialog u-white u-dialog-1">
      <div class="u-container-layout u-container-layout-1">
        <div class="u-expanded-width u-form u-form-1">
          <form method="post">
            <div class="u-form-group u-form-group-1">
              <label class="labell">ID</label>
              <input type="text" class="rate" placeholder="enter the staff id" name="id_rate" required="required">
            </div>
            <br>
            <label class="labell">Rating</label>

            <input type="range" name="rate_set" min="0" max="10" required />
        </div>
        <br>
        <div class="form-field">
          <button class="rate" type="submit">submit</button>
        </div>
        <button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link"
            preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style="">
            <use xlink:href="#svg-efe9"></use>
          </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
            xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9">
            <rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16">
            </rect>
            <rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2">
            </rect>
          </svg></button>

        </form>
      </div>
    </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link"
        preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style="">
        <use xlink:href="#svg-efe9"></use>
      </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
        xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9">
        <rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect>
        <rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect>
      </svg></button>
    </div>
  </section>
  <style>
    .u-dialog-section-5 .u-dialog-1 {
      width: 800px;
      min-height: 250px;
      margin: 60px auto;
    }

    .rate {
      background-color: darkolivegreen;
      border-radius: 10px;
      width: 200px;
      height: 40px;
    }

    .u-dialog-section-5 .u-container-layout-1 {
      padding: 30px;
    }

    .u-dialog-section-5 .u-form-1 {
      height: 657px;
      --thumb-color: #478ac9;
      --thumb-hover-color: #77aad9;
      --track-color: #c0c0c0;
      --track-active-color: #478ac9;
      margin: 0 auto 0 0;
    }

    .u-dialog-section-5 .u-form-group-1 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-5 .u-form-group-2 {
      margin-left: 0;
    }

    .u-dialog-section-5 .u-passive-icon-1 {
      display: none;
      height: 21px;
      width: 21px;
    }

    .u-dialog-section-5 .u-passive-icon-2 {
      display: none;
      height: 21px;
      width: 21px;
    }

    .u-dialog-section-5 .u-passive-icon-3 {
      display: none;
      height: 21px;
      width: 21px;
    }

    .u-dialog-section-5 .u-passive-icon-4 {
      display: inline;
      height: 21px;
      width: 21px;
    }

    .u-dialog-section-5 .u-passive-icon-5 {
      display: inline;
      height: 21px;
      width: 21px;
    }

    .u-dialog-section-5 .u-form-group-3 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-5 .u-btn-1 {
      border-style: none;
      letter-spacing: 1px;
      background-image: none;
      text-transform: uppercase;
      font-weight: 600;
      margin-left: auto;
      margin-right: auto;
      width: 100%;
      padding: 10px 31px 10px 29px;
    }

    .u-dialog-section-5 .u-icon-1 {
      width: 20px;
      height: 20px;
    }

    @media (max-width: 1199px) {
      .u-dialog-section-5 .u-form-1 {
        margin-right: initial;
        margin-left: initial;
      }
    }

    @media (max-width: 991px) {
      .u-dialog-section-5 .u-dialog-1 {
        width: 720px;
      }
    }

    @media (max-width: 767px) {
      .u-dialog-section-5 .u-dialog-1 {
        width: 540px;
      }

      .u-dialog-section-5 .u-container-layout-1 {
        padding-left: 10px;
        padding-right: 10px;
      }
    }

    @media (max-width: 575px) {
      .u-dialog-section-5 .u-dialog-1 {
        width: 340px;
      }
    }
  </style>
  <section
    class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-dialog-section-6"
    id="sec-986a">
    <div class="u-container-style u-dialog u-white u-dialog-1">
      <div class="u-container-layout u-container-layout-1">
        <div class="u-expanded-width u-form u-form-1">

          <form method="get">
            <div class="form-field">
              <label class="labell">ID</label>
              <input type="text" class="update" name="id_update" placeholder="id" required />
            </div>
            <br>
            <div class="form-field">
              <label class="labell">New Email</label>
              <input type="email" class="update" name="email_update" placeholder="enter email" required />
            </div>
            <br>
            <div class="form-field">
              <label class="labell">New Password</label>
              <input type="password" class="update" name="password_update" placeholder="password" required />
            </div>
            <br>
            <div class="form-field">
              <label class="labell">New Phone number</label>
              <input type="text" class="update" name="phone_update" placeholder="phone_number" required />
            </div>
            <br>
            <div class="form-field">
              <button class="update" type="submit">Update</button>
            </div>

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
    .u-dialog-section-6 .u-dialog-1 {
      width: 800px;
      min-height: 250px;
      margin: 60px auto;
    }

    .update {
      background-color: darkolivegreen;
      border-radius: 10px;
    }

    .u-dialog-section-6 .u-container-layout-1 {
      padding: 30px;
    }

    .u-dialog-section-6 .u-form-1 {
      height: 657px;
      --thumb-color: #478ac9;
      --thumb-hover-color: #77aad9;
      --track-color: #c0c0c0;
      --track-active-color: #478ac9;
      margin: 0 auto 0 0;
    }

    .u-dialog-section-6 .u-form-group-1 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-6 .u-form-group-2 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-6 .u-form-group-3 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-6 .u-form-group-4 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-6 .u-form-group-5 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-6 .u-btn-1 {
      border-style: none;
      letter-spacing: 1px;
      background-image: none;
      text-transform: uppercase;
      font-weight: 600;
      margin-left: auto;
      margin-right: auto;
      width: 100%;
      padding: 10px 31px 10px 29px;
    }

    .u-dialog-section-6 .u-icon-1 {
      width: 20px;
      height: 20px;
    }

    @media (max-width: 1199px) {
      .u-dialog-section-6 .u-form-1 {
        margin-right: initial;
        margin-left: initial;
      }
    }

    @media (max-width: 991px) {
      .u-dialog-section-6 .u-dialog-1 {
        width: 720px;
      }
    }

    @media (max-width: 767px) {
      .u-dialog-section-6 .u-dialog-1 {
        width: 540px;
      }

      .u-dialog-section-6 .u-container-layout-1 {
        padding-left: 10px;
        padding-right: 10px;
      }
    }

    @media (max-width: 575px) {
      .u-dialog-section-6 .u-dialog-1 {
        width: 340px;
      }
    }
  </style>
  <section
    class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-dialog-section-7"
    id="sec-80ad">
    <div class="u-container-style u-dialog u-white u-dialog-1">
      <div class="u-container-layout u-container-layout-1">
        <div class="u-expanded-width u-form u-form-1">

          <form method="post">
            <label class="labell">ID</label>
            <div class="form-field">
              <input type="text" class="update" name="id_deleted" placeholder="id" required />
            </div>
            <br>
            <div class="form-field">
              <button class="update" type="submit">Delete</button>
            </div>

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
    .u-dialog-section-7 .u-dialog-1 {
      width: 800px;
      min-height: 250px;
      margin: 60px auto;
    }

    .u-dialog-section-7 .u-container-layout-1 {
      padding: 30px;
    }

    .u-dialog-section-7 .u-form-1 {
      height: 657px;
      --thumb-color: #478ac9;
      --thumb-hover-color: #77aad9;
      --track-color: #c0c0c0;
      --track-active-color: #478ac9;
      margin: 0 auto 0 0;
    }

    .u-dialog-section-7 .u-form-group-1 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-7 .u-form-group-2 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-7 .u-form-group-3 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-7 .u-form-group-4 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-7 .u-form-group-5 {
      margin-left: auto;
      margin-right: auto;
    }

    .u-dialog-section-7 .u-btn-1 {
      border-style: none;
      letter-spacing: 1px;
      background-image: none;
      text-transform: uppercase;
      font-weight: 600;
      margin-left: auto;
      margin-right: auto;
      width: 100%;
      padding: 10px 31px 10px 29px;
    }

    .u-dialog-section-7 .u-icon-1 {
      width: 20px;
      height: 20px;
    }

    @media (max-width: 1199px) {
      .u-dialog-section-7 .u-form-1 {
        margin-right: initial;
        margin-left: initial;
      }
    }

    @media (max-width: 991px) {
      .u-dialog-section-7 .u-dialog-1 {
        width: 720px;
      }
    }

    @media (max-width: 767px) {
      .u-dialog-section-7 .u-dialog-1 {
        width: 540px;
      }

      .u-dialog-section-7 .u-container-layout-1 {
        padding-left: 10px;
        padding-right: 10px;
      }
    }

    @media (max-width: 575px) {
      .u-dialog-section-7 .u-dialog-1 {
        width: 340px;
      }
    }
  </style>
</body>

</html>