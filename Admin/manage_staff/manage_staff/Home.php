<?php


require_once 'staff.php' ;
require_once 'person.php' ;
require_once 'admin_controller.php' ;
require_once 'db_controller.php';

$admin = new admin_controller ;
$staffs = $admin->getAllStaff();

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
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-align-center u-clearfix u-section-1" id="sec-c553">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <?php
        if(count($staffs)== 0)
        {
            echo "No staff memebers there!!" ;
        }
        else
        {
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
            
            foreach($staffs as $staff)
            { ?>
             
             <tr style="height: 75px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-50 u-table-cell u-table-cell-5"><?php echo $staff['ID'] ?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $staff['Name'] ?> </td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"> <?php echo $staff['role'] ?> </td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $staff['phoneNumber'] ?>  
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
                <a href="#sec-b7a6" class="u-btn u-btn-round u-button-style u-custom-item u-dialog-link u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/3416075.png" alt=""></span>&nbsp;add a staff
                </a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <a href="#sec-8401" class="u-btn u-btn-round u-button-style u-custom-item u-dialog-link u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2"><span class="u-file-icon u-icon u-icon-2"><img src="images/471709.png" alt=""></span>&nbsp;rate a staff
                </a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <a href="#sec-986a" class="u-btn u-btn-round u-button-style u-custom-item u-dialog-link u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-3"><span class="u-file-icon u-icon u-icon-3"><img src="images/2355330.png" alt=""></span>&nbsp;edit a staff
                </a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <a href="#sec-80ad" class="u-btn u-btn-round u-button-style u-custom-item u-dialog-link u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-4"><span class="u-file-icon u-icon u-icon-4"><img src="images/3388913.png" alt=""></span>&nbsp;remove a staff
                </a>
              </div>
            </div>
          </div>
        </div>
        <a href="https://nicepage.com/joomla-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-5"><span class="u-file-icon u-icon u-icon-5"><img src="images/25694.png" alt=""></span>&nbsp;back to home
        </a>
      </div>
    </section>
    
    
    
    
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/html5-template" target="_blank">
        <span>Free HTML5 Template</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.app" target="_blank">
        <span>Website Builder</span>
      </a>. 
    </section>
  <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-dialog-section-4" id="sec-b7a6">
      <div class="u-container-style u-dialog u-white u-dialog-1">
        <div class="u-container-layout u-container-layout-1">
          <div class="u-form u-form-1">
            <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-19 u-form-vertical u-inner-form" style="padding: 0;" source="email" name="form">
              <div class="u-form-group u-form-name u-form-group-1">
                <label for="name-c1e6" class="u-label">Name</label>
                <input type="text" placeholder="enter the staff name" id="name-c1e6" name="name-1" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-dark-1 u-radius-12 u-text-palette-5-light-3" required="">
              </div>
              <div class="u-form-group u-form-group-2">
                <label for="text-21dd" class="u-label">id</label>
                <input type="text" placeholder="enter the staff id" id="text-21dd" name="text" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-dark-1 u-radius-12 u-text-palette-5-light-3" required="required">
              </div>
              <div class="u-form-group u-form-number u-form-number-layout-number u-form-group-3">
                <label for="number-c0d4" class="u-label">age</label>
                <div class="u-input-row" data-value="19">
                  <input value="19" min="0" max="100" step="1" type="number" placeholder="" id="number-c0d4" name="age" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-dark-1 u-radius-12 u-text-palette-5-light-3">
                </div>
              </div>
              <div class="u-form-email u-form-group u-form-group-4">
                <label for="email-daf4" class="u-label">email</label>
                <input type="email" placeholder="Enter a valid email address" id="email-daf4" name="email" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-dark-1 u-radius-12 u-text-palette-5-light-3" required="">
              </div>
              <div class="u-form-group u-form-group-5">
                <label for="text-d1de" class="u-label">password</label>
                <input type="text" placeholder="enter staff password" id="text-d1de" name="text-1" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-dark-1 u-radius-12 u-text-palette-5-light-3" required="required">
              </div>
              <div class="u-form-group u-form-phone u-form-group-6">
                <label for="phone-42da" class="u-label">phone</label>
                <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone-42da" name="phone" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-dark-1 u-radius-12 u-text-palette-5-light-3" required="">
              </div>
              <div class="u-align-right u-form-group u-form-submit u-form-group-7">
                <a href="#" class="u-active-grey-70 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-radius-12 u-btn-1">add staff</a>
                <input type="submit" value="submit" class="u-form-control-hidden">
              </div>
              <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
              <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
              <input type="hidden" value="" name="recaptchaResponse">
              <input type="hidden" name="formServices" value="643596c05aef1944bb7e67897fe63151">
            </form>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xlink:href="#svg-efe9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </div>
    </section><style>.u-dialog-section-4 .u-dialog-1 {
  width: 800px;
  min-height: 250px;
  margin: 60px auto;
}

.u-dialog-section-4 .u-container-layout-1 {
  padding: 30px;
}

.u-dialog-section-4 .u-form-1 {
  height: 657px;
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
}</style><section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-dialog-section-5" id="sec-8401">
      <div class="u-container-style u-dialog u-white u-dialog-1">
        <div class="u-container-layout u-container-layout-1">
          <div class="u-expanded-width u-form u-form-1">
            <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-19 u-form-vertical u-inner-form" style="padding: 0;" source="email" name="form">
              <div class="u-form-group u-form-group-1">
                <label for="text-21dd" class="u-label">id</label>
                <input type="text" placeholder="enter the staff id" id="text-21dd" name="text" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-base u-radius-12 u-text-palette-5-light-3" required="required">
              </div>
              <div class="u-form-group u-form-rating u-form-group-2">
                <label for="form-rating-347e" class="u-label">Rating</label>
                <div class="u-rating-icons u-spacing-25">
                  <span class="u-active-icon u-form-rating-item u-text-palette-3-base" style="display: none; height: 21px; width: 21px;">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 49.94 49.94" style=""><use xlink:href="#svg-6f77"></use></svg>
                    <svg class="u-svg-content" viewBox="0 0 49.94 49.94" x="0px" y="0px" id="svg-6f77" style="enable-background:new 0 0 49.94 49.94;"><path d="M48.856,22.73c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757
	c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996
	L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.622c-1.359,0.197-2.467,1.131-2.892,2.438
	c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.701
	c-0.183,1.06,0.095,2.091,0.781,2.904c1.066,1.267,2.927,1.653,4.415,0.871l10.814-5.686c0.452-0.237,1.021-0.235,1.472,0
	l10.815,5.686c0.526,0.277,1.087,0.417,1.666,0.417c1.057,0,2.059-0.47,2.748-1.288c0.687-0.813,0.964-1.846,0.781-2.904
	l-2.065-12.042c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.73z"></path></svg>
                  </span>
                  <span class="u-active-icon u-form-rating-item u-text-palette-3-base" style="display: none; height: 21px; width: 21px;">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 49.94 49.94" style=""><use xlink:href="#svg-98ba"></use></svg>
                    <svg class="u-svg-content" viewBox="0 0 49.94 49.94" x="0px" y="0px" id="svg-98ba" style="enable-background:new 0 0 49.94 49.94;"><path d="M48.856,22.73c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757
	c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996
	L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.622c-1.359,0.197-2.467,1.131-2.892,2.438
	c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.701
	c-0.183,1.06,0.095,2.091,0.781,2.904c1.066,1.267,2.927,1.653,4.415,0.871l10.814-5.686c0.452-0.237,1.021-0.235,1.472,0
	l10.815,5.686c0.526,0.277,1.087,0.417,1.666,0.417c1.057,0,2.059-0.47,2.748-1.288c0.687-0.813,0.964-1.846,0.781-2.904
	l-2.065-12.042c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.73z"></path></svg>
                  </span>
                  <span class="u-active-icon u-form-rating-item u-text-palette-3-base" style="display: none; height: 21px; width: 21px;">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 49.94 49.94" style=""><use xlink:href="#svg-362e"></use></svg>
                    <svg class="u-svg-content" viewBox="0 0 49.94 49.94" x="0px" y="0px" id="svg-362e" style="enable-background:new 0 0 49.94 49.94;"><path d="M48.856,22.73c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757
	c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996
	L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.622c-1.359,0.197-2.467,1.131-2.892,2.438
	c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.701
	c-0.183,1.06,0.095,2.091,0.781,2.904c1.066,1.267,2.927,1.653,4.415,0.871l10.814-5.686c0.452-0.237,1.021-0.235,1.472,0
	l10.815,5.686c0.526,0.277,1.087,0.417,1.666,0.417c1.057,0,2.059-0.47,2.748-1.288c0.687-0.813,0.964-1.846,0.781-2.904
	l-2.065-12.042c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.73z"></path></svg>
                  </span>
                  <span class="u-active-icon u-form-rating-item u-text-palette-3-base" style="display: none; height: 21px; width: 21px;">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 49.94 49.94" style=""><use xlink:href="#svg-06e8"></use></svg>
                    <svg class="u-svg-content" viewBox="0 0 49.94 49.94" x="0px" y="0px" id="svg-06e8" style="enable-background:new 0 0 49.94 49.94;"><path d="M48.856,22.73c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757
	c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996
	L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.622c-1.359,0.197-2.467,1.131-2.892,2.438
	c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.701
	c-0.183,1.06,0.095,2.091,0.781,2.904c1.066,1.267,2.927,1.653,4.415,0.871l10.814-5.686c0.452-0.237,1.021-0.235,1.472,0
	l10.815,5.686c0.526,0.277,1.087,0.417,1.666,0.417c1.057,0,2.059-0.47,2.748-1.288c0.687-0.813,0.964-1.846,0.781-2.904
	l-2.065-12.042c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.73z"></path></svg>
                  </span>
                  <span class="u-active-icon u-form-rating-item u-text-palette-3-base" style="display: none; height: 21px; width: 21px;">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 49.94 49.94" style=""><use xlink:href="#svg-20b7"></use></svg>
                    <svg class="u-svg-content" viewBox="0 0 49.94 49.94" x="0px" y="0px" id="svg-20b7" style="enable-background:new 0 0 49.94 49.94;"><path d="M48.856,22.73c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757
	c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996
	L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.622c-1.359,0.197-2.467,1.131-2.892,2.438
	c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.701
	c-0.183,1.06,0.095,2.091,0.781,2.904c1.066,1.267,2.927,1.653,4.415,0.871l10.814-5.686c0.452-0.237,1.021-0.235,1.472,0
	l10.815,5.686c0.526,0.277,1.087,0.417,1.666,0.417c1.057,0,2.059-0.47,2.748-1.288c0.687-0.813,0.964-1.846,0.781-2.904
	l-2.065-12.042c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.73z"></path></svg>
                  </span>
                  <span class="u-form-rating-item u-passive-icon u-text-grey-25 u-passive-icon-1">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 49.94 49.94" style=""><use xlink:href="#svg-9984"></use></svg>
                    <svg class="u-svg-content" viewBox="0 0 49.94 49.94" x="0px" y="0px" id="svg-9984" style="enable-background:new 0 0 49.94 49.94;"><path d="M48.856,22.73c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757
	c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996
	L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.622c-1.359,0.197-2.467,1.131-2.892,2.438
	c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.701
	c-0.183,1.06,0.095,2.091,0.781,2.904c1.066,1.267,2.927,1.653,4.415,0.871l10.814-5.686c0.452-0.237,1.021-0.235,1.472,0
	l10.815,5.686c0.526,0.277,1.087,0.417,1.666,0.417c1.057,0,2.059-0.47,2.748-1.288c0.687-0.813,0.964-1.846,0.781-2.904
	l-2.065-12.042c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.73z"></path></svg>
                  </span>
                  <span class="u-form-rating-item u-passive-icon u-text-grey-25 u-passive-icon-2">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 49.94 49.94" style=""><use xlink:href="#svg-5d6a"></use></svg>
                    <svg class="u-svg-content" viewBox="0 0 49.94 49.94" x="0px" y="0px" id="svg-5d6a" style="enable-background:new 0 0 49.94 49.94;"><path d="M48.856,22.73c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757
	c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996
	L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.622c-1.359,0.197-2.467,1.131-2.892,2.438
	c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.701
	c-0.183,1.06,0.095,2.091,0.781,2.904c1.066,1.267,2.927,1.653,4.415,0.871l10.814-5.686c0.452-0.237,1.021-0.235,1.472,0
	l10.815,5.686c0.526,0.277,1.087,0.417,1.666,0.417c1.057,0,2.059-0.47,2.748-1.288c0.687-0.813,0.964-1.846,0.781-2.904
	l-2.065-12.042c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.73z"></path></svg>
                  </span>
                  <span class="u-form-rating-item u-passive-icon u-text-grey-25 u-passive-icon-3">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 49.94 49.94" style=""><use xlink:href="#svg-f025"></use></svg>
                    <svg class="u-svg-content" viewBox="0 0 49.94 49.94" x="0px" y="0px" id="svg-f025" style="enable-background:new 0 0 49.94 49.94;"><path d="M48.856,22.73c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757
	c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996
	L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.622c-1.359,0.197-2.467,1.131-2.892,2.438
	c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.701
	c-0.183,1.06,0.095,2.091,0.781,2.904c1.066,1.267,2.927,1.653,4.415,0.871l10.814-5.686c0.452-0.237,1.021-0.235,1.472,0
	l10.815,5.686c0.526,0.277,1.087,0.417,1.666,0.417c1.057,0,2.059-0.47,2.748-1.288c0.687-0.813,0.964-1.846,0.781-2.904
	l-2.065-12.042c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.73z"></path></svg>
                  </span>
                  <span class="u-form-rating-item u-passive-icon u-text-grey-25 u-passive-icon-4">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 49.94 49.94" style=""><use xlink:href="#svg-ddeb"></use></svg>
                    <svg class="u-svg-content" viewBox="0 0 49.94 49.94" x="0px" y="0px" id="svg-ddeb" style="enable-background:new 0 0 49.94 49.94;"><path d="M48.856,22.73c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757
	c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996
	L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.622c-1.359,0.197-2.467,1.131-2.892,2.438
	c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.701
	c-0.183,1.06,0.095,2.091,0.781,2.904c1.066,1.267,2.927,1.653,4.415,0.871l10.814-5.686c0.452-0.237,1.021-0.235,1.472,0
	l10.815,5.686c0.526,0.277,1.087,0.417,1.666,0.417c1.057,0,2.059-0.47,2.748-1.288c0.687-0.813,0.964-1.846,0.781-2.904
	l-2.065-12.042c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.73z"></path></svg>
                  </span>
                  <span class="u-form-rating-item u-passive-icon u-text-grey-25 u-passive-icon-5">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 49.94 49.94" style=""><use xlink:href="#svg-a2f6"></use></svg>
                    <svg class="u-svg-content" viewBox="0 0 49.94 49.94" x="0px" y="0px" id="svg-a2f6" style="enable-background:new 0 0 49.94 49.94;"><path d="M48.856,22.73c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757
	c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996
	L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.622c-1.359,0.197-2.467,1.131-2.892,2.438
	c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.701
	c-0.183,1.06,0.095,2.091,0.781,2.904c1.066,1.267,2.927,1.653,4.415,0.871l10.814-5.686c0.452-0.237,1.021-0.235,1.472,0
	l10.815,5.686c0.526,0.277,1.087,0.417,1.666,0.417c1.057,0,2.059-0.47,2.748-1.288c0.687-0.813,0.964-1.846,0.781-2.904
	l-2.065-12.042c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.73z"></path></svg>
                  </span>
                  <input type="hidden" id="form-rating-347e" name="rank" value="" required="">
                </div>
              </div>
              <div class="u-align-right u-form-group u-form-submit u-form-group-3">
                <a href="#" class="u-active-grey-70 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-2 u-palette-1-base u-radius-12 u-btn-1">rate staff</a>
                <input type="submit" value="submit" class="u-form-control-hidden">
              </div>
              <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
              <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
              <input type="hidden" value="" name="recaptchaResponse">
              <input type="hidden" name="formServices" value="643596c05aef1944bb7e67897fe63151">
            </form>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xlink:href="#svg-efe9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </div>
    </section><style>.u-dialog-section-5 .u-dialog-1 {
  width: 800px;
  min-height: 250px;
  margin: 60px auto;
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
}</style><section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-dialog-section-6" id="sec-986a">
      <div class="u-container-style u-dialog u-white u-dialog-1">
        <div class="u-container-layout u-container-layout-1">
          <div class="u-expanded-width u-form u-form-1">
            <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-19 u-form-vertical u-inner-form" style="padding: 0;" source="email" name="form">
              <div class="u-form-group u-form-group-1">
                <label for="text-21dd" class="u-label">id</label>
                <input type="text" placeholder="enter the staff id" id="text-21dd" name="text" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-base u-radius-12 u-text-palette-5-light-3" required="required">
              </div>
              <div class="u-form-email u-form-group u-form-group-2">
                <label for="email-daf4" class="u-label">email</label>
                <input type="email" placeholder="Enter a valid email address" id="email-daf4" name="email" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-base u-radius-12 u-text-palette-5-light-3" required="">
              </div>
              <div class="u-form-group u-form-group-3">
                <label for="text-d1de" class="u-label">password</label>
                <input type="text" placeholder="enter staff password" id="text-d1de" name="text-1" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-base u-radius-12 u-text-palette-5-light-3" required="required">
              </div>
              <div class="u-form-group u-form-phone u-form-group-4">
                <label for="phone-42da" class="u-label">phone</label>
                <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone-42da" name="phone" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-base u-radius-12 u-text-palette-5-light-3" required="">
              </div>
              <div class="u-align-right u-form-group u-form-submit u-form-group-5">
                <a href="#" class="u-active-grey-70 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-2 u-palette-1-base u-radius-12 u-btn-1">edit staff</a>
                <input type="submit" value="submit" class="u-form-control-hidden">
              </div>
              <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
              <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
              <input type="hidden" value="" name="recaptchaResponse">
              <input type="hidden" name="formServices" value="643596c05aef1944bb7e67897fe63151">
            </form>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xlink:href="#svg-efe9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </div>
    </section><style>.u-dialog-section-6 .u-dialog-1 {
  width: 800px;
  min-height: 250px;
  margin: 60px auto;
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
}</style><section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-dialog-section-7" id="sec-80ad">
      <div class="u-container-style u-dialog u-white u-dialog-1">
        <div class="u-container-layout u-container-layout-1">
          <div class="u-expanded-width u-form u-form-1">
            <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-19 u-form-vertical u-inner-form" style="padding: 0;" source="email" name="form">
              <div class="u-form-group u-form-name u-form-group-1">
                <label for="name-c1e6" class="u-label">Name</label>
                <input type="text" placeholder="enter the staff name" id="name-c1e6" name="name-1" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-base u-radius-12 u-text-palette-5-light-3" required="">
              </div>
              <div class="u-form-group u-form-group-2">
                <label for="text-21dd" class="u-label">id</label>
                <input type="text" placeholder="enter the staff id" id="text-21dd" name="text" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-base u-radius-12 u-text-palette-5-light-3" required="required">
              </div>
              <div class="u-form-email u-form-group u-form-group-3">
                <label for="email-daf4" class="u-label">email</label>
                <input type="email" placeholder="Enter a valid email address" id="email-daf4" name="email" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-base u-radius-12 u-text-palette-5-light-3" required="">
              </div>
              <div class="u-form-group u-form-group-4">
                <label for="text-d1de" class="u-label">password</label>
                <input type="text" placeholder="enter staff password" id="text-d1de" name="text-1" class="u-border-2 u-border-grey-80 u-input u-input-rectangle u-palette-1-base u-radius-12 u-text-palette-5-light-3" required="required">
              </div>
              <div class="u-align-right u-form-group u-form-submit u-form-group-5">
                <a href="#" class="u-active-grey-70 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-radius-12 u-btn-1">remove staff</a>
                <input type="submit" value="submit" class="u-form-control-hidden">
              </div>
              <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
              <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
              <input type="hidden" value="" name="recaptchaResponse">
              <input type="hidden" name="formServices" value="643596c05aef1944bb7e67897fe63151">
            </form>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xlink:href="#svg-efe9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </div>
    </section><style>.u-dialog-section-7 .u-dialog-1 {
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
}</style>
</body></html>