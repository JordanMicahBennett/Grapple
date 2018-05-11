<?php
	/* author(s) details : Jordan Micah Bennett */

	//1.this function must be encapsulated in a <script> block in html destination, therein subsequenting a generic function 'generateGenericResponse' accepting one param, for generating
	//1...generic responses based on input value, ( such as a custom message )
	//2.this function must subsequent also, a generateSignInHtmlTemplateInformation , which accepts <\d+> params, contained in the same prior block as 'generateGenericResponse' function. 
	//2...this function is what generates the template based on user information via database established in _module.entry.validation.php.
	//3.this function must include email and password tags from the html destination consisting of email and password and submit button.
	
	function generateGrappleEntryValidationProcess ( )
	{
		//establish global user variables
		$userLoginSuccessEnquiry = false;
		$UserName = ""; 
		$UserEmail = ""; 
		$UserPassword = ""; 
		$UserBiography = ""; 
		$UserMessages = ""; 
		$UserTextGrapples = ""; 
		$UserLinkGrapples = ""; 
		$UserImageGrapples = ""; 
		$UserMusicGrapples = ""; 
		$UserVideoGrapples = ""; 
		$UserProfileImageStream = ""; 
		$UserFriendListData = ""; 
		$UserTaskData = ""; 
		$UserSettingsData = ""; 
		
		////////////////////////////////////////////////////////
		//BEGIN: entry (sign in) validation/detail submission //
		////////////////////////////////////////////////////////
		if ( !empty ( $_POST [ 'grappleSignInConfirmationButtonAreaButtonName' ] ) )
		{	
			//establish html sign in input components, with respect to php 
			$userLoginEmail = $_POST [ 'grappleSignInEmailRetrievalAreaComponentName' ];
			$userLoginPassword = $_POST [ 'grappleSignInPasswordRetrievalAreaComponentName' ];

			//establish validation login success test process
			foreach ( $_SESSION [ 'databaseRecordCollection' ] as $databaseRecordCollectionItem ) 
			{
				$segmentedDatabaseRecordCollection = explode ( "::", $databaseRecordCollectionItem );
				
				if ( ( $userLoginEmail == $segmentedDatabaseRecordCollection[1]) && ( $userLoginPassword == $segmentedDatabaseRecordCollection[2] ) )
				{
					$UserName = $segmentedDatabaseRecordCollection[0]; 
					$UserEmail = $segmentedDatabaseRecordCollection[1]; 
					$UserPassword = $segmentedDatabaseRecordCollection[2]; 
					$UserBiography = $segmentedDatabaseRecordCollection[3]; 
					$UserProfileImageStream = $segmentedDatabaseRecordCollection[4]; 
					
					echo "generateSignInHtmlTemplateInformation ( 'grappleContentComponentEntity1', '$UserName', '$UserEmail', '$UserPassword', '$UserBiography', '$UserMessages', '$UserTextGrapples', '$UserLinkGrapples', '$UserImageGrapples', '$UserMusicGrapples', '$UserVideoGrapples', '$UserProfileImageStream', '$UserFriendListData', '$UserTaskData', '$UserSettingsData' );";
					$userLoginSuccessEnquiry = true;
				}
			}	
			
			//establish validation login failure process
			if ( !$userLoginSuccessEnquiry )
			{
				echo 'generateGenericResponse ( "login failed, incorrect login details!" );';
			}
		}
		////////////////////////////////////////////
		//END: login validation/detail submission //
		////////////////////////////////////////////
		
		/*
		if ( $userLoginSuccessEnquiry )
		{
			///////////////////////////////////////////
			//BEGIN: show grapple entity 1 component //
			///////////////////////////////////////////
			if ( !empty ( $_POST [ 'grappleSuperTabAreaItem0Name' ] ) )
			{
				echo "generateSignInHtmlTemplateInformation ( 'grappleContentComponentEntity1', '$UserName', '$UserEmail', '$UserPassword', '$UserBiography', '$UserMessages', '$UserTextGrapples', '$UserLinkGrapples', '$UserImageGrapples', '$UserMusicGrapples', '$UserVideoGrapples', '$UserProfileImageStream', '$UserFriendListData', '$UserTaskData', '$UserSettingsData' );";
			}
			/////////////////////////////////////////
			//END: show grapple entity 1 component //
			/////////////////////////////////////////
			
			///////////////////////////////////////////
			//BEGIN: show grapple entity 2 component //
			///////////////////////////////////////////
			if ( !empty ( $_POST [ 'grappleSuperTabAreaItem1Name' ] ) )
			{
				echo "generateSignInHtmlTemplateInformation ( 'grappleContentComponentEntity2', '$UserName', '$UserEmail', '$UserPassword', '$UserBiography', '$UserMessages', '$UserTextGrapples', '$UserLinkGrapples', '$UserImageGrapples', '$UserMusicGrapples', '$UserVideoGrapples', '$UserProfileImageStream', '$UserFriendListData', '$UserTaskData', '$UserSettingsData' );";
			}
			/////////////////////////////////////////
			//END: show grapple entity 2 component //
			/////////////////////////////////////////
			
			///////////////////////////////////////////
			//BEGIN: show grapple entity 3 component //
			///////////////////////////////////////////
			if ( !empty ( $_POST [ 'grappleSuperTabAreaItem2Name' ] ) )
			{
				echo "generateSignInHtmlTemplateInformation ( 'grappleContentComponentEntity3', '$UserName', '$UserEmail', '$UserPassword', '$UserBiography', '$UserMessages', '$UserTextGrapples', '$UserLinkGrapples', '$UserImageGrapples', '$UserMusicGrapples', '$UserVideoGrapples', '$UserProfileImageStream', '$UserFriendListData', '$UserTaskData', '$UserSettingsData' );";
			}
			/////////////////////////////////////////
			//END: show grapple entity 3 component //
			/////////////////////////////////////////
			
			///////////////////////////////////////////
			//BEGIN: show grapple entity 4 component //
			///////////////////////////////////////////
			if ( !empty ( $_POST [ 'grappleSuperTabAreaItem3Name' ] ) )
			{
				echo "generateSignInHtmlTemplateInformation ( 'grappleContentComponentEntity4', '$UserName', '$UserEmail', '$UserPassword', '$UserBiography', '$UserMessages', '$UserTextGrapples', '$UserLinkGrapples', '$UserImageGrapples', '$UserMusicGrapples', '$UserVideoGrapples', '$UserProfileImageStream', '$UserFriendListData', '$UserTaskData', '$UserSettingsData' );";
			}
			/////////////////////////////////////////
			//END: show grapple entity 4 component //
			/////////////////////////////////////////
			
			///////////////////////////////////////////
			//BEGIN: show grapple entity 5 component //
			///////////////////////////////////////////
			if ( !empty ( $_POST [ 'grappleSuperTabAreaItem4Name' ] ) )
			{
				echo "generateSignInHtmlTemplateInformation ( 'grappleContentComponentEntity5', '$UserName', '$UserEmail', '$UserPassword', '$UserBiography', '$UserMessages', '$UserTextGrapples', '$UserLinkGrapples', '$UserImageGrapples', '$UserMusicGrapples', '$UserVideoGrapples', '$UserProfileImageStream', '$UserFriendListData', '$UserTaskData', '$UserSettingsData' );";
			}
			/////////////////////////////////////////
			//END: show grapple entity 5 component //
			/////////////////////////////////////////
			
			///////////////////////////////////////////
			//BEGIN: show grapple entity 6 component //
			///////////////////////////////////////////
			if ( !empty ( $_POST [ 'grappleSuperTabAreaItem5Name' ] ) )
			{
				echo "generateSignInHtmlTemplateInformation ( 'grappleContentComponentEntity6', '$UserName', '$UserEmail', '$UserPassword', '$UserBiography', '$UserMessages', '$UserTextGrapples', '$UserLinkGrapples', '$UserImageGrapples', '$UserMusicGrapples', '$UserVideoGrapples', '$UserProfileImageStream', '$UserFriendListData', '$UserTaskData', '$UserSettingsData' );";
			}
			/////////////////////////////////////////
			//END: show grapple entity 6 component //
			/////////////////////////////////////////
			
			///////////////////////////////////////////
			//BEGIN: show grapple entity 7 component //
			///////////////////////////////////////////
			if ( !empty ( $_POST [ 'grappleSuperTabAreaItem6Name' ] ) )
			{
				echo "generateSignInHtmlTemplateInformation ( 'grappleContentComponentEntity7', '$UserName', '$UserEmail', '$UserPassword', '$UserBiography', '$UserMessages', '$UserTextGrapples', '$UserLinkGrapples', '$UserImageGrapples', '$UserMusicGrapples', '$UserVideoGrapples', '$UserProfileImageStream', '$UserFriendListData', '$UserTaskData', '$UserSettingsData' );";
			}
			/////////////////////////////////////////
			//END: show grapple entity 7 component //
			/////////////////////////////////////////
			
			///////////////////////////////////////////
			//BEGIN: show grapple entity 8 component //
			///////////////////////////////////////////
			if ( !empty ( $_POST [ 'grappleSuperTabAreaItem7Name' ] ) )
			{
				echo "generateSignInHtmlTemplateInformation ( 'grappleContentComponentEntity8', '$UserName', '$UserEmail', '$UserPassword', '$UserBiography', '$UserMessages', '$UserTextGrapples', '$UserLinkGrapples', '$UserImageGrapples', '$UserMusicGrapples', '$UserVideoGrapples', '$UserProfileImageStream', '$UserFriendListData', '$UserTaskData', '$UserSettingsData' );";
			}
			/////////////////////////////////////////
			//END: show grapple entity 8 component //
			/////////////////////////////////////////
			
			///////////////////////////////////////////
			//BEGIN: show grapple entity 9 component //
			///////////////////////////////////////////
			if ( !empty ( $_POST [ 'grappleSuperTabAreaItem8Name' ] ) )
			{
				echo "generateSignInHtmlTemplateInformation ( 'grappleContentComponentEntity9', '$UserName', '$UserEmail', '$UserPassword', '$UserBiography', '$UserMessages', '$UserTextGrapples', '$UserLinkGrapples', '$UserImageGrapples', '$UserMusicGrapples', '$UserVideoGrapples', '$UserProfileImageStream', '$UserFriendListData', '$UserTaskData', '$UserSettingsData' );";
			}
			/////////////////////////////////////////
			//END: show grapple entity 9 component //
			/////////////////////////////////////////
			
			///////////////////////////////////////////
			//BEGIN: show grapple entity 10 component //
			///////////////////////////////////////////
			if ( !empty ( $_POST [ 'grappleSuperTabAreaItem9Name' ] ) )
			{
				echo "generateSignInHtmlTemplateInformation ( 'grappleContentComponentEntity10', '$UserName', '$UserEmail', '$UserPassword', '$UserBiography', '$UserMessages', '$UserTextGrapples', '$UserLinkGrapples', '$UserImageGrapples', '$UserMusicGrapples', '$UserVideoGrapples', '$UserProfileImageStream', '$UserFriendListData', '$UserTaskData', '$UserSettingsData' );";
			}
			/////////////////////////////////////////
			//END: show grapple entity 10 component //
			/////////////////////////////////////////
			
			///////////////////////////////////////////
			//BEGIN: show grapple entity 11 component //
			///////////////////////////////////////////
			if ( !empty ( $_POST [ 'grappleSuperTabAreaItem10Name' ] ) )
			{
				echo "generateSignInHtmlTemplateInformation ( 'grappleContentComponentEntity11', '$UserName', '$UserEmail', '$UserPassword', '$UserBiography', '$UserMessages', '$UserTextGrapples', '$UserLinkGrapples', '$UserImageGrapples', '$UserMusicGrapples', '$UserVideoGrapples', '$UserProfileImageStream', '$UserFriendListData', '$UserTaskData', '$UserSettingsData' );";
			}
			/////////////////////////////////////////
			//END: show grapple entity 10 component //
			/////////////////////////////////////////
			
			///////////////////////////////////////////
			//BEGIN: show grapple entity 0 component //
			///////////////////////////////////////////
			if ( !empty ( $_POST [ 'grappleSuperTabAreaItem11Name' ] ) )
			{
				echo "generateSignInHtmlTemplateInformation ( 'grappleContentComponentEntity0', '$UserName', '$UserEmail', '$UserPassword', '$UserBiography', '$UserMessages', '$UserTextGrapples', '$UserLinkGrapples', '$UserImageGrapples', '$UserMusicGrapples', '$UserVideoGrapples', '$UserProfileImageStream', '$UserFriendListData', '$UserTaskData', '$UserSettingsData' );";
			}
			/////////////////////////////////////////
			//END: show grapple entity 0 component //
			/////////////////////////////////////////
		}
		*/
	}
?>