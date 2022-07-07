

<html>
<head>

<link rel="stylesheet" href="franc.css" style="text/css">
</head>
<body>
<table align="center" >
<tr>
<td id='link' colspan=11><h1>TENDER</h1></td></tr>

<tr id=link2><td id='link' colspan=11><a href='index.php'>register </a> |  <a href='profile.php'>profile</a>| approved</a></td></tr>
<tr id=link2><td>no.<td>week<td>client name<td>tender no<td>description<td>bid bond<td>site visit date<td>closing date<td>delivery location</td><td>Progress<td>BOM</tr>

<?PHP


	

	$hrefEnd = "</A>";
	$secIDs[] = array();
	$user_name = "admin";
	$password = "#R4RY~}mXRe;mt5D";
	$database = "konvergenz";
	$server = "database-2.ckcysvomqjoq.eu-west-2.rds.amazonaws.com";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);

	
	$hrefStart = "<A HREF = pagethread.php?tenderno";
	$color="blue";
	$date=date('Y-m-d');




	if ($db_found) {

							$SQL = "SELECT * FROM tender WHERE font_color='#228B22' ORDER BY ID DESC";
							$result = mysql_query($SQL);
							$rows=mysql_num_rows($result);
							$loopCount = 1;
							
							
							;					
							
							while ($db_field = mysql_fetch_assoc($result)) {
							
						
						if ($date>=$db_field['closing_date']){
							
							$secIDs_background[$loopCount]="<tr bgcolor='#F0FFFF' id='link3'>";
							}
							else
							{
							$secIDs_background[$loopCount]="<tr bgcolor='#FFFFFF' id='link3'>";
							}
							
								$secIDs_ID[$loopCount]=$db_field['ID'];
								$secIDs_week[$loopCount]=$db_field['week'];
								$secIDs_client_name[$loopCount]=$db_field['client_name'];
								$secIDs_tender_no[$loopCount]=$db_field['tender_no'];
								$secIDs_description[$loopCount]=$db_field['description'];
								$secIDs_bid_bond[$loopCount]=$db_field['bid_bond'];
								$secIDs_site_visit_date[$loopCount]=$db_field['site_visit_date'];
								$secIDs_closing_date[$loopCount]=$db_field['closing_date'];
								$secIDs_bom[$loopCount]=$db_field['bom'];
								
								$secIDs_delivery_location[$loopCount]=$db_field['delivery_location'];
								$secIDs_font_color[$loopCount]="<font color=".$db_field['font_color'].">";
								
								
								
								
								$secIDs[$loopCount] =$hrefStart . "=" . $db_field['tender_no'] . ">".'<font color='.$color.'>'.$db_field['tender_no'].'</font>'.$hrefEnd;
				
								
								
								
								$loopCount++;
							}
							
							
						
							
							$RowStart="<tr id=link3>";
							$tdstart1="<td>";
							$tdEnd="</td>";
							$RowEnd="<br>";
							
							
							
							$rows=$rows+1;
							
							for ($i = 1; $i < $rows; $i++) {
							
							
								//print $RowStart;

									
									print $secIDs_background[$i]."<td id=link3>".
									$secIDs_ID[$i]."<td id=link3>".$secIDs_week[$i]."<td id=link3>".$secIDs_font_color[$i].
									$secIDs_client_name[$i]."<td id=link3>".$secIDs_font_color[$i].
									$secIDs[$i]."<td id=link3 width=300>".
									$secIDs_description[$i]."<td id=link3 >".
									$secIDs_bid_bond[$i]."<td id=link3>".
									$secIDs_site_visit_date[$i]."<td id=link3>".
									$secIDs_closing_date[$i]."<td id=link3>".
								    
								
									$secIDs_delivery_location[$i]."</font>";
									
									$secIDs_tender_no[$i]=str_replace("/","_",$secIDs_tender_no[$i]);
									$secIDs_tender_no[$i]=str_replace("-","_",$secIDs_tender_no[$i]);
								 $SQL67="SELECT * FROM `".$secIDs_tender_no[$i]."`";
										$result67=mysql_query($SQL67);
								
												while ($db_field = mysql_fetch_assoc($result67)) {
												
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
																									
																									if ($COL1=='Completed'){
																								$value1=1;
																								}
																								else {
																								$value1=0;
																								};
																								
																								if ($COL2=='Completed'){
																								$value2=1;
																								}
																								else {$value2=0;};
																								
																								if ($COL3=='Completed'){
																								$value3=1;
																								}
																								else {$value3=0;};
																								
																								if ($COL4=='Completed'){
																								$value4=1;
																								}
																								else {$value4=0;};
																								
																								if ($COL5=='Completed'){
																								$value5=1;
																								}
																								else {$value5=0;};
																								
																								if ($COL6=='Completed'){
																								$value6=1;
																								}
																								else {$value6=0;};
																								
																								if ($COL7=='Completed'){
																								$value7=1;
																								}
																								else {$value7=0;};
																								
																								if ($COL8=='Completed'){
																								$value8=1;
																								}
																								else {$value8=0;};
																								
																								if ($COL9=='Completed'){
																								$value9=1;
																								}
																								else {$value9=0;};
																								
																								if ($COL10=='Completed'){
																								$value10=1;
																								}
																								else {$value10=0;};
																								
																								if ($COL11=='Completed'){
																								$value11=1;
																								}
																								else {$value11=0;};
																								
																								if ($COL12=='Completed'){
																								$value12=1;
																								}
																								else {$value12=0;};
																								
																								if ($COL13=='Completed'){
																								$value13=1;
																								}
																								else {$value13=0;};
																								
																								
																								
																						$total_value=$value1+$value2+$value3+$value4+$value5+$value6+$value7+$value8+$value9+$value10+$value11+$value12+$value13;
																								
																								
																								
																						$percent=$total_value/13*100;
																						
																						
																					
																						//print $percent=round($percent,2)."%";
																						
																						
																						
																						
																						
																						
			
												
												}
												
												 $secIDs_font_color[$i]=md5($secIDs_font_color[$i]);
												if ($secIDs_font_color[$i]=='5ebe6c6d63b1e1bd3774087a9271bb7f'){
													print "<td id=link3>".$percent=round($percent,0)."%";
												
												}
												else
												{
												print $percent='-';
												}
												
												print "<TD id=link3><a href=upload/".$secIDs_bom[$i].">".$secIDs_bom[$i]."</a>";
									//print "<td>".$secIDs_ID[$i]."<td>".$secIDs[$i]."<td>".$secIDs_exp_date[$i].$tdEnd;
//<td>no.<td>company name<td>tender name<td>tender no<td>source newspaper<td>date of notice<td>closing date<td>key points</td></tr>									

								
							}

							
							
							
							
					}



?>
<?PHP

?>

