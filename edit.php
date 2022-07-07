<html>
<head>

<link rel="stylesheet" href="franc.css" style="text/css">
</head>
<body>
<table align="center" border='2'>
<tr>
<td id='link'><h1>TENDER</h1></td></tr>
<tr><td id='link2'><a href='index.php'>register</a> |  <a href='profile.php'>profile</a> |  <a href='approved.php'>approved</a></td></tr>
<tr><td>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$tenderno='';
	if (isset($_GET['tenderno'])) {
		
		$tenderno= $_GET['tenderno'];
		
	
		
		
	}
}

$user_name = "admin";
	$password = "#R4RY~}mXRe;mt5D";
	$database = "konvergenz";
	$server = "database-2.ckcysvomqjoq.eu-west-2.rds.amazonaws.com";
	
		$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);


	if ($db_found) {
	$SQL="SELECT * FROM  tender where tender_no='$tenderno' ";
	$result=mysql_query($SQL);
	 $rows=mysql_num_rows($result);
	
	if ($rows==0)
		{
		print "Tender number not found";
		
		}
		else{
		
		while ($db_field = mysql_fetch_assoc($result)) {
		
						
		
		
			$client_name=$db_field['client_name'];
			
			$tender_no=$db_field['tender_no'];;
			$description=$db_field['description'];
			$bid_bond=$db_field['bid_bond'];
			$site_visit_date=$db_field['site_visit_date'];
			$closing_date=$db_field['closing_date'];
			$delivery_location=$db_field['delivery_location'];
			$bom=$db_field['bom'];

					}
		
		}
	}
	
?>

				<form name='form1' method='POST' action='profile.php' enctype='multipart/form-data'>
				client name :<input type='text' name='client_name' value="<?php print $client_name?>" size=70><BR><BR>
				tender no: <input type='text' name='tender_no' value="<?php print $tender_no?>" size=70><BR><BR>
				description: <input type='text' name='description' value="<?php print $description?>" size=100><BR><BR>
				bid bond: <input type='text' name='bid_bond' value="<?php print $bid_bond?>" size=70><BR><BR>
				
				site visit date: <input type="date" name='site_visit_date' value="<?php print $site_visit_date?>" size=70><BR><BR>
				closing date:<input type="date" name='closing_date' value="<?php print $closing_date?>" size=70><BR><BR>
				delivery location:<input type='text' name='delivery_location' value="<?php print $delivery_location?>" size=70><BR><BR>
				
				attach BOM:<input type='file'name='mFile'id='mFile' />

				<br><br><INPUT TYPE = 'Submit' Name = 'submit1'  VALUE = 'UPDATE'><br>
				<br><br><INPUT TYPE = 'Submit' Name = 'submit2'  VALUE = 'APPROVE'><br>

				</form>
				
				
</td></tr></table>				
				