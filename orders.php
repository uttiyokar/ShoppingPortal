<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<?php 
include 'includes/connect.php';
include 'functions.php';
if(!isset($_SESSION['username']))
{redirect("index.php");}
$sql="SELECT * FROM orders";
$sql2="SELECT * FROM orders WHERE orderedby ='". $_SESSION['username']."'";

$result=mysql_query($sql);
$result2=mysql_query($sql2);
$num=mysql_num_rows($result);
$num2=mysql_num_rows($result2);
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title></title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td height="143" width="240"><a href="index.php"><img src="images/logo.gif" width="200" height="37" border="0" alt="Your company name"></a></td>
		<td width="403">
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td><img src="images/c1.gif" width="5" height="5" border="0" alt=""></td>
					<td style="background: url(images/c_top.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td><img src="images/c2.gif" width="5" height="5" border="0" alt=""></td>
				</tr>
				<tr>
					<td style="background: url(images/c_left.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td width="393" align="center">
						<table border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td><img src="images/spacer.gif" width="4" height="1" border="0" alt=""></td>
								<td>
									
									
									
									<div style="padding: 5px 0 5px 0">
										
                                        <form action="functions.php" method="post" >
                                        <?php if(isset($_SESSION['username'])){?>
																 
																 <table>
                                                                 <tr><td class="text">Welcome <?php echo $_SESSION['name'];?>!!</td></tr>
                                                                 <tr><td align="center"><input type="submit" value="Logout"></td></tr>
                                                                 <input type="hidden" name="var" value="Logout">
                                                                 </table>
																 </form>
														<?php } else {?>
                                        
                                        <table>
                                        <tr><td colspan="2"  class="text"><label>Username:</label></td></tr>
										<tr><td colspan="2"><input id="username" name="username" type="text" ></td></tr>
                                        
                                        <tr><td colspan="2" class="text"><label>Password:</label></td></tr>
                                        <tr><td colspan="2"><input id="password" name="password" type="password" ></td></tr>
                                         
                                        <tr><td align="right"><input name="Login" value="Login" type="submit"></td>
                                        <td align="center"><?php if(isset($_GET['err'])) echo "Invalid Username/Password";?></td></tr>
										</table>
                                        <input type="hidden" name="var" value="Login">
                                         <?php }?>
                                         </form>
						             </div>
								</td>
								<td><img src="images/line_v1.gif" width="1" height="86" border="0" alt="" hspace="9"></td>
								
								<td><img src="images/line_v1.gif" width="1" height="86" border="0" alt="" hspace="9"></td>
								<td>
									<?php if($_SESSION['username']!='admin'){?>
                                    <table border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td><img src="images/sc.gif" width="40" height="34" border="0" alt=""></td>
											<td><a href="<?php if(isset($_SESSION['username'])&&$_SESSION['username']!='admin'){echo "checkout.php";}else {echo "#";}?>" class="top11"><b>Shopping<br>
												Cart</b></a></td>
										</tr>
										<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="8" border="0" alt=""></td></tr>
										<tr><td colspan="2"><div class="top11"><?php if(isset($_SESSION['username'])){?>now in your cart <span class="or11"><b><?php echo Count_Cart_Items();;?> items</b></span></div><?php }else echo "Please Register or Login to Shop!!";?></td></tr>
									</table> <?php }?>
								</td>
								
							</tr>
						</table>
					</td>
					<td style="background: url(images/c_right.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
				</tr>
				<tr>
					<td><img src="images/c4.gif" width="5" height="5" border="0" alt=""></td>
					<td style="background: url(images/c_bot.gif)"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
					<td><img src="images/c3.gif" width="5" height="5" border="0" alt=""></td>
				</tr>
			</table>
		</td>
		<td><img src="images/spacer.gif" width="5" height="1" border="0" alt=""></td>
	</tr>
</table>




<table border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td><img src="images/menu_left.gif" width="7" height="40" border="0" alt=""></td>
		<td width="635" style="background: url(images/menu_bg.gif)">
		
		
		<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					
					<td><img src="images/menu_line.gif" width="2" height="29" border="0" alt="" hspace="16"></td>
					<td><div class="mb">Home</div> <div class="mw"><a href="index.php" class="aw">Home</a></div></td>
					<td><img src="images/menu_line.gif" width="2" height="29" border="0" alt="" hspace="13"></td>
                    
					<?php if(isset($_SESSION['username'])&&$_SESSION['username']!='admin'){?>
                    <td><div class="mb">Orders</div> <div class="mw"><a href="orders.php" class="aw">Orders</a></div></td>
                    <td><img src="images/menu_line.gif" width="2" height="29" border="0" alt="" hspace="13"></td>
					<td><div class="mb">Checkout</div> <div class="mw"><a href="checkout.php" class="aw">Checkout</a></div></td>
                    <td><img src="images/menu_line.gif" width="2" height="29" border="0" alt="" hspace="13"></td>
					<?php }?>
                  
                    <?php if(!isset($_SESSION['username'])){?>
                    <td><div class="mb">Register</div> <div class="mw"><a href="register.php" class="aw">Register</a></div></td>
					<td><img src="images/menu_line.gif" width="2" height="29" border="0" alt="" hspace="13"></td><?php }?>
					
				</tr>
			</table>
		</td>
		<td><img src="images/menu_right.gif" width="6" height="40" border="0" alt=""></td>
	</tr>
</table>
<div><img src="images/spacer.gif" width="1" height="7" border="0" alt=""></div>



<table border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td width="1" valign="top">
			
			
			<div></div>
			
		</td>
		<td width="10"><img src="images/spacer.gif" width="1" height="7" border="0" alt=""></td>
	  <td width="651" valign="top"><div><img src="images/spacer.gif" width="1" height="3" border="0" alt=""></div>
		  <table border="0" cellpadding="0" cellspacing="0"  style="background: url(images/left_bg.gif)">
				<tr>
					
					<td><img src="images/spacer.gif" width="7" height="1" border="0" alt=""></td>
					<td width="647"><div class="lb">FEATURED PRODUCTS</div> <div class="lw">FEATURED PRODUCTS</div></td>
					<td><img src="images/left_right.gif" width="6" height="29" border="0" alt=""></td>
				</tr>
			</table>
            
       <table width="652"   border="0" cellpadding="0" cellspacing="20">
				
                <tr>
                <td class="text" align="center">Order ID</td>
                <?php if($_SESSION["username"] == 'admin')
                 {?><td class="text" align="center">Ordered By</td><?php }?>
                <td class="text" align="center">Product ID</td>
                <td class="text" align="center">Order Status</td>
                </tr>
                <br>
	   <?php 
	   if(isset($_SESSION["username"]))
		if($_SESSION["username"] != 'admin')
		{
	   	while($row = mysql_fetch_assoc($result2))
		{?>
	  
				<tr>
                <td class="text" align="center"><?php echo $row['orderid']; ?></td>
                <td class="text" align="center"><?php echo $row['productid']; ?></td>
                <td class="text" align="center"><?php if($row['status'] == 1)
				echo "Order in Proces"; 
				else echo "Shipped"; ?>
                </td></tr>
                
			
       <?php }}
	   else
	   {
		   while($row = mysql_fetch_assoc($result))
		{?>
	  
				<tr>
                <td class="text" align="center"><?php echo $row['orderid']; ?></td>
                <td class="text" align="center"><?php echo $row['orderedby']; ?></td>
                <td class="text" align="center"><?php echo $row['productid']; ?></td>
                <td class="text" align="center">
                <form name="statusform" action="functions.php" method="post">
                <table width="200">
                  <tr>
                    <td class="text" align="left">
                      <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0"  onclick="this.form.submit()" 
                       <?php if($row['status'] == 1)
				       echo "checked=true >" ?>
                       
                      <label>Order in Process</label></td>
                  </tr>
                  <tr>
                    <td class="text" align="left">
                      <input type="radio" name="RadioGroup1" value="2" id="RadioGroup1_1"  onclick="this.form.submit()" 
                       <?php if($row['status'] == 2)
				       echo "checked=true >" ?>
                      <label>Shipped</label></td>
                  </tr>
                </table>
                <input type="hidden" name="OrderID" value="<?php echo $row['orderid']; ?>">
                <input type="hidden" name="var" value="status">
                </form>
                </td></tr>
                
	   <?php 
	        }}
	   ?>
       
       </table>
	  <img src="images/spacer.gif" width="4" height="1" border="0" alt=""></td>
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
		<td align="right" valign="top"><div class="top11">Copyright © 2012 <b>XYZ.com<a href="#" class="top11"></a></b><br>
	  </div></td>
	</tr>
</table>
<div><img src="images/spacer.gif" width="1" height="42" border="0" alt=""></div>

</body>
</html>