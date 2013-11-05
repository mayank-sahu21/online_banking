<?php
session_start();

if(isset($_SESSION['username']))
{
?>
<html>
<head>
<title>Admin Home</title>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--

body {
background-color: #999999;
 SCROLLBAR-ARROW-COLOR:#666699; SCROLLBAR-BASE-COLOR: #3958A6;
}
.man_auth th{
background-color:#5368a6;
color: #000000;

}
.man_auth td{
background-color: #7699Cc;

}

.man_auth
{ 
background-color: #9DACDF;
border-top-color: #000033;
border-top-width: 1px;
border-right-width: 1px;
border-bottom-width: 1px;
border-left-width: 1px;
border-top-style: double;
border-right-style: double;
border-bottom-style: double;
border-left-style: double;
border-right-color: #000033;
border-bottom-color: #000033;
border-left-color: #000033;
height: auto;
width: 80%;
margin-top: 1px;
margin-right: 1px;
margin-bottom: 1px;
margin-left: 1px;
padding-top: 1px;
padding-right: 1px;
padding-bottom: 1px;
padding-left: 1px;
text-indent: 2px;
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 12px;
}

input.admin_add_items
{  
color:#055;
font-family:'trebuchet ms',helvetica,sans-serif;
font-size:84%;
font-weight:bolder;
background-color:#fed; 
width :10%;
border:1px solid;
border-top-color:#7699Cc;
border-left-color:#7699Cc;
border-right-color:#7699Cd;
border-bottom-color:#7699Cc;
filter:progid:DXImageTransform.Microsoft.Gradient
(GradientType=0,StartColorStr='#ffffffff',EndColorStr='#7699Cc');
  }
.style6 {color: #FFFFFF}
</style>

</head>

<body>
<div align="center"></div>
<table width="100%" height="125" border=0 cellpadding=5 cellspacing=0>
  <tbody>
    <tr>
      <td width=1288 background="images/top.gif"  height=10><strong><font face="Verdana, Arial, Helvetica, sans-serif" 
color=#ffffff size=2>
        <center>
          ADMINISTRATOR ONLINE
        </center>
      </font></strong></td>
    </tr>
    <tr>
      <td width=738 background="images/top_2.gif"  height=9><div align="justify"><a href="admin_acc_view_general.php?mode=admin"><strong><font face="Verdana, Arial, Helvetica, sans-serif" 
color=#ffffff size=2>Account Types </font></strong> <font size="2"><strong><b></b></strong></font></a><a href="customer_accounts.php"><font size="2"><strong><b><font face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff> </font><font 
face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff size=2>| User Accounts </font></b></strong></font> <font face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff size=2><strong>| </strong></font></a><a href="crt.php?mode=admin"><font size="2"><strong><b><font face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff><font 
color=#ffffff>Password Setting</font></font></b></strong></font></a> <a href="search.php?mode=admin"><font size="2"><strong><b><font face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff> </font><font 
face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff size=2>|</font></b></strong></font><font size="2"><strong><b></b></strong></font></a><a href="tran.php?mode=admin"><font size="2"><strong><b><font 
face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff size=2>| Transaction Manager </font></b></strong></font> <font size="2"><strong><b></b></strong></font></a><a href="mini_st.php?mode=admin"><font size="2"><strong><b><font 
face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff size=2>|  </font></b></strong></font> <font size="2"><strong><b></b></strong></font></a><a href="loan3.php?mode=admin"><font size="2"><strong><b><font 
face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff size=2>| Loan </font></b></strong></font> <font size="2"><strong><b></b></strong></font></a><a href="money_tran_admin.php?mode=admin"><font size="2"><strong><b><font 
face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff size=2>| </font></b></strong></font> <font size="2"><strong><b></b></strong></font></a><a href="complaint_admin.php?mode=admin"><font size="2"><strong><b><font 
face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff size=2>| </font></b></strong></font> <font size="2"><FONT face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff size=2>
<FONT face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff> 
<STRONG><a href="complaint_customer.php">
</FONT><FONT face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff size=2>| Complaint</FONT>
</B></a></STRONG></font> 
<STRONG><a href="inbox_cust.php"><strong><b></b></strong></font></a><a href="inbox_admin.php?mode=admin"><font size="2"><strong><b><font 
<STRONG><a href="inbox_cust.php">
<FONT face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff size=2>| Inbox</FONT>
</B></a></STRONG></font> 
    <tr>
      <td width=1288 background="images/top.gif"  height=10><a href="logout.php" ><strong><font face="Verdana, Arial, Helvetica, sans-serif" 
color=#ffffff size=2>
        <center>
          Log Out
        </center>
      </font></strong></a></td>
    </tr>
    <tr>
  </tbody>
</table>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><img src="3.jpg" alt="image" width="291" height="191" ></p>
</body>
</html>
<?php
}
else
{
echo "Please click here to login " . "<a href=index.php>Login Page</a>";
}
?>