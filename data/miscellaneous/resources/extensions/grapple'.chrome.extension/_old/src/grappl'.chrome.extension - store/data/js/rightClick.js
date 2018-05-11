// Author: Jordan Micah Bennett, Grapple 2013
// Author-website: folioverse.appspot.com 


//global variables
function generateGrappleActionResponse ( data, dataSource, grappleActionType )
{
	var browserGrappleActionContentStream = data;
	var browserGrappleActionContentSource = dataSource; 
	window.open("http://grapple.rf.gd/data/modules/php/_module.grapple."+grappleActionType+".action.php?grappleContent="+browserGrappleActionContentStream+"&grappleSource="+browserGrappleActionContentSource+"&grappleType="+grappleActionType,"popup","width=512,height=614");
}

//page
chrome.contextMenus.create
(
	{
		title: "video-grapple it!", 
		contexts:["all"], 
		onclick: function(info, tab) 
		{
			generateGrappleActionResponse ( getVideoEmbedStream ( info.pageUrl ), info.pageUrl, "video" );
		}
	}
);
//page
chrome.contextMenus.create
(
	{
		title: "link-grapple it!", 
		contexts:["page"], 
		onclick: function(info, tab) 
		{
			generateGrappleActionResponse ( info.pageUrl, info.pageUrl, "url" );
		}
	}
);
//frame
chrome.contextMenus.create
(
	{
		title: "link-grapple it!", 
		contexts:["frame"], 
		onclick: function(info, tab) 
		{
			alert(info.frameUrl);
			generateGrappleActionResponse ( info.frameUrl, info.pageUrl, "url" );
		}
	}
);
//selection
chrome.contextMenus.create
(
	{
		title: "text-grapple it!!", 
		contexts:["selection"], 
		onclick: function(info, tab) 
		{
			generateGrappleActionResponse ( info.selectionText, info.pageUrl, "text" );
		}
	}
);
//link
chrome.contextMenus.create
(
	{
		title: "link-grapple it!", 
		contexts:["link"], 
		onclick: function(info, tab) 
		{
			generateGrappleActionResponse ( info.linkUrl, info.pageUrl, "url" );
		}
	}
);
//image
chrome.contextMenus.create
(
	{
		title: "image-grapple it!", 
		contexts:["image"], 
		onclick: function(info, tab) 
		{
			generateGrappleActionResponse ( info.srcUrl, info.pageUrl, "image" );
		}
	}
);
//audio
chrome.contextMenus.create
(
	{
		title: "audio-grapple it!", 
		contexts:["audio"], 
		onclick: function(info, tab) 
		{
			generateGrappleActionResponse ( info.srcUrl, info.pageUrl, "audio" );
		}
	}
);
//video
chrome.contextMenus.create
(
	{
		title: "video-grapple it!", 
		contexts:["video"], 
		onclick: function(info, tab) 
		{
			generateGrappleActionResponse ( info.srcUrl, info.pageUrl, "video" );
		}
	}
);


/////////////////////////////////
//UTILITIY_FUNCTIONS
/////////////////////////////////
	/////////////////////////////////
	//adult video hosting
	/////////////////////////////////
	var youtubeEmbedCore = "http://www.youtube.com/embed/";
	var vimeoEmbedCore = "https://player.vimeo.com/video/";
	var veohEmbedCore = "http://www.veoh.com/seriesplayer_embedded2.swf?permalinkId=wzmg-and-the-coot&isVlog=true&videoAutoPlay=0&id=TEMPORARY_VIDEO_ID&player=channelembedded/";
	var dailymotionEmbedCore = "http://www.dailymotion.com/embed/video/";
	var metacafeEmbedCore = "http://www.metacafe.com/fplayer/TEMPORARY_VIDEO_ID.swf"; //i guesed this one lol
	var videobashEmbedCore = "http://www.videobash.com/embed/";

	/////////////////////////////////
	//adult video hosting
	/////////////////////////////////
	var pornhubEmbedCore = "http://ph-static.phncdn.com/flash/embed_player_v1.3.swf?options=http://www.pornhub.com/embed_player.php?id=";
	var redtubeEmbedCore = "http://embed.redtube.com/player/?id=";
	var xvideosEmbedCore = "http://flashservice.xvideos.com/embedframe/";
	var xhamsterEmbedCore = "http://xhamster.com/xembed.php?video=TEMPORARY_VIDEO_ID";
	var youpornEmbedCore = "http://www.youporn.com/embed/";
	var porntubeEmbedCore = "http://embed.porntube.com/"; //i totally guessed this one worse than the previous guessess...and what's scary, it's one guess...
	
	function getVideoEmbedStream ( url )
	{
		var returnValue = "";
	
		/////////////////////////////////
		//general utilities
		/////////////////////////////////
			if ( contains ( url, "youtube" ) )
				returnValue = youtubeEmbedCore + getYoutubeIdentification ( url );
				
			else if ( contains ( url, "vimeo" ) )
				returnValue = vimeoEmbedCore + getVimeoIdentification ( url );
				
			else if ( contains ( url, "veoh" ) )
				returnValue = veohEmbedCore.replace ( "TEMPORARY_VIDEO_ID", getVeohIdentification ( url ) );
		
			else if ( contains ( url, "dailymotion" ) )
				returnValue = dailymotionEmbedCore + getDailymotionIdentification ( url );
				
			else if ( contains ( url, "metacafe" ) )
				returnValue = metacafeEmbedCore.replace ( "TEMPORARY_VIDEO_ID", getMetacafeIdentification ( url ) );
		
			else if ( contains ( url, "videobash" ) )
				returnValue = videobashEmbedCore + getVideobashIdentification ( url );
				
		/////////////////////////////////
		//adult video hosting
		/////////////////////////////////
		else if ( contains ( url, "pornhub" ) )
			returnValue = pornhubEmbedCore + getPornhubIdentification ( url );
			
		else if ( contains ( url, "redtube" ) )
			returnValue = redtubeEmbedCore + getRedtubeIdentification ( url );
			
		else if ( contains ( url, "xvideos" ) )
			returnValue = xvideosEmbedCore + getXvideosIdentification ( url );
			
		else if ( contains ( url, "xhamster" ) )
			returnValue = xhamsterEmbedCore.replace ( "TEMPORARY_VIDEO_ID", getXhamsterIdentification ( url ) );
			
		else if ( contains ( url, "youporn" ) )
			returnValue = youpornEmbedCore + getYoupornIdentification ( url );
			
		else if ( contains ( url, "porntube" ) )
			returnValue = porntubeEmbedCore + getPorntubeIdentification ( url );
			
		return returnValue;
	}
	
	/////////////////////////////////
	//general utilities
	/////////////////////////////////
		function contains ( fullString, substringCandidate )
		{	
			return fullString.indexOf ( substringCandidate ) != -1;
		}
	
	/////////////////////////////////
	//general video hosting
	/////////////////////////////////
		function getYoutubeIdentification ( url ) 
		{
			return url.split ( "?v=" ) [ 1 ];
		}
		function getVimeoIdentification ( url ) 
		{
			return url.match(/^.+vimeo.com\/(.*\/)?([^#\?]*)/) ? url.match(/^.+vimeo.com\/(.*\/)?([^#\?]*)/)[2] || url.match(/^.+vimeo.com\/(.*\/)?([^#\?]*)/)[1] : null;
		}
		function getVeohIdentification ( url ) 
		{
			return url.split ( "watch/" ) [ 1 ];
		}
		function getDailymotionIdentification ( url )
		{
			return url.split ( "video/" ) [ 1 ];
		}
		function getMetacafeIdentification ( url )
		{
			return url.split ( "watch/" ) [ 1 ];
		}
		function getVideobashIdentification ( url )
		{
			return url.split ( "video_show/" ) [ 1 ];
		}
	/////////////////////////////////
	//adult video hosting
	/////////////////////////////////
		function getPornhubIdentification ( url ) 
		{
			return url.split ( "?viewkey=" ) [ 1 ];
		}
		function getRedtubeIdentification ( url ) 
		{
			return url.split ( "com/" ) [ 1 ];
		}		
		function getXvideosIdentification ( url ) 
		{
			return ( ( url.split ( "com/" ) [ 1 ] ).split ( "/" ) [ 0 ] ).replace ( "video", "" );
		}		
		function getXhamsterIdentification ( url ) 
		{
			return ( ( url.split ( "movies/" ) [ 1 ] ).split ( "/" ) [ 0 ] ).replace ( "video", "" );
		}	
		function getYoupornIdentification ( url ) 
		{
			return url.split ( "watch/" ) [ 1 ];
		}		
		function getPorntubeIdentification ( url ) 
		{
			return url.split (/[\s_]+/) [ 1 ];
		}		