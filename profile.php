

<html>
<head>

<link rel="stylesheet" href="franc.css" style="text/css">
</head>
<body>
<table align="center" >
<tr>
<td id='link' colspan=9><h1>TENDER</h1></td></tr>

<tr id=link2><td id='link' colspan=9><a href='index.php'>register </a> |  profile |  <a href='approved.php'>approved</a>  </td></tr>
<tr id=link2><td>no.<td>week<td>client name<td>tender no<td>description<td>bid bond<td>site visit date<td>closing date<td>delivery location</td></tr>

<?PHP

 
	

	$hrefEnd = "</A>";
	$secIDs[] = array();
	$user_name = "admin";
	$password = "#R4RY~}mXRe;mt5D";
	$database = "konvergenz";
	$server = "database-2.ckcysvomqjoq.eu-west-2.rds.amazonaws.com:3306";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);

	
	$hrefStart = "<A HREF = pagethread.php?tenderno";
	$color="blue";

	if ($db_found) {

							$SQL = "SELECT * FROM tender ORDER BY ID DESC";
							$result = mysql_query($SQL);
							$rows=mysql_num_rows($result);
							$loopCount = 1;
							
							
							$value=0;					
							
							while ($db_field = mysql_fetch_assoc($result)) {
							
							
							
							
								$secIDs_ID[$loopCount]=$db_field['ID'];
								$secIDs_week[$loopCount]=$db_field['week'];
								$secIDs_client_name[$loopCount]=$db_field['client_name'];
								$secIDs_tender_no[$loopCount]=$db_field['tender_no'];
								$secIDs_description[$loopCount]=$db_field['description'];
								$secIDs_bid_bond[$loopCount]=$db_field['bid_bond'];
								$secIDs_site_visit_date[$loopCount]=$db_field['site_visit_date'];
								$secIDs_closing_date[$loopCount]=$db_field['closing_date'];
								$secIDs_delivery_location[$loopCount]=$db_field['delivery_location'];
								$secIDs_progress[$loopCount]=$db_field['progress'];	
								$secIDs_bom[$loopCount]=$db_field['bom'];
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
							
							
								print $RowStart;

									
									print "<td id=link3>".
									$secIDs_ID[$i]."<td id=link3>".$secIDs_week[$i]."<td id=link3>".$secIDs_font_color[$i].
									$secIDs_client_name[$i]."<td id=link3>".$secIDs_font_color[$i].
									$secIDs[$i]."<td id=link3 width=300>".
									$secIDs_description[$i]."<td id=link3 >".
									$secIDs_bid_bond[$i]."<td id=link3>".
									$secIDs_site_visit_date[$i]."<td id=link3>".
									$secIDs_closing_date[$i]."<td id=link3>".
									$secIDs_delivery_location[$i]."</font>";
									//$secIDs_progress[$i];
									//print "<td>".$secIDs_ID[$i]."<td>".$secIDs[$i]."<td>".$secIDs_exp_date[$i].$tdEnd;
//<td>no.<td>company name<td>tender name<td>tender no<td>source newspaper<td>date of notice<td>closing date<td>key points</td></tr>									


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
													$percent=round($percent,2)."%";
												
												}
												else
												{
												$percent='-';
												}
												
								
								
							}

							
							
							
						
					}
					



?>
<?PHP

if (isset($_POST['submit1'])){

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
									$server = "database-2.ckcysvomqjoq.eu-west-2.rds.amazonaws.com:3306";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);

	
	
	//UPLOAD

//UPLOAD
						//UPLOAD
						$UploadDirectory = 'upload/' ;
						if (!@file_exists( $UploadDirectory )) {
						//destination folder does not exist
						die( "Make sure Upload directory exist!" );
						}
if ($_POST )
{

function upload_errors( $err_code ) {
switch ( $err_code ) {
case UPLOAD_ERR_INI_SIZE:
return '<h1><p align=center>The uploaded file exceeds the upload_
max_filesize <br><img src=compress.jpg height=500 width=800 /></p></h1>' ;
case UPLOAD_ERR_FORM_SIZE:
return '<h1><p align=center>The uploaded file exceeds the MAX_
FILE_SIZE' ;
case UPLOAD_ERR_PARTIAL:
return '<h1><p align=center>The uploaded file was only partially
uploaded' ;
case UPLOAD_ERR_NO_FILE:
return '<h1><p align=center>No file was uploaded' ;
case UPLOAD_ERR_NO_TMP_DIR:
return '<h1><p align=center>Missing a temporary folder';
case UPLOAD_ERR_CANT_WRITE:
return '<h1><p align=center>Failed to write file to disk' ;
case UPLOAD_ERR_EXTENSION:
return '<h1><p align=center>File upload stopped by extension' ;
default:
return '<h1><p align=center>Unknown upload error' ;
}
}



if ($_FILES ['mFile' ][ 'error' ])
{
//File upload error encountered
die(upload_errors( $_FILES [ 'mFile' ]['error' ]));
}
$FileName = strtolower( $_FILES ['mFile' ]
['name' ]); //uploaded file name
$FileTitle = mysql_real_escape_string($client_name); // file title*****************************************************
$ImageExt = substr( $FileName , strrpos( $FileName, '.' )); //file extension
$FileType = $_FILES ['mFile' ][ 'type' ]; //file type
$FileSize = $_FILES ['mFile' ][ "size" ]; //file size
$RandNumber = rand( 0 , 9999999999); //
//Random number to make each filename
//unique.
$uploaded_date = date( "Y-m-d H:i:s" );
switch (strtolower( $FileType ))
{
//allowed file types
case 'image/png' : //png file
case 'image/gif' : //gif file
case 'image/jpeg' : //jpeg file
case 'application/pdf' : //PDF file
case 'application/msword' : //ms word file
case 'application/vnd.ms-excel' : //ms excelfile
case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' : //ms excelfile
case 'application/x-zip-compressed' : //zip file
case 'text/plain' : //text file
case 'text/html' : //html file
break;
default:
die( 'Unsupported File!' ); //output error
}
//File Title will be used as new File name
$NewFileName = preg_replace(array( '/s/' , '/.[.]
+/' , '/[^w_.-]/' ), array( '_' , '.' , '' ), strtolower( $FileTitle ));

$FileTitle=str_replace(" ","_",$FileTitle);	
$NewFileName = $FileTitle.'_'.$RandNumber .$ImageExt ;
//Rename and save uploded file to destinationfolder.
if (move_uploaded_file( $_FILES ['mFile' ][ "tmp_name" ], $UploadDirectory . $NewFileName ))
{

		if ($db_found){
$SQL_UP = "UPDATE tender SET bom='$NewFileName' WHERE tender_no='$tender_no'";
mysql_query($SQL_UP);
			}			
						




}else {
die( 'error uploading File!' );
}
}


						//END UPLOAD

	if ($db_found) {
			
						
		   $SQL22 = "UPDATE `tender` SET 
		  
		  `client_name`='$client_name',
		  
		  `tender_no`='$tender_no',
		  `description`='$description',
		  `bid_bond`='$bid_bond',
		  `site_visit_date`='$site_visit_date',
		  `closing_date`='$closing_date',
		  `delivery_location`= '$delivery_location'
		  WHERE tender_no='$tender_no' ";
							
			$result = mysql_query($SQL22);
					
					}

}


?>
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



<?PHP
//update status
if (isset($_POST['submit3'])){
									$tender_no_hidden=htmlspecialchars(rtrim($_POST['tender_no_hidden']));
									$COL1=htmlspecialchars(rtrim($_POST['COL1']));
									$COL2=htmlspecialchars(rtrim($_POST['COL2']));
									$COL3=htmlspecialchars(rtrim($_POST['COL3']));
									$COL4=htmlspecialchars(rtrim($_POST['COL4']));
									$COL5=htmlspecialchars(rtrim($_POST['COL5']));
									$COL6=htmlspecialchars(rtrim($_POST['COL6']));
									$COL7=htmlspecialchars(rtrim($_POST['COL7']));
									$COL8=htmlspecialchars(rtrim($_POST['COL8']));
									$COL9=htmlspecialchars(rtrim($_POST['COL9']));
									$COL10=htmlspecialchars(rtrim($_POST['COL10']));
									$COL11=htmlspecialchars(rtrim($_POST['COL11']));
									$COL12=htmlspecialchars(rtrim($_POST['COL12']));
									$COL13=htmlspecialchars(rtrim($_POST['COL13']));
								   
									
									$user_name = "admin";
									$password = "#R4RY~}mXRe;mt5D";
									$database = "konvergenz";
									$server = "database-2.ckcysvomqjoq.eu-west-2.rds.amazonaws.com";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);


	if ($db_found) {
			
						
		  $SQL23 = "UPDATE `$tender_no_hidden` SET 
		  
		  `COL1`='$COL1',
		  
		  `COL2`='$COL2',
		  `COL3`='$COL3',
		  `COL4`='$COL4',
		  `COL5`='$COL5',
		  `COL6`='$COL6',
		  `COL7`='$COL7',
		  `COL8`='$COL8',
		  `COL9`='$COL9',
		  `COL10`='$COL10',
		  `COL11`='$COL11',
		  `COL12`='$COL12',
		  `COL13`= '$COL13'
		  WHERE ID=1 ";
							
			$result = mysql_query($SQL23);
			
			
			
			
			
			
			
					
					}

}


?>

<?PHP
//update quotation
if (isset($_POST['submit4'])){
									$tender_no_bidders=htmlspecialchars(rtrim($_POST['tender_no_bidders']));
									$company=htmlspecialchars(rtrim($_POST['company']));
									$bid_bond=htmlspecialchars(rtrim($_POST['bid_bond']));
									$quotation=htmlspecialchars(rtrim($_POST['quotation']));
									
								   
									$user_name = "admin";
									$password = "#R4RY~}mXRe;mt5D";
									$database = "konvergenz";
									$server = "database-2.ckcysvomqjoq.eu-west-2.rds.amazonaws.com";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);


	if ($db_found) {
			
						
		print  $SQL24 = "INSERT INTO `$tender_no_bidders`( `company`, `bid_bond`, `quotation`) VALUES ('$company','$bid_bond','$quotation')";
							
			$result = mysql_query($SQL24);
			
			
			
			
			
			
			
					
					}

}


?>