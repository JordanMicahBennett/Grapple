![Alt text](https://github.com/JordanMicahBennett/Grapple/blob/master/data/images/core/grapple.favicon.png "default page")



GRAPPLE!
============================================

A scratch written (chrome extension compatible) social network platform that allows users to store, share and organize text, audio, video, urls. Storable items are called "apples" or "grapples". (Written in html/php/js/css)

With chrome extension compatibility, when you want to save either text, video, url, image or audio to your grapple profile, grapple allows you to do this by simply right clicking on the page (for urls, youtube videos etc) or content (audo, text, image), and grappling it to your grapple profile, with a custom name etc.

Php is used to generate the entire user based ui dynamically, and this was my first attempt at writitng a soial network in 2013 and this is a bit slow!




REQUIREMENTS
============================================

1. Install [xamp](https://www.apachefriends.org/index.html).
2. Extract grapple source code, and place grapple folder in C Drive. (Do this precisely, to avoid renaming serverhome url prefixes, responsible for collecting profile pictures at sign up. If you don't have C drive, you'll have to rename "$serverHomeUrl" in ["data/modules/php/_module.new.entry.php"](https://github.com/JordanMicahBennett/Grapple/blob/master/data/modules/php/_module.new.entry.php) to whatever your xamp installation is.)
3. Run [localhost/grapple](http://localhost/grapple/) in chrome browser.



SETUP
============================================
1. Add grapple extension to your chrome browser:

	b. Go to extensions/load unpacked.

	c. Browse to grapple/data/miscellaneous/resources/extensions/grapple'.chrome.extension/source code/src/grapple'.chrome.extension folder.

	d. You're adding the folder, so once you reach "grapple'.chrome.extension" above, click okay.

	e. You should now see the extension added to chrome:

![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/setup_extension_added.png "default page")



PROFILE PAGE
============================================
When you sign in, you'll be presented with your profile page, with some usable components, including "cocktail" , "my cocktail", and vineyard. For every section, the plus icon reveals actual grapples below the categories (text,...) listed. All grapples have a source button, so you can return to the source of your grapple.

PROFILE PAGE\COCKTAIL
============================================
"Cocktail" is the 1'st tab, and lists everybody's grapples:
![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/prrofilePage_0.png "default page")


PROFILE PAGE\MY COCKTAIL
============================================
![Alt text]( "default page")
"My Cocktail" is the 1'st tab, and lists only your grapples (whoever is signed in on your browser):
![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/prrofilePage_1.png "default page")

PROFILE PAGE\BUNCH
============================================
![Alt text]( "default page")
"Bunch" is the 6'th tab, and lists everybody who signed up on grapple, aka it lists al grapple users:
![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/prrofilePage_2.png "default page")


PROFILE PAGE\VINEYARD
============================================
![Alt text]( "default page")
"Bunch" is the 7'th tab, and includes the grapple chrome extension (you can alternatively get the extension here, instead of from the location in SETUP/Item 1.c):
![Alt text]( https://github.com/JordanMicahBennett/Grapple/blob/master/data/miscellaneous/Screens/prrofilePage_3.png "default page")


USAGE, GRAPPLING SOME TEXT
============================================

1. Sign into grapple on [localhost/grapple](http://localhost/grapple/).

2. Find some text, highlight with mouse, and right click. You should see grapple option popup, with "text-grapple it!" command:

![Alt text]( usage_textGrapple_0 "default page")

3. Simply supply details to the popup, like a title etc:

![Alt text]( usage_textGrapple_1 "default page")

4. You should now see "grappled!" message on popup. 

![Alt text]( usage_textGrapple_2 "default page")

5. Closing popup, and reloading profile page, you will see the new text item in your cocktail, after you click "plus" on text category and scroll down to it:

![Alt text]( usage_textGrapple_3 "default page")
