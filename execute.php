<?PHP

if (isset($_POST['submit2'])){

									$client_name=htmlspecialchars(rtrim($_POST['client_name']));
								    $tender_no=htmlspecialchars(ucwords(strtolower(rtrim($_POST['tender_no']))));
									$description=htmlspecialchars(strtolower(rtrim($_POST['description'])));
									$bid_bond=htmlspecialchars(strtolower(rtrim($_POST['bid_bond'])));
									$site_visit_date=htmlspecialchars(strtolower(rtrim($_POST['site_visit_date'])));
									$closing_date=htmlspecialchars(strtolower(rtrim($_POST['closing_date'])));
									$delivery_location=htmlspecialchars(strtolower(rtrim($_POST['delivery_location'])));
									
									$user_name = "admin";
									$password = "#R4RY~}mXRe;mt5D";
									$database = "konvergenz";
									$server = "database-2.ckcysvomqjoq.eu-west-2.rds.amazonaws.com";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);


	if ($db_found) {
			
						
		   $SQL23 = "UPDATE `tender` SET 
		  
		  font_color='#228B22'
		  WHERE tender_no='$tender_no' ";
							
			$result = mysql_query($SQL23);
					
					}

}


?>