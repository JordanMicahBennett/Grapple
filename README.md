![Alt text](https://github.com/JordanMicahBennett/Grapple/blob/master/data/images/core/grapple.favicon.png "default page")



GRAPPLE!
============================================

A scratch written (chrome extension compatible) social network platform that allows users to store, share and organize text, audio, video, urls and images. Storable items are called "apples" or "grapples". (Written in html/php/js/css)

With chrome extension compatibility, when you want to save either text, video, url, image or audio to your grapple profile, grapple allows you to do this by simply right clicking on the page (for urls, youtube videos etc) or content (audio, text, image, url, video), and grappling it to your grapple profile, with a custom name etc.

Php is used to generate the entire user based ui dynamically, and this was my first attempt at writitng a soial network in 2013 and this is a bit slow!

See a similar, fast, scratch written neural network by myself, called [soulify](https://github.com/JordanMicahBennett/SOULIFY), written a year later in 2014 (Note that soulify is not as documented as this grapple Readme!).



REQUIREMENTS
============================================

1. Install [xamp](https://www.apachefriends.org/index.html).
2. Extract grapple source code, and place grapple folder in C Drive. (Do this precisely, to avoid renaming serverhome url prefixes, responsible for collecting profile pictures at sign up. If you don't have C drive, you'll have to rename "$serverHomeUrl" in ["data/modules/php/_module.new.entry.php"](https://github.com/JordanMicahBennett/Grapple/blob/master/data/modules/php/_module.new.entry.php) to whatever your xamp installation is.)
3. Run [localhost/grapple](http://localhost/grapple/) in chrome browser.



SETUP
============================================
1. Add grapple extension to your chrome browser:

	b. Go to extensions/load unpacked.

	c. Browse to [grapple/data/miscellaneous/resources/extensions/grapple'.chrome.extension/source code/src/grapple'.chrome.extension](https://github.com/JordanMicahBennett/Grapple/tree/master/data/miscellaneous/resources/extensions/grapple'.chrome.extension/source%20code/src/grapple'.chrome.extension) folder.

	d. You're adding the folder, so once you reach "grapple'.chrome.extension" above, click okay.

	e. You should now see the extension added to chrome:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/setup_extension_added.png "default page")

2. Create database called grapple_db in xamp, and import [grapple/grapple_db.sql](https://github.com/JordanMicahBennett/Grapple/blob/master/grapple_db.sql) into the database you created.


PROFILE PAGE
============================================
When you sign in, you'll be presented with your profile page, with some usable components, including "cocktail" , "my cocktail", and vineyard. For every section, the plus icon reveals actual grapples below the categories (text,...) listed. All grapples have a source button, so you can return to the source of your grapple.

PROFILE PAGE\COCKTAIL
============================================
![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/images/header/grapple.super.tab.item.0.png "default page")

"Cocktail" is the 1'st tab, and lists everybody's grapples:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/prrofilePage_0.png "default page")


PROFILE PAGE\MY COCKTAIL
============================================
![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/images/header/grapple.super.tab.item.4.png "default page")

"My Cocktail" is the 2'nd tab, and lists only your grapples (whoever is signed in on your browser):

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/prrofilePage_1.png "default page")

PROFILE PAGE\BUNCH
============================================
![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/images/header/grapple.super.tab.item.5.png "default page")

"Bunch" is the 6'th tab, and lists everybody who signed up on grapple, aka it lists al grapple users:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/prrofilePage_2.png "default page")


PROFILE PAGE\VINEYARD
============================================
![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/images/header/grapple.super.tab.item.6.png "default page")

"Bunch" is the 7'th tab, and includes the grapple chrome extension (you can alternatively get the extension here, instead of the location in SETUP/Item 1.c):

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/prrofilePage_3.png "default page")

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/text_icon.png "default page")

USAGE, GRAPPLING TEXT
============================================

1. Sign into grapple on [localhost/grapple](http://localhost/grapple/).

2. Find some text, highlight with mouse, and right click. You should see grapple option popup, with "text-grapple it!" command:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_textGrapple_0.png "default page")

3. Simply supply details to the popup, like a title etc:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_textGrapple_1.png "default page")

4. You should now see "grappled!" message on popup. 

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_textGrapple_2.png "default page")

5. Closing popup, and reloading profile page, you will see the new text item in your "my cocktail" section (5'th tab), after you click "plus" on text category and scroll down to it:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_textGrapple_3.png "default page")


6. You can maximize each text grapple item, by clicking on it:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_textGrapple_4.png "default page")


![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/audio_icon.png "default page")

USAGE, GRAPPLING AUDIO 
============================================

1. Sign into grapple on [localhost/grapple](http://localhost/grapple/).

2. Find some audio, and right click next to the audio on the web page. You should see grapple option popup, with "audio-grapple it!" command:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_audioGrapple_0.png "default page")

3. Simply supply details to the popup, like a title etc:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_audioGrapple_1.png "default page")

4. You should now see "grappled!" message on popup. 

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_audioGrapple_2.png "default page")

5. Closing popup, and reloading profile page, you will see the new audio item in your "my cocktail" section (5'th tab), after you click "plus" on text category and scroll down to it:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_audioGrapple_3.png "default page")


6. You can maximize each audio grapple item, by clicking on it:


![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_audioGrapple_4.png "default page")


![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/video_icon.png "default page")

USAGE, GRAPPLING VIDEO
============================================

1. Sign into grapple on [localhost/grapple](http://localhost/grapple/).

2. Find some video, and right click any empty space on the page where your video is. You should see grapple option popup, with "video-grapple it!" command:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_videoGrapple_0.png "default page")

3. Simply supply details to the popup, like a title etc:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_videoGrapple_1.png "default page")

4. You should now see "grappled!" message on popup. 

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_videoGrapple_2.png "default page")

5. Closing popup, and reloading profile page, you will see the new video item in your "my cocktail" section (5'th tab), after you click "plus" on text category and scroll down to it:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_videoGrapple_3.png "default page")


6. You can maximize each video grapple item, by clicking on it:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_videoGrapple_4.png "default page")


![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/url_icon.png "default page")


USAGE, GRAPPLING URL OR LINK
============================================

1. Sign into grapple on [localhost/grapple](http://localhost/grapple/).

2. Find some url, and right click any empty space on the page where your url is. You should see grapple option popup, with "link-grapple it!" command:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_urlGrapple_0.png "default page")

3. Simply supply details to the popup, like a title etc:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_urlGrapple_1.png "default page")

4. You should now see "grappled!" message on popup. 

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_urlGrapple_2.png "default page")

5. Closing popup, and reloading profile page, you will see the new url item in your "my cocktail" section (5'th tab), after you click "plus" on text category and scroll down to it:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_urlGrapple_3.png "default page")


6. You can maximize each url grapple item, by clicking on it:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_urlGrapple_4.png "default page")




![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/image_icon.png "default page")


USAGE, GRAPPLING IMAGE
============================================

1. Sign into grapple on [localhost/grapple](http://localhost/grapple/).

2. Find some image, and right click directly on the image. You should see grapple option popup, with "image-grapple it!" command:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_imageGrapple_0.png "default page")

3. Simply supply details to the popup, like a title etc:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_imageGrapple_1.png "default page")

4. You should now see "grappled!" message on popup. 

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_imageGrapple_2.png "default page")

5. Closing popup, and reloading profile page, you will see the new image item in your "my cocktail" section (5'th tab), after you click "plus" on text category and scroll down to it:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_imageGrapple_3.png "default page")


6. You can maximize each image grapple item, by clicking on it:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/usage_imageGrapple_4.png "default page")



![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/online_icon.png "default page")


RUNNING GRAPPLE ONLINE, INSTEAD OF LOCALHOST
============================================

To run grapple online, in somewhere like godaddy, instead of on xamp/localhost, you'll need to adjust the source source code in the chrome extension, and the php modules, so that the they are updated with the new server directories and or database connection settings:

1. Adjust function "generateGrappleActionResponse" in file  [grapple/data/miscellaneous/resources/extensions/grapple'.chrome.extension/source code/src/grapple'.chrome.extension/data/js/rightClick.js](https://github.com/JordanMicahBennett/Grapple/tree/master/data/miscellaneous/resources/extensions/grapple'.chrome.extension/source%20code/src/grapple'.chrome.extension/data/js/rightClick.js), by replacing "https://localhost/ portion of url with whatever your online server url/domain is. 

(You will need to do the above before adding the extension to chrome as directed in the SETUP section earlier above)

2. Adjust all php files where applicable, in directory [grapple/data/modules/php](https://github.com/JordanMicahBennett/Grapple/tree/master/data/modules/php/) by replacing connection details with whatever your online server sql details are.

3. Additionally, adjust variable "$serverHomeUrl" in file [grapple/data/modules/php/_module.new.entry.php](https://github.com/JordanMicahBennett/Grapple/tree/master/data/modules/php/_module.new.entry.php) by replacing serverHomeUrl with whatever your online server server url is. (If this is not done properly, remember that your users won't be able to upoad profile pictures!)

4. Finally, instead of going to [localhost/grapple](http://localhost/grapple/), to sign in and grapple stuff, you would of course, instead go to whatever your online domain is.


Enjoy.




AUTHOR PORTFOLIO
============================================
http://folioverse.appspot.com/
