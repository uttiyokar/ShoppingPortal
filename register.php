<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title></title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="style.css" rel="stylesheet" type="text/css">
<?php
include 'functions.php';
if(isset($_SESSION['username']))
{redirect("index.php");}?>

<script type="text/javascript"> 

// check form values 
function validate() 
{ 
var error = ""
//name
var x=document.forms["regform"]["name"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out.\n");
  return false;
  }
 
//address
x=document.forms["regform"]["address"].value;
if (x==null || x=="")
  {
  alert("Address must be filled out.\n");
  return false;
  }
  
//city
x=document.forms["regform"]["city"].value;
if (x==null || x=="")
  {
  alert("City must be filled out.\n");
  return false;
  }

//state
x=document.forms["regform"]["state"].value;
if (x==null || x=="")
  {
  alert("State must be filled out.\n");
  return false;
  }
  
//pincode
x=document.forms["regform"]["pincode"].value;
if (x==null || x=="" || x.length!=6)
  {
  alert("Pincode must be 6 digits.\n");
  return false;
  }
  
//country
x=document.forms["regform"]["country"].value;
if (x==null || x=="")
  {
  alert("Country must be filled out.\n");
  return false;
  }
  
//telephone
x=document.forms["regform"]["telephone"].value;
if (x==null || x=="" || x.length!=10)
  {
  alert("Enter 10 digit telephone number.\n");
  return false;
  }
  
//email
x=document.forms["regform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address.\n");
  return false;
  } 

//username
x=document.forms["regform"]["username"].value;
if (x==null || x=="")
  {
  alert("Username must be filled out.\n");
  return false;
  }
  
//password
x=document.forms["regform"]["password"].value;
if (x==null || x=="")
  {
  alert("Password must be filled out.\n");
  return false;
  }
  
//repass
if (document.forms["regform"]["password"].value != document.forms["regform"]["repass"].value)
  {
  alert("Re-enter password correctly.\n");
  return false;
  }

  }
</script>

</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td height="143" width="240"><a href="index.php"><img src="images/logo.gif" width="200" height="37" border="0" alt="Your company name"></a></td>
		<td width="403">&nbsp;</td>
		<td><img src="images/spacer.gif" width="5" height="1" border="0" alt=""></td>
	</tr>
</table>




<table border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		
		<td width="635" style="background: url(images/menu_bg.gif)">
		
		
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					
					<td><img src="images/menu_line.gif" width="2" height="29" border="0" alt="" hspace="16"></td>
					<td><div class="mb">Home</div> <div class="mw"><a href="index.php" class="aw">Home</a></div></td>
					
					
					
					
			  </tr>
			</table>
		
		</td>
		<td><img src="images/menu_right.gif" width="6" height="40" border="0" alt=""></td>
	</tr>
</table>
<div><img src="images/spacer.gif" width="1" height="7" border="0" alt=""></div>



<table align="center">
	<tr>
		<td width="1" valign="top">&nbsp;</td>
		<td width="10">&nbsp;</td>
	  <td width="651" valign="top">
      
     <h2>Registration</h2>
      <br>
      
        <table width="200" >
		<form name="regform" onsubmit="return validate();" method="post" action="functions.php">
          <tr>
            <td><p>Name</p>
              <p>
                <input type="text" name="name" id="name">
            </p></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><p>Address</p>
              <p>
                <label for="address"></label>
                <input type="text" name="address" id="address">
            </p></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><p>City</p>
              <p>
                <label for="city2"></label>
                <input type="text" name="city" id="city2">
            </p></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>State &nbsp;
            <input type="text" name="state" id="state"></td>
            <td>Pin Code&nbsp;              <input type="text" name="pincode" id="pincode"></td>
            <td>Country              <input type="text" name="country" id="country"></td>
          </tr>
          <tr>
            <td><p>Telephone</p>
              <p>
                <label for="telephone2"></label>
                <input type="text" name="telephone" id="telephone2">
            </p></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><p>E-mail</p>
              <p>
                <label for="email2"></label>
                <input type="text" name="email" id="email2">
            </p></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><p>Username</p>
              <p>
                <label for="username2"></label>
                <input type="text" name="username" id="username2">
            </p></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><p>Password</p>
              <p>
                <label for="pasword2"></label>
                <input type="password" name="password" id="password">
            </p></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><p>Re-enter password</p>
              <p>
                <label for="repass2"></label>
                <input type="password" name="repass" id="repass2">
            </p></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><input name="register" type="submit" value="Register">
            <input type="hidden" name="var" value="Reg"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
		  </form>
        </table>
        
	    <p>
	     </td>
	</tr>
</table>


<div><img src="images/spacer.gif" width="1" height="9" border="0" alt=""></div>
<table border="0" cellpadding="0" cellspacing="0" style="background: #767F82" width="647" align="center">
	<tr>
		<td><img src="images/bot_left.gif" width="3" height="7" border="0" alt=""></td>
		<td align="right"><img src="images/bot_right.gif" width="4" height="7" border="0" alt=""></td>
	</tr>
</table>
<div><img src="images/spacer.gif" width="1" height="6" border="0" alt=""></div>

<table border="0" cellpadding="0" cellspacing="0" width="647" align="center">
	<tr>
		<td><img src="images/bot_ps.gif" width="181" height="26" border="0" alt=""></td>
		<td align="right" valign="top"><div class="top11">Copyright © 2012  <b>XYZ.com<a href="#" class="top11"></a></b><br>
		</div></td>
	</tr>
</table>
<div><img src="images/spacer.gif" width="1" height="42" border="0" alt=""></div>
<!-- Start of StatCounter Code -->
<script type="text/javascript" language="javascript">
var sc_project=1952940; 
var sc_invisible=1; 
var sc_partition=17; 
var sc_security="fa1db912"; 
</script>

<script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><a href="http://www.statcounter.com/" target="_blank"><img  src="http://c18.statcounter.com/counter.php?sc_project=1952940&amp;java=0&amp;security=fa1db912&amp;invisible=1" alt="hit counter" border="0"></a> </noscript>
<!-- End of StatCounter Code -->
</body>
</html>