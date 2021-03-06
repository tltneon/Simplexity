<?php
/* Simplexity's Main Configuration
 * This is the main configuration for Simplexity. Everything in here modifies the main loading screen.
 */
$config = array(); // This makes $config into an array.
$config['version'] = "v0.4"; // This is the version of Simplexity.
$config['bsVersion'] = "3.3.1"; // This is the version of Bootstrap.

/* Misc Section
 * These configurations don't belong in a group, so they are miscellaneous.
 */
$config['name'] = "Simplexity"; // This is the name of the server.
$config['logoType'] = 1; // This is the type of logo. 1=Text, 2=Image. If the logo is image, put a file named 'logo.png' in the modules directory.
$config['SteamAPIKey'] = "PUT STEAM API KEY HERE"; // This is the SteamAPIKey. You can find this at http://steamcommunity.com/dev/apikey

/* Aesthetics Section
 * This allows to change the main 'themes' or 'designs' (layouts) of Simplexity.
 */
$config['fontName']   = "Play"; // This is the font name from Google Fonts. Find more @ https://www.google.com/fonts
$config['theme']      = "flatly"; // This is the Bootswatch Theme.
$config['designName'] = "Default"; // This is the design (aka layout) for Simplexity. (Hint: The name of the folder.)

/* Music Section
 * This allows you to change the music.
 */
$config['music'] = true; // This enables/disables music.
$config['type'] = "youtube"; // This is the type of music. Choices: youtube or ogg

// Add YouTube IDs to the list below. Make sure you follow the same format as is there already (e.g. 'one', 'two', 'three')
$config['youtubeVids'] = array(
		'',
	);
$config['volume'] = "30"; // This is the volume of the ogg file.

/* List of themes: (ALL MUST BE LOWERCASE WHEN ENTERED)
 * Cerulean
 * Cosmo
 * Cyborg
 * Darkly
 * Flatly
 * Journal
 * Lumen
 * Paper
 * Readable
 * Sandstone
 * Simplex
 * Slate
 * Spacelab
 * Superhero
 * United
 * Yeti
 */