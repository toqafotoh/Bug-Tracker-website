<?php
require_once '../../controller/staff_control.php';
//require_once '../models/staff.php';
$status = new staff_controller;

$statuses = $status->view_ab($_SESSION["user_id"]);
if (isset($_POST["submit"])) {
    $s = new staff_controller;
    $bug_id = $_POST["bid"];
    $staff_id = $_POST["sid"];
    // echo $bug_id . "" . $staff_id;
    $s->asigntostaff($bug_id, $staff_id);

}
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="assigned bugs">
    <meta name="description" content="">
    <title>assigned bugs</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.9.14, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">





    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "manage staff"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>


<body class="u-body u-xl-mode" data-lang="en">
    <header class="u-clearfix u-header u-header" id="sec-ab15">
        <div class="u-clearfix u-sheet u-sheet-1"></div>
    </header>
    <section class="u-clearfix u-section-1" id="sec-ca94">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-black u-text-default u-text-1">assigned bugs</h1>
            <div class="u-table u-table-responsive u-table-1">
                <table class="u-table-entity u-table-entity-1">
                    <colgroup>
                        <col width="32.3%">
                        <col width="32.3%">
                        <col width="35.400000000000006%">
                    </colgroup>
                    <thead class="u-align-center u-table-header u-table-header-1">
                        <tr style="height: 29px;">
                            <th
                                class="u-border-2 u-border-grey-60 u-border-no-left u-border-no-right u-border-no-top u-palette-1-base u-table-cell u-table-cell-1">
                                <b>Id</b>
                                <br>
                            </th>
                            <th
                                class="u-border-2 u-border-grey-60 u-border-no-left u-border-no-right u-border-no-top u-palette-4-base u-table-cell u-table-cell-2">
                                <b>Description</b>
                            </th>
                            <th
                                class="u-border-2 u-border-grey-60 u-border-no-left u-border-no-right u-border-no-top u-palette-2-light-1 u-table-cell u-table-cell-3">
                                type</th>
                        </tr>
                    </thead>
                    <?php

                    foreach ($statuses as $stat) {

                        ?>
                        <tbody class="u-align-center u-table-body u-table-body-1">
                            <tr style="height: 27px;">
                                <td
                                    class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-text-palette-1-base u-table-cell-4">
                                    <span class="u-text-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            version="1.1" xml:space="preserve" class="u-svg-content"
                                            viewBox="0 0 367.805 367.805" x="0px" y="0px" id="svg-4b6d"
                                            style="enable-background:new 0 0 367.805 367.805;">
                                            <g>

                                                <path style="fill:#3BB54A;"
                                                    d="M183.903,0.001c101.566,0,183.902,82.336,183.902,183.902s-82.336,183.902-183.902,183.902   S0.001,285.469,0.001,183.903l0,0C-0.288,82.625,81.579,0.29,182.856,0.001C183.205,0,183.554,0,183.903,0.001z">
                                                </path>
                                                <polygon style="fill:#D4E1F4;"
                                                    points="285.78,133.225 155.168,263.837 82.025,191.217 111.805,161.96 155.168,204.801    256.001,103.968  ">
                                                </polygon>
                                            </g>
                                        </svg>
                                        <?php echo $stat["ID"] ?>
                                    </span>

                                </td>
                                <td
                                    class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-table-cell-5">
                                    &nbsp;<span class="u-text-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            version="1.1" xml:space="preserve" class="u-svg-content"
                                            viewBox="0 0 367.805 367.805" x="0px" y="0px" id="svg-52ed"
                                            style="enable-background:new 0 0 367.805 367.805;">
                                            <g>
                                                <path style="fill:#3BB54A;"
                                                    d="M183.903,0.001c101.566,0,183.902,82.336,183.902,183.902s-82.336,183.902-183.902,183.902   S0.001,285.469,0.001,183.903l0,0C-0.288,82.625,81.579,0.29,182.856,0.001C183.205,0,183.554,0,183.903,0.001z">
                                                </path>
                                                <polygon style="fill:#D4E1F4;"
                                                    points="285.78,133.225 155.168,263.837 82.025,191.217 111.805,161.96 155.168,204.801    256.001,103.968  ">
                                                </polygon>
                                            </g>
                                        </svg>
                                    </span>
                                    <?php echo $stat["Description"] ?>
                                </td>
                                <td
                                    class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-table-cell u-table-cell-6">
                                    <?php echo $stat["type"] ?>
                                </td>

                            </tr>
                        <?php }
                    ?>
                    </tbody>
                </table>
            </div>
            <a class="u-border-none u-btn u-button-style u-dialog-link u-hover-palette-2-dark-1 u-palette-2-light-1 u-btn-1"
                href="#sec-b6f6"><span class="u-file-icon u-icon"><img src="images/1372840.png" alt=""></span>assign
                to
                other staff
            </a>
            <a class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2"
                href="../sulition/index.php"><span class="u-file-icon u-icon"><img src="images/3682321.png"
                        alt=""></span>&nbsp;​​send
                solution&nbsp;<span class="u-text-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        xml:space="preserve" class="u-svg-content" viewBox="0 0 32.526 32.526" x="0px" y="0px"
                        id="svg-a802" style="enable-background:new 0 0 32.526 32.526;">
                        <polygon
                            points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091   29.698,32.526 32.526,29.698 19.091,16.263 ">
                        </polygon>
                    </svg>
                </span>&nbsp;
            </a>
            <a href="../staff.php" class="u-btn u-btn-rectangle u-button-style u-palette-4-base u-btn-3">back
                to home page</a>
        </div>
    </section>


    <section class="u-backlink u-clearfix u-grey-80">
        <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-dialog-section-4"
            id="sec-b6f6">
            <div class="u-container-style u-dialog u-white u-dialog-1">
                <div class="u-container-layout u-container-layout-1">
                    <div class="u-form u-form-1">
                        <form method="post" style="padding: 30px;">
                            <div class="u-form-group u-form-name">
                                <label for="name-945b" class="u-label">new staff id</label>
                                <input type="text" name="sid" id="name-945b" name="text-2"
                                    class="u-input u-input-rectangle u-radius-37" required="">
                            </div>
                            <div class="u-form-group u-form-group-2">
                                <label for="text-9668" class="u-label"> bug id</label>
                                <input type="text" name="bid" placeholder="" id="text-9668" name="text"
                                    class="u-input u-input-rectangle u-radius-37" required="">
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <a href="#"
                                    class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-3-base u-radius-24 u-btn-1">assign<br>
                                </a>
                                <input type="submit" name="submit" class="u-form-control-hidden">
                            </div>
                        </form>
                    </div>
                </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style="">
                        <use xlink:href="#svg-efe9"></use>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px"
                        id="svg-efe9">
                        <rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2"
                            height="16"></rect>
                        <rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16"
                            height="2"></rect>
                    </svg></button>
            </div>
        </section>
        <style>
            .u-dialog-section-4 .u-dialog-1 {
                width: 548px;
                min-height: 205px;
                height: auto;
                margin: 164px auto 60px calc(((100% - 1140px) / 2) + 164px);
            }

            .u-dialog-section-4 .u-container-layout-1 {
                padding: 0;
            }

            .u-dialog-section-4 .u-form-1 {
                height: 381px;
                margin: 0 -10px 0 0;
            }

            .u-dialog-section-4 .u-form-group-2 {
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
</body>

</html>