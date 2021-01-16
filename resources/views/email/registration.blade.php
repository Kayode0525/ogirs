<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml https://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css">
      body {
        margin: 0;
        font: 12px/16px Arial, sans-serif;
      }

      a {
        text-decoration: none;
        color: #006699;
        font: 12px/16px Arial, sans-serif;
      }

      a img {
        border: 0;
      }

      h2 {
        font-size: 20px;
        line-height: 24px;
        margin: 0;
        padding: 0;
        font-weight: normal;
        color: #000 !important;
      }

      h3 {
        font-size: 18px;
        color: #cc6600;
        margin: 15px 0 0 0;
        font-weight: normal
      }

      h4 {
        font-size: 14px;
        margin: 0;
        font-weight: normal;
      }

      p {
        margin: 1px 0 8px 0;
        font: 12px/16px Arial, sans-serif;
      }

      table {
        border-collapse: collapse;
      }

      td {
        vertical-align: top;
        font-size: 13px;
        line-height: 18px;
        font-family: Arial, sans-serif
      }

      /* container */
      #container {
        width: 640px;
        color: #333;
        margin: 0 auto;
      }

      #container .frame {
        padding: 0 20px 20px 20px;
      }

      /* content tables */
      #main,
      #header,
      #customerSuggestions,
      #summary,
      #orderDetails,
      #itemDetails,
      #costBreakdown,
      #selfService,
      #closing,
      #marketingContent,
      #legalCopy {
        width: 100%;
      }

      /* main */
      #main .customerSuggestions {
        background-color: #efefef;
        padding: 8px 20px 8px 20px;
      }

      #main .customerSuggestions a {
        text-decoration: underline;
        color: #006699;
      }

      #main .customerSuggestions span {
        color: #cc6600;
        font-weight: bold;
      }

      #main .customerSuggestionsCallOut {
        padding: 0px 0px 0px 50px;
      }

      /* header */
      #header .logo {
        width: 115px;
        padding: 20px 20px 0 0;
      }

      #header .navigation {
        text-align: right;
        padding: 5px 0;
        border-bottom: 1px solid #ccc;
        white-space: nowrap;
      }

      #header .navigation a {
        border-right: 0px solid #CCC;
        margin-right: 0px;
        padding-right: 0px;
      }

      #header .navigation span {
        text-decoration: none;
        color: #CCC;
        font-size: 15px;
        font-family: Arial, sans-serif;
      }

      #header .navigation a.last {
        border: 0;
        margin: 0;
        padding: 0;
      }

      #header .title {
        text-align: right;
        padding: 7px 0 5px 0;
      }

      #header .title img {
        padding: 0 4px 0 0;
      }

      /* critical info */
      #criticalInfo {
        border-top: 3px solid #4CAF50;
        width: 95%;
      }

      #criticalInfo td {
        border-bottom: 1px solid #DFDFDF;
        font: Arial, sans-serif;
        font-size: 14px;
        padding: 14px 0 14px 18px;
        background-color: #F7F7F7;
        color: #666;
      }

      #criticalInfo td .left {
        width: 30%;
      }

      #criticalInfo td .right {
        width: 70%;
      }

      #criticalInfo .label {
        color: #666;
      }

      #criticalInfo p {
        margin: 2px 0 9px 0;
        font: 14px Arial, sans-serif;
      }

      #criticalInfo span {
        font-size: 14px;
        color: #666;
      }

      #criticalInfo a {
        text-decoration: none;
        color: #006699;
        font: 14px Arial, sans-serif;
      }

      #criticalInfo .footer {
        background-color: rgb(256, 256, 256);
        padding: 10px 0px 0px 0px;
      }

      #criticalInfo .footer p {
        font: 11px/ 16px Arial, sans-serif;
        color: rgb(51, 51, 51);
      }

      /* buttons */
      .button {
        text-decoration: none !important;
        display: block;
        height: 26px;
        display: inline-block;
        margin: 0 0 2px 0;
      }

      .button.small {
        height: 20px;
      }

      .button .expandable {
        float: left;
        overflow: hidden;
      }

      .button .text {
        color: #000f68;
        font-size: 12px;
        position: relative;
        z-index: 10;
        top: -22px;
        left: -12px;
        text-align: center;
      }

      .button.secondary .text {
        left: 0;
      }

      .button.small .text {
        top: -20px;
        left: 0;
        font-size: 11px;
      }

      /* supporting details */
      #supportingDetails {
        font-size: 11px;
        color: #666;
        line-height: 14px;
        margin: 10px 20px;
      }

      #supportingDetails {
        margin: 0 18px 0 18px;
      }

      /* order details */
      #orderDetails h3 {
        border-bottom: 1px solid #ccc;
        margin: 0 0 3px 0;
        padding: 0 0 3px 0;
      }

      #orderDetails .frame {
        padding: 16px 20px 6px 20px;
      }

      #orderDetails .orderDate {
        color: #666666;
        font-size: 12px;
      }

      #orderDetails span {
        font-size: 12px;
        color: #666;
      }

      #orderDetails p {
        margin: 2px 0 9px 0;
      }

      /* item details */
      #itemDetails {
        width: 95%;
      }

      #itemDetails .photo {
        width: 150px;
        text-align: center;
        padding: 16px 0 10px 0;
      }

      #itemDetails .photo .play img {
        margin: 3px 0 0 0;
      }

      #itemDetails .name {
        color: #666;
        padding: 10px 0 10px 10px;
      }

      #itemDetails ul {
        margin: 0;
        padding: 0;
      }

      #itemDetails ul li {
        list-style-type: none;
        line-height: 14px;
        padding: 0 0 4px 0;
      }

      #itemDetails ul li a {
        font-size: 14px;
      }

      #itemDetails .name p {
        margin: 0;
        padding: 10px 0 0 0;
        font-size: 12px;
        line-height: 16px;
      }

      #itemDetails .name p a {
        font-size: 11px;
        text-decoration: underline;
        color: #0000FF;
      }

      #itemDetails .name .share {
        margin: 3px 0 15px 0;
      }

      #itemDetails .name .share a {
        margin: 4px 5px 0 0;
        font-size: 0;
      }

      #itemDetails .name .supportingDetails,
      #itemDetails .name .supportingDetails a {
        margin: 8px 0 0 0;
        font-size: 12px;
      }

      #itemDetails .price {
        width: 110px;
        text-align: right;
        font-size: 14px;
        padding: 10px 10px 0 0;
      }

      #itemDetails .price a {
        text-decoration: underline;
      }

      #itemDetails .divider {
        border-top: 1px solid #eaeaea;
        padding: 0 0 16px 0;
      }

      #itemDetails .name table {
        border-collapse: separate;
      }

      #shippingWeight {
        width: 95%;
      }

      #shippingWeight td {
        text-align: right;
        line-height: 18px;
        padding: 0 10px 0 0;
      }

      #shippingWeight .divider {
        border-top: 1px solid #eaeaea;
        padding: 0 0 16px 0;
      }

      #shippingWeight .shipmentWeightValue {
        width: 120px;
      }

      /* cost breakdown */
      #costBreakdown {
        width: 95%;
      }

      #costBreakdown td {
        text-align: right;
        line-height: 18px;
        padding: 0 10px 0 0;
      }

      #costBreakdown .divider {
        border-top: 1px solid #eaeaea;
        padding: 0 0 16px 0;
      }

      #costBreakdown .end {
        padding: 0 0 16px 0;
      }

      #costBreakdown .price {
        width: 120px;
      }

      #costBreakdown .total {
        font-size: 14px;
        font-weight: bold;
        font: 12px/ 16px Arial, sans-serif;
      }

      /* additional shipments */
      #additionalShipments {
        font-size: 11px;
      }

      #additionalShipments h3 {
        margin: 10px 0 0 0;
      }

      #additionalShipments p {
        margin: 10px 20px 0px 20px;
      }

      #additionalShipments .orderDate {
        color: #666666;
        font-size: 12px;
      }

      #additionalShipments .details {
        padding: 10px 20px 10px 20px;
      }

      #additionalShipments .details .label {
        color: #666666;
        font-weight: bold;
      }

      #additionalShipments .details .edd,
      #additionalShipments .details .quantity {
        font-weight: bold;
      }

      /* self service */
      #selfService .divider {
        border-top: 1px solid #ccc;
        padding: 0 0 16px 0;
      }

      /* closing */
      #closing {
        padding: 0 0 0 0;
        border-collapse: none;
      }

      #closing p {
        padding: 0 0 20px 0;
        border-bottom: 1px solid #eaeaea;
        margin: 0;
      }

      #closing .signature {
        font-size: 16px;
        font-weight: bold;
      }

      /* marketing content */
      #marketingContent {
        border-bottom: 1px solid #eaeaea;
        border-collapse: separate;
        padding: 10px 0 10px 0;
      }

      /* legal copy */
      #legalCopy {
        margin: 20px 0 0 0;
      }

      #legalCopy p {
        font-size: 10px;
        color: #666;
        line-height: 16px;
        margin: 0 0 10px 0;
        font: 10px;
      }

      #legalCopy a {
        font-size: 10px;
        font: 10px;
      }

      /* reg fee */
      #regFee td {
        border-top: 1px solid #ccc;
      }
    </style>
  </head>

  <body style="margin: 0; font: 12px/ 16px Arial, sans-serif"><img width="1" height="1" src="images/b103aa629cacdd90b39538a7561da7f8e49ad73f.gif" />
    <table id="container" cellpadding="0" style="width: 640px; color: rgb(51, 51, 51); margin: 0 auto; border-collapse: collapse">
      <tbody>
        <tr>
          <td class="frame" style="padding: 0 20px 20px 20px; vertical-align: top; font-size: 13px; line-height: 18px; font-family: Arial, sans-serif">
            <table id="main" cellpadding="0" style="width: 100%; border-collapse: collapse">
              <tbody>

                <tr>
                  <td style="vertical-align: top; font-size: 13px; line-height: 18px; font-family: Arial, sans-serif">
                    <table id="header" cellpadding="0" style="width: 100%; border-collapse: collapse">
                      <tbody>
                        <tr>
                          <td rowspan="2" class="logo" style="width: 115px; padding: 20px 20px 0 0; vertical-align: top; font-size: 13px; line-height: 18px; font-family: Arial, sans-serif">
                            <img alt="OGIRS Logo" src="" height="90" width="120" style="border: 0">
                          </td>
                        </tr>
                        <tr>
                          <td class="title" style="text-align: right; padding: 7px 0 5px 0; vertical-align: top; font-size: 13px; line-height: 18px; font-family: Arial, sans-serif">
                            <h2 style="font-size: 20px; line-height: 24px; margin: 0; padding: 0; font-weight: normal; color: rgb(0, 0, 0) !important">
                              TIN  Application Notification
                            </h2>
                              Application ID : {{$user->id}}
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td style="vertical-align: top; font-size: 13px; line-height: 18px; font-family: Arial, sans-serif">
                    <table id="summary" cellpadding="0" style="width: 100%; border-collapse: collapse">
                      <tbody>
                        <tr>
                          <td style="vertical-align: top; font-size: 13px; line-height: 18px; font-family: Arial, sans-serif">
                            <span class="heading">
                            <h3 style="font-size: 18px; color: #4CAF50; margin: 15px 0 0 0; font-weight: normal">
                                                                   Hello {{$companyName}},
                                                            </h3>
                        </span>
                            <br />
                            <p style="margin: 1px 0 8px 0; font: 12px/ 16px Arial, sans-serif">
                              We are pleased to welcome you to the Ogun State Internal Revenue Service (OGIRS), the  Agencies responsible for helping you achieve your business goals while meeting your tax obligation to the Government.</p>

                              <p>Please find here, your new Taxpayer Identification Number (TIN) - {{$tinNumber}}.
                                The date of issue of your TIN is {{$user->created_at}}, and the Tax Authority is OGIRS. Your TIN is Free.</p>
                              
                              <p>We would also like to provide you some useful information and guidance in how to best manage this new and promising lifetime relationship. </p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p> Your account details is as shown below</p>
                           
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                </tr>

                <tr>
                  <td style="vertical-align: top; font-size: 13px; line-height: 18px; font-family: Arial, sans-serif">
                    <table style="width: 100%!important; border-top: 3px solid #4CAF50; border-collapse: collapse" id="criticalInfo">
                      <tbody>
                        <tr>
                          <td class="left" style="border-bottom: 1px solid rgb(223, 223, 223); font: Arial, sans-serif; vertical-align: top; font-size: 13px; line-height: 18px; font-family: Arial, sans-serif">
                          Email
                          </td>
                          <td class="right" style="border-bottom: 1px solid rgb(223, 223, 223); font: Arial, sans-serif; vertical-align: top; font-size: 13px; line-height: 18px; font-family: Arial, sans-serif">
                            <strong>
                                                          {{$user->email}}
                        </strong>
                          </td>
                        </tr>
                        <tr>
                          <td class="left" style="border-bottom: 1px solid rgb(223, 223, 223); font: Arial, sans-serif; vertical-align: top; font-size: 13px; line-height: 18px; font-family: Arial, sans-serif">
                           Password
                          </td>
                          <td class="right" style="border-bottom: 1px solid rgb(223, 223, 223); font: Arial, sans-serif; vertical-align: top; font-size: 13px; line-height: 18px; font-family: Arial, sans-serif">
                            {{$password}}
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>

              

                <tr>
                  <td style="vertical-align: top; font-size: 13px; line-height: 18px; font-family: Arial, sans-serif">
                    <table id="closing" cellpadding="0" style="width: 100%; padding: 0 0 0 0; border-collapse: none">
                      <tbody>
                        <tr>
                          <td style="vertical-align: top; font-size: 13px; line-height: 18px; font-family: Arial, sans-serif">
                            <br />
                            <p style="padding: 0 0 20px 0; border-bottom: 1px solid rgb(234, 234, 234); margin: 0; font: 12px/ 16px Arial, sans-serif">
                              <br />We hope to see you again soon!<br />
                              <span class="signature" style="font-size: 16px; font-weight: bold">
                               Ogun State Internal Revenue Service
                            </span>
                            </p>
                            <br />
                            <h3 style="font-size: 18px;color: #4CAF50;margin: 0px 0 30px 0;">
                              Help us improve
                            </h3>
                            <p style="padding: 0 0 40px 0;border-bottom: 1px solid rgb(234, 234, 234);margin: 0;">
                              <a style="background-color: #4CAF50; color:white; text-decoration:none; font-family: Arial, sans-serif; border-radius: 5px; 
                                    padding:15px 40px; font-size: 16px;" href="#">
                                Rate your experience
                              </a>
                            </p>
                            <br />
                            Need help? <a href="#">Contact us</a>

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
    <img width="1" height="1" src="images/b103aa629cacdd90b39538a7561da7f8e49ad73f.gif" />
  </body>

</html>