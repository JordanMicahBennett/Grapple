<!--DOCTYPE html -->
<!--
Author: Jordan Micah Bennett, Grapple 2013
Author-website: folioverse.appspot.com 
-->

<?php 
	include ( 'data/modules/php/_module.php.header.php' );
	$_SESSION [ 'USER_LOGIN_EMAIL' ] = "";
	$_SESSION [ 'TEXT_GRAPPLES' ] = array();
	$_SESSION [ 'URL_GRAPPLES' ] = array();
	$_SESSION [ 'IMAGE_GRAPPLES' ] = array ();
	$_SESSION [ 'AUDIO_GRAPPLES' ] = array ();
	$_SESSION [ 'VIDEO_GRAPPLES' ] = array ();
	$_SESSION [ 'GRAPPLECATION_GRAPPLES' ] = array ();
	$_SESSION [ 'COCKTAIL_GRAPPLES' ] = array ();
	$_SESSION [ 'MY_COCKTAIL_GRAPPLES' ] = array ();
	$_SESSION [ 'BOUQUET_NAME_COLLECTION_GRAPPLES' ] = array ();
	
	include ( 'data/modules/php/_module.entry.initialization.php' );
	include ( 'data/modules/php/_module.entry.validation.php' );
?>


<html id = "grappleBackgroundArea">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" href="data/css/template.css" />
		<script src="data/js/jquery.js" type="text/javascript"></script>
		<script src="data/js/jquery.audiotag.js" type="text/javascript"></script>
		<script src="data/js/GrappleHeaderAreaTemplate.js" type="text/javascript"></script> 
		<script src="data/js/template.js" type="text/javascript"></script> 
		<link rel="icon" type="image/png" href="data/images/core/grapple.favicon.png">
		<!-- <script src="data/js/jquery.audiotag.js" type="text/javascript"></script> -->
	</head>
	
	
	<body>
		<div id ="grappleHeaderAreaId">    
			<div class="ModernFontClassification" >
				<table>
					<tbody>
						<tr>
							<td id = "grappleHeaderImageArea">
								<img id = "grappleHeaderImageAreaImageId" src="data/images/photos/header/grapple.sample.header.image.png" alt="grappleHeaderImageArea" >
							</td>
						
						
							<td id = "grappleHeaderTextSuperTabArea">
								<div id = "grappleHeaderTextArea" >
									<span>
										<span id = "grappleHeaderPreTitleAreaLabel" > _symbol_ </span>
										<span id = "grappleHeaderTitleAreaLabel" > grapple.user.name </span>
									</span>
								</div>
								
								<div id = "grappleSuperTabArea" >
									<span>
										<span id = "grappleSuperTabAreaItem0">
											<img src="data/images/header/grapple.super.tab.item.0.png" name = "grappleSuperTabAreaItem0Name" id ="grappleSuperTabAreaItem0Id" alt="grappleSuperTabArea0" onclick = "generateTemplateInformation ( 'grappleHeaderAreaId', true, 'grappleContentComponentEntity1', 'grappleHeaderTitleAreaLabel', '', '', '', '', '', '', 'grappleHeaderImageAreaImageId', '', 'grappleSuperTabAreaItem0Id', 'data/images/header/grapple.super.tab.item.0.png', 'grappleSuperTabAreaItem1Id', 'data/images/header/grapple.super.tab.item.1.png', 'grappleSuperTabAreaItem2Id', 'data/images/header/grapple.super.tab.item.2.png', 'grappleSuperTabAreaItem3Id', 'data/images/header/grapple.super.tab.item.3.png', 'grappleSuperTabAreaItem4Id', 'data/images/header/grapple.super.tab.item.4.png', 'grappleSuperTabAreaItem5Id', 'data/images/header/grapple.super.tab.item.5.png', 'grappleSuperTabAreaItem6Id', 'data/images/header/grapple.super.tab.item.6.png', 'grappleSuperTabAreaItem7Id', 'data/images/header/grapple.super.tab.item.7.png', 'grappleSuperTabAreaItem8Id', 'data/images/header/grapple.super.tab.item.8.png' ); return false;" >
										</span>	
										<span id = "grappleSuperTabAreaItem1">
											<img src="data/images/header/grapple.super.tab.item.1.png" name = "grappleSuperTabAreaItem1Name" id ="grappleSuperTabAreaItem1Id" alt="grappleSuperTabArea1" onclick = "generateTemplateInformation ( 'grappleHeaderAreaId', true, 'grappleContentComponentEntity2', 'grappleHeaderTitleAreaLabel', '', '', '', '', '', '', 'grappleHeaderImageAreaImageId', '', 'grappleSuperTabAreaItem0Id', 'data/images/header/grapple.super.tab.item.0.png', 'grappleSuperTabAreaItem1Id', 'data/images/header/grapple.super.tab.item.1.png', 'grappleSuperTabAreaItem2Id', 'data/images/header/grapple.super.tab.item.2.png', 'grappleSuperTabAreaItem3Id', 'data/images/header/grapple.super.tab.item.3.png', 'grappleSuperTabAreaItem4Id', 'data/images/header/grapple.super.tab.item.4.png', 'grappleSuperTabAreaItem5Id', 'data/images/header/grapple.super.tab.item.5.png', 'grappleSuperTabAreaItem6Id', 'data/images/header/grapple.super.tab.item.6.png', 'grappleSuperTabAreaItem7Id', 'data/images/header/grapple.super.tab.item.7.png', 'grappleSuperTabAreaItem8Id', 'data/images/header/grapple.super.tab.item.8.png' ); return false;" >
										</span>	
										<span id = "grappleSuperTabAreaItem2">
											<img src="data/images/header/grapple.super.tab.item.2.png" name = "grappleSuperTabAreaItem2Name" id ="grappleSuperTabAreaItem2Id" alt="grappleSuperTabArea2" onclick = "generateTemplateInformation ( 'grappleHeaderAreaId', true,'grappleContentComponentEntity3', 'grappleHeaderTitleAreaLabel', '', '', '', '', '', '', 'grappleHeaderImageAreaImageId', '', 'grappleSuperTabAreaItem0Id', 'data/images/header/grapple.super.tab.item.0.png', 'grappleSuperTabAreaItem1Id', 'data/images/header/grapple.super.tab.item.1.png', 'grappleSuperTabAreaItem2Id', 'data/images/header/grapple.super.tab.item.2.png', 'grappleSuperTabAreaItem3Id', 'data/images/header/grapple.super.tab.item.3.png', 'grappleSuperTabAreaItem4Id', 'data/images/header/grapple.super.tab.item.4.png', 'grappleSuperTabAreaItem5Id', 'data/images/header/grapple.super.tab.item.5.png', 'grappleSuperTabAreaItem6Id', 'data/images/header/grapple.super.tab.item.6.png', 'grappleSuperTabAreaItem7Id', 'data/images/header/grapple.super.tab.item.7.png', 'grappleSuperTabAreaItem8Id', 'data/images/header/grapple.super.tab.item.8.png' ); return false;"  >
										</span>	
										<span id = "grappleSuperTabAreaItem3">
											<img src="data/images/header/grapple.super.tab.item.3.png" name = "grappleSuperTabAreaItem3Name" id ="grappleSuperTabAreaItem3Id" alt="grappleSuperTabArea3" onclick = "generateTemplateInformation ( 'grappleHeaderAreaId', true, 'grappleContentComponentEntity4', 'grappleHeaderTitleAreaLabel', '', '', '', '', '', '', 'grappleHeaderImageAreaImageId', '', 'grappleSuperTabAreaItem0Id', 'data/images/header/grapple.super.tab.item.0.png', 'grappleSuperTabAreaItem1Id', 'data/images/header/grapple.super.tab.item.1.png', 'grappleSuperTabAreaItem2Id', 'data/images/header/grapple.super.tab.item.2.png', 'grappleSuperTabAreaItem3Id', 'data/images/header/grapple.super.tab.item.3.png', 'grappleSuperTabAreaItem4Id', 'data/images/header/grapple.super.tab.item.4.png', 'grappleSuperTabAreaItem5Id', 'data/images/header/grapple.super.tab.item.5.png', 'grappleSuperTabAreaItem6Id', 'data/images/header/grapple.super.tab.item.6.png', 'grappleSuperTabAreaItem7Id', 'data/images/header/grapple.super.tab.item.7.png', 'grappleSuperTabAreaItem8Id', 'data/images/header/grapple.super.tab.item.8.png' ); return false;"  >
										</span>	
										<span id = "grappleSuperTabAreaItem4">
											<img src="data/images/header/grapple.super.tab.item.4.png" name = "grappleSuperTabAreaItem4Name" id ="grappleSuperTabAreaItem4Id" alt="grappleSuperTabArea4" onclick = "generateTemplateInformation ( 'grappleHeaderAreaId', true, 'grappleContentComponentEntity5', 'grappleHeaderTitleAreaLabel', '', '', '', '', '', '', 'grappleHeaderImageAreaImageId', '', 'grappleSuperTabAreaItem0Id', 'data/images/header/grapple.super.tab.item.0.png', 'grappleSuperTabAreaItem1Id', 'data/images/header/grapple.super.tab.item.1.png', 'grappleSuperTabAreaItem2Id', 'data/images/header/grapple.super.tab.item.2.png', 'grappleSuperTabAreaItem3Id', 'data/images/header/grapple.super.tab.item.3.png', 'grappleSuperTabAreaItem4Id', 'data/images/header/grapple.super.tab.item.4.png', 'grappleSuperTabAreaItem5Id', 'data/images/header/grapple.super.tab.item.5.png', 'grappleSuperTabAreaItem6Id', 'data/images/header/grapple.super.tab.item.6.png', 'grappleSuperTabAreaItem7Id', 'data/images/header/grapple.super.tab.item.7.png', 'grappleSuperTabAreaItem8Id', 'data/images/header/grapple.super.tab.item.8.png' ); return false;"  >
										</span>	
										<span id = "grappleSuperTabAreaItem5">
											<img src="data/images/header/grapple.super.tab.item.5.png" name = "grappleSuperTabAreaItem5Name" id ="grappleSuperTabAreaItem5Id" alt="grappleSuperTabArea5" onclick = "generateTemplateInformation ( 'grappleHeaderAreaId', true, 'grappleContentComponentEntity6', 'grappleHeaderTitleAreaLabel', '', '', '', '', '', '', 'grappleHeaderImageAreaImageId', '', 'grappleSuperTabAreaItem0Id', 'data/images/header/grapple.super.tab.item.0.png', 'grappleSuperTabAreaItem1Id', 'data/images/header/grapple.super.tab.item.1.png', 'grappleSuperTabAreaItem2Id', 'data/images/header/grapple.super.tab.item.2.png', 'grappleSuperTabAreaItem3Id', 'data/images/header/grapple.super.tab.item.3.png', 'grappleSuperTabAreaItem4Id', 'data/images/header/grapple.super.tab.item.4.png', 'grappleSuperTabAreaItem5Id', 'data/images/header/grapple.super.tab.item.5.png', 'grappleSuperTabAreaItem6Id', 'data/images/header/grapple.super.tab.item.6.png', 'grappleSuperTabAreaItem7Id', 'data/images/header/grapple.super.tab.item.7.png', 'grappleSuperTabAreaItem8Id', 'data/images/header/grapple.super.tab.item.8.png' ); return false;"  >
										</span>			
										<span id = "grappleSuperTabAreaItem6">
											<img src="data/images/header/grapple.super.tab.item.6.png" name = "grappleSuperTabAreaItem6Name" id ="grappleSuperTabAreaItem6Id" alt="grappleSuperTabArea6" onclick = "generateTemplateInformation ( 'grappleHeaderAreaId', true, 'grappleContentComponentEntity7', 'grappleHeaderTitleAreaLabel', '', '', '', '', '', '', 'grappleHeaderImageAreaImageId', '', 'grappleSuperTabAreaItem0Id', 'data/images/header/grapple.super.tab.item.0.png', 'grappleSuperTabAreaItem1Id', 'data/images/header/grapple.super.tab.item.1.png', 'grappleSuperTabAreaItem2Id', 'data/images/header/grapple.super.tab.item.2.png', 'grappleSuperTabAreaItem3Id', 'data/images/header/grapple.super.tab.item.3.png', 'grappleSuperTabAreaItem4Id', 'data/images/header/grapple.super.tab.item.4.png', 'grappleSuperTabAreaItem5Id', 'data/images/header/grapple.super.tab.item.5.png', 'grappleSuperTabAreaItem6Id', 'data/images/header/grapple.super.tab.item.6.png', 'grappleSuperTabAreaItem7Id', 'data/images/header/grapple.super.tab.item.7.png', 'grappleSuperTabAreaItem8Id', 'data/images/header/grapple.super.tab.item.8.png' ); return false;"  >
										</span>	
										<span id = "grappleSuperTabAreaItem7">
											<img src="data/images/header/grapple.super.tab.item.7.png" name = "grappleSuperTabAreaItem7Name" id ="grappleSuperTabAreaItem7Id" alt="grappleSuperTabArea7" onclick = "generateTemplateInformation ( 'grappleHeaderAreaId', true, 'grappleContentComponentEntity8', 'grappleHeaderTitleAreaLabel', '', '', '', '', '', '', 'grappleHeaderImageAreaImageId', '', 'grappleSuperTabAreaItem0Id', 'data/images/header/grapple.super.tab.item.0.png', 'grappleSuperTabAreaItem1Id', 'data/images/header/grapple.super.tab.item.1.png', 'grappleSuperTabAreaItem2Id', 'data/images/header/grapple.super.tab.item.2.png', 'grappleSuperTabAreaItem3Id', 'data/images/header/grapple.super.tab.item.3.png', 'grappleSuperTabAreaItem4Id', 'data/images/header/grapple.super.tab.item.4.png', 'grappleSuperTabAreaItem5Id', 'data/images/header/grapple.super.tab.item.5.png', 'grappleSuperTabAreaItem6Id', 'data/images/header/grapple.super.tab.item.6.png', 'grappleSuperTabAreaItem7Id', 'data/images/header/grapple.super.tab.item.7.png', 'grappleSuperTabAreaItem8Id', 'data/images/header/grapple.super.tab.item.8.png' ); return false;"  >
										</span>			
										<span id = "grappleSuperTabAreaitem8">
											<img src="data/images/header/grapple.super.tab.item.8.png" name = "grappleSuperTabAreaItem8Name" id ="grappleSuperTabAreaItem8Id" alt="grappleSuperTabArea8" onclick = "generateTemplateInformation ( 'grappleHeaderAreaId', false, 'grappleContentComponentEntity0', 'grappleHeaderTitleAreaLabel', '', '', '', '', '', '', 'grappleHeaderImageAreaImageId', '', 'grappleSuperTabAreaItem0Id', 'data/images/header/grapple.super.tab.item.0.png', 'grappleSuperTabAreaItem1Id', 'data/images/header/grapple.super.tab.item.1.png', 'grappleSuperTabAreaItem2Id', 'data/images/header/grapple.super.tab.item.2.png', 'grappleSuperTabAreaItem3Id', 'data/images/header/grapple.super.tab.item.3.png', 'grappleSuperTabAreaItem4Id', 'data/images/header/grapple.super.tab.item.4.png', 'grappleSuperTabAreaItem5Id', 'data/images/header/grapple.super.tab.item.5.png', 'grappleSuperTabAreaItem6Id', 'data/images/header/grapple.super.tab.item.6.png', 'grappleSuperTabAreaItem7Id', 'data/images/header/grapple.super.tab.item.7.png', 'grappleSuperTabAreaItem8Id', 'data/images/header/grapple.super.tab.item.8.png' ); return false;" >
										</span>	
									</span>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
		<div id = "grappleContentComponentEntity0">
			<script type = "text/javascript">
				<!-- show sign in/sign up-->
				animateUpwards ( "grappleContentComponentEntity0", 20, 1, "%", 70, -72 );
				

				generateGrappleItemUploadResponse ( 'grappleGlobeAreaProfileModeTextGrappleModeAreaFeedsAreaNavigationAreaComponentUFile', 'grappleGlobeAreaProfileModeTextGrappleModeAreaFeedsAreaNavigationAreaComponentU' );
				generateGrappleItemUploadResponse ( 'grappleGlobeAreaProfileModeLinkGrappleModeAreaFeedsAreaNavigationAreaComponentUFile', 'grappleGlobeAreaProfileModeLinkGrappleModeAreaFeedsAreaNavigationAreaComponentU' );
				generateGrappleItemUploadResponse ( 'grappleGlobeAreaProfileModeImageGrappleModeAreaFeedsAreaNavigationAreaComponentUFile', 'grappleGlobeAreaProfileModeImageGrappleModeAreaFeedsAreaNavigationAreaComponentU' );
				generateGrappleItemUploadResponse ( 'grappleGlobeAreaProfileModeAudioGrappleModeAreaFeedsAreaNavigationAreaComponentUFile', 'grappleGlobeAreaProfileModeAudioGrappleModeAreaFeedsAreaNavigationAreaComponentU' );
				generateGrappleItemUploadResponse ( 'grappleGlobeAreaProfileModeVideoGrappleModeAreaFeedsAreaNavigationAreaComponentUFile', 'grappleGlobeAreaProfileModeVideoGrappleModeAreaFeedsAreaNavigationAreaComponentU' );
				generateGrappleItemUploadResponse ( 'grappleGlobeAreaProfileModeFileGrappleModeAreaFeedsAreaNavigationAreaComponentUFile', 'grappleGlobeAreaProfileModeFileGrappleModeAreaFeedsAreaNavigationAreaComponentU' );	
			</script>
		
			<table>
				<tbody>
					<tr>
						<td class="name" id = "grappleSignInArea">
							<table id = "grappleSignInArea">
								<tbody id = "grappleSignInArea">
									<tr id = "grappleSignInTitleSegment" >
										<td class = "NormalModernFontClassification" id = "grappleSignInTitleArea"> 
											SIGN.IN
										</td> 
									</tr>
									
									<form method = "post" >
										<tr id = "grappleSignInEmailRetrievalSegment" >
											<td id = "grappleSignInEmailRetrievalArea"> 
												<label class ="NormalModernFontClassification" for="name">email?</label> 
											</td> 
											<td id = "grappleSignInEmailRetrievalAreaComponent"> 
												<input class = "regularInput" type="text" id="grappleSignInEmailRetrievalAreaComponentInput" name = "grappleSignInEmailRetrievalAreaComponentName" /> 
											</td> 
										</tr>
										
										<tr id = "grappleSignInPasswordRetrievalSegment" >
											<td id = "grappleSignInPasswordRetrievalArea"> 
												<label class ="NormalModernFontClassification" for="name">password?</label> 
											</td> 
											<td id = "grappleSignInPasswordRetrievalAreaComponent"> 
												<input class = "regularInput" type="password" id="grappleSignInPasswordRetrievalAreaComponentInput" name = "grappleSignInPasswordRetrievalAreaComponentName" /> 
											</td> 
										</tr>
										
										<tr id = "grappleSignInConfirmationButtonSegment" >
											<td class="submit" id = "grappleSignInConfirmationButtonArea"> 
												<input class = "regularInput" type="submit" value="enter" id="grappleSignInConfirmationButtonAreaButton" name = "grappleSignInConfirmationButtonAreaButtonName" />
											</td>
										</tr>
									</form>
								</tbody>
							</table>
						</td>
						
						<td class="name" id = "grappleSignUpArea">
							<table id = "grappleSignUpArea">
								<tbody id = "grappleSignUpArea">
									<tr id = "grappleSignUpTitleSegment" >
										<td class = "NormalModernFontClassification" id = "grappleSignUpTitleArea"> 
											SIGN.UP 
										</td> 
									</tr>
									
									<form action = "data/modules/php/_module.new.entry.php" method = "post" enctype="multipart/form-data" >
										<tr id = "grappleSignUpUserNameRetrievalSegment" >
											<td id = "grappleSignUpUserNameRetrievalArea">
												<label class ="NormalModernFontClassification" name = "grappleSignUpUserNameRetrievalAreaName" id = "grappleSignUpUserNameRetrievalAreaLabel" >UserName? </label> 
											</td> 
											
											<td id="grappleSignUpUserNameRetrievalAreaComponent"> 
												<input class = "regularInput" type="text" name="grappleSignUpUserNameRetrievalAreaComponentName" id="grappleSignUpUserNameRetrievalAreaComponent" /> 
											</td> 
										</tr>
										
										<tr id = "grappleSignUpUserEmailRetrievalSegment" >
											<td id = "grappleSignUpUserEmailRetrievalArea">
												<label class ="NormalModernFontClassification" name = "grappleSignUpUserEmailRetrievalAreaName" id = "grappleSignUpUserEmailRetrievalAreaLabel" >email? </label> 
											</td> 
											
											<td id="grappleSignUpUserEmailRetrievalAreaComponent"> 
												<input class = "regularInput" type="text" name="grappleSignUpUserEmailRetrievalAreaComponentName" id="grappleSignUpUserEmailRetrievalAreaComponent" /> 
											</td> 
										</tr>
										
										<tr id = "grappleSignUpUserPasswordRetrievalSegment" >
											<td id = "grappleSignUpUserPasswordRetrievalArea">
												<label class ="NormalModernFontClassification" name = "grappleSignUpUserPasswordRetrievalAreaName" id = "grappleSignUpUserPasswordRetrievalAreaLabel">password?</label> 
											</td> 
											
											<td id="grappleSignUpUserPasswordRetrievalAreaComponent"> 
												<input class = "regularInput" type="password" name="grappleSignUpUserPasswordRetrievalAreaComponentName" id="grappleSignUpUserPasswordRetrievalAreaComponentInput" /> 
											</td> 
										</tr>
										
										<tr>
											<td id = "grappleSignUpProfileImageStreamRetrievalArea">
												<label class ="NormalModernFontClassification" name = "grappleSignUpProfileImageStreamRetrievalAreaName" id = "grappleSignUpProfileImageStreamRetrievalAreaLabel" >my.appearance? (512kb)</label> 
											</td> 
											
											<td id="grappleSignUpProfileImageStreamRetrievalAreaComponent" class = "upload"> 
												<input class = "fileUploaderInput" type="file" name="grappleSignUpProfileImageStreamRetrievalAreaComponentName" id="grappleSignUpProfileImageStreamRetrievalAreaComponent" /> 
											</td> 
										</tr>
										
										<tr id = "grappleSignUpConfirmationButtonSegment" >
											<td class="submit" id = "grappleSignUpConfirmationButtonArea"> 
												<input class = "regularInput" type="submit" value="enter" name = "grappleSignUpConfirmationButtonAreaName" id = "grappleSignUpConfirmationButtonAreaButton" >
											</td>
										</tr>
									</form>
									
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>	
		
		<div id = "grappleContentComponentEntity1">
			<div id = "grappleGlobeAreaLoungeModeArea" >
				<div id = "grappleGlobeAreaLoungeModeAreaFeedsArea" >
					<div id = "grappleGlobeAreaLoungeModeAreaFeedsAreaTitleArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/header/grapple.super.tab.item.0.png" id = "grappleGlobeAreaLoungeModeAreaFeedsAreaTitleAreaComponentZero" alt="grappleSuperTabArea0" >
									</td>
									
									<td> 
										<label class ="NormalModernFontClassification" id = "grappleGlobeAreaLoungeModeAreaFeedsAreaTitleAreaComponentOne" for="name" onclick ="">cocktail</label> 
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
					
					<div id = "grappleGlobeAreaLoungeModeAreaFeedsAreaNavigationArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/core/grapple.navigation.item.0.png" id = "grappleGlobeAreaLoungeModeAreaFeedsAreaNavigationAreaComponentZero" alt="graple.navigation" >
									</td>
									
									<td> 
										<img src="data/images/core/grapple.navigation.item.1.png" id = "grappleGlobeAreaLoungeModeAreaFeedsAreaNavigationAreaComponentOne" alt="graple.navigation" >
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
					
					<div id = "grappleGlobeAreaLoungeModeAreaFeedsAreaContentArea">
						<table>
							<tbody>
								<?php
									$imageArray = array ( );
									$descriptionArray = array ( );
									$contoller0TitleArray = array ( );
									$contoller1TitleArray = array ( );
									
									$rowDelimiterBegin = "<tr>";
									$rowDelimiterEnd = "</tr>";
									$itemRowIndicatorBegin = "<td>";;
									$itemRowIndicatorEnd = "</td>";	
									
									foreach ( $_SESSION [ 'COCKTAIL_GRAPPLES' ] as $grappleItem )
									{
										$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
										array_push ( $imageArray, $segmentedDatabaseRecordCollection [ 0 ] );
										array_push ( $descriptionArray, $segmentedDatabaseRecordCollection [ 2 ] );
										array_push ( $contoller0TitleArray, $segmentedDatabaseRecordCollection [ 3 ] );
										array_push ( $contoller1TitleArray, $segmentedDatabaseRecordCollection [ 4 ] );
									}
									
									
									$numItems = count ( $imageArray );
									$grappleCollectionCardinalityAccumilation = array ( count ( $_SESSION [ 'TEXT_GRAPPLES' ] ), count ( $_SESSION [ 'URL_GRAPPLES' ] ), count ( $_SESSION [ 'IMAGE_GRAPPLES' ] ), count ( $_SESSION [ 'AUDIO_GRAPPLES' ] ), count ( $_SESSION [ 'VIDEO_GRAPPLES' ] ) );
									$grappleCollectionTypeArray = array ( "Text", "Url", "Image", "Audio", "Video" );							
									//prebake javascript functions to enable/disable grapple collection types
									//this is needed because we can't javascript is client based
									//and php would have already been server prepared, so no javacript
									//function would be ensuable in my php grapple item renderer therein.
									for ( $i = 0; $i < $numItems; $i ++ )
									{
										echo "<script type = 'text/javascript' language = 'javascript'> 
												
												enableCocktailGrappleCollectionType".$i." = function ( )
												{
													for(var t = 0; t < ".$grappleCollectionCardinalityAccumilation[$i]."; t ++)
													{
														document.getElementById ('grappleCocktailCollection".$grappleCollectionTypeArray[$i]."Type'+t).style.display = 'block';
													}
													window.scroll ( 0, 80 );
												};
												
												disableCocktailGrappleCollectionType".$i." = function ( )
												{	
													for(var t = 0; t < ".$grappleCollectionCardinalityAccumilation[$i]."; t ++)
														document.getElementById ('grappleCocktailCollection".$grappleCollectionTypeArray[$i]."Type'+t).style.display = 'none';
												};
											  </script>";
									}
									
									//generate ui rendering of grapple items
									for ( $i = 0; $i < $numItems; $i ++ )
									{	
										if ( $i % 5 != 0 )
										{
											$rowDelimiterBegin = "";
											$rowDelimiterEnd = "";
										}
										else
										{
											$rowDelimiterBegin = "<tr>";
											$rowDelimiterEnd = "</tr>";
										}
										echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div id = 'grappleCocktailCollectionControllerType".$i."' class = 'grappleItem' title = '".$descriptionArray[$i]."'><img id = 'grappleGlobeAreaProfileModeGrppleAppsGrappleModeAreaFeedsAreaContentAreaItemArea' src =".$imageArray[$i]."><div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleCocktailCoreItemControllerAreaItem0Id' title = '".$contoller1TitleArray[$i]."' src ='data/images/core/grapple.cocktail.controller.0.png' onclick = 'disableCocktailGrappleCollectionType".$i."();' /> </span> <span> <img id = 'grappleCocktailCoreItemControllerAreaItem1Id' title = '".$contoller0TitleArray[$i]."' src ='data/images/core/grapple.cocktail.controller.1.png' onclick = 'enableCocktailGrappleCollectionType".$i."();' /> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
									}	
								
									$grappleItemContentUserNames = array();
									$grappleItemContentStreams = array();
									$grappleItemContentSources = array();
									$grappleItemContentTitles = array();
									$grappleItemContentDescriptions = array();
									$grappleItemContentDateCreations = array();
									
									$rowDelimiterBegin = "<tr>";
									$rowDelimiterEnd = "</tr>";
									$itemRowIndicatorBegin = "<td>";;
									$itemRowIndicatorEnd = "</td>";
									$userLoginEmail = $_POST [ 'grappleSignInEmailRetrievalAreaComponentName' ];
									
									//generate text grapple data based on email id
									foreach ( $_SESSION [ 'IMAGE_GRAPPLES' ] as $grappleItem ) 
									{
										$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
										
										if ( $segmentedDatabaseRecordCollection[8] != "private" )
										{
											array_push($grappleItemContentUserNames, $segmentedDatabaseRecordCollection[1]);
											array_push($grappleItemContentSources, $segmentedDatabaseRecordCollection[2]);
											array_push($grappleItemContentStreams, $segmentedDatabaseRecordCollection[3]);
											array_push($grappleItemContentTitles, $segmentedDatabaseRecordCollection[4]);
											array_push($grappleItemContentDescriptions, $segmentedDatabaseRecordCollection[5]);
											array_push($grappleItemContentDateCreations, $segmentedDatabaseRecordCollection[6]);
										}
									}
									
									$numItems = count($grappleItemContentSources);
									
									//prebake javascript functions to popupCocktail source window
									//this is needed because we can't javascript is client based
									//and php would have already been server prepared, so no javacript
									//function would be ensuable in my php grapple item renderer therein.
									for ( $i = 0; $i < $numItems; $i ++)
									{
										echo "<script type = 'text/javascript' language = 'javascript'> 
													
												popupCocktailSiteImageFunction".$i." = function ( )
												{
													window.open('$grappleItemContentSources[$i]');
												};
												
											  </script>";
									}
									
										//prebaked content maximization vars
											//prebake javascript functions as popupCocktail maximized content window enablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupCocktailMaximizedImageWindowUiEnableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleCocktailContentMaximizationImageArea".$i."', 'block' );
															window.scrollTo ( 0, 0 );
														};
														
													  </script>";
											}
											//prebake javascript functions as popupCocktail maximized content window disablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupCocktailMaximizedImageWindowUiDisableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleCocktailContentMaximizationImageArea".$i."', 'none' );
														};
														
													  </script>";
											}
									//generate ui rendering of grapple items
									for ( $i = 0; $i < count($grappleItemContentStreams); $i ++ )
									{	
										if ( $i % 5 != 0 )
										{
											$rowDelimiterBegin = "";
											$rowDelimiterEnd = "";
										}
										else
										{
											$rowDelimiterBegin = "<tr>";
											$rowDelimiterEnd = "</tr>";
										}
										
										//render main preview content
										echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div style = 'display:none;' id = 'grappleCocktailCollectionImageType".$i."' title = '".$grappleItemContentDescriptions[$i]."' class = 'grappleItem' onclick = 'popupCocktailMaximizedImageWindowUiEnableFunction".$i."();' ><img id = 'grappleGlobeAreaProfileModeImageGrappleModeAreaFeedsAreaContentAreaItemArea' src =".$grappleItemContentStreams[$i]."><div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleItemControllerAreaItem0Id' title = 'give grape' src ='data/images/core/grapple.item.controller.item.0.png' onclick = 'pendingMessage ();'/> </span> <span> <img id = 'grappleItemControllerAreaItem1Id' src ='data/images/core/grapple.item.controller.item.1.png' title = 'go back to source' onclick = 'popupCocktailSiteImageFunction".$i."();' /> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
										
										//render maximized default content (hidden by default)
										echo "<div id = 'grappleCocktailContentMaximizationImageArea".$i."' style = 'display:none;' >	
												<div id = 'grappleCocktailContentMaximizationImageWindowArea' >
													<h1>".$grappleItemContentTitles[$i]."</h1>
													</br>
													</br>
													<img id = 'grappleCocktailContentMaximizationImageWindowAreaImageAreaId' src =".$grappleItemContentStreams[$i].">
													<h1>".$grappleItemContentDateCreations[$i]."</h1>
													</br>
													<h2>@".$grappleItemContentUserNames[$i]."</h2>
												</div>
												
												<div id = 'grappleCocktailContentMaximizationImageWindowControllerArea' >
													 <span>
														<span> <img title = 'send in message' id = 'grappleCocktailContentMaximizationImageWindowAreaControllerAreaItem0Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.0.png' onclick = 'controllerTabAreaItem0Describer();' /> </span>
														<span> <img title = 'go back to source' id = 'grappleCocktailContentMaximizationImageWindowAreaControllerAreaItem1Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.1.png' onclick = 'popupCocktailSiteImageFunction".$i."();' /> </span>
														<span> <img title = 'exit' id = 'grappleCocktailContentMaximizationImageWindowAreaControllerAreaItem2Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.2.png' onclick = 'popupCocktailMaximizedImageWindowUiDisableFunction".$i."();' /> </span> 
													 </span>;
												</div>
											</div>";
									}
									
									$grappleItemContentUserNames = array();
									$grappleItemContentStreams = array();
									$grappleItemContentSources = array();
									$grappleItemContentTitles = array();
									$grappleItemContentDescriptions = array();
									$grappleItemContentDateCreations = array();
									
									$rowDelimiterBegin = "<tr>";
									$rowDelimiterEnd = "</tr>";
									$itemRowIndicatorBegin = "<td>";;
									$itemRowIndicatorEnd = "</td>";
									$userLoginEmail = $_POST [ 'grappleSignInEmailRetrievalAreaComponentName' ];
									
									//generate text grapple data based on email id
									foreach ( $_SESSION [ 'TEXT_GRAPPLES' ] as $grappleItem ) 
									{
										$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
										
										if ( $segmentedDatabaseRecordCollection[8] != "private" )
										{
											array_push($grappleItemContentUserNames, $segmentedDatabaseRecordCollection[1]);
											array_push($grappleItemContentSources, $segmentedDatabaseRecordCollection[2]);
											array_push($grappleItemContentStreams, $segmentedDatabaseRecordCollection[3]);
											array_push($grappleItemContentTitles, $segmentedDatabaseRecordCollection[4]);
											array_push($grappleItemContentDescriptions, $segmentedDatabaseRecordCollection[5]);
											array_push($grappleItemContentDateCreations, $segmentedDatabaseRecordCollection[6]);
										}
									}
									
									$numItems = count($grappleItemContentSources);
									//prebaked functions
										//prebake javascript functions to popupCocktail source window
										//this is needed because we can't javascript is client based
										//and php would have already been server prepared, so no javacript
										//function would be ensuable in my php grapple item renderer therein.
										for ( $i = 0; $i < $numItems; $i ++)
										{
											echo "<script type = 'text/javascript' language = 'javascript'> 
														
													popupCocktailSiteTextFunction".$i." = function ( )
													{
														window.open('$grappleItemContentSources[$i]');
													};
													
												  </script>";
										}
										//prebaked content maximization vars
											//prebake javascript functions as popupCocktail maximized content window enablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupCocktailMaximizedTextWindowUiEnableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleCocktailContentMaximizationTextArea".$i."', 'block' );
															window.scrollTo ( 0, 0 );
														};
														
													  </script>";
											}
											//prebake javascript functions as popupCocktail maximized content window disablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupCocktailMaximizedTextWindowUiDisableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleCocktailContentMaximizationTextArea".$i."', 'none' );
														};
														
													  </script>";
											}
											  
									//generate ui rendering of grapple items
									for ( $i = 0; $i < count($grappleItemContentStreams); $i ++ )
									{	
										if ( $i % 5 != 0 )
										{
											$rowDelimiterBegin = "";
											$rowDelimiterEnd = "";
										}
										else
										{
											$rowDelimiterBegin = "<tr>";
											$rowDelimiterEnd = "</tr>";
										}
											//compute shortened string
											if ( strlen ( $grappleItemContentStreams[$i] ) > 40 )
											{
												$maxContentStreamPreviewLength = 40;
												$contentStreamPreview = substr ( $grappleItemContentStreams[$i], 0, $maxContentStreamPreviewLength )."...";
											}
											else
												$contentStreamPreview = $grappleItemContentStreams[$i]."...";
												
										//render default content
										echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div style = 'display:none;' id = 'grappleCocktailCollectionTextType".$i."' title = '".$grappleItemContentDescriptions[$i]."' class = 'grappleItem' onclick = 'popupCocktailMaximizedTextWindowUiEnableFunction".$i."();'><p id = 'grappleGlobeAreaProfileModeTextGrappleModeAreaFeedsAreaContentAreaItemArea' >".$contentStreamPreview."</p><div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleItemControllerAreaItem0Id' title = 'give grape' src ='data/images/core/grapple.item.controller.item.0.png' onclick = 'pendingMessage ();'/> </span> <span> <img id = 'grappleItemControllerAreaItem1Id' src ='data/images/core/grapple.item.controller.item.1.png' title = 'go back to source' onclick = 'popupCocktailSiteTextFunction".$i."();' /> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
												
												
										//render maximized content (hidden by default)
										echo "<div id = 'grappleCocktailContentMaximizationTextArea".$i."' style = 'display:none;' >	
												<div id = 'grappleCocktailContentMaximizationTextWindowArea' >
													<h1>".$grappleItemContentTitles[$i]."</h1>
													</br>
													</br>
													<p>".$grappleItemContentStreams[$i]."</p>
													<h1>".$grappleItemContentDateCreations[$i]."</h1>
													</br>
													<h2>@".$grappleItemContentUserNames[$i]."</h2>
												</div>
												
												<div id = 'grappleCocktailContentMaximizationTextWindowControllerArea' >
													 <span>
														<span> <img title = 'send in message' id = 'grappleCocktailContentMaximizationTextWindowAreaControllerAreaItem0Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.0.png' onclick = 'controllerTabAreaItem0Describer();' /> </span>
														<span> <img title = 'go back to source' id = 'grappleCocktailContentMaximizationTextWindowAreaControllerAreaItem1Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.1.png' onclick = 'popupCocktailSiteTextFunction".$i."();' /> </span>
														<span> <img title = 'exit' id = 'grappleCocktailContentMaximizationTextWindowAreaControllerAreaItem2Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.2.png' onclick = 'popupCocktailMaximizedTextWindowUiDisableFunction".$i."();' /> </span> 
													 </span>;
												</div>
											</div>";
									}
									echo "</div>";
									
									$grappleItemContentUserNames = array();
									$grappleItemContentStreams = array();
									$grappleItemContentSources = array();
									$grappleItemContentTitles = array();
									$grappleItemContentDescriptions = array();
									$grappleItemContentDateCreations = array();
									
									$rowDelimiterBegin = "<tr>";
									$rowDelimiterEnd = "</tr>";
									$itemRowIndicatorBegin = "<td>";;
									$itemRowIndicatorEnd = "</td>";
									$userLoginEmail = $_POST [ 'grappleSignInEmailRetrievalAreaComponentName' ];
									
									//generate text grapple data based on email id
									foreach ( $_SESSION [ 'AUDIO_GRAPPLES' ] as $grappleItem ) 
									{
										$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
										
										if ( $segmentedDatabaseRecordCollection[8] != "private" )
										{
											array_push($grappleItemContentUserNames, $segmentedDatabaseRecordCollection[1]);
											array_push($grappleItemContentSources, $segmentedDatabaseRecordCollection[2]);
											array_push($grappleItemContentStreams, $segmentedDatabaseRecordCollection[3]);
											array_push($grappleItemContentTitles, $segmentedDatabaseRecordCollection[4]);
											array_push($grappleItemContentDescriptions, $segmentedDatabaseRecordCollection[5]);
											array_push($grappleItemContentDateCreations, $segmentedDatabaseRecordCollection[6]);
										}
									}

									
									$numItems = count($grappleItemContentSources);
									//prebake javascript functions to popupCocktail source window
									//this is needed because we can't javascript is client based
									//and php would have already been server prepared, so no javacript
									//function would be ensuable in my php grapple item renderer therein.
									for ( $i = 0; $i < $numItems; $i ++)
									{
										echo "<script type = 'text/javascript' language = 'javascript'> 
													
												popupCocktailSiteAudioFunction".$i." = function ( )
												{
													window.open('$grappleItemContentSources[$i]');
												};
												
											  </script>";
									}
									
										//prebaked content maximization vars
											//prebake javascript functions as popupCocktail maximized content window enablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupCocktailMaximizedAudioWindowUiEnableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleCocktailContentMaximizationAudioArea".$i."', 'block' );
															window.scrollTo ( 0, 0 );
														};
														
													  </script>";
											}
											//prebake javascript functions as popupCocktail maximized content window disablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupCocktailMaximizedAudioWindowUiDisableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleCocktailContentMaximizationAudioArea".$i."', 'none' );
														};
														
													  </script>";
											}
									
									//generate ui rendering of grapple items
									for ( $i = 0; $i < count($grappleItemContentStreams); $i ++ )
									{	
										if ( $i % 5 != 0 )
										{
											$rowDelimiterBegin = "";
											$rowDelimiterEnd = "";
										}
										else
										{
											$rowDelimiterBegin = "<tr>";
											$rowDelimiterEnd = "</tr>";
										}
										
										//render main preview content
										echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div style = 'display:none;' id = 'grappleCocktailCollectionAudioType".$i."' title = '".$grappleItemContentDescriptions[$i]."' class = 'grappleItem' onclick = 'popupCocktailMaximizedAudioWindowUiEnableFunction".$i."();'> <audio id = 'grappleGlobeAreaProfileModeAudioGrappleModeAreaFeedsAreaContentAreaItemArea' controls='controls'> <source src =".$grappleItemContentStreams[$i]."> </audio> <div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleItemControllerAreaItem0Id' title = 'give grape' src ='data/images/core/grapple.item.controller.item.0.png' onclick = 'pendingMessage ();'/> </span> <span> <img id = 'grappleItemControllerAreaItem1Id' src ='data/images/core/grapple.item.controller.item.1.png' title = 'go back to source' onclick = 'popupCocktailSiteAudioFunction".$i."();' /> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
										
										
										//render maximized default content (hidden by default)
										echo "<div id = 'grappleCocktailContentMaximizationAudioArea".$i."' style = 'display:none;' >	
												<div id = 'grappleCocktailContentMaximizationAudioWindowArea' >
													<h1>".$grappleItemContentTitles[$i]."</h1>
													</br>
													</br>
													<audio id = 'grappleCocktailContentMaximizationAudioWindowAreaAudioAreaId' controls='controls'> <source src =".$grappleItemContentStreams[$i]."> </audio>
													<h1>".$grappleItemContentDateCreations[$i]."</h1>
													</br>
													<h2>@".$grappleItemContentUserNames[$i]."</h2>
												</div>
												
												<div id = 'grappleCocktailContentMaximizationAudioWindowControllerArea' >
													 <span>
														<span> <img title = 'send in message' id = 'grappleCocktailContentMaximizationAudioWindowAreaControllerAreaItem0Area' src = 'data/images/core/grapple.item.maximized.elements/audio.window/controller.item.0.png' onclick = '' /> </span>
														<span> <img title = 'play' id = 'grappleCocktailContentMaximizationAudioWindowAreaControllerAreaItem1Area' src = 'data/images/core/grapple.item.maximized.elements/audio.window/controller.item.1.png' onclick = '' /> </span>
														<span> <img title = 'pause' id = 'grappleCocktailContentMaximizationAudioWindowAreaControllerAreaItem2Area' src = 'data/images/core/grapple.item.maximized.elements/audio.window/controller.item.2.png' onclick = '' /> </span>
														<span> <img title = 'stop' id = 'grappleCocktailContentMaximizationAudioWindowAreaControllerAreaItem3Area' src = 'data/images/core/grapple.item.maximized.elements/audio.window/controller.item.3.png' onclick = '' /> </span>
														<span> <img title = 'go back to source' id = 'grappleCocktailContentMaximizationAudioWindowAreaControllerAreaItem4Area' src = 'data/images/core/grapple.item.maximized.elements/audio.window/controller.item.4.png' onclick = 'popupCocktailSiteAudioFunction".$i."();' /> </span>
														<span> <img title = 'exit' id = 'grappleCocktailContentMaximizationAudioWindowAreaControllerAreaItem5Area' src = 'data/images/core/grapple.item.maximized.elements/audio.window/controller.item.5.png' onclick = 'popupCocktailMaximizedAudioWindowUiDisableFunction".$i."();' /> </span> 
													 </span>;
												</div>
											</div>";
									}
									
									$grappleItemContentUserNames = array();
									$grappleItemContentStreams = array();
									$grappleItemContentSources = array();
									$grappleItemContentTitles = array();
									$grappleItemContentDescriptions = array();
									$grappleItemContentDateCreations = array();
									
									$rowDelimiterBegin = "<tr>";
									$rowDelimiterEnd = "</tr>";
									$itemRowIndicatorBegin = "<td>";;
									$itemRowIndicatorEnd = "</td>";
									$userLoginEmail = $_POST [ 'grappleSignInEmailRetrievalAreaComponentName' ];
									
									//generate text grapple data based on email id
									foreach ( $_SESSION [ 'URL_GRAPPLES' ] as $grappleItem ) 
									{
										$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
										
										if ( $segmentedDatabaseRecordCollection[8] != "private" )
										{
											array_push($grappleItemContentUserNames, $segmentedDatabaseRecordCollection[1]);
											array_push($grappleItemContentSources, $segmentedDatabaseRecordCollection[2]);
											array_push($grappleItemContentStreams, $segmentedDatabaseRecordCollection[3]);
											array_push($grappleItemContentTitles, $segmentedDatabaseRecordCollection[4]);
											array_push($grappleItemContentDescriptions, $segmentedDatabaseRecordCollection[5]);
											array_push($grappleItemContentDateCreations, $segmentedDatabaseRecordCollection[6]);
										}
									}

									
									$numItems = count($grappleItemContentSources);
									//prebake javascript functions to popupCocktail source window
									//this is needed because we can't javascript is client based
									//and php would have already been server prepared, so no javacript
									//function would be ensuable in my php grapple item renderer therein.
									for ( $i = 0; $i < $numItems; $i ++)
									{
										echo "<script type = 'text/javascript' language = 'javascript'> 
													
												popupCocktailSiteLinkFunction".$i." = function ( )
												{
													window.open('$grappleItemContentSources[$i]');
												};
												
											  </script>";
									}
										//prebaked content maximization vars
											//prebake javascript functions as popupCocktail maximized content window enablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupCocktailMaximizedLinkWindowUiEnableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleCocktailContentMaximizationLinkArea".$i."', 'block' );
															window.scrollTo ( 0, 0 );
														};
														
													  </script>";
											}
											//prebake javascript functions as popupCocktail maximized content window disablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupCocktailMaximizedLinkWindowUiDisableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleCocktailContentMaximizationLinkArea".$i."', 'none' );
														};
														
													  </script>";
											}
									//generate ui rendering of grapple items
									for ( $i = 0; $i < count($grappleItemContentStreams); $i ++ )
									{	
										if ( $i % 5 != 0 )
										{
											$rowDelimiterBegin = "";
											$rowDelimiterEnd = "";
										}
										else
										{
											$rowDelimiterBegin = "<tr>";
											$rowDelimiterEnd = "</tr>";
										}
										
											//compute shortened string
											if ( strlen ( $grappleItemContentStreams[$i] ) > 40 )
											{
												$maxContentStreamPreviewLength = 40;
												$contentStreamPreview = substr ( $grappleItemContentStreams[$i], 0, $maxContentStreamPreviewLength )."...";
											}
											else
												$contentStreamPreview = $grappleItemContentStreams[$i]."...";
												
										//render default content
										echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div style = 'display:none;' id = 'grappleCocktailCollectionUrlType".$i."' title = '".$grappleItemContentDescriptions[$i]."' class = 'grappleItem' onclick = 'popupCocktailMaximizedLinkWindowUiEnableFunction".$i."();'><p id = 'grappleGlobeAreaProfileModeTextGrappleModeAreaFeedsAreaContentAreaItemArea'>".$contentStreamPreview."</p><div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleItemControllerAreaItem0Id' title = 'give grape' src ='data/images/core/grapple.item.controller.item.0.png' onclick = 'pendingMessage ();'/> </span> <span> <img id = 'grappleItemControllerAreaItem1Id' src ='data/images/core/grapple.item.controller.item.1.png' title = 'go back to source' onclick = 'popupCocktailSiteLinkFunction".$i."();' /> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
									
										//render maximized content (hidden by default)
										echo "<div id = 'grappleCocktailContentMaximizationLinkArea".$i."' style = 'display:none;' >	
												<div id = 'grappleCocktailContentMaximizationLinkWindowArea' >
													<h1>".$grappleItemContentTitles[$i]."</h1>
													</br>
													</br>
													<p>".$grappleItemContentStreams[$i]."</p>
													<h1>".$grappleItemContentDateCreations[$i]."</h1>
													</br>
													<h2>@".$grappleItemContentUserNames[$i]."</h2>
												</div>
												
												<div id = 'grappleCocktailContentMaximizationLinkWindowControllerArea' >
													 <span>
														<span> <img title = 'send in message' id = 'grappleCocktailContentMaximizationLinkWindowAreaControllerAreaItem0Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.0.png' onclick = 'controllerTabAreaItem0Describer();' /> </span>
														<span> <img title = 'go back to source' id = 'grappleCocktailContentMaximizationLinkWindowAreaControllerAreaItem1Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.1.png' onclick = 'popupCocktailSiteLinkFunction".$i."();' /> </span>
														<span> <img title = 'exit' id = 'grappleCocktailContentMaximizationLinkWindowAreaControllerAreaItem2Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.2.png' onclick = 'popupCocktailMaximizedLinkWindowUiDisableFunction".$i."();' /> </span> 
													 </span>;
												</div>
											</div>";
									}
									
									$grappleItemContentUserNames = array();
									$grappleItemContentStreams = array();
									$grappleItemContentSources = array();
									$grappleItemContentTitles = array();
									$grappleItemContentDescriptions = array();
									$grappleItemContentDateCreations = array();
									
									$rowDelimiterBegin = "<tr>";
									$rowDelimiterEnd = "</tr>";
									$itemRowIndicatorBegin = "<td>";;
									$itemRowIndicatorEnd = "</td>";
									$userLoginEmail = $_POST [ 'grappleSignInEmailRetrievalAreaComponentName' ];
									
									//generate text grapple data based on email id
									foreach ( $_SESSION [ 'VIDEO_GRAPPLES' ] as $grappleItem ) 
									{
										$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
										
										if ( $segmentedDatabaseRecordCollection[8] != "private" )
										{
											array_push($grappleItemContentUserNames, $segmentedDatabaseRecordCollection[1]);
											array_push($grappleItemContentSources, $segmentedDatabaseRecordCollection[2]);
											array_push($grappleItemContentStreams, $segmentedDatabaseRecordCollection[3]);
											array_push($grappleItemContentTitles, $segmentedDatabaseRecordCollection[4]);
											array_push($grappleItemContentDescriptions, $segmentedDatabaseRecordCollection[5]);
											array_push($grappleItemContentDateCreations, $segmentedDatabaseRecordCollection[6]);
										}
									}

									
									$numItems = count($grappleItemContentSources);
									//prebake javascript functions to popupCocktail source window
									//this is needed because we can't javascript is client based
									//and php would have already been server prepared, so no javacript
									//function would be ensuable in my php grapple item renderer therein.
									for ( $i = 0; $i < $numItems; $i ++)
									{
										echo "<script type = 'text/javascript' language = 'javascript'> 
													
												popupCocktailSiteVideoFunction".$i." = function ( )
												{
													window.open('$grappleItemContentSources[$i]');
												};
												
											  </script>";
									}
									
											//prebake javascript functions as popupCocktail maximized content window enablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupCocktailMaximizedVideoWindowUiEnableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleCocktailContentMaximizationVideoArea".$i."', 'block' );
															window.scrollTo ( 0, 0 );
														};
														
													  </script>";
											}
											//prebake javascript functions as popupCocktail maximized content window disablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupCocktailMaximizedVideoWindowUiDisableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleCocktailContentMaximizationVideoArea".$i."', 'none' );
														};
														
													  </script>";
											}
									//generate ui rendering of grapple items
									for ( $i = 0; $i < count($grappleItemContentStreams); $i ++ )
									{	
										if ( $i % 5 != 0 )
										{
											$rowDelimiterBegin = "";
											$rowDelimiterEnd = "";
										}
										else
										{
											$rowDelimiterBegin = "<tr>";
											$rowDelimiterEnd = "</tr>";
										}
										
										//render main preview content
										echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div style = 'display:none;' id = 'grappleCocktailCollectionVideoType".$i."' title = '".$grappleItemContentDescriptions[$i]."' class = 'grappleItem' onclick = 'popupCocktailMaximizedVideoWindowUiEnableFunction".$i."();'> <iframe id = 'grappleGlobeAreaProfileModeVideoGrappleModeAreaFeedsAreaContentAreaItemArea' type='text/html' src='".$grappleItemContentStreams[$i]."' allowfullscreen frameborder='0'></iframe> <div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleItemControllerAreaItem0Id' title = 'give grape' src ='data/images/core/grapple.item.controller.item.0.png' onclick = 'pendingMessage ();'/> </span> <span> <img id = 'grappleItemControllerAreaItem1Id' src ='data/images/core/grapple.item.controller.item.1.png' title = 'go back to source' onclick = 'popupCocktailSiteVideoFunction".$i."();' /> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
									
										//render maximized default content (hidden by default)
										echo "<div id = 'grappleCocktailContentMaximizationVideoArea".$i."' style = 'display:none;' >	
												<div id = 'grappleContentMaximizationVideoWindowArea' >
													<h1>".$grappleItemContentTitles[$i]."</h1>
													</br>
													</br>
													<iframe id = 'grappleCocktailContentMaximizationVideoWindowAreaVideoAreaId' type='text/html' src='".$grappleItemContentStreams[$i]."' allowfullscreen frameborder='0'></iframe>
													<h1>".$grappleItemContentDateCreations[$i]."</h1>
													</br>
													<h2>@".$grappleItemContentUserNames[$i]."</h2>
												</div>
												
												<div id = 'grappleContentMaximizationVideoWindowControllerArea' >
													 <span>
														<span> <img title = 'send in message' id = 'grappleContentMaximizationVideoWindowAreaControllerAreaItem0Area' src = 'data/images/core/grapple.item.maximized.elements/video.window/controller.item.0.png' onclick = '' /> </span>
														<span> <img title = 'snap shot!' id = 'grappleContentMaximizationVideoWindowAreaControllerAreaItem1Area' src = 'data/images/core/grapple.item.maximized.elements/video.window/controller.item.1.png' onclick = '' /> </span>
														<span> <img title = 'go back to source' id = 'grappleContentMaximizationVideoWindowAreaControllerAreaItem2Area' src = 'data/images/core/grapple.item.maximized.elements/video.window/controller.item.2.png' onclick = 'popupCocktailSiteVideoFunction".$i."();' /> </span>
														<span> <img title = 'exit' id = 'grappleContentMaximizationVideoWindowAreaControllerAreaItem3Area' src = 'data/images/core/grapple.item.maximized.elements/video.window/controller.item.3.png' onclick = 'popupCocktailMaximizedVideoWindowUiDisableFunction".$i."();' /> </span> 
													 </span>;
												</div>
											</div>";
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>	
		
		<div id = "grappleContentComponentEntity2">
			<div id = "grappleGlobeAreaHomeModeArea" >
				<div id = "grappleGlobeAreaHomeModeAreaFeedsArea" >
					<div id = "grappleGlobeAreaHomeModeAreaFeedsAreaTitleArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/header/grapple.super.tab.item.1.png" id = "grappleGlobeAreaHomeModeAreaFeedsAreaTitleAreaComponentZero" alt="grappleSuperTabArea1" >
									</td>
									
									<td> 
										<label class ="NormalModernFontClassification" id = "grappleGlobeAreaHomeModeAreaFeedsAreaTitleAreaComponentOne" for="name" onclick ="">home</label> 
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
					
					<div id = "grappleGlobeAreaHomeModeAreaFeedsAreaNavigationArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/core/grapple.navigation.item.0.png" id = "grappleGlobeAreaHomeModeAreaFeedsAreaNavigationAreaComponentZero" alt="graple.navigation" >
									</td>
									
									<td> 
										<img src="data/images/core/grapple.navigation.item.1.png" id = "grappleGlobeAreaHomeModeAreaFeedsAreaNavigationAreaComponentOne" alt="graple.navigation" >
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<div id = "grappleContentComponentEntity3">
			<div id = "grappleGlobeAreaProfileModeArea" >
				<div id = "grappleGlobeAreaProfileModeAreaFeedsArea" >
					<div id = "grappleGlobeAreaProfileModeAreaFeedsAreaTitleArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/header/grapple.super.tab.item.2.png" id = "grappleGlobeAreaProfileModeAreaFeedsAreaTitleAreaComponentZero" alt="grappleSuperTabArea1" >
									</td>
									
									<td> 
										<label class ="NormalModernFontClassification" id = "grappleGlobeAreaProfileModeAreaFeedsAreaTitleAreaComponentOne" for="name" onclick ="">me</label> 
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
					
					<div id = "grappleGlobeAreaProfileModeAreaFeedsAreaNavigationArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/core/grapple.navigation.item.0.png" id = "grappleGlobeAreaProfileModeAreaFeedsAreaNavigationAreaComponentZero" alt="graple.navigation" >
									</td>
									
									<td> 
										<img src="data/images/core/grapple.navigation.item.1.png" id = "grappleGlobeAreaProfileModeAreaFeedsAreaNavigationAreaComponentOne" alt="graple.navigation" >
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<div id = "grappleContentComponentEntity4">
			<div id = "grappleGlobeAreaMessagesModeArea" >
				<div id = "grappleGlobeAreaMessagesModeAreaFeedsArea" >
					<div id = "grappleGlobeAreaMessagesModeAreaFeedsAreaTitleArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/header/grapple.super.tab.item.3.png" id = "grappleGlobeAreaMessagesModeAreaFeedsAreaTitleAreaComponentZero" alt="grappleSuperTabArea2" >
									</td>
									
									<td> 
										<label class ="NormalModernFontClassification" id = "grappleGlobeAreaMessagesModeAreaFeedsAreaTitleAreaComponentOne" for="name" onclick ="">my.messages</label> 
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
					
					<div id = "grappleGlobeAreaMessagesModeAreaFeedsAreaNavigationArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/core/grapple.navigation.item.0.png" id = "grappleGlobeAreaMessagesModeAreaFeedsAreaNavigationAreaComponentZero" alt="graple.navigation" >
									</td>
									
									<td> 
										<img src="data/images/core/grapple.navigation.item.1.png" id = "grappleGlobeAreaMessagesModeAreaFeedsAreaNavigationAreaComponentOne" alt="graple.navigation" >
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>	
		
		<div id = "grappleContentComponentEntity5">
			<div id = "grappleGlobeAreaMyLoungeModeArea" >
				<div id = "grappleGlobeAreaMyLoungeModeAreaFeedsArea" >
					<div id = "grappleGlobeAreaMyLoungeModeAreaFeedsAreaTitleArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/header/grapple.super.tab.item.4.png" id = "grappleGlobeAreaMyLoungeModeAreaFeedsAreaTitleAreaComponentZero" alt="grappleSuperTabArea0" >
									</td>
									
									<td> 
										<label class ="NormalModernFontClassification" id = "grappleGlobeAreaMyLoungeModeAreaFeedsAreaTitleAreaComponentOne" for="name" onclick ="">my cocktail</label> 
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
					
					<div id = "grappleGlobeAreaMyLoungeModeAreaFeedsAreaNavigationArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/core/grapple.navigation.item.0.png" id = "grappleGlobeAreaMyLoungeModeAreaFeedsAreaNavigationAreaComponentZero" alt="graple.navigation" >
									</td>
									
									<td> 
										<img src="data/images/core/grapple.navigation.item.1.png" id = "grappleGlobeAreaMyLoungeModeAreaFeedsAreaNavigationAreaComponentOne" alt="graple.navigation" >
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
					
					<div id = "grappleGlobeAreaMyLoungeModeAreaFeedsAreaContentArea">
						<table>
							<tbody>
								<?php
									$imageArray = array ( );
									$descriptionArray = array ( );
									$contoller0TitleArray = array ( );
									$contoller1TitleArray = array ( );
									
									$rowDelimiterBegin = "<tr>";
									$rowDelimiterEnd = "</tr>";
									$itemRowIndicatorBegin = "<td>";;
									$itemRowIndicatorEnd = "</td>";	
									
									
									foreach ( $_SESSION [ 'MY_COCKTAIL_GRAPPLES' ] as $grappleItem )
									{
										$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
										array_push ( $imageArray, $segmentedDatabaseRecordCollection [ 0 ] );
										array_push ( $descriptionArray, $segmentedDatabaseRecordCollection [ 2 ] );
										array_push ( $contoller0TitleArray, $segmentedDatabaseRecordCollection [ 3 ] );
										array_push ( $contoller1TitleArray, $segmentedDatabaseRecordCollection [ 4 ] );
									}
									
									
									$numItems = count ( $imageArray );
									$grappleCollectionCardinalityAccumilation = array ( count ( $_SESSION [ 'TEXT_GRAPPLES' ] ), count ( $_SESSION [ 'URL_GRAPPLES' ] ), count ( $_SESSION [ 'IMAGE_GRAPPLES' ] ), count ( $_SESSION [ 'AUDIO_GRAPPLES' ] ), count ( $_SESSION [ 'VIDEO_GRAPPLES' ] ) );
									
									$grappleCollectionTypeArray = array ( "Text", "Url", "Image", "Audio", "Video" );	
									

									
									//prebake javascript functions to enable/disable grapple collection types
									//this is needed because we can't javascript is client based
									//and php would have already been server prepared, so no javacript
									//function would be ensuable in my php grapple item renderer therein.
									for ( $i = 0; $i < $numItems; $i ++ )
									{
										echo "<script type = 'text/javascript' language = 'javascript'> 
												
												enableMyCocktailGrappleCollectionType".$i." = function ( )
												{
													for(var t = 0; t < ".$grappleCollectionCardinalityAccumilation[$i]."; t ++)
													{
														document.getElementById ('grappleMyCocktailCollection".$grappleCollectionTypeArray[$i]."Type'+t).style.display = 'block';
													}
													window.scroll ( 0, 80 );
												};
												
												disableMyCocktailGrappleCollectionType".$i." = function ( )
												{	
													for(var t = 0; t < ".$grappleCollectionCardinalityAccumilation[$i]."; t ++)
														document.getElementById ('grappleMyCocktailCollection".$grappleCollectionTypeArray[$i]."Type'+t).style.display = 'none';
												};
											  </script>";
									}
									
									//generate ui rendering of grapple items
									for ( $i = 0; $i < $numItems; $i ++ )
									{	
										if ( $i % 5 != 0 )
										{
											$rowDelimiterBegin = "";
											$rowDelimiterEnd = "";
										}
										else
										{
											$rowDelimiterBegin = "<tr>";
											$rowDelimiterEnd = "</tr>";
										}
										echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div id = 'grappleMyCocktailCollectionControllerType".$i."' class = 'grappleItem' title = '".$descriptionArray[$i]."'><img id = 'grappleGlobeAreaProfileModeGrppleAppsGrappleModeAreaFeedsAreaContentAreaItemArea' src =".$imageArray[$i]."><div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleMyCocktailCoreItemControllerAreaItem0Id' title = '".$contoller1TitleArray[$i]."' src ='data/images/core/grapple.cocktail.controller.0.png' onclick = 'disableMyCocktailGrappleCollectionType".$i."();' /> </span> <span> <img id = 'grappleMyCocktailCoreItemControllerAreaItem1Id' title = '".$contoller0TitleArray[$i]."' src ='data/images/core/grapple.cocktail.controller.1.png' onclick = 'enableMyCocktailGrappleCollectionType".$i."();' /> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
									}	
								
									$grappleItemContentUserNames = array();
									$grappleItemContentStreams = array();
									$grappleItemContentSources = array();
									$grappleItemContentTitles = array();
									$grappleItemContentDescriptions = array();
									$grappleItemContentDateCreations = array();
									
									$rowDelimiterBegin = "<tr>";
									$rowDelimiterEnd = "</tr>";
									$itemRowIndicatorBegin = "<td>";;
									$itemRowIndicatorEnd = "</td>";
									$userLoginEmail = $_POST [ 'grappleSignInEmailRetrievalAreaComponentName' ];
									
									//generate text grapple data based on email id
									foreach ( $_SESSION [ 'IMAGE_GRAPPLES' ] as $grappleItem ) 
									{
										$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
										
										if ( $segmentedDatabaseRecordCollection[0] == $userLoginEmail )
										{
											array_push($grappleItemContentUserNames, $segmentedDatabaseRecordCollection[1]);
											array_push($grappleItemContentSources, $segmentedDatabaseRecordCollection[2]);
											array_push($grappleItemContentStreams, $segmentedDatabaseRecordCollection[3]);
											array_push($grappleItemContentTitles, $segmentedDatabaseRecordCollection[4]);
											array_push($grappleItemContentDescriptions, $segmentedDatabaseRecordCollection[5]);
											array_push($grappleItemContentDateCreations, $segmentedDatabaseRecordCollection[6]);
										}
									}
									
									$numItems = count($grappleItemContentSources);
									
									//prebake javascript functions to popupMyCocktail source window
									//this is needed because we can't javascript is client based
									//and php would have already been server prepared, so no javacript
									//function would be ensuable in my php grapple item renderer therein.
									for ( $i = 0; $i < $numItems; $i ++)
									{
										echo "<script type = 'text/javascript' language = 'javascript'> 
													
												popupMyCocktailSiteImageFunction".$i." = function ( )
												{
													window.open('$grappleItemContentSources[$i]');
												};
												
											  </script>";
									}
									
										//prebaked content maximization vars
											//prebake javascript functions as popupMyCocktail maximized content window enablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupMyCocktailMaximizedImageWindowUiEnableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleMyCocktailContentMaximizationImageArea".$i."', 'block' );
															window.scrollTo ( 0, 0 );
														};
														
													  </script>";
											}
											//prebake javascript functions as popupMyCocktail maximized content window disablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupMyCocktailMaximizedImageWindowUiDisableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleMyCocktailContentMaximizationImageArea".$i."', 'none' );
														};
														
													  </script>";
											}
									//generate ui rendering of grapple items
									for ( $i = 0; $i < count($grappleItemContentStreams); $i ++ )
									{	
										if ( $i % 5 != 0 )
										{
											$rowDelimiterBegin = "";
											$rowDelimiterEnd = "";
										}
										else
										{
											$rowDelimiterBegin = "<tr>";
											$rowDelimiterEnd = "</tr>";
										}
										
										//render main preview content
										echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div style = 'display:none;' id = 'grappleMyCocktailCollectionImageType".$i."' title = '".$grappleItemContentDescriptions[$i]."' class = 'grappleItem' onclick = 'popupMyCocktailMaximizedImageWindowUiEnableFunction".$i."();' ><img id = 'grappleGlobeAreaProfileModeImageGrappleModeAreaFeedsAreaContentAreaItemArea' src =".$grappleItemContentStreams[$i]."><div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleItemControllerAreaItem0Id' title = 'give grape' src ='data/images/core/grapple.item.controller.item.0.png' onclick = 'pendingMessage ();'/> </span> <span> <img id = 'grappleItemControllerAreaItem1Id' src ='data/images/core/grapple.item.controller.item.1.png' title = 'go back to source' onclick = 'popupMyCocktailSiteImageFunction".$i."();' /> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
										
										//render maximized default content (hidden by default)
										echo "<div id = 'grappleMyCocktailContentMaximizationImageArea".$i."' style = 'display:none;' >	
												<div id = 'grappleMyCocktailContentMaximizationImageWindowArea' >
													<h1>".$grappleItemContentTitles[$i]."</h1>
													</br>
													</br>
													<img id = 'grappleMyCocktailContentMaximizationImageWindowAreaImageAreaId' src =".$grappleItemContentStreams[$i].">
													<h1>".$grappleItemContentDateCreations[$i]."</h1>
													</br>
													<h2>@".$grappleItemContentUserNames[$i]."</h2>
												</div>
												
												<div id = 'grappleMyCocktailContentMaximizationImageWindowControllerArea' >
													 <span>
														<span> <img title = 'send in message' id = 'grappleMyCocktailContentMaximizationImageWindowAreaControllerAreaItem0Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.0.png' onclick = 'controllerTabAreaItem0Describer();' /> </span>
														<span> <img title = 'go back to source' id = 'grappleMyCocktailContentMaximizationImageWindowAreaControllerAreaItem1Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.1.png' onclick = 'popupMyCocktailSiteImageFunction".$i."();' /> </span>
														<span> <img title = 'exit' id = 'grappleMyCocktailContentMaximizationImageWindowAreaControllerAreaItem2Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.2.png' onclick = 'popupMyCocktailMaximizedImageWindowUiDisableFunction".$i."();' /> </span> 
													 </span>;
												</div>
											</div>";
									}
									
									$grappleItemContentUserNames = array();
									$grappleItemContentStreams = array();
									$grappleItemContentSources = array();
									$grappleItemContentTitles = array();
									$grappleItemContentDescriptions = array();
									$grappleItemContentDateCreations = array();
									
									$rowDelimiterBegin = "<tr>";
									$rowDelimiterEnd = "</tr>";
									$itemRowIndicatorBegin = "<td>";;
									$itemRowIndicatorEnd = "</td>";
									$userLoginEmail = $_POST [ 'grappleSignInEmailRetrievalAreaComponentName' ];
									
									//generate text grapple data based on email id
									foreach ( $_SESSION [ 'TEXT_GRAPPLES' ] as $grappleItem ) 
									{
										$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
										
										if ( $segmentedDatabaseRecordCollection[0] == $userLoginEmail )
										{
											array_push($grappleItemContentUserNames, $segmentedDatabaseRecordCollection[1]);
											array_push($grappleItemContentSources, $segmentedDatabaseRecordCollection[2]);
											array_push($grappleItemContentStreams, $segmentedDatabaseRecordCollection[3]);
											array_push($grappleItemContentTitles, $segmentedDatabaseRecordCollection[4]);
											array_push($grappleItemContentDescriptions, $segmentedDatabaseRecordCollection[5]);
											array_push($grappleItemContentDateCreations, $segmentedDatabaseRecordCollection[6]);
										}
									}
									
									$numItems = count($grappleItemContentSources);
									//prebaked functions
										//prebake javascript functions to popupMyCocktail source window
										//this is needed because we can't javascript is client based
										//and php would have already been server prepared, so no javacript
										//function would be ensuable in my php grapple item renderer therein.
										for ( $i = 0; $i < $numItems; $i ++)
										{
											echo "<script type = 'text/javascript' language = 'javascript'> 
														
													popupMyCocktailSiteTextFunction".$i." = function ( )
													{
														window.open('$grappleItemContentSources[$i]');
													};
													
												  </script>";
										}
										//prebaked content maximization vars
											//prebake javascript functions as popupMyCocktail maximized content window enablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupMyCocktailMaximizedTextWindowUiEnableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleMyCocktailContentMaximizationTextArea".$i."', 'block' );
															window.scrollTo ( 0, 0 );
														};
														
													  </script>";
											}
											//prebake javascript functions as popupMyCocktail maximized content window disablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupMyCocktailMaximizedTextWindowUiDisableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleMyCocktailContentMaximizationTextArea".$i."', 'none' );
														};
														
													  </script>";
											}
											  
									//generate ui rendering of grapple items
									for ( $i = 0; $i < count($grappleItemContentStreams); $i ++ )
									{	
										if ( $i % 5 != 0 )
										{
											$rowDelimiterBegin = "";
											$rowDelimiterEnd = "";
										}
										else
										{
											$rowDelimiterBegin = "<tr>";
											$rowDelimiterEnd = "</tr>";
										}
											//compute shortened string
											if ( strlen ( $grappleItemContentStreams[$i] ) > 40 )
											{
												$maxContentStreamPreviewLength = 40;
												$contentStreamPreview = substr ( $grappleItemContentStreams[$i], 0, $maxContentStreamPreviewLength )."...";
											}
											else
												$contentStreamPreview = $grappleItemContentStreams[$i]."...";
												
										//render default content
										echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div style = 'display:none;' id = 'grappleMyCocktailCollectionTextType".$i."' title = '".$grappleItemContentDescriptions[$i]."' class = 'grappleItem' onclick = 'popupMyCocktailMaximizedTextWindowUiEnableFunction".$i."();'><p id = 'grappleGlobeAreaProfileModeTextGrappleModeAreaFeedsAreaContentAreaItemArea' >".$contentStreamPreview."</p><div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleItemControllerAreaItem0Id' title = 'give grape' src ='data/images/core/grapple.item.controller.item.0.png' onclick = 'pendingMessage ();'/> </span> <span> <img id = 'grappleItemControllerAreaItem1Id' src ='data/images/core/grapple.item.controller.item.1.png' title = 'go back to source' onclick = 'popupMyCocktailSiteTextFunction".$i."();' /> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
												
												
										//render maximized content (hidden by default)
										echo "<div id = 'grappleMyCocktailContentMaximizationTextArea".$i."' style = 'display:none;' >	
												<div id = 'grappleMyCocktailContentMaximizationTextWindowArea' >
													<h1>".$grappleItemContentTitles[$i]."</h1>
													</br>
													</br>
													<p>".$grappleItemContentStreams[$i]."</p>
													<h1>".$grappleItemContentDateCreations[$i]."</h1>
													</br>
													<h2>@".$grappleItemContentUserNames[$i]."</h2>
												</div>
												
												<div id = 'grappleMyCocktailContentMaximizationTextWindowControllerArea' >
													 <span>
														<span> <img title = 'send in message' id = 'grappleMyCocktailContentMaximizationTextWindowAreaControllerAreaItem0Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.0.png' onclick = 'controllerTabAreaItem0Describer();' /> </span>
														<span> <img title = 'go back to source' id = 'grappleMyCocktailContentMaximizationTextWindowAreaControllerAreaItem1Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.1.png' onclick = 'popupMyCocktailSiteTextFunction".$i."();' /> </span>
														<span> <img title = 'exit' id = 'grappleMyCocktailContentMaximizationTextWindowAreaControllerAreaItem2Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.2.png' onclick = 'popupMyCocktailMaximizedTextWindowUiDisableFunction".$i."();' /> </span> 
													 </span>;
												</div>
											</div>";
									}
									echo "</div>";
									
									$grappleItemContentUserNames = array();
									$grappleItemContentStreams = array();
									$grappleItemContentSources = array();
									$grappleItemContentTitles = array();
									$grappleItemContentDescriptions = array();
									$grappleItemContentDateCreations = array();
									
									$rowDelimiterBegin = "<tr>";
									$rowDelimiterEnd = "</tr>";
									$itemRowIndicatorBegin = "<td>";;
									$itemRowIndicatorEnd = "</td>";
									$userLoginEmail = $_POST [ 'grappleSignInEmailRetrievalAreaComponentName' ];
									
									//generate text grapple data based on email id
									foreach ( $_SESSION [ 'AUDIO_GRAPPLES' ] as $grappleItem ) 
									{
										$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
										
										if ( $segmentedDatabaseRecordCollection[0] == $userLoginEmail )
										{
											array_push($grappleItemContentUserNames, $segmentedDatabaseRecordCollection[1]);
											array_push($grappleItemContentSources, $segmentedDatabaseRecordCollection[2]);
											array_push($grappleItemContentStreams, $segmentedDatabaseRecordCollection[3]);
											array_push($grappleItemContentTitles, $segmentedDatabaseRecordCollection[4]);
											array_push($grappleItemContentDescriptions, $segmentedDatabaseRecordCollection[5]);
											array_push($grappleItemContentDateCreations, $segmentedDatabaseRecordCollection[6]);
										}
									}

									
									$numItems = count($grappleItemContentSources);
									//prebake javascript functions to popupMyCocktail source window
									//this is needed because we can't javascript is client based
									//and php would have already been server prepared, so no javacript
									//function would be ensuable in my php grapple item renderer therein.
									for ( $i = 0; $i < $numItems; $i ++)
									{
										echo "<script type = 'text/javascript' language = 'javascript'> 
													
												popupMyCocktailSiteAudioFunction".$i." = function ( )
												{
													window.open('$grappleItemContentSources[$i]');
												};
												
											  </script>";
									}
									
										//prebaked content maximization vars
											//prebake javascript functions as popupMyCocktail maximized content window enablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupMyCocktailMaximizedAudioWindowUiEnableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleMyCocktailContentMaximizationAudioArea".$i."', 'block' );
															window.scrollTo ( 0, 0 );
														};
														
													  </script>";
											}
											//prebake javascript functions as popupMyCocktail maximized content window disablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupMyCocktailMaximizedAudioWindowUiDisableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleMyCocktailContentMaximizationAudioArea".$i."', 'none' );
														};
														
													  </script>";
											}
									
									//generate ui rendering of grapple items
									for ( $i = 0; $i < count($grappleItemContentStreams); $i ++ )
									{	
										if ( $i % 5 != 0 )
										{
											$rowDelimiterBegin = "";
											$rowDelimiterEnd = "";
										}
										else
										{
											$rowDelimiterBegin = "<tr>";
											$rowDelimiterEnd = "</tr>";
										}
										
										//render main preview content
										echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div style = 'display:none;' id = 'grappleMyCocktailCollectionAudioType".$i."' title = '".$grappleItemContentDescriptions[$i]."' class = 'grappleItem' onclick = 'popupMyCocktailMaximizedAudioWindowUiEnableFunction".$i."();'> <audio id = 'grappleGlobeAreaProfileModeAudioGrappleModeAreaFeedsAreaContentAreaItemArea' controls='controls'> <source src =".$grappleItemContentStreams[$i]."> </audio> <div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleItemControllerAreaItem0Id' title = 'give grape' src ='data/images/core/grapple.item.controller.item.0.png' onclick = 'pendingMessage ();'/> </span> <span> <img id = 'grappleItemControllerAreaItem1Id' src ='data/images/core/grapple.item.controller.item.1.png' title = 'go back to source' onclick = 'popupMyCocktailSiteAudioFunction".$i."();' /> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
										
										
										//render maximized default content (hidden by default)
										echo "<div id = 'grappleMyCocktailContentMaximizationAudioArea".$i."' style = 'display:none;' >	
												<div id = 'grappleMyCocktailContentMaximizationAudioWindowArea' >
													<h1>".$grappleItemContentTitles[$i]."</h1>
													</br>
													</br>
													<audio id = 'grappleMyCocktailContentMaximizationAudioWindowAreaAudioAreaId' controls='controls'> <source src =".$grappleItemContentStreams[$i]."> </audio>
													<h1>".$grappleItemContentDateCreations[$i]."</h1>
													</br>
													<h2>@".$grappleItemContentUserNames[$i]."</h2>
												</div>
												
												<div id = 'grappleMyCocktailContentMaximizationAudioWindowControllerArea' >
													 <span>
														<span> <img title = 'send in message' id = 'grappleMyCocktailContentMaximizationAudioWindowAreaControllerAreaItem0Area' src = 'data/images/core/grapple.item.maximized.elements/audio.window/controller.item.0.png' onclick = '' /> </span>
														<span> <img title = 'play' id = 'grappleMyCocktailContentMaximizationAudioWindowAreaControllerAreaItem1Area' src = 'data/images/core/grapple.item.maximized.elements/audio.window/controller.item.1.png' onclick = '' /> </span>
														<span> <img title = 'pause' id = 'grappleMyCocktailContentMaximizationAudioWindowAreaControllerAreaItem2Area' src = 'data/images/core/grapple.item.maximized.elements/audio.window/controller.item.2.png' onclick = '' /> </span>
														<span> <img title = 'stop' id = 'grappleMyCocktailContentMaximizationAudioWindowAreaControllerAreaItem3Area' src = 'data/images/core/grapple.item.maximized.elements/audio.window/controller.item.3.png' onclick = '' /> </span>
														<span> <img title = 'go back to source' id = 'grappleMyCocktailContentMaximizationAudioWindowAreaControllerAreaItem4Area' src = 'data/images/core/grapple.item.maximized.elements/audio.window/controller.item.4.png' onclick = 'popupMyCocktailSiteAudioFunction".$i."();' /> </span>
														<span> <img title = 'exit' id = 'grappleMyCocktailContentMaximizationAudioWindowAreaControllerAreaItem5Area' src = 'data/images/core/grapple.item.maximized.elements/audio.window/controller.item.5.png' onclick = 'popupMyCocktailMaximizedAudioWindowUiDisableFunction".$i."();' /> </span> 
													 </span>;
												</div>
											</div>";
									}
									
									$grappleItemContentUserNames = array();
									$grappleItemContentStreams = array();
									$grappleItemContentSources = array();
									$grappleItemContentTitles = array();
									$grappleItemContentDescriptions = array();
									$grappleItemContentDateCreations = array();
									
									$rowDelimiterBegin = "<tr>";
									$rowDelimiterEnd = "</tr>";
									$itemRowIndicatorBegin = "<td>";;
									$itemRowIndicatorEnd = "</td>";
									$userLoginEmail = $_POST [ 'grappleSignInEmailRetrievalAreaComponentName' ];
									
									//generate text grapple data based on email id
									foreach ( $_SESSION [ 'URL_GRAPPLES' ] as $grappleItem ) 
									{
										$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
										
										if ( $segmentedDatabaseRecordCollection[0] == $userLoginEmail )
										{
											array_push($grappleItemContentUserNames, $segmentedDatabaseRecordCollection[1]);
											array_push($grappleItemContentSources, $segmentedDatabaseRecordCollection[2]);
											array_push($grappleItemContentStreams, $segmentedDatabaseRecordCollection[3]);
											array_push($grappleItemContentTitles, $segmentedDatabaseRecordCollection[4]);
											array_push($grappleItemContentDescriptions, $segmentedDatabaseRecordCollection[5]);
											array_push($grappleItemContentDateCreations, $segmentedDatabaseRecordCollection[6]);
										}
									}

									
									$numItems = count($grappleItemContentSources);
									//prebake javascript functions to popupMyCocktail source window
									//this is needed because we can't javascript is client based
									//and php would have already been server prepared, so no javacript
									//function would be ensuable in my php grapple item renderer therein.
									for ( $i = 0; $i < $numItems; $i ++)
									{
										echo "<script type = 'text/javascript' language = 'javascript'> 
													
												popupMyCocktailSiteLinkFunction".$i." = function ( )
												{
													window.open('$grappleItemContentSources[$i]');
												};
												
											  </script>";
									}
										//prebaked content maximization vars
											//prebake javascript functions as popupMyCocktail maximized content window enablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupMyCocktailMaximizedLinkWindowUiEnableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleMyCocktailContentMaximizationLinkArea".$i."', 'block' );
															window.scrollTo ( 0, 0 );
														};
														
													  </script>";
											}
											//prebake javascript functions as popupMyCocktail maximized content window disablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupMyCocktailMaximizedLinkWindowUiDisableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleMyCocktailContentMaximizationLinkArea".$i."', 'none' );
														};
														
													  </script>";
											}
									//generate ui rendering of grapple items
									for ( $i = 0; $i < count($grappleItemContentStreams); $i ++ )
									{	
										if ( $i % 5 != 0 )
										{
											$rowDelimiterBegin = "";
											$rowDelimiterEnd = "";
										}
										else
										{
											$rowDelimiterBegin = "<tr>";
											$rowDelimiterEnd = "</tr>";
										}
										
											//compute shortened string
											if ( strlen ( $grappleItemContentStreams[$i] ) > 40 )
											{
												$maxContentStreamPreviewLength = 40;
												$contentStreamPreview = substr ( $grappleItemContentStreams[$i], 0, $maxContentStreamPreviewLength )."...";
											}
											else
												$contentStreamPreview = $grappleItemContentStreams[$i]."...";
												
										//render default content
										echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div style = 'display:none;' id = 'grappleMyCocktailCollectionUrlType".$i."' title = '".$grappleItemContentDescriptions[$i]."' class = 'grappleItem' onclick = 'popupMyCocktailMaximizedLinkWindowUiEnableFunction".$i."();'><p id = 'grappleGlobeAreaProfileModeTextGrappleModeAreaFeedsAreaContentAreaItemArea'>".$contentStreamPreview."</p><div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleItemControllerAreaItem0Id' title = 'give grape' src ='data/images/core/grapple.item.controller.item.0.png' onclick = 'pendingMessage ();'/> </span> <span> <img id = 'grappleItemControllerAreaItem1Id' src ='data/images/core/grapple.item.controller.item.1.png' title = 'go back to source' onclick = 'popupMyCocktailSiteLinkFunction".$i."();' /> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
									
										//render maximized content (hidden by default)
										echo "<div id = 'grappleMyCocktailContentMaximizationLinkArea".$i."' style = 'display:none;' >	
												<div id = 'grappleMyCocktailContentMaximizationLinkWindowArea' >
													<h1>".$grappleItemContentTitles[$i]."</h1>
													</br>
													</br>
													<p>".$grappleItemContentStreams[$i]."</p>
													<h1>".$grappleItemContentDateCreations[$i]."</h1>
													</br>
													<h2>@".$grappleItemContentUserNames[$i]."</h2>
												</div>
												
												<div id = 'grappleMyCocktailContentMaximizationLinkWindowControllerArea' >
													 <span>
														<span> <img title = 'send in message' id = 'grappleMyCocktailContentMaximizationLinkWindowAreaControllerAreaItem0Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.0.png' onclick = 'controllerTabAreaItem0Describer();' /> </span>
														<span> <img title = 'go back to source' id = 'grappleMyCocktailContentMaximizationLinkWindowAreaControllerAreaItem1Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.1.png' onclick = 'popupMyCocktailSiteLinkFunction".$i."();' /> </span>
														<span> <img title = 'exit' id = 'grappleMyCocktailContentMaximizationLinkWindowAreaControllerAreaItem2Area' src = 'data/images/core/grapple.item.maximized.elements/text.window/controller.item.2.png' onclick = 'popupMyCocktailMaximizedLinkWindowUiDisableFunction".$i."();' /> </span> 
													 </span>;
												</div>
											</div>";
									}
									
									$grappleItemContentUserNames = array();
									$grappleItemContentStreams = array();
									$grappleItemContentSources = array();
									$grappleItemContentTitles = array();
									$grappleItemContentDescriptions = array();
									$grappleItemContentDateCreations = array();
									
									$rowDelimiterBegin = "<tr>";
									$rowDelimiterEnd = "</tr>";
									$itemRowIndicatorBegin = "<td>";;
									$itemRowIndicatorEnd = "</td>";
									$userLoginEmail = $_POST [ 'grappleSignInEmailRetrievalAreaComponentName' ];
									
									//generate text grapple data based on email id
									foreach ( $_SESSION [ 'VIDEO_GRAPPLES' ] as $grappleItem ) 
									{
										$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
										
										if ( $segmentedDatabaseRecordCollection[0] == $userLoginEmail )
										{
											array_push($grappleItemContentUserNames, $segmentedDatabaseRecordCollection[1]);
											array_push($grappleItemContentSources, $segmentedDatabaseRecordCollection[2]);
											array_push($grappleItemContentStreams, $segmentedDatabaseRecordCollection[3]);
											array_push($grappleItemContentTitles, $segmentedDatabaseRecordCollection[4]);
											array_push($grappleItemContentDescriptions, $segmentedDatabaseRecordCollection[5]);
											array_push($grappleItemContentDateCreations, $segmentedDatabaseRecordCollection[6]);
										}
									}

									
									$numItems = count($grappleItemContentSources);
									//prebake javascript functions to popupMyCocktail source window
									//this is needed because we can't javascript is client based
									//and php would have already been server prepared, so no javacript
									//function would be ensuable in my php grapple item renderer therein.
									for ( $i = 0; $i < $numItems; $i ++)
									{
										echo "<script type = 'text/javascript' language = 'javascript'> 
													
												popupMyCocktailSiteVideoFunction".$i." = function ( )
												{
													window.open('$grappleItemContentSources[$i]');
												};
												
											  </script>";
									}
									
											//prebake javascript functions as popupMyCocktail maximized content window enablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupMyCocktailMaximizedVideoWindowUiEnableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleMyCocktailContentMaximizationVideoArea".$i."', 'block' );
															window.scrollTo ( 0, 0 );
														};
														
													  </script>";
											}
											//prebake javascript functions as popupMyCocktail maximized content window disablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupMyCocktailMaximizedVideoWindowUiDisableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleMyCocktailContentMaximizationVideoArea".$i."', 'none' );
														};
														
													  </script>";
											}
									//generate ui rendering of grapple items
									for ( $i = 0; $i < count($grappleItemContentStreams); $i ++ )
									{	
										if ( $i % 5 != 0 )
										{
											$rowDelimiterBegin = "";
											$rowDelimiterEnd = "";
										}
										else
										{
											$rowDelimiterBegin = "<tr>";
											$rowDelimiterEnd = "</tr>";
										}
										
										//render main preview content
										echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div style = 'display:none;' id = 'grappleMyCocktailCollectionVideoType".$i."' title = '".$grappleItemContentDescriptions[$i]."' class = 'grappleItem' onclick = 'popupMyCocktailMaximizedVideoWindowUiEnableFunction".$i."();'> <iframe id = 'grappleGlobeAreaProfileModeVideoGrappleModeAreaFeedsAreaContentAreaItemArea' type='text/html' src='".$grappleItemContentStreams[$i]."' allowfullscreen frameborder='0'></iframe> <div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleItemControllerAreaItem0Id' title = 'give grape' src ='data/images/core/grapple.item.controller.item.0.png' onclick = 'pendingMessage ();'/> </span> <span> <img id = 'grappleItemControllerAreaItem1Id' src ='data/images/core/grapple.item.controller.item.1.png' title = 'go back to source' onclick = 'popupMyCocktailSiteVideoFunction".$i."();' /> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
									
										//render maximized default content (hidden by default)
										echo "<div id = 'grappleMyCocktailContentMaximizationVideoArea".$i."' style = 'display:none;' >	
												<div id = 'grappleContentMaximizationVideoWindowArea' >
													<h1>".$grappleItemContentTitles[$i]."</h1>
													</br>
													</br>
													<iframe id = 'grappleMyCocktailContentMaximizationVideoWindowAreaVideoAreaId' type='text/html' src='".$grappleItemContentStreams[$i]."' allowfullscreen frameborder='0'></iframe>
													<h1>".$grappleItemContentDateCreations[$i]."</h1>
													</br>
													<h2>@".$grappleItemContentUserNames[$i]."</h2>
												</div>
												
												<div id = 'grappleContentMaximizationVideoWindowControllerArea' >
													 <span>
														<span> <img title = 'send in message' id = 'grappleContentMaximizationVideoWindowAreaControllerAreaItem0Area' src = 'data/images/core/grapple.item.maximized.elements/video.window/controller.item.0.png' onclick = '' /> </span>
														<span> <img title = 'snap shot!' id = 'grappleContentMaximizationVideoWindowAreaControllerAreaItem1Area' src = 'data/images/core/grapple.item.maximized.elements/video.window/controller.item.1.png' onclick = '' /> </span>
														<span> <img title = 'go back to source' id = 'grappleContentMaximizationVideoWindowAreaControllerAreaItem2Area' src = 'data/images/core/grapple.item.maximized.elements/video.window/controller.item.2.png' onclick = 'popupMyCocktailSiteVideoFunction".$i."();' /> </span>
														<span> <img title = 'exit' id = 'grappleContentMaximizationVideoWindowAreaControllerAreaItem3Area' src = 'data/images/core/grapple.item.maximized.elements/video.window/controller.item.3.png' onclick = 'popupMyCocktailMaximizedVideoWindowUiDisableFunction".$i."();' /> </span> 
													 </span>;
												</div>
											</div>";
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>	
		
		<div id = "grappleContentComponentEntity6">
			<div id = "grappleGlobeAreaProfileModeFriendsGrappleModeArea" >
				<div id = "grappleGlobeAreaProfileModeFriendsGrappleModeAreaFeedsArea" >
					<div id = "grappleGlobeAreaProfileModeFriendsGrappleModeAreaFeedsAreaTitleArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/header/grapple.super.tab.item.5.png" id = "grappleGlobeAreaFriendsModeAreaFeedsAreaTitleAreaComponentZero" alt="grappleSuperTabArea0" >
									</td>
									
									<td> 
										<label class ="NormalModernFontClassification" id = "grappleGlobeAreaFriendsModeAreaFeedsAreaTitleAreaComponentOne" for="name" onclick ="">bunch</label> 
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
					
					<div id = "grappleGlobeAreaProfileModeFriendsGrappleModeAreaFeedsAreaNavigationArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/core/grapple.navigation.item.0.png" id = "grappleGlobeAreaFriendsModeAreaFeedsAreaNavigationAreaComponentZero" alt="graple.navigation" >
									</td>
									
									<td> 
										<img src="data/images/core/grapple.navigation.item.1.png" id = "grappleGlobeAreaFriendsModeAreaFeedsAreaNavigationAreaComponentOne" alt="graple.navigation" >
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
					
					<div id = "grappleGlobeAreaProfileModeFriendsGrappleModeAreaFeedsAreaContentArea">
						<table>
							<tbody>
								<?php	
									$grappleBunchItemUserNameStreams = array();
									$grappleBunchItemUserEmailStreams = array();
									$grappleBunchItemUserBiographyStreams = array();
									$grappleBunchItemUserProfilePictureImageStreams = array();
									
									$rowDelimiterBegin = "<tr>";
									$rowDelimiterEnd = "</tr>";
									$itemRowIndicatorBegin = "<td>";;
									$itemRowIndicatorEnd = "</td>";
									
									//generate text grapple data based on email id
									foreach ( $_SESSION [ 'databaseRecordCollection' ] as $grappleItem ) 
									{
										$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
										
										array_push($grappleBunchItemUserNameStreams, $segmentedDatabaseRecordCollection[0]);
										array_push($grappleBunchItemUserEmailStreams, $segmentedDatabaseRecordCollection[1]);
										array_push($grappleBunchItemUserBiographyStreams, $segmentedDatabaseRecordCollection[3]);
										array_push($grappleBunchItemUserProfilePictureImageStreams, $segmentedDatabaseRecordCollection[4]);
									}
									
									$numItems = count($grappleBunchItemUserNameStreams);
									
									//prebake javascript functions to popup source window
									//this is needed because we can't javascript is client based
									//and php would have already been server prepared, so no javacript
									//function would be ensuable in my php grapple item renderer therein.
									for ( $i = 0; $i < $numItems; $i ++)
									{
										echo "<script type = 'text/javascript' language = 'javascript'> 
													
												popupSiteBunchFunction".$i." = function ( )
												{
													alert('$grappleBunchItemUserNameStreams[$i]'+'profile');
												};
												
											  </script>";
									}
									
										//prebaked content maximization vars
											//prebake javascript functions as popup maximized content window enablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupMaximizedBunchWindowUiEnableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleContentMaximizationBunchArea".$i."', 'block' );
														};
														
													  </script>";
											}
											//prebake javascript functions as popup maximized content window disablers
											for ( $i = 0; $i < $numItems; $i ++)
											{
												echo "<script type = 'text/javascript' language = 'javascript'> 
															
														popupMaximizedBunchWindowUiDisableFunction".$i." = function ( )
														{
															toggleContent ( 'grappleContentMaximizationBunchArea".$i."', 'none' );
														};
														
													  </script>";
											}
									//generate ui rendering of grapple items
									for ( $i = 0; $i < $numItems; $i ++ )
									{	
										if ( $i % 5 != 0 )
										{
											$rowDelimiterBegin = "";
											$rowDelimiterEnd = "";
										}
										else
										{
											$rowDelimiterBegin = "<tr>";
											$rowDelimiterEnd = "</tr>";
										}
										
										//render main preview content
										echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div class = 'grappleItem' onclick = 'popupMaximizedBunchWindowUiEnableFunction".$i."();' ><img id = 'grappleGlobeAreaProfileModeFriendsGrappleModeAreaFeedsAreaContentAreaItemArea' src =".$grappleBunchItemUserProfilePictureImageStreams[$i]."><div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleItemControllerAreaItem0Id' title = 'give grape' src ='data/images/core/grapple.item.controller.item.0.png' onclick = 'pendingMessage ();'/> </span> <span> <img id = 'grappleItemControllerAreaItem1Id' src ='data/images/core/grapple.item.controller.item.1.png' title = 'go back to source' onclick = 'popupSiteBunchFunction".$i."();' /> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
									
										//render maximized default content (hidden by default)
										echo "<div id = 'grappleContentMaximizationBunchArea".$i."' style = 'display:none;' >	
												<div id = 'grappleContentMaximizationBunchWindowArea' >
													<h1>@".$grappleBunchItemUserNameStreams[$i]."</h1>
													</br>
													</br>
													<img id = 'grappleContentMaximizationBunchWindowAreaBunchAreaId' src =".$grappleBunchItemUserProfilePictureImageStreams[$i].">
													<p>".$grappleBunchItemUserBiographyStreams[$i]."</p>
												</div>
												
												<div id = 'grappleContentMaximizationBunchWindowControllerArea' >
													 <span>
														<span> <img title = 'send in message' id = 'grappleContentMaximizationBunchWindowAreaControllerAreaItem0Area' src = 'data/images/core/grapple.item.maximized.elements/bunch.window/controller.item.0.png' onclick = 'controllerTabAreaItem0Describer();' /> </span>
														<span> <img title = 'go to profile' id = 'grappleContentMaximizationBunchWindowAreaControllerAreaItem1Area' src = 'data/images/core/grapple.item.maximized.elements/bunch.window/controller.item.1.png' onclick = 'popupSiteBunchFunction".$i."();' /> </span>
														<span> <img title = 'exit' id = 'grappleContentMaximizationBunchWindowAreaControllerAreaItem2Area' src = 'data/images/core/grapple.item.maximized.elements/bunch.window/controller.item.2.png' onclick = 'popupMaximizedBunchWindowUiDisableFunction".$i."();' /> </span> 
													 </span>;
												</div>
											</div>";
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>	
		
		
		<div id = "grappleContentComponentEntity7">
			<div id = "grappleGlobeAreaProfileModeGrappleAppsGrappleModeArea" >
				<div id = "grappleGlobeAreaProfileModeGrappleAppsGrappleModeAreaFeedsArea" >
					<div id = "grappleGlobeAreaProfileModeGrappleAppsGrappleModeAreaFeedsAreaTitleArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/header/grapple.super.tab.item.6.png" id = "grappleGlobeAreaGrappleAppsModeAreaFeedsAreaTitleAreaComponentZero" alt="grappleSuperTabArea0" >
									</td>
									
									<td> 
										<label class ="NormalModernFontClassification" id = "grappleGlobeAreaGrappleAppsModeAreaFeedsAreaTitleAreaComponentOne" for="name" onclick ="">vineyard</label> 
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
					
					<div id = "grappleGlobeAreaProfileModeGrappleAppsGrappleModeAreaFeedsAreaNavigationArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/core/grapple.navigation.item.0.png" id = "grappleGlobeAreaGrappleAppsModeAreaFeedsAreaNavigationAreaComponentZero" alt="graple.navigation" >
									</td>
									
									<td> 
										<img src="data/images/core/grapple.navigation.item.1.png" id = "grappleGlobeAreaGrappleAppsModeAreaFeedsAreaNavigationAreaComponentOne" alt="graple.navigation" >
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
					
					<div id = "grappleGlobeAreaProfileModeGrappleAppsGrappleModeAreaFeedsAreaContentArea">
						<table>
							<tbody>
								<script type = "text/javascript" language = "javascript">
									<?php
										$imageArray = array ( );
										$urlArray = array ( );
										$descriptionArray = array ( );
										$contoller1TitleArray = array ( );
										
										$rowDelimiterBegin = "<tr>";
										$rowDelimiterEnd = "</tr>";
										$itemRowIndicatorBegin = "<td>";;
										$itemRowIndicatorEnd = "</td>";	
										
										foreach ( $_SESSION [ 'GRAPPLECATION_GRAPPLES' ] as $grappleItem )
										{
											$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
											array_push ( $contoller1TitleArray, $segmentedDatabaseRecordCollection [ 4 ] );
											array_push ( $imageArray, $segmentedDatabaseRecordCollection [ 3 ] );
											array_push ( $descriptionArray, $segmentedDatabaseRecordCollection [ 2 ] );
											array_push ( $urlArray, $segmentedDatabaseRecordCollection [ 0 ] );
										}
										
										$numItems = count ( $urlArray );
										//prebake javascript functions to popup source window
										//this is needed because we can't javascript is client based
										//and php would have already been server prepared, so no javacript
										//function would be ensuable in my php grapple item renderer therein.
										for ( $i = 0; $i < $numItems; $i ++ )
										{	
											echo "<script type = 'text/javascript' language = 'javascript'> 
												
												var fileContent = file_get_contents ('$urlArray[$i]');
												
												popupGrappleAppFunction".$i." = function ( )
												{	
													alert ('$descriptionArray[$i]');
													//window.open('data:AutoCAD Core Extension,' +fileContent);
												};
												
											  </script>";
										}

										
										//generate ui rendering of grapple items
										for ( $i = 0; $i < $numItems; $i ++ )
										{	
											if ( $i % 5 != 0 )
											{
												$rowDelimiterBegin = "";
												$rowDelimiterEnd = "";
											}
											else
											{
												$rowDelimiterBegin = "<tr>";
												$rowDelimiterEnd = "</tr>";
											}
											echo $rowDelimiterBegin.$itemRowIndicatorBegin."<div class = 'grappleItem' title = '".$descriptionArray[$i]."'><img id = 'grappleGlobeAreaProfileModeGrppleAppsGrappleModeAreaFeedsAreaContentAreaItemArea' src =".$imageArray[$i]."><div class = 'grappleItemControllerArea'> <span> <span> <img id = 'grappleItemControllerAreaItem1Id' title = 'give grape' src ='data/images/core/grapple.item.controller.item.0.png'/> </span> <span> <a href = ".$urlArray[$i]."> <img id = 'grappleItemControllerAreaItem0Id' title = '".$contoller1TitleArray[$i]."' src ='data/images/core/grapple.item.controller.vineyard.item.0.png' onclick = 'popupGrappleAppFunction".$i."();' > </a> </span> </span> </div></div>".$itemRowIndicatorEnd.$rowDelimiterEnd;	
										}
									?>
								</script>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>	

		
		<div id = "grappleContentComponentEntity8">
			<div id = "grappleGlobeAreaProfileModeSettingsGrappleModeArea" >
				<div id = "grappleGlobeAreaProfileModeSettingsGrappleModeAreaFeedsArea" >
					<div id = "grappleGlobeAreaProfileModeSettingsGrappleModeAreaFeedsAreaTitleArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/header/grapple.super.tab.item.7.png" id = "grappleGlobeAreaSettingsModeAreaFeedsAreaTitleAreaComponentZero" alt="grappleSuperTabArea0" >
									</td>
									
									<td> 
										<label class ="NormalModernFontClassification" id = "grappleGlobeAreaSettingsModeAreaFeedsAreaTitleAreaComponentOne" for="name" onclick ="">my.settings</label> 
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
					
					<div id = "grappleGlobeAreaProfileModeSettingsGrappleModeAreaFeedsAreaNavigationArea">
						<table>
							<tbody>
								<tr>
									<td> 
										<img src="data/images/core/grapple.navigation.item.0.png" id = "grappleGlobeAreaSettingsModeAreaFeedsAreaNavigationAreaComponentZero" alt="graple.navigation" >
									</td>
									
									<td> 
										<img src="data/images/core/grapple.navigation.item.1.png" id = "grappleGlobeAreaSettingsModeAreaFeedsAreaNavigationAreaComponentOne" alt="graple.navigation" >
									</td> 
								</tr>
							</tbody>
						</table>
					</div>
					
					<div id = "grappleGlobeAreaProfileModeSettingsGrappleModeAreaFeedsAreaContentArea">
					</div>
				</div>
			</div>
		</div>	

		
		<script type="text/javascript">											
			function generateSignInHtmlTemplateInformation ( activeEntityId, UserName, UserEmail, UserPassword, UserBiography, UserMessages, UserTextGrapples, UserLinkGrapples, UserImageGrapples, UserAudioGrapples, UserVideoGrapples, UserProfileImageStream, UserFriendListData, UserTaskData, UserSettingsData )
			{
				createCookie ( "grappleUserEmail", UserEmail, 2 );  
				createCookie ( "grappleUserPassword", UserPassword, 2 );  
				
				generateTemplateInformation ( 'grappleHeaderAreaId', true, activeEntityId, 'grappleHeaderPreTitleAreaLabel', '@', '18', 'rgb(204,173,219)', 'grappleHeaderTitleAreaLabel', UserName, '', 'grappleHeaderImageAreaImageId', UserProfileImageStream, 'grappleSuperTabAreaItem0Id', 'data/images/header/grapple.super.tab.item.0.png', 'grappleSuperTabAreaItem1Id', 'data/images/header/grapple.super.tab.item.1.png', 'grappleSuperTabAreaItem2Id', 'data/images/header/grapple.super.tab.item.2.png', 'grappleSuperTabAreaItem3Id', 'data/images/header/grapple.super.tab.item.3.png', 'grappleSuperTabAreaItem4Id', 'data/images/header/grapple.super.tab.item.4.png', 'grappleSuperTabAreaItem5Id', 'data/images/header/grapple.super.tab.item.5.png', 'grappleSuperTabAreaItem6Id', 'data/images/header/grapple.super.tab.item.6.png', 'grappleSuperTabAreaItem7Id', 'data/images/header/grapple.super.tab.item.7.png', 'grappleSuperTabAreaItem8Id', 'data/images/header/grapple.super.tab.item.8.png' );
			}
			function generateSignOutHtmlTemplateInformation ( )
			{
				eraseCookie ( "grappleUserEmail" );  
				eraseCookie ( "grappleUserPassword" );  
			
				generateTemplateInformation ( 'grappleHeaderAreaId', false, 'grappleContentComponentEntity0', '', '', '', '', 'grappleHeaderTitleAreaLabel', 'grapple.user.name', '', 'grappleHeaderImageAreaImageId', UserProfileImageStream, 'grappleSuperTabAreaItem0Id', 'data/images/header/grapple.super.tab.item.0.png', 'grappleSuperTabAreaItem1Id', 'data/images/header/grapple.super.tab.item.1.png', 'grappleSuperTabAreaItem2Id', 'data/images/header/grapple.super.tab.item.2.png', 'grappleSuperTabAreaItem3Id', 'data/images/header/grapple.super.tab.item.3.png', 'grappleSuperTabAreaItem4Id', 'data/images/header/grapple.super.tab.item.4.png', 'grappleSuperTabAreaItem5Id', 'data/images/header/grapple.super.tab.item.5.png', 'grappleSuperTabAreaItem6Id', 'data/images/header/grapple.super.tab.item.6.png', 'grappleSuperTabAreaItem7Id', 'data/images/header/grapple.super.tab.item.7.png', 'grappleSuperTabAreaItem8Id', 'data/images/header/grapple.super.tab.item.8.png' );
			}
			function generateGenericResponse ( genericValue )
			{
				alert ( "generic value >> " + genericValue );
			}
			<?php	
				generateGrappleEntryValidationProcess ( );
			?>
		</script>
	</body>
</html>