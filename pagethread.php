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
				
<?php
$user_name = "admin";
$password = "#R4RY~}mXRe;mt5D";
$database = "konvergenz";
$server = "database-2.ckcysvomqjoq.eu-west-2.rds.amazonaws.com";
	
		$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);

	
	$tender_no=strtolower(str_replace("/","_",$tender_no));	
	$tender_no=strtolower(str_replace("-","_",$tender_no));	

	if ($db_found) {
	$SQL1="SELECT * FROM  `$tender_no` WHERE ID = 1 ";
	 $result9=mysql_query($SQL1);
	
	 
	
	 
	 while ($db_field = mysql_fetch_assoc($result9)) {
				
				
				
			$COL1=$db_field['COL1'];
			$COL2=$db_field['COL2'];
			$COL3=$db_field['COL3'];
			$COL4=$db_field['COL4'];
			$COL5=$db_field['COL5'];
			$COL6=$db_field['COL6'];
			$COL7=$db_field['COL7'];
			$COL8=$db_field['COL8'];
			$COL9=$db_field['COL9'];
			$COL10=$db_field['COL10'];
			$COL11=$db_field['COL11'];
			$COL12=$db_field['COL12'];
			$COL13=$db_field['COL13'];
			
			
			
			
					}
		
		
		

				
		
	
	}

?>

<p><b>Tender quality management</b></p>
	
				<form name='form1' method='POST' action='profile.php'>
				<table border=2>
<tr><td>Advertisement notificationFinance Analyst/BS Assistant to check carry out daily advert checks and flag any potential advert noted.<td>Business Support
					<td><select name='COL1'>
					
	<option value='Pending'>Pending</option><option value='Completed'>Completed</option> <option value="<?php print $COL1 ?>" selected><?php print $COL1 ?></option>
	
</select>

<tr><td>Interest to BidManagement to review and raise interest to bid if it�s feasible<td>Directors & BDM
					<td><select name='COL2'>
	<option value='Pending'>Pending</option><option value='Completed'>Completed</option><option value="<?php print $COL2 ?>" selected><?php print $COL2 ?></option>
	
</select>

<tr><td>High Level Technical Assessment and Tender value estimationTechnical Manager to review the client r
equirements and advise the management.Identify all important dates� i.e. Pre-bid visits, Site visits and date of closure.<td>Technical Manager & Tech team
					<td><select name='COL3'>
	<option value='Pending'>Pending</option><option value='Completed'>Completed</option><option value="<?php print $COL3 ?>" selected><?php print $COL3 ?></option>
	
</select>
<tr><td>Confirmation to BidManagement to review and� give green light to bid<td>Management
					<td><select name='COL4'>
	<option value='Pending'>Pending</option><option value='Completed'>Completed</option><option value="<?php print $COL4 ?>" selected><?php print $COL4 ?></option>
	
</select>
<tr><td>Identification of Primary Business Support ResourceOperations Manager to dedicate a resource<td>Operations Manager & Business Support Team
					<td><select name='COL5'>
	<option value='Pending'>Pending</option><option value='Completed'>Completed</option><option value="<?php print $COL5 ?>" selected><?php print $COL5 ?></option>
	
</select>
<tr><td>Tender ChecklistAssigned BS Assistant to prepare a checklist specific to tenderPrepare all documents and have them signed by relevant teams.<td>Business Support Team
					<td><select name='COL6'>
	<option value='Pending'>Pending</option><option value='Completed'>Completed</option><option value="<?php print $COL6 ?>" selected><?php print $COL6 ?></option>
	
</select>
<tr><td>Checklist verificationTech Team to check and verify the tender checklist<td>Technical Manager & Tech team
					<td><select name='COL7'>
	<option value='Pending'>Pending</option><option value='Completed'>Completed</option><option value="<?php print $COL7 ?>" selected><?php print $COL7 ?></option>
	
</select>
<tr><td>Tender Books for Redundant/Routine documentation<td>Operations Manager & Business Support Team
					<td><select name='COL8'>
	<option value='Pending'>Pending</option><option value='Completed'>Completed</option><option value="<?php print $COL8 ?>" selected><?php print $COL8 ?></option>
	
</select>
<tr><td>Detailed Technical Assessment & ValuationSolution av
ailable(If yes Proceed with Valuation)Solution requires engagement of new 
suppliers(if yes forward to BDM to solicit) Suppliers found(BDM to forward to TM to complete valuation)T Manager to assign a Tech resource to carry out site surveys if necessary.<td>�Technical Manager��BDM��Tech Team
					<td><select name='COL9'>
	<option value='Pending'>Pending</option><option value='Completed'>Completed</option><option value="<?php print $COL9 ?>" selected><?php print $COL9 ?></option>
	
</select>
<tr><td>FinancialsF manager to prepare all financials documents required.<td>Finance Manager
					<td><select name='COL10'>
	<option value='Pending'>Pending</option><option value='Completed'>Completed</option><option value="<?php print $COL10 ?>" selected><?php print $COL10 ?></option>
	
</select>
<tr><td>Preparation and Finalizing Tender documentBS Assistant to compile all the documents and bind<td>Business Support Team
					<td><select name='COL11'>
	<option value='Pending'>Pending</option><option value='Completed'>Completed</option><option value="<?php print $COL11 ?>" selected><?php print $COL11 ?></option>
	
</select>
<tr><td>Verification of Tender documentThe Operations & Technical Manager to go through the final document to crosscheck and ensure all the requirements is complied.<td>Operations & Technical Manager
					<td><select name='COL12'>
	<option value='Pending'>Pending</option><option value='Completed'>Completed</option><option value="<?php print $COL12 ?>" selected><?php print $COL12 ?></option>
	
</select>
<tr><td>Submission of Tender documentBS Assistant to submit the prepared document to client premise.<td>Business Support Team 
					<td><select name='COL13'>
	<option value='Pending'>Pending</option><option value='Completed'>Completed</option><option value="<?php print $COL13 ?>" selected><?php print $COL13 ?></option>
	
</select>
<input type='hidden' name='tender_no_hidden' value="<?php print $tender_no ?>">
				


				<br><br><INPUT TYPE = 'Submit' Name = 'submit3'  VALUE = 'UPDATE PROGRESS'><br>
				

				</form>
				
</table>	
<h1> BIDDERS OF THIS TENDER</H1>			
<?php


$user_name = "admin";
	$password = "#R4RY~}mXRe;mt5D";
	$database = "konvergenz";
	$server = "database-2.ckcysvomqjoq.eu-west-2.rds.amazonaws.com";
	
		$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);
	
	
	$tender_no=strtolower(str_replace("/","_",$tender_no));	
	$tender_no=strtolower(str_replace("-","_",$tender_no));	
	$tender_no_bidders=$tender_no."_bidders";
	

	if ($db_found) {
  PRINT $SQL="SELECT * FROM  `$tender_no_bidders` ";
	$result=mysql_query($SQL);
	$rows=mysql_num_rows($result);
	
	
		
		print "<table border=2 width=800 align=center>";
		PRINT "<tr><td><b>Company name<td><b>Bid bond<td><b>Quotation</b>";
		
		while ($db_field = mysql_fetch_assoc($result)) {
		
			print "<tr><td>".$company=$db_field['company'];
			print "<Td>".$bid_bond=$db_field['bid_bond'];
			print "<td>".$quotation=$db_field['quotation'];
			
		
		
		
		}
		
		
		print "</table>";
		
		}
?>
<Br>
<form name='form1' method='POST' action='profile.php'>
				Company :<input type='text' name='company' value="" size=70><BR><BR>
				Bid bond: <input type='text' name='bid_bond' value="" size=70><BR><BR>
				quotation: <input type='text' name='quotation' value="" size=100><BR><BR>
				
				
				<input type='hidden' name='tender_no_bidders' value="<?php print $tender_no_bidders ?>">
				
				<br><br><INPUT TYPE = 'Submit' Name = 'submit4'  VALUE = 'ADD BIDDER'><br>

				</form>