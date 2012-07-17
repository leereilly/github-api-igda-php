<?php

/** For Independent Game Developers Assocication's Global Game Jam...
 *
 * Sample code showing how you can get at GitHub repository information using
 * the GitHub API. See http://developer.github.com/v3 for more information.
 *
 * My PHP skills are a little rusty; there may be some libraries out there
 * that make this a lot easier!
**/

// Sample data
$USER = 'falconhoof';
$REPO = 'Game-Jam-2012-Client';

$json = getDownloads($USER, $REPO);
$downloads = json_decode($json);

// Do whatever you like with data
print "Found " . sizeof($downloads) . " downloads: \n\n";

foreach ($downloads as $download) {
  print "  ID: " . $download->id . "\n";
  print "  NAME: " . $download->id . "\n";
  print "  DESCRIPTION: " . $download->description . "\n";
  print "  CREATED: " . $download->created_at . "\n";
  print "  DOWNLOAD: " . $download->html_url . "\n";
  print "  SIZE: " . $download->size . "\n";
  print "  DOWNLOAD COUNT: " . $download->download_count . "\n\n";
}

/**
 * Grabs the list of downloads from the GitHub API via
 *   https://api.github.com/repos/falconhoof/Game-Jam-2012-Client/downloads
 *
 * JSON response will look a little like this:
 *
 * [
 *   {
 *     "description": "Some other big file",
 *     "download_count": 3,
 *     "created_at": "2012-06-06T18:43:58Z",
 *     "content_type": "application/zip",
 *     "size": 65409024,
 *     "html_url": "https://github.com/downloads/falconhoof/Game-Jam-2012-Client/some-other.zip",
 *     "name": "some-other.zip",
 *     "id": 251317,
 *     "url": "https://api.github.com/repos/falconhoof/Game-Jam-2012-Client/downloads/251317"
 *   },
 *   {
 *     "description": "Game assets, source, press info and playable version",
 *     "download_count": 3,
 *     "created_at": "2012-06-06T18:40:18Z",
 *     "content_type": "application/zip",
 *     "size": 65409024,
 *     "html_url": "https://github.com/downloads/falconhoof/Game-Jam-2012-Client/PastLifeGame.zip",
 *     "name": "PastLifeGame.zip",
 *     "id": 251316,
 *     "url": "https://api.github.com/repos/falconhoof/Game-Jam-2012-Client/downloads/251316"
 *   }
 * ]
**/
function getDownloads($user, $repo) {
  return file_get_contents("https://api.github.com/repos/$user/$repo/downloads");
}

?>