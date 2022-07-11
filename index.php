<html>
<head>

<link rel="stylesheet" href="franc.css" style="text/css">
</head>
<body>
<table id='table' align="center" >
<tr>
<td id=link><h1>-TENDER-</h1></td></tr>
<tr><td id=link2 >register |  <a href='profile.php'>profile</a> |  <a href='approved.php'>Approved</a> </td></tr>
<tr><td>


<?php
if (isset($_POST['submit1'])){

									$client_name=htmlspecialchars(rtrim($_POST['client_name']));
									
									$tender_no=htmlspecialchars(strtolower(rtrim($_POST['tender_no'])));
									$description=htmlspecialchars(strtolower(rtrim($_POST['description'])));
									$bid_bond=htmlspecialchars(strtolower(rtrim($_POST['bid_bond'])));
									$site_visit_date=htmlspecialchars(strtolower(rtrim($_POST['site_visit_date'])));
									$closing_date=htmlspecialchars(strtolower(rtrim($_POST['closing_date'])));
									$delivery_location=htmlspecialchars(strtolower(rtrim($_POST['delivery_location'])));
									$font_color='#FF0000';
									
   $user_name = "admin";
	$password = "#R4RY~}mXRe;mt5D";
	$database = "konvergenz";
	$server = "database-2.ckcysvomqjoq.eu-west-2.rds.amazonaws.com";
	$message='';
	$week=date('W');

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);


	if ($db_found) {
			$SQL1="SELECT * FROM tender WHERE tender_no='$tender_no'";
		$result1=mysql_query($SQL1);
		$rows=mysql_num_rows($result1);

		if ($rows>0)
		{
		print "<h2>Tender already bookmarked</h2>";
		print "<script>alert('Already registered!')</script>";
		}
		
				else {
						
		 $SQL = "INSERT INTO tender (week,client_name, tender_no, description,bid_bond,site_visit_date,closing_date,delivery_location,font_color,progress) VALUES
									 ('$week','$client_name', '$tender_no', '$description','$bid_bond','$site_visit_date','$closing_date','$delivery_location','$font_color',0)";

									$result = mysql_query($SQL);
					}
					
					
		$tender_no=str_replace("/","_",$tender_no);		
		$tender_no=str_replace("-","_",$tender_no);		
		
	$SQL5="CREATE TABLE IF NOT EXISTS $tender_no (
  `ID` int(1) DEFAULT NULL,
  `COL1` varchar(10) DEFAULT NULL,
  `COL2` varchar(10) DEFAULT NULL,
  `COL3` varchar(10) DEFAULT NULL,
  `COL4` varchar(10) DEFAULT NULL,
  `COL5` varchar(10) DEFAULT NULL,
  `COL6` varchar(10) DEFAULT NULL,
  `COL7` varchar(10) DEFAULT NULL,
  `COL8` varchar(10) DEFAULT NULL,
  `COL9` varchar(10) DEFAULT NULL,
  `COL10` varchar(10) DEFAULT NULL,
  `COL11` varchar(10) DEFAULT NULL,
  `COL12` varchar(10) DEFAULT NULL,
  `COL13` varchar(10) DEFAULT NULL
) ";

mysql_query($SQL5);



$SQL6="INSERT INTO $tender_no (`ID`, `COL1`, `COL2`, `COL3`, `COL4`, `COL5`, `COL6`, `COL7`, `COL8`, `COL9`, `COL10`, `COL11`, `COL12`, `COL13`) VALUES
(1, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending')";


	mysql_query($SQL6);
$tender_no_bidders=$tender_no."_bidders";
$SQL99="CREATE TABLE IF NOT EXISTS $tender_no_bidders (
  `ID` int(7) NOT NULL AUTO_INCREMENT,
  `company` varchar(10) DEFAULT NULL,
  `bid_bond` varchar(10) DEFAULT NULL,
 
 
  `quotation` varchar(10) DEFAULT NULL,
  UNIQUE KEY `id` (`ID`)
) ";

mysql_query($SQL99);


					}

				
}


?>



<form name="form1" method="POST" action="index.php">
client name :<input type="text" name="client_name" value="" maxlength=100 size=70><BR><BR>

tender no: <input type="text" name="tender_no" value="" size=70><BR><BR>
description: <input type="text" name="description" value="" size=100><BR><BR>
bid bond: <input type="text" name="bid_bond" value="" size=70><BR><BR>

site visit date: <input type="date" name="site_visit_date"><BR><BR>
closing date:<input type="date" name="closing_date"><BR><BR>
delivery location: <input type="text" name="delivery_location" value="" size=70><BR><BR>




<br><br><INPUT TYPE = "Submit" Name = "submit1"  VALUE = "submit"><br>

</form>

</td></tr>
</table>

</body>
</html>