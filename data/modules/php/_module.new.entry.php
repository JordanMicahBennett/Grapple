<!--DOCTYPE html -->
<!--
	author(s) details : Jordan Micah Bennett
-->

<?php 
	include ( '../../modules/php/_module.php.header.php' );
	include ( '../../modules/php/_module.entry.initialization.php' );
	include ( '../../modules/php/_module.entry.validation.php' );
?>


<html id = "grappleBackgroundArea">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" href="../../css/template.css" />
	</head>
	
	<script>
		//////////////////////////////
		//establish background image//
		document.getElementById('grappleBackgroundArea').style.backgroundImage = "url(../../images/foundation/grapple.background.png)";
		document.getElementById('grappleBackgroundArea').style.backgroundRepeat = "no-repeat";
		document.getElementById('grappleBackgroundArea').style.backgroundSize = "" + screen.width + " " + screen.height;
	</script>
	
	<body>

		
		<div id ="grappleContentComponentGoBackEntity">   <!-- GO BACK TO INDEX PAGE -->
			<label class ="NormalModernFontClassification" > sign up complete! </label> 
			<input class ="regularInput" type = "submit" onclick = "location.href='../../../index.php';" value = "go back" />
		</div>
		
		<?php
				////////////////////////////////////////////////////////////////////////////////////////////////
				//BEGIN SQL CONNECTION PROCESSS
				////////////////////////////////////////////////////////////////////////////////////////////////
				//establish database connection requirements
					//estabish database connection requirements
					$_SESSION [ 'dbHost' ] = 'localhost';
					$_SESSION [ 'dbUsername' ] = 'root';
					$_SESSION [ 'dbPassword' ] = '';
					$_SESSION [ 'dbName' ] = 'grapple_db';
								
				
				//establish database connection
					//connection to the database
					$connection = mysqli_connect ( $_SESSION [ 'dbHost' ], $_SESSION [ 'dbUsername' ], $_SESSION [ 'dbPassword' ], $_SESSION [ 'dbName' ] );
					//establish connection verification
					if ( mysqli_connect_errno ( ) )
					{
						//echo "Failed to connect to MySQL: " . mysqli_connect_error ( );
					}
				////////////////////////////////////////////////////////////////////////////////////////////////
				//END SQL CONNECTION PROCESSS
				////////////////////////////////////////////////////////////////////////////////////////////////	
				
				
				////////////////////////////////////////////////////////////////////////////////////////////////
				//BEGIN ADD NEW USER TEXT BASED DETAILS PROCESSS - COMPONENT.0
				////////////////////////////////////////////////////////////////////////////////////////////////				
				//establish user input html element variables
				$newUserName = $_POST [ 'grappleSignUpUserNameRetrievalAreaComponentName' ];
				$newUserEmail = $_POST [ 'grappleSignUpUserEmailRetrievalAreaComponentName' ];
				$newUserPassword = $_POST [ 'grappleSignUpUserPasswordRetrievalAreaComponentName' ];
				$newUserBiography = 'none';
				
				////////////////////////////////////////////////////////////////////////////////////////////////
				//BEGIN ADD NEW USER TEXT BASED DETAILS PROCESSS - COMPONENT.0
				////////////////////////////////////////////////////////////////////////////////////////////////	
				
				
				////////////////////////////////////////////////////////////////////////////////////////////////
				//BEGIN ADD NEW USER IMAGE BASED DETAILS PROCESSS - the image file is added to the server
				////////////////////////////////////////////////////////////////////////////////////////////////
				$serverHomeUrl = "C:/xampp/htdocs/grapple/";
				$newUserCoreResourceStream = $serverHomeUrl."data/user.data/".$newUserEmail;
				$newUserGrappleTextStream = $serverHomeUrl."data/user.data/".$newUserEmail."/texts";
				$newUserGrappleUrlStream = $serverHomeUrl."data/user.data/".$newUserEmail."/urls";
				$newUserGrappleImagesStream = $serverHomeUrl."data/user.data/".$newUserEmail."/images";
				$newUserGrappleMusicsStream = $serverHomeUrl."data/user.data/".$newUserEmail."/musics";
				$newUserGrappleVideosStream = $serverHomeUrl."data/user.data/".$newUserEmail."/videos";
				$userProfilePictureSampleCoreStream = $serverHomeUrl."data/images/photos/header";
				$userProfilePictureSampleNameStream = $serverHomeUrl."data/images/photos/header/grapple.sample.header.image.png";
				
				
				
				mkdir($newUserCoreResourceStream);
				mkdir($newUserGrappleTextStream);
				mkdir($newUserGrappleUrlStream);
				mkdir($newUserGrappleImagesStream);
				mkdir($newUserGrappleMusicsStream);
				mkdir($newUserGrappleVideosStream);
				
				$userProfilePictureUiImageName = $_FILES['grappleSignUpProfileImageStreamRetrievalAreaComponentName']['name'];
				$newUserProfileSampleImageStorageStream = $newUserCoreResourceStream."/profile.picture.png";
				$newUserProfileImageStorageStream = $newUserCoreResourceStream."/".$userProfilePictureUiImageName;
				$newUserProfileImageDatabaseStream = "data/user.data/".$newUserEmail."/profile.picture.png";
				$allowedExts = array("gif", "jpeg", "jpg", "png");
				$temp = explode(".", $_FILES["grappleSignUpProfileImageStreamRetrievalAreaComponentName"]["name"]);
				
				$extension = end($temp);
				if 
					(
						(
							($_FILES["grappleSignUpProfileImageStreamRetrievalAreaComponentName"]["type"] == "image/gif")
							|| 
							($_FILES["grappleSignUpProfileImageStreamRetrievalAreaComponentName"]["type"] == "image/jpeg")
							|| 
							($_FILES["grappleSignUpProfileImageStreamRetrievalAreaComponentName"]["type"] == "image/jpg")
							|| 
							($_FILES["grappleSignUpProfileImageStreamRetrievalAreaComponentName"]["type"] == "image/pjpeg")
							|| 
							($_FILES["grappleSignUpProfileImageStreamRetrievalAreaComponentName"]["type"] == "image/x-png")
							|| 
							($_FILES["grappleSignUpProfileImageStreamRetrievalAreaComponentName"]["type"] == "image/png")
						)
						&& 
							($_FILES["grappleSignUpProfileImageStreamRetrievalAreaComponentName"]["size"] < 524288) //limit file to 512 kb
						&& 
							in_array($extension, $allowedExts)
					)
					{
						if ($_FILES["grappleSignUpProfileImageStreamRetrievalAreaComponentName"]["error"] > 0)
						{
							//echo "Return Code: " . $_FILES["grappleSignUpProfileImageStreamRetrievalAreaComponentName"]["error"] . "<br>";
						}
						else
						{
							if(copy($_FILES['grappleSignUpProfileImageStreamRetrievalAreaComponentName']['tmp_name'], $newUserProfileImageStorageStream))
							{
								//rename in tandem with database name
								rename($newUserCoreResourceStream."/".$_FILES['grappleSignUpProfileImageStreamRetrievalAreaComponentName']['name'], $newUserCoreResourceStream."/profile.picture.png");
	
								//display response message
								//echo 'generateGenericResponse ( "new user\'s image details added!" );';
							}
						}
					}
					else
					{
						//otherwise copy placeholder grapple profile picture image from grapple server file system
						if(copy($userProfilePictureSampleNameStream, $newUserProfileSampleImageStorageStream))
						{
						}		
						
						//display response message
						//echo 'generateGenericResponse ( "photo upload failure!" );';	
					}
				////////////////////////////////////////////////////////////////////////////////////////////////
				//END ADD NEW USER IMAGE BASED DETAILS PROCESSS
				////////////////////////////////////////////////////////////////////////////////////////////////
				
							
							
				////////////////////////////////////////////////////////////////////////////////////////////////
				//BEGIN ADD NEW USER TEXT BASED DETAILS PROCESSS - COMPONENT.1
				////////////////////////////////////////////////////////////////////////////////////////////////		
				//establish results from database
				$connection -> query ("insert into GrappleCoreTable(UserName, UserEmail, UserPassword, UserBiography, UserProfileImageStream) values ('$newUserName', '$newUserEmail', '$newUserPassword', '$newUserBiography', '$newUserProfileImageDatabaseStream')");

				//display success!
				//echo 'generateGenericResponse ( "new user\'s text details.component.1.complete!" );';
				////////////////////////////////////////////////////////////////////////////////////////////////
				//END ADD NEW USER TEXT BASED DETAILS PROCESSS - COMPONENT.1
				////////////////////////////////////////////////////////////////////////////////////////////////
				
				
				////////////////////////////////////////////////////////////////////////////////////////////////
				//BEGIN SQL CONNECTION TERMINATION PROCESS
				////////////////////////////////////////////////////////////////////////////////////////////////
				//establish connection termination
				mysqli_close ( $connection );
				////////////////////////////////////////////////////////////////////////////////////////////////
				//END SQL CONNECTION TERMINATION PROCESS
				////////////////////////////////////////////////////////////////////////////////////////////////
		?>
	</body>
</html>