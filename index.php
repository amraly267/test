<?php
//--->get app url > start

if (isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $ssl = 'https';
}
else {
  $ssl = 'http';
}
 
$app_url = ($ssl  )
          . "://".$_SERVER['HTTP_HOST']
          //. $_SERVER["SERVER_NAME"]
          . (dirname($_SERVER["SCRIPT_NAME"]) == DIRECTORY_SEPARATOR ? "" : "/")
          . trim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");

//--->get app url > end

header("Access-Control-Allow-Origin: *");

?>
sdsad sdsad sdsad

<!DOCTYPE html>
<html>
<head>
	 
	<title> Template </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="This ">

	<meta name="author" content="Code With Mark">
	<meta name="authorUrl" content="http://codewithmark.com">

	<!--[CSS/JS Files - Start]-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="print.css">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 


	<script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script> 

	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>
	<script type="text/javascript">
	$(document).ready(function($) 
	{ 
		$(document).on('click', '.btn_print', function(event) 
		{
			event.preventDefault();

			//credit : https://ekoopmans.github.io/html2pdf.js
			
			var element = document.getElementById('container_content'); 

			//easy
			//html2pdf().from(element).save();

			//custom file name
			//html2pdf().set({filename: 'code_with_mark_'+js.AutoCode()+'.pdf'}).from(element).save();


			//more custom settings
			var opt = 
			{
			  margin:       1,
			  filename:     'pageContent_'+js.AutoCode()+'.pdf',
			  image:        { type: 'jpeg', quality: 0.98 },
			  html2canvas:  { scale: 2 },
			  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
			};
			// New Promise-based usage:
			html2pdf().set(opt).from(element).save(); 
		});
	});
	</script>
	 

</head>
<body>
<!-- <div class="text-center" style="padding:20px;">
	<input type="button" id="rep" value="Print" class="btn btn-info btn_print">
</div> -->

    <div id="container_content" class="app">
      <div class="header">
        <table style="width: 100%;">
          <tbody>
            <tr>
              <td style="text-align:right">
                <span style="font-size: 8pt;">???????? ?????? ??????????????????</span>
                <p style="font-size: 8pt;">???????? ???????????? ?????? ????????????</p>
              </td>
              <td style="text-align:center">
                <img src="images/logo.png" alt="SurePay">
              </td>
              <td style="text-align:left;direction: ltr;" dir="ltr">
                <span style="font-size: 8pt;">SurePay</span>
                <p style="font-size: 8pt;">Merchant Terms And Conditions</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- header -->
      <div class="table_1">
        <table class="table_title" style="width: 100%;margin-bottom: 8px;">
          <tbody>
            <tr>
              <td style="text-align:right;font-size: 8pt;"><img src="images/icon_1.png" alt="SurePay" style="float: right;margin: 0 0 0 5px;"> ?????????? ?????????? ???????????? <span>(?????? ????????)</span></td>
              <td style="text-align:left;font-size: 8pt;direction: ltr;"><img src="images/icon_1.png" alt="SurePay" style="float: left;margin: 0 5px 0 0;"> Merchant App From <span>(Purchase Contract)</span></td>
            </tr>
          </tbody>
        </table>
        <table class="table_content" style="width: 100%;border: 1px solid #000;">
          <tbody>
            <tr>
              <td style="text-align: center;width: 25%;padding: 2px;border: 1px solid #000000;font-size: 8pt;text-decoration: underline;">?????? ??????????</td>
              <td style="text-align: center;width: 25%;padding: 2px;border: 1px solid #000000;font-size: 8pt;color: #004fff;">??????????</td>
              <td style="text-align: center;width: 25%;padding: 2px;border: 1px solid #000000;font-size: 8pt;color: #004fff;direction: ltr;">2 Years</td>
              <td style="text-align: center;width: 25%;padding: 2px;border: 1px solid #000000;font-size: 8pt;text-decoration: underline;">Contract Duration</td>
            </tr>
            <tr>
              <td style="text-align: center;width: 25%;padding: 2px;border: 1px solid #000000;font-size: 8pt;text-decoration: underline;">?????????? ??????????</td>
              <td style="text-align: center;width: 25%;padding: 2px;border: 1px solid #000000;font-size: 8pt;color: #ff0000;">XXX</td>
              <td style="text-align: center;width: 25%;padding: 2px;border: 1px solid #000000;font-size: 8pt;color: #ff0000;">XXX</td>
              <td style="text-align: center;width: 25%;padding: 2px;border: 1px solid #000000;font-size: 8pt;text-decoration: underline;">Date</td>
            </tr>
            <tr>
              <td style="text-align: center;width: 25%;padding: 2px;border: 1px solid #000000;font-size: 8pt;text-decoration: underline;">?????? ??????????</td>
              <td style="text-align: center;width: 25%;padding: 2px;border: 1px solid #000000;font-size: 8pt;direction: ltr;color: #004fff;text-decoration: underline;" colspan="2">129121-<span style="color: #ff0000;">XXX</span></td>
              <td style="text-align: center;width: 25%;padding: 2px;border: 1px solid #000000;font-size: 8pt;text-decoration: underline;">Contract Number</td>
            </tr>
          </tbody>
        </table>
        <table class="table_footer" style="width: 100%;margin-top: 10px;">
          <tbody>
            <tr>
              <td style="width: 50%;text-align: right;font-size: 7pt;color: #000000;vertical-align: top;">
                ?????????? ???? ???????????? ?????? ?????????????? ???????????????????? ???????????? ?????? ?? ???????????? ???????? ???? ?????????? ?????????????? ?????????????? ???????????? ???????????????? ?? ?????????? ????????????
              </td>
              <td style="width: 50%;text-align: left;font-size: 7pt;color: #000000;vertical-align: top;">
                Please fill out this form with your information, and attach a copy of the commercial register, the IBAN Certificate for your facility, and the owner's identity
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- tabe_1 -->
      <div class="table_1">
        <table class="table_title" style="width: 100%;margin-bottom: 8px;">
          <tbody>
            <tr>
              <td style="text-align:right;font-size: 8pt;"><img src="images/icon_2.png" alt="SurePay" style="float: right;margin: 0 0 0 5px;"> ?????????????? ????????????</td>
              <td style="text-align:left;font-size: 8pt;direction: ltr;"><img src="images/icon_2.png" alt="SurePay" style="float: left;margin: 0 5px 0 0;"> Merchant Information</td>
            </tr>
          </tbody>
        </table>
        <table class="table_content" style="width: 100%;border: 1px solid #000;">
          <tbody>
            <tr>
              <td style="width: 44.444%;color: #ff0000;text-align: center;padding: 2px;border: 1px solid #000000;font-size: 8pt;background-color: #f3f3f3;">???????? XXXXX</td>
              <td style="width: 55.555%;color: #000000;text-align: center;padding: 2px;border: 1px solid #000000;font-size: 8pt;background-color: #f3f3f3;">?????? ?????????????? ???????????? Merchant Commercial Name</td>
            </tr>
            <tr>
              <td style="width: 44.444%;color: #ff0000;text-align: center;padding: 2px;border: 1px solid #000000;font-size: 8pt;">?????? ?????????????? XXXXX</td>
              <td style="width: 55.555%;color: #000000;text-align: center;padding: 2px;border: 1px solid #000000;font-size: 8pt;">?????????? ???????????????? ???????????? Legal Form Of Business</td>
            </tr>
            <tr>
              <td style="width: 44.444%;color: #ff0000;text-align: center;padding: 2px;border: 1px solid #000000;font-size: 8pt;background-color: #f3f3f3;">700XXXXXX</td>
              <td style="width: 55.555%;color: #000000;text-align: center;padding: 2px;border: 1px solid #000000;font-size: 8pt;background-color: #f3f3f3;">?????? ???????????? ???????????? Unified National number</td>
            </tr>
            <tr>
              <td style="width: 44.444%;color: #ff0000;text-align: center;padding: 2px;border: 1px solid #000000;font-size: 8pt;">???????? XXXXX ???? ???? XXXXX</td>
              <td style="width: 55.555%;color: #000000;text-align: center;padding: 2px;border: 1px solid #000000;font-size: 8pt;">?????????????? ???????????? ???????????? Merchant National Address</td>
            </tr>
            <tr>
              <td style="width: 44.444%;color: #ff0000;text-align: center;padding: 2px;border: 1px solid #000000;font-size: 8pt;background-color: #f3f3f3;">XXXXX</td>
              <td style="width: 55.555%;color: #000000;text-align: center;padding: 2px;border: 1px solid #000000;font-size: 8pt;background-color: #f3f3f3;">?????????? ???????????? ?????????????? Full Name Of Primary Contact Person</td>
            </tr>
            <tr>
              <td style="width: 44.444%;color: #ff0000;text-align: center;padding: 2px;border: 1px solid #000000;font-size: 8pt;">XXXXX</td>
              <td style="width: 55.555%;color: #000000;text-align: center;padding: 2px;border: 1px solid #000000;font-size: 8pt;">???????????? ???????????????????? ???????????? ?????????????? Email Of Primary Contact Person</td>
            </tr>
          </tbody>
        </table>
      </div><!-- tabe_1 -->
      <div class="table_1">
        <table class="table_title" style="width: 100%;margin-bottom: 8px;">
          <tbody>
            <tr>
              <td style="text-align:right;font-size: 8pt;"><img src="images/icon_3.png" alt="SurePay" style="float: right;margin: 0 0 0 5px;"> ?????????? ??????????????</td>
              <td style="text-align:left;font-size: 8pt;direction: ltr;"><img src="images/icon_3.png" alt="SurePay" style="float: left;margin: 0 5px 0 0;"> Devices Prices</td>
            </tr>
          </tbody>
        </table>
        <table class="table_content" style="width: 100%;border: 1px solid #000;">
          <tbody>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;background-color: #f3f3f3;">?????????????? ?????????? Sub Total</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;background-color: #f3f3f3;">?????????????? Total</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;background-color: #f3f3f3;">?????????? ???????????? Annual Price</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;background-color: #f3f3f3;">???????????? QTY</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;background-color: #f3f3f3;">?????? ???????????? Device Type</td>
            </tr>
            <tr>
              <td style="border: 1px solid #000000;padding: 2px;text-align: center;vertical-align: middle;font-size: 8pt;color: #ff0000;" rowspan="3">XXX SAR</td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;text-align: center;color: #ff0000;">XXX SAR</td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #004fff;"><span style="float: left;">SAR</span><span style="float: right;">550</span></td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;text-align: center;color: #ff0000;">X</td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #004fff;text-align: center;">VEGA3000</td>
            </tr>
            <tr>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;text-align: center;color: #ff0000;">XXX SAR</td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #004fff;"><span style="float: left;">SAR</span><span style="float: right;">450</span></td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;text-align: center;color: #ff0000;">X</td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #004fff;text-align: center;">MP200</td>
            </tr>
            <tr>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;text-align: center;color: #ff0000;">XXX SAR</td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #004fff;"><span style="float: left;">SAR</span><span style="float: right;">350</span></td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;text-align: center;color: #ff0000;">X</td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #004fff;text-align: center;">My Sure Portal Access</td>
            </tr>
          </tbody>
        </table>
      </div><!-- tabe_1 -->
      <div class="table_1">
        <table class="table_title" style="width: 100%;margin-bottom: 8px;">
          <tbody>
            <tr>
              <td style="text-align:right;font-size: 8pt;"><img src="images/icon_4.png" alt="SurePay" style="float: right;margin: 0 0 0 5px;"> ?????????? ?????? ??????????????????</td>
              <td style="text-align:left;font-size: 8pt;direction: ltr;"><img src="images/icon_4.png" alt="SurePay" style="float: left;margin: 0 5px 0 0;"> SurePay Commission Rate</td>
            </tr>
          </tbody>
        </table>
        <table class="table_content" style="width: 100%;border: 1px solid #000;">
          <tbody>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 60%;background-color: #f3f3f3;">???????????? ???????????? More Details</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;background-color: #f3f3f3;">?????????????? ?????? ?????????? Fees</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;background-color: #f3f3f3;">???????????? Service</td>
            </tr>
            <tr>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #000000;text-align: center;">160 ???????? ?????? ???????? ??????????????</td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #004fff;text-align: center;direction: ltr;">0.8 %</td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #004fff;text-align: center;direction: ltr;"><img src="images/mada.png" alt="SurePay" style="height: 15px;"></td>
            </tr>
            <tr>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #000000;text-align: center;">???????????????? ???????????? ?????????? 1 ???????? ?????? ?????????? In Audition Flat Rate 1 SR Per Transaction</td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #004fff;text-align: center;direction: ltr;">2.75 %</td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #004fff;text-align: center;direction: ltr;"><img src="images/visa.png" alt="SurePay" style="height: 15px;"></td>
            </tr>
          </tbody>
        </table>
      </div><!-- tabe_1 -->
      <div class="table_1">
        <table class="table_title" style="width: 100%;margin-bottom: 8px;">
          <tbody>
            <tr>
              <td style="text-align:right;font-size: 8pt;"><img src="images/icon_5.png" alt="SurePay" style="float: right;margin: 0 0 0 5px;"> ?????????? ??????????</td>
              <td style="text-align:left;font-size: 8pt;direction: ltr;"><img src="images/icon_5.png" alt="SurePay" style="float: left;margin: 0 5px 0 0;"> Paper Roll</td>
            </tr>
          </tbody>
        </table>
        <table class="table_content" style="width: 100%;border: 1px solid #000;">
          <tbody>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;background-color: #f3f3f3;">???? ?????????? ?????? ???????? ?????????? Every Extra Paper Roll Cost</td>
              <td colspan="2" style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;background-color: #f3f3f3;">???????????? ?????????? ?????? ???????? ?????? ???? ?????????? Paper Roll For Each POS/Month</td>
            </tr>
            <tr>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #000000;width: 50%;"><span style="float: left;">SAR</span><span style="float: right;">1</span></td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #000000;text-align: center;width: 25%;">9</td>
              <td style="border: 1px solid #000000;padding: 2px;font-size: 8pt;color: #000000;text-align: center;width: 25%;">???????????? ?????? ????????????</td>
            </tr>
          </tbody>
        </table>
      </div><!-- tabe_1 -->
      <div class="table_1">
        <table class="table_title" style="width: 100%;margin-bottom: 8px;">
          <tbody>
            <tr>
              <td style="text-align:right;font-size: 8pt;"><img src="images/icon_6.png" alt="SurePay" style="float: right;margin: 0 0 0 5px;"> ???????? ?????? ?????????????????? ????????????</td>
              <td style="text-align:left;font-size: 8pt;direction: ltr;"><img src="images/icon_6.png" alt="SurePay" style="float: left;margin: 0 5px 0 0;"> SurePay Bank Account</td>
            </tr>
          </tbody>
        </table>
        <table class="table_content" style="width: 100%;border: 1px solid #000;">
          <tbody>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 66.666%;background-color: #f3f3f3;">?????????? ???????????? ?????????????? SNB-AlAhli</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 33.333%;background-color: #f3f3f3;">?????? ?????????? Bank Name</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 66.666%;">???????? ?????????????? ?????? ???????????? ??????????????????</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 33.333%;">?????? ???????????? Account Name</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 66.666%;background-color: #f3f3f3;">SA1610000027100000290102</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 33.333%;background-color: #f3f3f3;">?????????? IBAN</td>
            </tr>
          </tbody>
        </table>
      </div><!-- tabe_1 -->
      <div class="table_1">
        <table class="table_title" style="width: 100%;margin-bottom: 8px;">
          <tbody>
            <tr>
              <td style="text-align:right;font-size: 8pt;"><img src="images/icon_7.png" alt="SurePay" style="float: right;margin: 0 0 0 5px;"> ?????? ?????????????? ??????????????</td>
              <td style="text-align:left;font-size: 8pt;direction: ltr;"><img src="images/icon_7.png" alt="SurePay" style="float: left;margin: 0 5px 0 0;"> Settlement Period</td>
            </tr>
          </tbody>
        </table>
        <table class="table_content" style="width: 100%;border: 1px solid #000;">
          <tbody>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;background-color: #f3f3f3;">?????????? charge</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;background-color: #f3f3f3;">?????? Every</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;background-color: #f3f3f3;">?????? ???????????????? <span style="direction: ltr;display: inline-block;">#Transfer</span></td>
              <td colspan="2" style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 40%;background-color: #f3f3f3;">?????????? Bank</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;">???????????? free</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;">???????????? Daily</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;">1</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;"><img src="images/anb.png" alt="SurePay" style="height: 15px;"></td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;"><img src="images/riyad.png" alt="SurePay" style="height: 15px;"></td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;direction: ltr;">5.00 SAR</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;">???????????????? Weekly</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;">2</td>
              <td colspan="2" style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;">???????? ???????????? Other Banks</td>
            </tr>
          </tbody>
        </table>
      </div><!-- tabe_1 -->
      <div class="table_1">
        <table class="table_title" style="width: 100%;margin-bottom: 8px;">
          <tbody>
            <tr>
              <td style="text-align:right;font-size: 8pt;"><img src="images/icon_8.png" alt="SurePay" style="float: right;margin: 0 0 0 5px;"> ?????????????? ?????????? ????????????</td>
              <td style="text-align:left;font-size: 8pt;direction: ltr;"><img src="images/icon_8.png" alt="SurePay" style="float: left;margin: 0 5px 0 0;"> Merchant Contact Numbers</td>
            </tr>
          </tbody>
        </table>
        <table class="table_content" style="width: 100%;border: 1px solid #000;">
          <tbody>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;color: #ff0000;background-color: #f3f3f3;">XXXXXXXXXX</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;background-color: #f3f3f3;">?????? ???????? ???????? ?????????????? Owners Phone Number</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;color: #ff0000;">XXXXXXXXXX</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;">?????? ???????? ?????? Another Phone Number</td>
            </tr>
          </tbody>
        </table>
      </div><!-- tabe_1 -->
      <div class="table_1">
        <table class="table_title" style="width: 100%;margin-bottom: 8px;">
          <tbody>
            <tr>
              <td style="text-align:right;font-size: 8pt;"><img src="images/icon_9.png" alt="SurePay" style="float: right;margin: 0 0 0 5px;"> ??????????????</td>
              <td style="text-align:left;font-size: 8pt;direction: ltr;"><img src="images/icon_9.png" alt="SurePay" style="float: left;margin: 0 5px 0 0;"> Signature</td>
            </tr>
          </tbody>
        </table>
        <table style="border-collapse: collapse;width: 100%;">
          <tbody>
            <tr>
              <td style="width: 50%;">
                <table class="table_content" style="width: 95%;border: 1px solid #000;">
                  <tbody>
                    <tr>
                      <td colspan="2" style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;background-color: #f3f3f3;">???????????? Merchant</td>
                    </tr>
                    <tr>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;"></td>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;">?????????? Name</td>
                    </tr>
                    <tr>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;height: 50px;background-color: #f3f3f3;"></td>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;height: 50px;background-color: #f3f3f3;">?????????????? Signature</td>
                    </tr>
                    <tr>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;"></td>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;">?????? ???????????? Stamp</td>
                    </tr>
                    <tr>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;"></td>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;">?????????? Date</td>
                    </tr>
                  </tbody>
                </table>
                <div style="text-align: center;font-size: 8pt;padding: 2px;">?????????????? ???????????????? ?????? ?????????? ???????????? ???????????? ??????????????</div>
              </td>
              <td style="width: 50%;">
                <table class="table_content" style="width: 95%;border: 1px solid #000;float: left;">
                  <tbody>
                    <tr>
                      <td colspan="2" style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;background-color: #f3f3f3;">???????? ?????? ?????????????????? SurePay</td>
                    </tr>
                    <tr>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;color: #ff0000;">?????? ???????? ???????????????? ???? ?????? ???????? ??????</td>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;">?????????? Name</td>
                    </tr>
                    <tr>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;height: 50px;color: #ff0000;background-color: #f3f3f3;">????????????</td>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;height: 50px;background-color: #f3f3f3;">?????????????? Signature</td>
                    </tr>
                    <tr>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;color: #ff0000;">XXXX</td>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;">?????? ???????????? Stamp</td>
                    </tr>
                    <tr>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;color: #ff0000;">XXXX</td>
                      <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;">?????????? Date</td>
                    </tr>
                  </tbody>
                </table>
                <div style="text-align: center;font-size: 8pt;padding: 2px;width: 100%;float: left;">All Listed Prices Are Subjected To VAT</div>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- tabe_1 -->
      <div class="footer">
        <table style="width: 100%;">
          <tbody>
            <tr>
              <td style="text-align:right"><img src="images/icon_10.png" alt="SurePay"></td>
              <td style="text-align:center;">
                <img src="images/logo.png" alt="SurePay" style="height: 30px;">
                <span style="display: block;font-size: 8pt;margin: 1px 0 3px;color: #004fff;">www.surePay.sa</span>
                <p style="display: block;margin: 0;font-size: 7pt;color: #000;">???????? ?????? ?????????????????? ?????????? ???? ?????????? ?????????????? ??????????????</p>
              </td>
              <td style="text-align:left"><img src="images/icon_11.png" alt="SurePay" style="height: 20px;"></td>
            </tr>
          </tbody>
        </table>
      </div><!-- footer -->
    </div><!-- app -->
    <div class="app">
      <div class="header">
        <table style="width: 100%;">
          <tbody>
            <tr>
              <td style="text-align:right">
                <span style="font-size: 8pt;">???????? ?????? ??????????????????</span>
                <p style="font-size: 8pt;">???????????? ????????????????</p>
              </td>
              <td style="text-align:center">
                <img src="images/logo.png" alt="SurePay">
              </td>
              <td style="text-align:left;direction: ltr;" dir="ltr">
                <span style="font-size: 8pt;">SurePay</span>
                <p style="font-size: 8pt;">Terms Conditions</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- header -->
      <div class="table_1">
        <table class="table_title" style="width: 100%;margin-bottom: 8px;">
          <tbody>
            <tr>
              <td style="text-align:right;font-size: 8pt;">?????????????? ???????????? ??????????????</td>
              <td style="text-align:left;font-size: 8pt;direction: ltr;">Customer Requirements For Registration</td>
            </tr>
          </tbody>
        </table>
        <table class="table_title" style="width: 100%;margin-bottom: 8px;">
          <tbody>
            <tr>
              <td style="text-align:right;font-size: 8pt;"><img src="images/icon_12.png" alt="SurePay" style="float: right;margin: 0 0 0 5px;"> ???????????? ???????????????? :</td>
              <td style="text-align:left;font-size: 8pt;direction: ltr;"><img src="images/icon_12.png" alt="SurePay" style="float: left;margin: 0 5px 0 0;"> Terms And Conditions :</td>
            </tr>
          </tbody>
        </table>
        <table class="table_content" style="width: 100%;border: 1px solid #000;">
          <tbody>
            <tr>
              <td colspan="2" style="text-align: right;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;">
                ?????????? ?????????????? ???????????? ???????????????? ?????? ???? ?????????? ???? ?????????? ?????? ???????????? ?????????? ?????????????? ?????? ?? ??????
                <br>
                ???????????? ?????????????????? ?????? ?????? ?????????????????? ?????????? ?????????? ?????? ?????? ???? ?????? ?????????????? ?????????????????? ?????? ??????
                <br>
                ???????????? ???????????????? ?????????????? ?????????? :
              </td>
              <td colspan="2" style="text-align: left;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 50%;">
                The Terms and Conditions Agreement is an integral part of the contract
                <br>
                between the client and SurePay, when you choose to agree to this agreement,
                <br>
                you acknowledge that these terms and conditions have been read and approved
                <br>
                below:
              </td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">1</td>
              <td style="text-align: right;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 45%;">?????????????????? ????????????????</td>
              <td style="text-align: left;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 45%;">Required Documents</td>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">1</td>
            </tr>
            <tr>
              <td style="text-align: left;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">??</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">???????? ???? ?????????? ?????????????? ???????????? ???????????? ???????? ??????????????</td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">Valid Commercial Registration Copy</td>
              <td style="text-align: right;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">A</td>
            </tr>
            <tr>
              <td style="text-align: left;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">??</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">???????? ???? ???????????? ??????????????.</td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">National Identity Copy</td>
              <td style="text-align: right;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">B</td>
            </tr>
            <tr>
              <td style="text-align: left;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">??</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">?????????? ?????????????? ???????????? ??????????</td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">IBAN Bank Certificate (Authenticated)</td>
              <td style="text-align: right;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">C</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">2</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;color: #004fff;">?????? ??????????: ?????????? .</td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;color: #004fff;">Contract Period: Two Years</td>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">2</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">3</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">?????????????? ????????????: ???? ?????? ?????????????? ???????????? ?????????? ?????? ?????? ?????????? ?????????? ?????????? <span style="color: #004fff;">1000 ????????</span></td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">In case of early ternimation, <span style="color: #004fff;">1000 SAR</span> panelty will be applied</td>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">3</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">4</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">???????? ???????????? ????????????????: ???? ?????? ?????? ?????????? ???????????????? <span style="color: #004fff;">15,000 ???????? ??????????</span> ?????? ???????? ?????? ???????????? ???????? <span style="color: #004fff;">100 ???????? ???? ???? ??????</span>.</td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">Minimum Sales: If the monthly sales of points of sale do not exceed <span style="color: #004fff;">15,000 riyals per month</span> for each device, a fee of <span style="color: #004fff;">100 riyals For every month</span></td>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">4</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">5</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">?????????? ??????????????????: ?????? ???????????? ?????????????? ???????????? ???????? 3 ???????? ???? ?????????? ?????????????? ?????? ?????? ???? ?????????? ?????????? ?????? ???????????? ???? ???????? ?????????????? ????????????.</td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">Return policy: The merchant has the right to return the POS device within 3 days from the date of installation, but if at least one transaction is performed on the POS device, the device cannot be returned</td>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">5</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">6</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">???? ?????? ?????????? ???????????? ?????? ?????? ???????? ???????????? ???????? ?????? ???????? , ?????? ?????? ?????? ?????????????????? ?????? ?????? ???????? ?????????? ???????????? ?????? ?????? ?????????? ???????????? ?????? ????????????.</td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">In case of losing the device, the value of the device is paid in full according to its type, and in case of misuse, the value of the partial damage is paid according to the extent of the damage to the device.</td>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">6</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">7</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">?????????? ??????????????: ?????? ?????????? ???????????? 9?????????? ?????????? ?????? ???????? ???????????? ?? ???????? ?????????? ?????????????? 1 ????????.</td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">Printing papers: 9 rolls per month will be provided to the merchant for each device for free. Additional roll price is 1 riyal.</td>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">7</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">8</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">???????? ????????????: ???????? ?????? ?????? ???????? <span style="color: #004fff;">350 ???????? ????????????</span> .</td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">SUREPAY Portal Annual subscription fees <span style="color: #004fff;">350 SR annually</span> .</td>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">8</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">9</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">???????? ??????????????: ?????? ???????????? ???????? ?????????? ???????? ???????????? ?????????? ???????????? <span style="color: #004fff;">?????????? 550 ???????? ??????????</span> .</td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">Operating fees: after the end of first year fees will be charged <span style="color: #004fff;">550 SR</span> .</td>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">9</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">10</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">???????????????? ???????? ???????? ??????????????: ???? ?????? ???????? ???????????? ???????? ?????????? ?????????? ?? ?????? ?????????? ?????? ???????? ?????????????? ?????? ?????? ?????????? ????30 ?????? ?????? ???????????? ?????????? ?? ?????? ?????? ?????? ?????????? ?????????? ?????????????? ???????? ???????? ???????? ?????????????? ?????????????? ?????? ??????????.</td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">Renewal fees In case the customer does not wish to renew the contract, he sends a request not to renew the service before the end of the contract at least 30 days, and renews the contract automatically in case of not sending a non-renewal request and the annual renewal fee is paid according to the contract.</td>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">10</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">11</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">?????? ?????????? ???????????? ?????? ?????????????? ???????????? ???? ???????????? ???????????????????? ???? ?????????????? ???????????? ?????? ?????????? ???? ???????? ?????????????????? ,???????????? ?????? ???????? ???????? ???????????? ???????? ???? ?????????????? ???????????? ?????????? ???? ?????????? ?????? ?????????????? ???? ???????????? ????????????????.</td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">The merchant will be notified via e-mail, text message or national address. in case of any changes in prices or terms and conditions thirty (30) prior to their application, the failure to respond within thirty days of sending will be considered your explicit acceptance of the change.</td>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">11</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">12</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">?????? ??????????????: ???????? ?????????????? ???????????? ???????????? <span style="color: #004fff;">?????? (???????????? , ????????????)</span> ???????????? ?????? ?????? ???????? ???????????? ?????? ???????? ???????? ???????? ???????????? ???????? <span style="color: #004fff;"> 5,5 ???????? ?????? ??????????</span> ???????? ?????????? ?????????????? ?????????? ???? ??????????????. </td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">Settlement period: The settlement will be done daily for <span style="color: #004fff;">Riyad and ANB customers</span> for free. If the merchant???s account is with other banks, an amount of <span style="color: #004fff;">5.5 riyals</span> will be calculated for each transfer, and the amounts will be settled twice a week.</td>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">12</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">13</td>
              <td style="text-align: right;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">???????? ?????????????? ???????????? ???????? ?????????????? ??????????????.</td>
              <td style="text-align: left;border: 1px solid #000000;font-size: 8pt;padding: 2px;width: 45%;">All prices mentioned are VAT Excluded.</td>
              <td style="text-align: center;border: 1px solid #000000;font-weight: bold;font-size: 8pt;padding: 2px;width: 5%;">13</td>
            </tr>
          </tbody>
        </table>
      </div><!-- tabe_1 -->
      <div class="table_1">
        <table class="table_content" style="width: 100%;border: 1px solid #000;">
          <tbody>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;">??????????</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 60%;"></td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;">Name</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;">??????????????</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 60%;"></td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;">Date</td>
            </tr>
            <tr>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;">??????????????</td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 60%;"></td>
              <td style="text-align: center;border: 1px solid #000000; font-size: 8pt;padding: 2px;width: 20%;">Signature</td>
            </tr>
          </tbody>
        </table>
      </div><!-- tabe_1 -->
      <div class="footer">
        <table style="width: 100%;">
          <tbody>
            <tr>
              <td style="text-align:right"><img src="images/icon_10.png" alt="SurePay"></td>
              <td style="text-align:center;">
                <img src="images/logo.png" alt="SurePay" style="height: 30px;">
                <span style="display: block;font-size: 8pt;margin: 1px 0 3px;color: #004fff;">www.surePay.sa</span>
                <p style="display: block;margin: 0;font-size: 7pt;color: #000;">???????? ?????? ?????????????????? ?????????? ???? ?????????? ?????????????? ??????????????</p>
              </td>
              <td style="text-align:left"><img src="images/icon_11.png" alt="SurePay" style="height: 20px;"></td>
            </tr>
          </tbody>
        </table>
      </div><!-- footer -->
    </div><!-- app -->
  </body>
</html>