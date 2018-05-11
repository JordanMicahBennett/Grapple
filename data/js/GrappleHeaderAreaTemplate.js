// Author: Jordan Micah Bennett, Grapple 2013
// Author-website: folioverse.appspot.com 


////////////////
// ATTRIBUTES //
////////////////
	//////////////////////
	//grapple.header.area//
	//////////////////////
			
		/////////////////////////////
		//grapple.header.banner.area//
		/////////////////////////////
			//////////////////////////////////////
			//grapple.header.pre.title.area//
			//////////////////////////////////////
			var headerPreTitleAreaId = "";
			var headerPreTitleAreaText = "";
			//////////////////////////////////////
			//grapple.header.title.area//
			//////////////////////////////////////
			var headerTitleAreaId = "";
			var headerTitleAreaText = "";
			///////////////////////////////////
			//grapple.header.banner.image.area//
			///////////////////////////////////
			var headerImageAreaFileLocation = "";
			var headerImageAreaId = "";
			/////////////////////////////////////
			//grapple.header.banner.super.tabs //
			/////////////////////////////////////
			var headerSuperTabItem0AreaFileLocation = "";
			var headerSuperTabItem0AreaId = "";
			var headerSuperTabItem1AreaFileLocation = "";
			var headerSuperTabItem1AreaId = "";	
			var headerSuperTabItem2AreaFileLocation = "";
			var headerSuperTabItem2AreaId = "";
			var headerSuperTabItem3AreaFileLocation = "";
			var headerSuperTabItem3AreaId = "";
			var headerSuperTabItem4AreaFileLocation = "";
			var headerSuperTabItem4AreaId = "";	
			var headerSuperTabItem5AreaFileLocation = "";
			var headerSuperTabItem5AreaId = "";
			var headerSuperTabItem6AreaFileLocation = "";
			var headerSuperTabItem6AreaId = "";
			var headerSuperTabItem7AreaFileLocation = "";
			var headerSuperTabItem7AreaId = "";
			var headerSuperTabItem8AreaFileLocation = "";
			var headerSuperTabItem8AreaId = "";
			var headerSuperTabItem9AreaFileLocation = "";
			var headerSuperTabItem9AreaId = "";
			var headerSuperTabItem10AreaFileLocation = "";
			var headerSuperTabItem10AreaId = "";
			var headerSuperTabItem11AreaFileLocation = "";
			var headerSuperTabItem11AreaId = "";
			var headerSuperTabItem12AreaFileLocation = "";
			var headerSuperTabItem12AreaId = "";
/////////////////
// CONSTRUCTOR //
/////////////////
function GrappleHeaderAreaTemplate ( )
{
}
			
/////////////
// METHODS //
/////////////
	//////////////
	// MUTATORS //
	//////////////
	GrappleHeaderAreaTemplate.prototype.establishHeaderPrePreTitleArea = function ( headerPreTitleAreaId, headerPreTitleAreaText, headerPreTitleAreaTextSize, headerPreTitleAreaTextColour )
	{
		this.headerPreTitleAreaId = headerPreTitleAreaId;
		this.headerPreTitleAreaText = headerPreTitleAreaText;
		
		document.getElementById ( headerPreTitleAreaId ).innerHTML = headerPreTitleAreaText;
		document.getElementById ( headerPreTitleAreaId ).style.fontSize = headerPreTitleAreaTextSize;
		document.getElementById ( headerPreTitleAreaId ).style.color = headerPreTitleAreaTextColour;
		//alert("success.headerImageAreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderTitleArea = function ( headerTitleAreaId, headerTitleAreaText )
	{
		this.headerTitleAreaId = headerTitleAreaId;
		this.headerTitleAreaText = headerTitleAreaText;
		
		document.getElementById ( headerTitleAreaId ).innerHTML = headerTitleAreaText;
		//alert("success.headerImageAreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderImageArea = function ( headerImageAreaId, headerImageAreaFileLocation )
	{
		this.headerImageAreaId = headerImageAreaId;
		this.headerImageAreaFileLocation = headerImageAreaFileLocation;
		
		document.getElementById ( headerImageAreaId ).src = headerImageAreaFileLocation;
		//alert("success.headerImageAreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderSuperTabItem0Area = function ( headerSuperTabItem0AreaId, headerSuperTabItem0AreaFileLocation )
	{
		this.headerSuperTabItem0AreaId = headerSuperTabItem0AreaId;
		this.headerSuperTabItem0AreaFileLocation = headerSuperTabItem0AreaFileLocation;
		
		document.getElementById ( headerSuperTabItem0AreaId ).src = headerSuperTabItem0AreaFileLocation;
		//alert("success.headerSuperTabItem0AreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderSuperTabItem1Area = function ( headerSuperTabItem1AreaId, headerSuperTabItem1AreaFileLocation )
	{
		this.headerSuperTabItem1AreaId = headerSuperTabItem1AreaId;
		this.headerSuperTabItem1AreaFileLocation = headerSuperTabItem1AreaFileLocation;
		
		document.getElementById ( headerSuperTabItem1AreaId ).src = headerSuperTabItem1AreaFileLocation;
		//alert("success.headerSuperTabItem1AreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderSuperTabItem2Area = function ( headerSuperTabItem2AreaId, headerSuperTabItem2AreaFileLocation )
	{
		this.headerSuperTabItem2AreaId = headerSuperTabItem2AreaId;
		this.headerSuperTabItem2AreaFileLocation = headerSuperTabItem2AreaFileLocation;
		
		document.getElementById ( headerSuperTabItem2AreaId ).src = headerSuperTabItem2AreaFileLocation;
		//alert("success.headerSuperTabItem2AreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderSuperTabItem3Area = function ( headerSuperTabItem3AreaId, headerSuperTabItem3AreaFileLocation )
	{
		this.headerSuperTabItem3AreaId = headerSuperTabItem3AreaId;
		this.headerSuperTabItem3AreaFileLocation = headerSuperTabItem3AreaFileLocation;
		
		document.getElementById ( headerSuperTabItem3AreaId ).src = headerSuperTabItem3AreaFileLocation;
		//alert("success.headerSuperTabItem3AreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderSuperTabItem4Area = function ( headerSuperTabItem4AreaId, headerSuperTabItem4AreaFileLocation )
	{
		this.headerSuperTabItem4AreaId = headerSuperTabItem4AreaId;
		this.headerSuperTabItem4AreaFileLocation = headerSuperTabItem4AreaFileLocation;
		
		document.getElementById ( headerSuperTabItem4AreaId ).src = headerSuperTabItem4AreaFileLocation;
		//alert("success.headerSuperTabItem4AreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderSuperTabItem5Area = function ( headerSuperTabItem5AreaId, headerSuperTabItem5AreaFileLocation )
	{
		this.headerSuperTabItem5AreaId = headerSuperTabItem5AreaId;
		this.headerSuperTabItem5AreaFileLocation = headerSuperTabItem5AreaFileLocation;
		
		document.getElementById ( headerSuperTabItem5AreaId ).src = headerSuperTabItem5AreaFileLocation;
		//alert("success.headerSuperTabItem5AreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderSuperTabItem6Area = function ( headerSuperTabItem6AreaId, headerSuperTabItem6AreaFileLocation )
	{
		this.headerSuperTabItem6AreaId = headerSuperTabItem6AreaId;
		this.headerSuperTabItem6AreaFileLocation = headerSuperTabItem6AreaFileLocation;
		
		document.getElementById ( headerSuperTabItem6AreaId ).src = headerSuperTabItem6AreaFileLocation;
		//alert("success.headerSuperTabItem6AreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderSuperTabItem7Area = function ( headerSuperTabItem7AreaId, headerSuperTabItem7AreaFileLocation )
	{
		this.headerSuperTabItem7AreaId = headerSuperTabItem7AreaId;
		this.headerSuperTabItem7AreaFileLocation = headerSuperTabItem7AreaFileLocation;
		
		document.getElementById ( headerSuperTabItem7AreaId ).src = headerSuperTabItem7AreaFileLocation;
		//alert("success.headerSuperTabItem7AreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderSuperTabItem8Area = function ( headerSuperTabItem8AreaId, headerSuperTabItem8AreaFileLocation )
	{
		this.headerSuperTabItem8AreaId = headerSuperTabItem8AreaId;
		this.headerSuperTabItem8AreaFileLocation = headerSuperTabItem8AreaFileLocation;
		
		document.getElementById ( headerSuperTabItem8AreaId ).src = headerSuperTabItem8AreaFileLocation;
		//alert("success.headerSuperTabItem8AreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderSuperTabItem9Area = function ( headerSuperTabItem9AreaId, headerSuperTabItem9AreaFileLocation )
	{
		this.headerSuperTabItem9AreaId = headerSuperTabItem9AreaId;
		this.headerSuperTabItem9AreaFileLocation = headerSuperTabItem9AreaFileLocation;
		
		document.getElementById ( headerSuperTabItem9AreaId ).src = headerSuperTabItem9AreaFileLocation;
		//alert("success.headerSuperTabItem9AreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderSuperTabItem10Area = function ( headerSuperTabItem10AreaId, headerSuperTabItem10AreaFileLocation )
	{
		this.headerSuperTabItem10AreaId = headerSuperTabItem10AreaId;
		this.headerSuperTabItem10AreaFileLocation = headerSuperTabItem10AreaFileLocation;
		
		document.getElementById ( headerSuperTabItem10AreaId ).src = headerSuperTabItem10AreaFileLocation;
		//alert("success.headerSuperTabItem10AreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderSuperTabItem11Area = function ( headerSuperTabItem11AreaId, headerSuperTabItem11AreaFileLocation )
	{
		this.headerSuperTabItem11AreaId = headerSuperTabItem11AreaId;
		this.headerSuperTabItem11AreaFileLocation = headerSuperTabItem11AreaFileLocation;
		
		document.getElementById ( headerSuperTabItem11AreaId ).src = headerSuperTabItem11AreaFileLocation;
		//alert("success.headerSuperTabItem11AreaId!");
	}
	GrappleHeaderAreaTemplate.prototype.establishHeaderSuperTabItem12Area = function ( headerSuperTabItem12AreaId, headerSuperTabItem12AreaFileLocation )
	{
		this.headerSuperTabItem12AreaId = headerSuperTabItem12AreaId;
		this.headerSuperTabItem12AreaFileLocation = headerSuperTabItem12AreaFileLocation;
		
		document.getElementById ( headerSuperTabItem12AreaId ).src = headerSuperTabItem12AreaFileLocation;
		//alert("success.headerSuperTabItem11AreaId!");
	}
	///////////////
	// ACCESSORS //
	///////////////