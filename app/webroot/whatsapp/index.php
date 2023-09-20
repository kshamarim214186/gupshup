<?php
//echo "test";die;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include("include/db.inc.php");
$db1 = new database();
$conn = $db1->open();
$date = date("Y-m-d");
$getEmailIds = mysqli_query($conn,"SELECT * from automation_email where status='not_sent' AND created='".$date."'");

while($fetchEmail=mysqli_fetch_array($getEmailIds)){
    //echo $fetchEmail['email'];die;
    if ($fetchEmail['email']) {
        require 'vendor/autoload.php';
        $sender = 'enquiry@abodeoverseas.com';
        $senderName = 'Abode Overseas';
        $usernameSmtp = 'AKIA5TFRNLIQTDGTJAG2';
        $passwordSmtp = 'BPLuoOOFdABEN9CtJdo0fXPC2FF3ST65qpAu/VB1rW4T';
        $host = 'email-smtp.ap-south-1.amazonaws.com';
        $port = 587;
        $sub = "Your Ticket to Europe: PR Opportunities for Indians";
        $subject = '=?UTF-8?B?' . base64_encode($sub) . '?=';
        
        $final = $fetchEmail['email'].'&&unsubscribe@#@!';
    	$encoded = base64_encode($final);
        $unsubscribeurl = 'https://www.unsubscribe.abodeoverseas.com/?'.$encoded;
    
        $bodyHtml = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html data-editor-version="2" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <style type="text/css">
      body,
      p,
      div {
        font-family: inherit;
        font-size: 14px;
      }

      body {
        color: #000000;
      }

      body a {
        color: #000000;
        text-decoration: none;
      }

      p {
        margin: 0;
        padding: 0;
      }

      table.wrapper {
        width: 100% !important;
        table-layout: fixed;
        -webkit-font-smoothing: antialiased;
        -webkit-text-size-adjust: 100%;
        -moz-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
      }

      img.max-width {
        max-width: 100% !important;
      }

      .column.of-2 {
        width: 50%;
      }

      .column.of-3 {
        width: 33.333%;
      }

      .column.of-4 {
        width: 25%;
      }

      ul ul ul ul {
        list-style-type: disc !important;
      }

      ol ol {
        list-style-type: lower-roman !important;
      }

      ol ol ol {
        list-style-type: lower-latin !important;
      }

      ol ol ol ol {
        list-style-type: decimal !important;
      }

      @media screen and (max-width:480px) {

        .preheader .rightColumnContent,
        .footer .rightColumnContent {
          text-align: left !important;
        }

        .preheader .rightColumnContent div,
        .preheader .rightColumnContent span,
        .footer .rightColumnContent div,
        .footer .rightColumnContent span {
          text-align: left !important;
        }

        .preheader .rightColumnContent,
        .preheader .leftColumnContent {
          font-size: 80% !important;
          padding: 5px 0;
        }

        table.wrapper-mobile {
          width: 100% !important;
          table-layout: fixed;
        }

        img.max-width {
          height: auto !important;
          max-width: 100% !important;
        }

        a.bulletproof-button {
          display: block !important;
          width: auto !important;
          font-size: 80%;
          padding-left: 0 !important;
          padding-right: 0 !important;
        }

        .columns {
          width: 100% !important;
        }

        .column {
          display: block !important;
          width: 100% !important;
          padding-left: 0 !important;
          padding-right: 0 !important;
          margin-left: 0 !important;
          margin-right: 0 !important;
        }

        .social-icon-column {
          display: inline-block !important;
        }
      }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: "Lato", sans-serif;
      }
    </style>
    <!--End Head user entered-->
  </head>
  <body>
    <center class="wrapper" data-link-color="#000000" data-body-style="font-size:14px; font-family:inherit; color:#000000; background-color:#FFFFFF;">
      <div class="webkit">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" class="wrapper" bgcolor="#FFFFFF">
          <tr>
            <td valign="top" bgcolor="#FFFFFF" width="100%">
              <table width="100%" role="content-container" class="outer" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                  <td width="100%">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                      <tr>
                        <td>
                          <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%; max-width:600px;" align="center">
                            <tr>
                              <td role="modules-container" style="padding:0px 0px 0px 0px; color:#000000; text-align:left;" bgcolor="#FFFFFF" width="100%" align="left">
                                <table class="module preheader preheader-hide" role="module" data-type="preheader" border="0" cellpadding="0" cellspacing="0" width="100%" style="display: none !important; mso-hide: all; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;">
                                  <tr>
                                    <td role="module-content">
                                      <p></p>
                                    </td>
                                  </tr>
                                </table>
                                <table class="module" role="module" data-type="spacer" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="d651ef67-7f56-4ff0-bb05-fa04021373c1">
                                  <tbody>
                                    <tr>
                                      <td style="padding:0px 0px 30px 0px;" role="module-content" bgcolor=""></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="6bb27840-d5c1-4f5a-84e0-30eb8a115409">
                                  <tbody>
                                    <tr>
                                      <td style="font-size:6px; line-height:10px; padding:0px 0px 15px 0px;" valign="top" align="center">
                                        <img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px;" width="150" alt="" data-proportionally-constrained="true" data-responsive="false" src="https://mail.abodeoverseas.com/mailerimage/abode-overseas-logo.jpg" height="32">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="b5166920-fe70-4cb5-abe8-85faa2aca93d">
                                  <tbody>
                                    <tr>
                                      <td style="font-size:6px; line-height:10px; padding:0px 0px 0px 0px;" valign="top" align="center">
                                        <img class="max-width" border="0" style="display:block; color:#FFFFFF; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px;" width="600" alt="" data-proportionally-constrained="true" data-responsive="false" src="https://mail.abodeoverseas.com/mailerimage/abode-overseas-mailer-image-2.jpg" height="">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                               
                                <table class="module" role="module" data-type="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="3629bd23-6169-41d4-87d0-6b6195ccabb8">
                                  <tbody>
                                    <tr>
                                      <td style="padding:4px 0px 0px 0px;" role="module-content" height="100%" valign="top" bgcolor="">
                                        <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="3" style="line-height:2px; font-size:10px;">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px 0px 3px 0px;" bgcolor="#1F4456"></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="f27171a9-872a-4cd3-9525-6fd1f04b4869" data-mc-module-version="2019-10-22">
                                  <tbody>
                                    <tr>
                                      <td style="padding:18px 0px 18px 0px; line-height:16px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content">
                                        <div>
                                          <div style="font-family: inherit; text-align: center">
                                            <span style="color: #0754c0; font-family: georgia, serif; font-size: 22px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space-collapse: collapse; text-wrap: wrap; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; float: none; line-height: 1.1; display: inline">
                                              <strong>12 Best Residency &amp; Citizenship by Investment Programs</strong>
                                            </span>
                                          </div>
                                          <div></div>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table class="module" role="module" data-type="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="525e561c-92fc-45f9-a9d0-c5f0d079cc7b">
                                  <tbody>
                                    <tr>
                                      <td style="padding:0px 0px 0px 0px;" role="module-content" height="100%" valign="top" bgcolor="">
                                        <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="10px" style="line-height:5px; font-size:10px;">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px 0px 10px 0px;" bgcolor="#FFFFFF"></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" data-type="columns" style="padding:0px 0px 0px 0px;" bgcolor="#1F4456" data-distribution="1,1">
                                  <tbody>
                                    <tr role="module-content">
                                      <td height="100%" valign="top">
                                        <table width="300" style="width:300px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-0">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px;margin:0px;border-spacing:0;">
                                                <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="4fa1d08b-76eb-4103-8827-b8192ee43e9d" data-mc-module-version="2019-10-22">
                                                  <tbody>
                                                    <tr>
                                                      <td style="padding:15px 30px 5px 30px; line-height:22px; text-align:inherit; background-color:#1F4456;" height="100%" valign="top" bgcolor="#1F4456" role="module-content">
                                                        <div>
                                                          <div style="font-family: inherit; text-align: inherit">
                                                            <span style="color: #FFFFFF; font-family: georgia, serif; font-size: 20px;">
                                                              <strong>Citizenship</strong>
                                                            </span>
                                                          </div>
                                                          <div style="font-family: inherit; text-align: inherit">
                                                            <br>
                                                          </div>
                                                          <div style="font-family: inherit; text-align: inherit">
                                                            <span style="color: #FFFFFF; font-family: inherit; font-size: 18px;">1. St Kitts &amp; Nevis <br> 2. Grenada <br> 3. Grenada Property <br> 4. Antigua <br> 5. Dominica <br> 6. Saint Lucia <br> 7. Vanuatu <br> 8. Turkey </span>
                                                          </div>
                                                          <div></div>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table width="300" style="width:300px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-1">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px;margin:0px;border-spacing:0;">
                                                <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="4fa1d08b-76eb-4103-8827-b8192ee43e9d.1" data-mc-module-version="2019-10-22">
                                                  <tbody>
                                                    <tr>
                                                      <td style="padding:15px 30px 15px 30px; line-height:22px; text-align:inherit; background-color:#1F4456;" height="100%" valign="top" bgcolor="#1F4456" role="module-content">
                                                        <div>
                                                          <div style="font-family: inherit; text-align: inherit">
                                                            <span style=" color: #FFFFFF; font-family: georgia, serif; font-size: 20px">
                                                              <strong>Permanent Residency</strong>
                                                            </span>
                                                          </div>
                                                          <div style="font-family: inherit; text-align: inherit">
                                                            <span style=" color: #FFFFFF; font-size: 24px; font-family: inherit">
                                                              <strong>&nbsp;</strong>
                                                            </span>
                                                          </div>
                                                          <div style="font-family: inherit; text-align: inherit">
                                                            <span style=" color: #FFFFFF;font-family: inherit;  font-size: 18px">1. Malta <br> 2. Italy <br> 3. Greece <br> 4. Cyprus </span>
                                                          </div>
                                                          <div></div>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table class="module" role="module" data-type="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="12c17742-f8ed-4d5d-8952-fc734c3ea2d4">
                                  <tbody>
                                    <tr>
                                      <td style="padding:4px 0px 0px 0px;" role="module-content" height="100%" valign="top" bgcolor="">
                                        <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="3" style="line-height:2px; font-size:10px;">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px 0px 3px 0px;" bgcolor="#1F4456"></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>

                                <table border="0" cellpadding="0" cellspacing="0" class="module" data-role="module-button" data-type="button" role="module" style="table-layout:fixed;" width="100%" data-muid="f4a77ac4-65c4-470a-a564-646acdd83093.1">
                                  <tbody>
                                    <tr>
                                      <td align="center" bgcolor="#f8f8f8" class="outer-td" style="padding:20px 0px 20px 0px; background-color:#f8f8f8;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="wrapper-mobile" style="text-align:center;">
                                          <tbody>
                                            <tr>
                                              <td align="center" bgcolor="#25D366" class="inner-td" style="border-radius:6px; font-size:16px; text-align:center; background-color:inherit;">
                                                <a href="https://api.whatsapp.com/send?phone=+919717202908&text=Hi%20I%27m%20interested%20in%20Permanent%20Residency%20and%20Citizenship%20by%20Abode%20Overseas." style="background-color:#25D366; border:1px solid #25D366; border-color:#25D366; border-radius:25px; border-width:1px; color:#ffffff; display:inline-block; font-size:16px; font-weight:400; letter-spacing:0px; line-height:22px; padding:12px 18px 12px 18px; text-align:center; text-decoration:none; border-style:solid; font-family:arial black, helvetica, sans-serif; width:180px;" target="_blank"><img src="https://mail.abodeoverseas.com/mailerimage/abode-whatsapp.png" width="25" height="25" style="vertical-align:middle" alt="Whatsapp"> WHATSAPP</a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>

                                <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="ceb3db16-e831-43bb-ab20-6168e0049fc6" data-mc-module-version="2019-10-22">
                                  <tbody>
                                    <tr>
                                      <td style="padding:5px 0px 18px 0px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content">
                                        <div>
                                          <div style="font-family: inherit; text-align: center">
                                            <span style="box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space-collapse: collapse; text-wrap: wrap; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255); color: #0754c0; font-family: georgia, serif; font-size: 22px">
                                              <strong>Benefits of Having Citizenship &amp; Permanent Residency</strong>
                                            </span>
                                          </div>
                                          <div></div>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" data-type="columns" style="padding:0px 0px 0px 0px;" bgcolor="#FFFFFF" data-distribution="1,1,1,1">
                                  <tbody>
                                    <tr role="module-content">
                                      <td height="100%" valign="top">
                                        <table width="135" style="width:135px; border-spacing:0; border-collapse:collapse; margin:0px 10px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-0">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px;margin:0px;border-spacing:0;">
                                                <table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="ukedPneRQ2XUetueYEW3UP">
                                                  <tbody>
                                                    <tr>
                                                      <td style="font-size:6px; line-height:10px; padding:20px 0px 0px 0px;" valign="top" align="center">
                                                        <img class="max-width" border="0" style="display:block; color:#FFFFFF; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:30% !important; width:64px; height:auto !important;" width="41" alt="" data-proportionally-constrained="true" data-responsive="true" src="http://cdn.mcauto-images-production.sendgrid.net/4acb0c3f2a17e2f7/b9fe219c-df4f-43ef-af81-7255a4421248/64x64.jpg">
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table width="135" style="width:135px; border-spacing:0; border-collapse:collapse; margin:0px 10px 0px 10px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-1">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px;margin:0px;border-spacing:0;">
                                                <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="T7CCiJpgT6kysW8pJVNHD" data-mc-module-version="2019-10-22">
                                                  <tbody>
                                                    <tr>
                                                      <td style="padding:15px 0px 18px 0px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content">
                                                        <div>
                                                          <div style="font-family: inherit; text-align: center">
                                                            <span style="box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-weight: 600; line-height: 1.85714em; color: #252525; font-size: 1em; font-variant-ligatures: common-ligatures; font-style: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space-collapse: collapse; text-wrap: wrap; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial">Safe Future for Your Family</span>&nbsp;
                                                          </div>
                                                          <div></div>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table width="135" style="width:135px; border-spacing:0; border-collapse:collapse; margin:0px 10px 0px 10px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-2">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px;margin:0px;border-spacing:0;">
                                                <table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="71ca50b2-bc18-4e05-9b76-a78ff1b5695d">
                                                  <tbody>
                                                    <tr>
                                                      <td style="font-size:6px; line-height:10px; padding:0px 0px 0px 0px;" valign="top" align="center">
                                                        <img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:40% !important; width:64px; height:auto !important;" width="54" alt="" data-proportionally-constrained="true" data-responsive="true" src="http://cdn.mcauto-images-production.sendgrid.net/4acb0c3f2a17e2f7/e0cff69f-217e-436f-9296-1eee3f5e628f/64x64.jpg">
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table width="135" style="width:135px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 10px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-3">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px;margin:0px;border-spacing:0;">
                                                <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="T7CCiJpgT6kysW8pJVNHD.1" data-mc-module-version="2019-10-22">
                                                  <tbody>
                                                    <tr>
                                                      <td style="padding:15px 0px 0px 0px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content">
                                                        <div>
                                                          <div style="font-family: inherit; text-align: center">
                                                            <span style="box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-weight: 600; line-height: 1.85714em; color: #252525; font-size: 1em; font-variant-ligatures: common-ligatures; font-style: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space-collapse: collapse; text-wrap: wrap; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial">Better Life</span>&nbsp;
                                                          </div>
                                                          <div></div>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" data-type="columns" style="padding:0px 0px 0px 0px;" bgcolor="#FFFFFF" data-distribution="1,1,1,1">
                                  <tbody>
                                    <tr role="module-content">
                                      <td height="100%" valign="top">
                                        <table width="135" style="width:135px; border-spacing:0; border-collapse:collapse; margin:0px 10px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-0">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px;margin:0px;border-spacing:0;">
                                                <table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="ukedPneRQ2XUetueYEW3UP.1">
                                                  <tbody>
                                                    <tr>
                                                      <td style="font-size:6px; line-height:10px; padding:22px 0px 0px 0px;" valign="top" align="center">
                                                        <img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:30% !important; width:64px; height:auto !important;" width="41" alt="" data-proportionally-constrained="true" data-responsive="true" src="http://cdn.mcauto-images-production.sendgrid.net/4acb0c3f2a17e2f7/4526bf41-e2d4-4f65-9c34-1852204f91d4/64x64.jpg">
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table width="135" style="width:135px; border-spacing:0; border-collapse:collapse; margin:0px 10px 0px 10px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-1">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px;margin:0px;border-spacing:0;">
                                                <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="T7CCiJpgT6kysW8pJVNHD.2" data-mc-module-version="2019-10-22">
                                                  <tbody>
                                                    <tr>
                                                      <td style="padding:10px 0px 18px 0px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content">
                                                        <div>
                                                          <div style="font-family: inherit; text-align: center">
                                                            <span style="box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-weight: 600; line-height: 1.85714em; color: #252525; font-size: 1em; font-variant-ligatures: common-ligatures; font-style: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space-collapse: collapse; text-wrap: wrap; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial">European Education</span>&nbsp;
                                                          </div>
                                                          <div></div>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table width="135" style="width:135px; border-spacing:0; border-collapse:collapse; margin:0px 10px 0px 10px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-2">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px;margin:0px;border-spacing:0;">
                                                <table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="71ca50b2-bc18-4e05-9b76-a78ff1b5695d.1">
                                                  <tbody>
                                                    <tr>
                                                      <td style="font-size:6px; line-height:10px; padding:20px 0px 0px 0px;" valign="top" align="center">
                                                        <img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:30% !important; width:64px; height:auto !important;" width="41" alt="" data-proportionally-constrained="true" data-responsive="true" src="http://cdn.mcauto-images-production.sendgrid.net/4acb0c3f2a17e2f7/feb9872d-0b8f-4372-8c4b-fa57fc9a399e/64x64.jpg">
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table width="135" style="width:135px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 10px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-3">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px;margin:0px;border-spacing:0;">
                                                <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="T7CCiJpgT6kysW8pJVNHD.1.1" data-mc-module-version="2019-10-22">
                                                  <tbody>
                                                    <tr>
                                                      <td style="padding:10px 0px 18px 0px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content">
                                                        <div>
                                                          <div style="font-family: inherit; text-align: center">
                                                            <span style="box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-weight: 600; line-height: 1.85714em; color: #252525; font-size: 1em; font-variant-ligatures: common-ligatures; font-style: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space-collapse: collapse; text-wrap: wrap; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial">Free Movement in Europe</span>&nbsp;
                                                          </div>
                                                          <div></div>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                            <tr></tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table class="module" role="module" data-type="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="ce3a91e6-8543-4de0-a62c-12934f572b4d">
                                  <tbody>
                                    <tr>
                                      <td style="padding:4px 0px 0px 0px;" role="module-content" height="100%" valign="top" bgcolor="">
                                        <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="3" style="line-height:2px; font-size:10px;">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0px 0px 3px 0px;" bgcolor="#1F4456"></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              
                                <table class="module" role="module" data-type="social" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="b0f2872b-0362-4d24-a2bf-a8f9b58f8839">
                                  <tbody>
                                    <tr>
                                      <td valign="top" style="padding:10px 0px 0px 0px; font-size:6px; line-height:10px; background-color:#ffffff;" align="center">
                                        <table align="center" style="-webkit-margin-start:auto;-webkit-margin-end:auto;">
                                          <tbody>
                                            <tr align="center">
                                              <td style="padding: 0px 5px;" class="social-icon-column">
                                                <a role="social-icon-link" href="https://www.facebook.com/abodeoverseas" target="_blank" alt="Facebook" title="Facebook" style="display:inline-block; background-color:#000000; height:21px; width:21px;">
                                                  <img role="social-icon" alt="Facebook" title="Facebook" src="https://mc.sendgrid.com/assets/social/white/facebook.png" style="height:21px; width:21px;" height="21" width="21">
                                                </a>
                                              </td>
                                              <td style="padding: 0px 5px;" class="social-icon-column">
                                                <a role="social-icon-link" href="https://twitter.com/abodeoverseas" target="_blank" alt="Twitter" title="Twitter" style="display:inline-block; background-color:#000000; height:21px; width:21px;">
                                                  <img role="social-icon" alt="Twitter" title="Twitter" src="https://mc.sendgrid.com/assets/social/white/twitter.png" style="height:21px; width:21px;" height="21" width="21">
                                                </a>
                                              </td>
                                              <td style="padding: 0px 5px;" class="social-icon-column">
                                                <a role="social-icon-link" href="https://www.instagram.com/abodeoverseas/" target="_blank" alt="Instagram" title="Instagram" style="display:inline-block; background-color:#000000; height:21px; width:21px;">
                                                  <img role="social-icon" alt="Instagram" title="Instagram" src="https://mc.sendgrid.com/assets/social/white/instagram.png" style="height:21px; width:21px;" height="21" width="21">
                                                </a>
                                              </td>
                                              <td style="padding: 0px 5px;" class="social-icon-column">
                                                <a role="social-icon-link" href="https://www.linkedin.com/authwall?trk=bf&trkinfo=aqh-qtswkihrpwaaaym7xfpga4hyglwgzqvuo_w3yjxhgwtlrpr1w7kq_v85y4jusahay81rzss_c_bzaoggifgijl2a2gntjc912sa9hjafjldgzss7dqqvnkpystdqeo31r1q=&original_referer=&sessionredirect=https%3a%2f%2fwww.linkedin.com%2fin%2fabode-overseas" target="_blank" alt="LinkedIn" title="LinkedIn" style="display:inline-block; background-color:#000000; height:21px; width:21px;">
                                                  <img role="social-icon" alt="LinkedIn" title="LinkedIn" src="https://mc.sendgrid.com/assets/social/white/linkedin.png" style="height:21px; width:21px;" height="21" width="21">
                                                </a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed" data-muid="0ab90820-207a-4d14-a17a-a49262ace52b" data-mc-module-version="2019-10-22" >
                                      <tbody>
                                        <tr>
                                          <td style=" padding: 18px 0px 18px 0px; line-height: 13px; text-align: inherit; " height="100%" valign="top" role="module-content" ><div style=" font-family: inherit; text-align: center; " > <span style=" color: #222222; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline; font-size: 11px; " >DISCLAIMER:- You are receiving this email because you have previously signed up to receive updates & promotional content from our website or express your interest in Abode Overseas. We appreciate your interest and want to keep you informed about the latest developments, exclusive offers, and relevant information. We are committed to respecting your privacy and adhering to the highest standards of email marketing practices. We strictly maintain a permission-based email list, ensuring that all recipients have willingly opted in to receive communications from us.  If, at any time, you no longer wish to receive emails from us, you have the option to unsubscribe using the link provided below. We respect your decision and will promptly remove your email address from our mailing list. Please note that it may take a few business days for the changes to take effect.</span style="font-size: 10px;" ><br>If you believe this has been sent to you in error, please safely <a href="'.$unsubscribeurl.'" target="_blank">Unsubscribe</a>.</div></td>
                                        </tr>
                                      </tbody>
                                    </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </div>
    </center>
  </body>
</html>';
        $mail = new PHPMailer(true);
        try {
            //$mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->setFrom($sender, $senderName);
            $mail->Username   = $usernameSmtp;
            $mail->Password   = $passwordSmtp;
            $mail->Host       = $host;
            $mail->Port       = $port;
            $mail->SMTPAuth   = true;
            $mail->SMTPAutoTLS = false;
            $mail->SMTPSecure = 'tls';
            $mail->addAddress($fetchEmail['email'], '');
            $mail->isHTML(true);
            $mail->Subject    = $subject;
            $mail->Body       = $bodyHtml;
            if ($fetchEmail['email'] != '') {
                if ($mail->send()) {
                    $update = mysqli_query($conn,"UPDATE automation_email set status='sent' where email='".$fetchEmail['email']."' AND id='".$fetchEmail['id']."'");
                }
            }
        } catch (phpmailerException $e) {
            echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
        } catch (Exception $e) {
            echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
        }
    }
}