<!--DOCTYPE html -->
<!--
	author(s) details : Jordan Micah Bennett
-->
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
		<?php
			session_start(); 
			
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
					
				$loginSuccess = false;
				
				if ( !empty ( $_POST [ 'grappleActionAttemptButtonName' ] ) )
				{	
					//establish html sign in input components, with respect to php 
					$userLoginEmail = $_SESSION [ 'GRAPPLE_ACTION_USER_EMAIL' ];
					$userLoginPassword = $_SESSION [ 'GRAPPLE_ACTION_USER_PASSWORD' ];
					$grappleItemTitle = $_POST [ 'grappleItemTitleName' ];
					$grappleItemDescription = $_POST [ 'grappleItemDescriptionName' ];
					$grappleItemStream = $_SESSION [ 'GRAPPLE_ACTION_CONTENT_STREAM' ];
					$grappleItemSource = $_SESSION [ 'GRAPPLE_ACTION_CONTENT_SOURCE' ];
					$grappleDateTag = date('Y-m-d H:i:s');
					$grappleItemPublicationStatus = $_POST [ 'grappleItemPublicationStatus' ];
					
					//install title for user if user didn't give any title..
					if ( $grappleItemTitle == "" ) 
						$grappleItemTitle = "Untitled";
					else
						$grappleItemTitle = $grappleItemTitle;
					
					//establish validation login success test process
					foreach ( $_SESSION [ 'databaseRecordCollection' ] as $databaseRecordCollectionItem ) 
					{
						$segmentedDatabaseRecordCollection = explode ( "::", $databaseRecordCollectionItem );
						
						if ( ( $userLoginEmail == $segmentedDatabaseRecordCollection[1]) && ( $userLoginPassword == $segmentedDatabaseRecordCollection[2] ) )
						{
							////////////////////////////////////////////////////////////////////////////////////////////////
							//BEGIN ADD NEW USER TEXT BASED DETAILS PROCESSS - COMPONENT.1
							////////////////////////////////////////////////////////////////////////////////////////////////		
							//derive user name
							$userName = "";
							foreach ( $_SESSION [ "databaseRecordCollection" ] as $grappleItem )
							{
								$segmentedDatabaseRecordCollection = explode ( "::", $grappleItem ); 
								
								if ( $segmentedDatabaseRecordCollection [ 1 ] == $userLoginEmail )
									$userName = $segmentedDatabaseRecordCollection [ 0 ];
							}
							//establish results from database
							$connection -> query ("insert into GrappleVideoTable(UserEmail, UserName, ItemSource, ItemStream, ItemTitle, ItemDescription, ItemDateCreated, ItemBouquetName, ItemPublicationStatus) values ('$userLoginEmail', '$userName', '$grappleItemSource', '$grappleItemStream', '$grappleItemTitle', '$grappleItemDescription', '$grappleDateTag', '', '$grappleItemPublicationStatus')");
				
							echo '<input id = "grappleActionCompletionSuccessId" class = "regularInput" type = "submit" value = "grappled!" >';
							
							$loginSuccess = true;
						}
					}
					
					if($loginSuccess == false)
					{
						echo '<input id = "grappleActionCompletionFailureId" class = "regularInput" type = "submit" value = "you are not logged in!" >';
					}
				}
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