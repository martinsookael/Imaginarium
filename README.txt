
Imaginarium
Imaginarium is a designplatform for Community Tools.

About Imaginarium
The purpose of Imaginarium is to be a platform for creating Your own social network.

Preview:
Look index.html from it's location.

Installation:
1. install Community Tools - http://communitytools.info/get-it/download/
2. download this package here.
3. move /imagimodule to sites/all/modules/imagimodule and enable it.
4. move everything else to sites/all/themes/imaginarium (create the folder yourself)
5. enable Imaginarium and mark as default in Themes
6. unenable "cmtls" from Sections 
7. go to Blocks:
	- move "Imaginarium - Group header" to "Imaginarium Group header" region
	- move "Imaginarium - Header image + map" to "Header image" region
	- move "Imaginarium - navigation" to "Imaginarium main navi" region
	- move "Imaginarium - Top Stripe in Header" to "header" region


Businessmodel:
Sell it as a Drupal theme at a scalable price. 

Functionality:
Imaginarium takes it's functionality from Community Tools. The main functinalites at the moment:
- Groups (private and open), 
- News
- Events
- Gallery
- Map
- Forums
- Notifications
- FB Connect - userinformation (avatar, name, email) is taken from FB.
- Stuffarium

Creating Your own theme
If You want to make Your own design, 
make it to sites/all/themes/MYTHEMEHERE
declare Imaginarium as parent for future updates.

For designers:
Change design from page.tpl.php and the colors/fonts/size from edit_me.css (both in sites/all/themes/MYTHEMEHERE).

More info about files:
block-imagimodule-0.tpl.php 		//  prints the top stripe with the login / register +  name of site etc.
block-imagimodule-1.tpl.php  		// prints the left navigation with group icons + names + available tools
block-imagimodule-2.tpl.php  		//prints the image / map in the header.
block-imagimodule-3.tpl.php  		// prints group header (name, icon, desc + controllbuttons - "+add", "members", "settings, "leave")
block.tpl.php 					//- needs to be in the theme - without it block-imagimodule-0.tpl.php etc would not work.
content_dummy.php 			// used by page.tpl.php to preview a content dummy.
/css 							// css for Imaginarium
	/css/design_declarations.css 	// creates a list of mostused css styles as a class - example: .red {color: #990000;}
	/css/edit_me.css - 			// stylesheet, where the user can change maincolors in the template
	/css/edit_me_ie.css - 		// exeptions for IE - currently turned off
	/css/imaginarium.css 		// stylesheet for the Iimaginaarium theme
	/css/imaginarium_ie.css 		// exeptions for IE - currently turned off
imaginarium.info 				// includes theme stylesheets and defines 3 new regions
index.html 					// the original HTML of the site
/jquery 						//  is used ONLY by index.html preview purposes
/js 							// js used by the theme
map_2.html 					// file used to preview map
map.html 						// file used to preview map
page.tpl.php 					// main file to edit
template.php 					// turns off some of some of the js coming from cmtls_theme and modules. 



Using github
// If You know how to do the first install and config for github and terminal, please write it here :).

Move terminal to the same directory with Imaginarium theme
git add readme.rtf              					 // if You have created a new file
git commit -m 'YOUR MESSAGE HERE' -a   	// change it locally
git push origin master					// push it to git.

Greating alias for Imaginarium  (MAMP users): 
alias imaginarium='cd /Applications/Mamp/htdocs/ct/sites/all/themes/imaginarium'


