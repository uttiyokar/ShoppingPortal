<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php 
include 'includes/connect.php';
include 'functions.php';
if(!isset($_SESSION['username']))
{redirect("index.php");}

if($_SESSION['username']=='admin')
{redirect("orders.php");}


$sql="SELECT * FROM shoppingcart WHERE orderedby ='".$_SESSION["username"]."' ";
$result=mysql_query($sql);
$num=mysql_num_rows($result);?>

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
                                        <tr><td colspan="2" class="text"><label>Username:</label></td></tr>
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
									<table border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td><img src="images/sc.gif" width="40" height="34" border="0" alt=""></td>
											<td><a href="<?php if(isset($_SESSION['username'])&&$_SESSION['username']!='admin'){echo "checkout.php";}else {echo "#";}?>" class="top11"><b>Shopping<br>
												Cart</b></a></td>
										</tr>
										<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="8" border="0" alt=""></td></tr>
										<tr><td colspan="2"><div class="top11"><?php if(isset($_SESSION['username'])){?>now in your cart <span class="or11"><b><?php echo Count_Cart_Items();;?> items</b></span></div><?php }else echo "Please Register or Login to Shop!!";?></td></tr>
									</table>
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




	  <img src="images/spacer.gif" width="4" height="1" border="0" alt=""></td>
	</tr>
</table>
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
					<td width="647"><div class="lb">SHOPPING CART</div> <div class="lw">SHOPPING CART</div></td>
					<td><img src="images/left_right.gif" width="6" height="29" border="0" alt=""></td>
				</tr>
			</table>
	  <?php $count=mysql_num_rows($result);
	         if($count>0){
								 while($row = mysql_fetch_array($result)){
									 
									 $sql1="SELECT * FROM products WHERE ProductID ='".$row['productid']."'";
									$result1=mysql_query($sql1);
									$row1 = mysql_fetch_array($result1);?>
                                <table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td width="200" align="center"><a href="#"><img src="images/img1.jpg" width="79" height="66" border="0" alt=""></a></td>
										<td width="400">
											<div class="item_name"><?php echo $row1['ProductName']; ?></div>
											<div class="item_desc"><?php echo $row['orderid'];?></div>
											<div class="item_price"><span class="top11">price:</span> Rs.<?php $row1['ProductPrice']; ?></div>
											<div style="padding-bottom: 5px"><form action="functions.php" method="post">
                                            <input type="image" src="images/rmcart.gif" alt="Remove From Cart">
                                            <input type="hidden" name="var" value="RemoveFromCart">
                                            <input type="hidden" name="OrderID" value="<?php echo $row['orderid'] ?>">
                                            </form></div>
										</td>
									</tr>
								</table>
							<?php }
							?>   
                            <table><tr>
                            <td width="638" align="right"><form action="functions.php" method="post">
                             <input type="image" src="images/checkout.gif" alt="Checkout..">
                             <input type="hidden" name="var" value="Checkout">
                            </form></td></tr></table>
                            
                            	 <?php  }
			 
			 else
			 {?><div class="item_price" align="center">Shopping Cart Empty!!</div><?php }?>
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
		<td align="right" valign="top"><div class="top11">Copyright © 2012  <b>XYZ.com<a href="#" class="top11"></a></b><br>
	  </div></td>
	</tr>
</table>
<div><img src="images/spacer.gif" width="1" height="42" border="0" alt=""></div>
</body>
</html>