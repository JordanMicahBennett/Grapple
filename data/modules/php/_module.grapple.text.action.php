<!--DOCTYPE html -->
<!--
	author(s) details : Jordan Micah Bennett
-->
<?php
	session_start(); 
	$grappleActionContentOutput = $_GET['grappleContent'];
	$grappleActionContentSource = $_GET['grappleSource'];
	$grappleActionContentEmail = $_COOKIE['grappleUserEmail'];
	$grappleActionContentPassword = $_COOKIE['grappleUserPassword'];
	$grappleActionType = $_GET['grappleType'];
	
	$_SESSION [ 'GRAPPLE_ACTION_CONTENT_STREAM' ] = $grappleActionContentOutput;
	$_SESSION [ 'GRAPPLE_ACTION_CONTENT_SOURCE' ] = $grappleActionContentSource;
	$_SESSION [ 'GRAPPLE_ACTION_USER_EMAIL' ] = $grappleActionContentEmail;
	$_SESSION [ 'GRAPPLE_ACTION_USER_PASSWORD' ] = $grappleActionContentPassword;
	$_SESSION [ 'GRAPPLE_ACTION_TYPE' ] = $grappleActionType;
?>
<html id = "grappleActionBackgroundArea">
	<head>
		<link rel="stylesheet" href="../../css/template.css" />
		
		<script type = "text/javascript">
			document.getElementById('grappleActionBackgroundArea').style.backgroundImage = "url(../../images/foundation/grapple.minimal.background.action.init.png)";
			document.getElementById('grappleActionBackgroundArea').style.backgroundRepeat = "no-repeat";
			document.getElementById('grappleActionBackgroundArea').style.backgroundSize = "500 580";
			document.getElementById('grappleActionBackgroundArea').style.backgroundAttachment = "fixed";
		</script>
	</head>
	
	
	<body>
		<form action = "_module.grapple.text.action.completion.php" method = "post" enctype="multipart/form-data" >
			<table>
				<tbody>
					</tr>	
						<td> <input id = "grappleActionTypeId" class = "regularInput" type = "submit" value = <? echo $_SESSION [ 'GRAPPLE_ACTION_TYPE' ] ?> > </td>
					</tr>	
					<!--
					<tr>
						<td> <label class ="NormalModernFontClassification" >email?</label>  </td>
						<td> <input class = "regularInput" name = "grappleUserEmailName" type = "text"/> </td>
					</tr>
					<tr>
						<td> <label class ="NormalModernFontClassification" >password?</label>  </td>
						<td> <input class = "regularInput" name = "grappleUserPasswordName" type = "password"/> </td>
					</tr>	
					-->
					<tr>
						<td> <label class ="NormalModernFontClassification" >title?</label>  </td>
						<td> <input class = "regularInput" name = "grappleItemTitleName" type = "text"/> </td>
					</tr>			
					<tr>
						<td> <label class ="NormalModernFontClassification" >description?</label>  </td>
						<td> <input class = "regularInput" name = "grappleItemDescriptionName" type = "text">
					</tr>	
					
					<tr>
						<td> <label class ="NormalModernFontClassification" >private or public?</label>  </td>
						<td>
							<select name="grappleItemPublicationStatus">
								<option value="public">make grapple public</option>
								<option value="private">make grapple private</option>
							</select>
						</td>
					</tr>
					
					<?php	
						$userLoginEmail = $_SESSION [ 'GRAPPLE_ACTION_USER_EMAIL' ];
						
						
						foreach ( $_SESSION [ 'BOUQUET_NAME_COLLECTION_GRAPPLES' ] as $nameCollectionItem ) 
						{
							$segmentedDatabaseRecordCollection = explode ( "::", $nameCollectionItem ); 
							
							if ( ( $userLoginEmail == $segmentedDatabaseRecordCollection [ 0 ] ) && ( $segmentedDatabaseRecordCollection [ 2 ] == "text" ) )
							{
								echo "  <tr>
											<td> <label class ='NormalModernFontClassification' >select bouquet?</label>  </td>
											<td>
												<select name='grappleItemPublicationStatus'>
													<option value=".$segmentedDatabaseRecordCollection [ 1 ]."> ".$segmentedDatabaseRecordCollection [ 1 ]."</option>
												</select>
											</td>
										</tr>";
							}
						}
					?>
					
					
					<tr>
						<td> <label class ="NormalModernFontClassification" >new bouquet?</label>  </td>
						<td> <textarea class = "regularInput" name = "grappleItemNewBoquetName" type = "text"> </textarea> </td>
					</tr>	
					
					</tr>	
						<td> <input class = "regularInput" name = "grappleActionAttemptButtonName" type = "submit" value = "grapple it!"/> </td>
					</tr>	
				</tbody>
			</table>
		</form>
	</body>
</html>