<?php
	
	/* author(s) details : Jordan Micah Bennett */
	
	//establish database connection requirements
		//estabish database connection requirements
		$_SESSION [ 'dbHost' ] = 'localhost';
		$_SESSION [ 'dbUsername' ] = 'root';
		$_SESSION [ 'dbPassword' ] = '';
		$_SESSION [ 'dbName' ] = 'grapple_db';
					
	//establish validation requriements
		//establish php array of database content
		$userDerivedDatabaseRecordCollection = array ( );
		$userDerivedGrappleTextDatabaseRecordCollection = array ( );
		$userDerivedGrappleUrlDatabaseRecordCollection = array ( );
		$userDerivedGrappleImageDatabaseRecordCollection = array ( );
		$userDerivedGrappleAudioDatabaseRecordCollection = array ( );
		$userDerivedGrappleVideoDatabaseRecordCollection = array ( );
		$userDerivedGrappleGrapplecationDatabaseRecordCollection = array ( );
		$userDerivedGrappleCocktailDatabaseRecordCollection = array ( );
		$userDerivedGrappleMyCocktailDatabaseRecordCollection = array ( );
		$userDerivedGrappleItemBouquetNameCollection = array ( );
		
	//establish processes
		//establish database connection
		//connection to the database
		$connection = mysqli_connect ( $_SESSION [ 'dbHost' ], $_SESSION [ 'dbUsername' ], $_SESSION [ 'dbPassword' ], $_SESSION [ 'dbName' ] );

		//establish connection verification
		if ( mysqli_connect_errno ( ) )
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error ( );
		}

		//establish results from database
		$result = mysqli_query ( $connection,"select * from GrappleCoreTable" );
		$textGrappleResult = mysqli_query ( $connection,"select * from GrappleTextTable" );
		$urlGrappleResult = mysqli_query ( $connection,"select * from GrappleUrlTable" );
		$imageGrappleResult = mysqli_query ( $connection,"select * from GrappleImageTable" );
		$audioGrappleResult = mysqli_query ( $connection,"select * from GrappleAudioTable" );
		$videoGrappleResult = mysqli_query ( $connection,"select * from GrappleVideoTable" );
		$grapplecationGrappleResult = mysqli_query ( $connection,"select * from GrappleAppsTable" );
		$cocktailResult = mysqli_query ( $connection,"select * from GrappleCocktailTable" );
		$myCocktailResult = mysqli_query ( $connection,"select * from GrappleMyCocktailTable" );
		$bouquetNameCollectionResult = mysqli_query ( $connection,"select * from GrappleItemBouquetNameCollectionTable" );
		
		while ( $row = mysqli_fetch_array ( $result ) )
			array_push ( $userDerivedDatabaseRecordCollection, $row [ 'UserName' ].'::'.$row [ 'UserEmail' ].'::'.$row [ 'UserPassword' ].'::'.$row [ 'UserBiography' ].'::'.$row [ 'UserProfileImageStream' ] );

		while ( $textRow = mysqli_fetch_array ( $textGrappleResult ) )
			array_push ( $userDerivedGrappleTextDatabaseRecordCollection, $textRow [ 'UserEmail' ].'::'.$textRow [ 'UserName' ].'::'.$textRow [ 'ItemSource' ].'::'.$textRow [ 'ItemStream' ].'::'.$textRow [ 'ItemTitle' ].'::'.$textRow [ 'ItemDescription' ].'::'.$textRow [ 'ItemDateCreated' ].'::'.$textRow [ 'ItemBouquetName' ].'::'.$textRow [ 'ItemPublicationStatus' ] );
		
		while ( $urlRow = mysqli_fetch_array ( $urlGrappleResult ) )
			array_push ( $userDerivedGrappleUrlDatabaseRecordCollection, $urlRow [ 'UserEmail' ].'::'.$urlRow [ 'UserName' ].'::'.$urlRow [ 'ItemSource' ].'::'.$urlRow [ 'ItemStream' ].'::'.$urlRow [ 'ItemTitle' ].'::'.$urlRow [ 'ItemDescription' ].'::'.$urlRow [ 'ItemDateCreated' ].'::'.$urlRow [ 'ItemBouquetName' ].'::'.$urlRow [ 'ItemPublicationStatus' ] );
			
		while ( $imageRow = mysqli_fetch_array ( $imageGrappleResult ) )
			array_push ( $userDerivedGrappleImageDatabaseRecordCollection, $imageRow [ 'UserEmail' ].'::'.$imageRow [ 'UserName' ].'::'.$imageRow [ 'ItemSource' ].'::'.$imageRow [ 'ItemStream' ].'::'.$imageRow [ 'ItemTitle' ].'::'.$imageRow [ 'ItemDescription' ].'::'.$imageRow [ 'ItemDateCreated' ].'::'.$imageRow [ 'ItemBouquetName' ].'::'.$imageRow [ 'ItemPublicationStatus' ] );
		
		while ( $audioRow = mysqli_fetch_array ( $audioGrappleResult ) )
			array_push ( $userDerivedGrappleAudioDatabaseRecordCollection, $audioRow [ 'UserEmail' ].'::'.$audioRow [ 'UserName' ].'::'.$audioRow [ 'ItemSource' ].'::'.$audioRow [ 'ItemStream' ].'::'.$audioRow [ 'ItemTitle' ].'::'.$audioRow [ 'ItemDescription' ].'::'.$audioRow [ 'ItemDateCreated' ].'::'.$audioRow [ 'ItemBouquetName' ].'::'.$audioRow [ 'ItemPublicationStatus' ] );
			
		while ( $videoRow = mysqli_fetch_array ( $videoGrappleResult ) )
			array_push ( $userDerivedGrappleVideoDatabaseRecordCollection, $videoRow [ 'UserEmail' ].'::'.$videoRow [ 'UserName' ].'::'.$videoRow [ 'ItemSource' ].'::'.$videoRow [ 'ItemStream' ].'::'.$videoRow [ 'ItemTitle' ].'::'.$videoRow [ 'ItemDescription' ].'::'.$videoRow [ 'ItemDateCreated' ].'::'.$videoRow [ 'ItemBouquetName' ].'::'.$videoRow [ 'ItemPublicationStatus' ] );
			
		while ( $grapplecationRow = mysqli_fetch_array ( $grapplecationGrappleResult ) )
			array_push ( $userDerivedGrappleGrapplecationDatabaseRecordCollection, $grapplecationRow [ 'ItemSource' ].'::'.$grapplecationRow [ 'ItemTitle' ].'::'.$grapplecationRow [ 'ItemDescription' ].'::'.$grapplecationRow [ 'ItemCoverSource' ].'::'.$grapplecationRow [ 'ItemController1Title' ] );
			
		while ( $coctailRow = mysqli_fetch_array ( $cocktailResult ) )
			array_push ( $userDerivedGrappleCocktailDatabaseRecordCollection, $coctailRow [ 'ItemCoverSource' ].'::'.$coctailRow [ 'ItemTitle' ].'::'.$coctailRow [ 'ItemDescription' ].'::'.$coctailRow [ 'ItemController0Title' ].'::'.$coctailRow [ 'ItemController1Title' ] );

		while ( $myCocktailRow = mysqli_fetch_array ( $myCocktailResult ) )
			array_push ( $userDerivedGrappleMyCocktailDatabaseRecordCollection, $myCocktailRow [ 'ItemCoverSource' ].'::'.$myCocktailRow [ 'ItemTitle' ].'::'.$myCocktailRow [ 'ItemDescription' ].'::'.$myCocktailRow [ 'ItemController0Title' ].'::'.$myCocktailRow [ 'ItemController1Title' ] );
				
		while ( $bouquetNameCollectionRow = mysqli_fetch_array ( $bouquetNameCollectionResult ) )
			array_push ( $userDerivedGrappleItemBouquetNameCollection, $bouquetNameCollectionRow [ 'UserEmail' ].'::'.$bouquetNameCollectionRow [ 'ItemBouquetNameCollectionItem' ].'::'.$bouquetNameCollectionRow [ 'ItemType' ] );
							
		//establish session variables as accumilation of records from database
		$_SESSION [ 'databaseRecordCollection' ] = $userDerivedDatabaseRecordCollection;
		$_SESSION [ 'TEXT_GRAPPLES' ] = $userDerivedGrappleTextDatabaseRecordCollection;
		$_SESSION [ 'URL_GRAPPLES' ] = $userDerivedGrappleUrlDatabaseRecordCollection;
		$_SESSION [ 'IMAGE_GRAPPLES' ] = $userDerivedGrappleImageDatabaseRecordCollection;
		$_SESSION [ 'AUDIO_GRAPPLES' ] = $userDerivedGrappleAudioDatabaseRecordCollection;
		$_SESSION [ 'VIDEO_GRAPPLES' ] = $userDerivedGrappleVideoDatabaseRecordCollection;
		$_SESSION [ 'GRAPPLECATION_GRAPPLES' ] = $userDerivedGrappleGrapplecationDatabaseRecordCollection;
		$_SESSION [ 'COCKTAIL_GRAPPLES' ] = $userDerivedGrappleCocktailDatabaseRecordCollection;
		$_SESSION [ 'MY_COCKTAIL_GRAPPLES' ] = $userDerivedGrappleMyCocktailDatabaseRecordCollection;
		$_SESSION [ 'BOUQUET_NAME_COLLECTION_GRAPPLES' ] = $userDerivedGrappleItemBouquetNameCollection;
		
		/*
		//establish user specific session variables to hold derived data
		foreach ( $_SESSION [ 'BOUQUET_NAME_COLLECTION_GRAPPLES' ] as $databaseRecordCollectionItem ) 
		{
			$segmentedDatabaseRecordCollection = explode ( "::", $databaseRecordCollectionItem ); 
			echo '{'.$segmentedDatabaseRecordCollection[1].'}  |  ';
		}*/
		
		
		
		//establish connection termination
		mysqli_close ( $connection );
?>