<?php
/*************************************
	Internet Explorer Abfrage
*************************************/	
?>
<script>
function checkBrowserName(name){  
   var agent = navigator.userAgent.toLowerCase();  
   if (agent.indexOf(name.toLowerCase())>-1) {  
     return true;  
   }  
   return false;  
 } 
 
 if(checkBrowserName('MSIE')){  
  alert('Es scheint, als würden Sie den Internet Explorer verwenden!\nEinige Funktionen sind eventuell nicht verfügbar!\nBitte steigen Sie schnellstmöglich auf einen anderen Browser um!\n\nJedes mal, wenn der Internet Explorer gestartet wird, stirbt ein unschuldiges Katzenbaby!');  
}  
 </script>

<?php
/*************************************
**************************************
	Doctype Stuff
**************************************	
*************************************/	
	echo "<!DOCTYPE html>\n"; 
	echo "<html>\n"; 
	echo "    <head>\n"; 
	echo "        <title>ADarkHero.at</title>\n"; 
	echo "        <meta charset=\"utf-8\" />\n"; 
	echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />\n"; 
	echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/metro.css\" />\n"; 
	echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/website.css\" />\n"; 
	echo "        <script type=\"text/javascript\" src=\"script/script.js\"></script>\n";
	echo "        <script src=\"script/jquery.js\"></script>\n";
	echo "        <script src=\"script/amazingslider.js\"></script>\n";
	echo "        <script src=\"script/initslider-1.js\"></script>\n";
	echo "        <script src=\"script/initslider-2.js\"></script>\n";
	echo "        <script src=\"script/initslider-3.js\"></script>\n";
	echo "        <meta name=\"keywords\" content=\"ADarkHero, ADarkHero.at, A, ADark, Dark, DarkHero, Hero, Maik Riedlsperger, Maik, Riedlsperger\">\n";
	echo "        <meta name=\"description\" content=\"Die wohl beste Seite im kompletten Interwebz! Kappa\">\n";
	echo "        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">\n";
	
	
	
/*************************************
	CSS Stuff
*************************************/	
	echo "        <style>\n"; 
	echo "            #widget_scroll_container {\n"; 
	echo "                width: 2160px;\n"; 
	echo "            }\n"; 
	echo "            div.widget_container {\n"; 
	echo "                width: 1200px;\n"; 
	echo "            }\n"; 
	echo "            div.widget_container.half {\n"; 
	echo "                width: 400px;\n"; 
	echo "            }\n"; 
	/*echo "            @media screen and (max-height: 680px) {\n"; 
	echo "                #widget_scroll_container {\n"; 
	echo "                    width: 1660px;\n"; 
	echo "                }\n"; 
	echo "                div.widget_container {\n"; 
	echo "                    width: 900px;\n"; 
	echo "                }\n"; 
	echo "                div.widget_container.half {\n"; 
	echo "                    width: 300px;\n"; 
	echo "                }\n"; 
	echo "            }\n"; */
	echo "        </style>\n"; 
	echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /></head>\n"; 
	echo "    <body>\n"; 
	
	
	
/*************************************
**************************************
	Logo von Teil 1
**************************************	
*************************************/	
	echo "        <div id=\"widget_scroll_container\">\n"; 
	echo "            <div class=\"widget_container full \" data-num=\"0\">\n"; 
	echo "                <div class=\"widget widget4x2 widget_black animation unloaded\" data-url=\"\" data-theme=\"black\" data-name=\"About\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/logo.png');\">\n"; 
	echo "                            <span></span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 
	

/*************************************
	News
*************************************/		
	echo "                <div class=\"widget widget4x2 widget_ animation unloaded\" data-url=\"\" data-theme=\"\" data-name=\"news\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('');\">\n"; 
	echo "                            ";
	echo "                            <span style=\"z-index: 42;\">News</span>\n";	
?>

	<div id="amazingslider-1">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img src="images/slider/doge.png" alt="DOGE!" /></li>
            <li><a href="http://www.youtube.com/watch?v=DB34LtVuU_A" target="_blank"><img src="images/slider/christmas.png" alt="Christmas" /></a></li>
            <li><a href="https://twitter.com/ADarkHero" target="_blank"><img src="images/slider/twitter.png" alt="Twitter" /></a></li>
        </ul>
    </div>

<?php
	echo " 							  \n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 

	
/*************************************
	Bilder
*************************************/		
	echo "                <div class=\"widget widget2x2 widget_green animation unloaded\" data-url=\"\" data-link=\"https://www.dropbox.com/sh/omsfyidr3aecy4r/g84-pFxWoP\" data-theme=\"green\" data-name=\"Bilder\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/bilder.png');\">\n"; 
	echo "                            <span>Bilder</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 
	

/*************************************
	Texte
*************************************/		
	echo "                <div class=\"widget widget2x2 widget_yellow widget_link animation unloaded\" data-url=\"\" data-theme=\"yellow\" data-name=\"Texte\" data-link=\"http://texte.adarkhero.at\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/texte.png');\">\n"; 
	echo "                            <span>Texte</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 
	
	
/*************************************
	Mail 
*************************************/		
	echo "                <div class=\"widget widget4x2 widget_darkgreen animation unloaded\" data-url=\"\" data-link=\"mailto:maik_riedlsperger@yahoo.de\" data-theme=\"darkgreen\" data-name=\"mail\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/mail.png');\">\n"; 
	echo "                            <span>E-Mail | maik_riedlsperger@yahoo.de</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 
	

/*************************************
	PC
*************************************/		
	echo "                <div class=\"widget widget1x2 widget_orange animation unloaded\" data-url=\"\" data-link=\"http://www.sysprofile.de/id170098\" data-theme=\"orange\" data-name=\"pc\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/pc.png');\">\n"; 
	echo "                            <span>PC</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 
	

/*************************************
	Laptop
*************************************/		
	echo "                <div class=\"widget widget1x2 widget_darkred animation unloaded\" data-url=\"\" data-link=\"http://www.sysprofile.de/id170113\" data-theme=\"darkred\" data-name=\"laptop\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/laptop.png');\">\n"; 
	echo "                            <span>Laptop</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n";
		

/*************************************
	Facebook
*************************************/		
	echo "                <div class=\"widget widget2x1 widget_ widget_link animation unloaded\" style=\"background-color:#3c599f;\" data-url=\"\" data-theme=\"\" data-name=\"Facebook\" data-link=\"https://www.facebook.com/maik.riedlsperger?ref=tn_tnmn\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/facebook.png');\">\n"; 
	echo "                            <span>Facebook</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 
	
	
/*************************************
	Twitter
*************************************/		
	echo "                <div class=\"widget widget2x1 widget_ widget_link animation unloaded\" style=\"background-color:#5ea9dd; margin-left: -195px; margin-top: 105px;\" data-url=\"\" data-theme=\"\" data-name=\"Twitter\" data-link=\"https://twitter.com/ADarkHero\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/twitter.png');\">\n"; 
	echo "                            <span>Twitter</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 
			

/*************************************
	Youtube
*************************************/				
	echo "                <div class=\"widget widget2x2 widget_green animation unloaded\" data-url=\"\" style=\"background-color:#ee3e3e;\" data-link=\"http://www.youtube.com/user/xxxeheroxxx\" data-theme=\"green\" data-name=\"youtube\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/youtube.png');\">\n"; 
	echo "                            <span>Youtube</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 
	

/*************************************
	Teamspeak Server
*************************************/		
	echo "                <div class=\"widget widget2x1 widget_ widget_link animation unloaded\" style=\"background-color:#4dbd38;\" data-url=\"\" data-link=\"ts3server://ts3.adarkhero.at:4411\" data-theme=\"grey\" data-name=\"teamspeak\" >\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/teamspeak.png');\">\n"; 
	echo "                            <span>Teamspeak Server</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 		
	
	
/*************************************
	Teamspeak Viewer
*************************************/		
	echo "                <div class=\"widget widget1x1 widget_green animation unloaded\"  style=\"background-color:;\" data-url=\"\" data-link=\"ts3viewer.php\" data-theme=\"grey\" data-name=\"teamspeak\" >\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/teamspeak.png');\">\n";
	echo "                            <span>TS Viewer</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n";	
	

/*************************************
	Skype
*************************************/		
	echo "                <div class=\"widget widget1x1 widget_yellow animation unloaded\" data-url=\"\" data-theme=\"yellow\" style=\"background-color:#00adf2;\" data-theme=\"\" data-name=\"Skype\" data-link=\"skype:ADarkHero?add\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/skype.png');\">\n"; 
	echo "                            <span>Skype</span>\n"; 
	echo "                    	</div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n";
	

/*************************************
	Forum
*************************************/		
	echo "                <div class=\"widget widget2x2 widget_blue animation unloaded\" data-url=\"\" data-theme=\"blue\" data-link=\"http://megamario.iphpbb3.com/forum/portal.php?nxu=59980686nx10199\" data-name=\"Forum\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/forum.png');\">\n"; 
	echo "                            <span>Forum</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 
	

/*************************************
	Chat
*************************************/		
	echo "                <div class=\"widget widget2x2 widget_red animation unloaded\" data-url=\"\" data-theme=\"red\" data-link=\"http://webchat.quakenet.org/?nick=&channels=adarkhero&prompt=1#\" data-name=\"chat\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/chat.png');\">\n"; 
	echo "                            <span>Chat</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 

/*************************************
	Impressum
*************************************/		
	echo "                <div class=\"widget widget3x2 widget_darkblue animation unloaded\" data-url=\"\" data-link=\"impressum.php\" data-theme=\"blue\" data-name=\"impressum\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/impressum.png');\">\n"; 
	echo "                            <span>Impressum</span>\n"; 
	echo " 							  \n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 		


/*************************************
	Steam
*************************************/		
	echo "                <div class=\"widget widget1x2 widget_ widget_link animation unloaded\" style=\"background-color:#232323;\" data-url=\"\" data-theme=\"\" data-name=\"Steam\" data-link=\"http://steamcommunity.com/id/adarkhero\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/steam.png');\">\n"; 
	echo "                            <span>Steam</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 
	
	
/*************************************
	Raptr
*************************************/		
	echo "                <div class=\"widget widget2x1 widget_ widget_link animation unloaded\" style=\"background-color:#ffad00;\" data-url=\"\" data-theme=\"\" data-name=\"Raptr\" data-link=\"http://raptr.com/ADarkHero/about\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/raptr.png');\">\n"; 
	echo "                            <span>Raptr</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n";	
	
	
/*************************************
	Twitch
*************************************/		
	echo "                <div class=\"widget widget1x1 widget_yellow animation unloaded\" data-url=\"\" data-theme=\"yellow\" style=\"background-color:#593993;\" data-theme=\"\" data-name=\"Twitch\" data-link=\"http://twitch.tv/adarkhero\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/twitch.png');\">\n"; 
	echo "                            <span>Twitch</span>\n"; 
	echo "                    	</div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n";	
		
	
/*************************************
	League of Legends
*************************************/		
	echo "                <div class=\"widget widget1x1 widget_darkred animation unloaded\" style=\"background-color:#0d277e;\" data-url=\"\" data-link=\"http://www.lolking.net/summoner/euw/24477663\" data-theme=\"grey\" data-name=\"lol\" >\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/lol.png');\">\n"; 
	echo "                            <span>LoL</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 	
	
	
/*************************************
	Last.fm
*************************************/		
	echo "                <div class=\"widget widget1x1 widget_ widget_link animation unloaded\" style=\"background-color:#df2702;\" data-url=\"\" data-theme=\"\" data-name=\"LastFM\" data-link=\"http://www.lastfm.de/user/ADarkHero\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/lastfm.png');\">\n"; 
	echo "                            <span>Last.fm</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n";  
	
	
/*************************************
	Animexx
*************************************/		
	echo "                <div class=\"widget widget1x1 widget_ widget_link animation unloaded\" style=\"background-color:#aaaaaa;\" data-url=\"\" data-theme=\"\" data-name=\"Animexx\" data-link=\"http://animexx.onlinewelten.com/steckbriefe/543060/\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/animexx.png');\">\n"; 
	echo "                            <span>Animexx</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n";
	
	
/*************************************
	MyAnimeList
*************************************/		
	echo "                <div class=\"widget widget1x1 widget_ widget_link animation unloaded\" style=\"background-color:#2d50a1;\" data-url=\"\" data-theme=\"\" data-name=\"Myanimelist\" data-link=\"http://myanimelist.net/profile/ADarkHero\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/mal.png');\">\n"; 
	echo "                            <span>MyAnimeList</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 
	
	
/*************************************
	Imdb
*************************************/		
	echo "                <div class=\"widget widget1x1 widget_ widget_link animation unloaded\" style=\"background-color:#e7bf1b;\" data-url=\"\" data-theme=\"\" data-name=\"Imdb\" data-link=\"http://www.imdb.com/user/ur50997224\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/imdb.png');\">\n"; 
	echo "                            <span>ImDb</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 
	
	

	echo "            </div>\n"; 
	echo "            <div class=\"widget_container half \" data-num=\"1\">\n"; 
	
	
	
/*************************************
**************************************
	Logo Teil 2
**************************************			
*************************************/			
	echo "                <div class=\"widget widget2x1 widget_grey animation unloaded\" style=\"background-color:;\" data-url=\"\" data-link=\"\" data-theme=\"grey\" data-name=\"sig\" >\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/stuff.png');\">\n"; 
	echo "                            <span></span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 


/*************************************
	Leer
*************************************/		
	echo "                <div class=\"widget widget1x1 widget_grey animation unloaded\" style=\"background-color:;\" data-url=\"\" data-link=\"\" data-theme=\"grey\" data-name=\"sig\" >\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/.png');\">\n"; 
	echo "                            <span></span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 


/*************************************
	Leer
*************************************/		
	echo "                <div class=\"widget widget1x1 widget_grey animation unloaded\" style=\"background-color:;\" data-url=\"\" data-link=\"\" data-theme=\"grey\" data-name=\"\" >\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/.png');\">\n"; 
	echo "                            <span></span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 


/*************************************
	Cloud
*************************************/		
 	echo "                <div class=\"widget widget4x2 widget_grey animation unloaded\" data-url=\"\" data-theme=\"blue\" style=\"background-color:#00ccff;\" data-theme=\"\" data-name=\"Cloud\" data-link=\"http://cloud.adarkhero.at/index.php\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/cloud.png');\">\n"; 
	echo "                            <span>Cloud</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 


/*************************************
	Musikwunschengine
*************************************/		
	echo "                <div class=\"widget widget1x3 widget_grey animation unloaded\"  data-url=\"\" data-link=\"musikwunsch.php?user=adarkhero\" data-theme=\"grey\" data-name=\"teamspeak\" >\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/music.png');\">\n"; 
	echo "                            <span>Musik<br>wunsch<br>engine</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 

	
/*************************************
	Playlist
*************************************/	
	echo "                <div class=\"widget widget2x1 widget_grey widget_link animation unloaded\" style=\"background-color:c90000;\" data-url=\"\" data-link=\"playlist.html\" data-theme=\"grey\" data-name=\"teamspeak\" >\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/playlist.png');\">\n"; 
	echo "                            <span>Heros Standardplaylist</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 


/*************************************
	Puush Randomizer
*************************************/		
	echo "                <div class=\"widget widget1x2 widget_grey animation unloaded\" style=\"background-color:#8ff210;\" data-url=\"\" data-link=\"puush.php\" data-theme=\"grey\" data-name=\"puush\" >\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/puush.png');\">\n"; 
	echo "                            <span>Puush<br>Randomizer</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n";

/*************************************
	Random Signatur
*************************************/	
	echo "                <div class=\"widget widget2x2 widget_grey animation unloaded\" style=\"background-color:#ff9600; margin-top: -95px;\" data-url=\"\" data-link=\"http://sig.adarkhero.at/\" data-theme=\"grey\" data-name=\"sig\" >\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/sig.png');\">\n"; 
	echo "                            <span>Random Signatur <br>(Wechselt bei Page-Reload)</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 	


/*************************************
	Sender
*************************************/		
	echo "                <div class=\"widget widget1x1 widget_grey animation unloaded\" style=\"background-color:#762c10;\" data-url=\"\" data-link=\"sender.php\" data-theme=\"grey\" data-name=\"sender\" >\n"; ; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/sender.png');\">\n"; 
	echo "                            <span>ADarkHero<br>Sender</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n";




	
	echo "            </div>\n";




/*************************************
**************************************
	Logo Teil 3
**************************************	
*************************************/	
	echo "            <div class=\"widget_container half \" data-num=\"2\">\n"; 
	echo "                <div class=\"widget widget1x3 widget_grey animation unloaded\" data-url=\"\" data-theme=\"grey\" data-name=\"tile_00023\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/links.png');\">\n"; 
	echo "                            <span></span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 


/*************************************
	Manda-Chan
*************************************/		
	echo "                <div class=\"widget widget3x1 widget_grey animation unloaded\" data-url=\"\" data-link=\"http://manda-chan.forumieren.com/\" data-theme=\"grey\" data-name=\"manda\" >\n"; 
	echo "                    <div class=\"widget_content\">\n";  
	echo "                        <div class=\"main\" style=\"background-image:url('images/manda.png');\">\n"; 
	echo "                            <span>Mandas kleine Welt</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 
	
	
/*************************************
	KaHuSchu
*************************************/		
	echo "                <div class=\"widget widget2x2 widget_grey animation unloaded\" data-url=\"\" data-link=\"http://kahuschu.at\" data-theme=\"grey\" data-name=\"karin\" >\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/karin.png');\">\n"; 
	echo "                            <span>Karins Hunde Schule</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 


/*************************************
	Dark Sovereign
*************************************/		
	echo "                <div class=\"widget widget1x2 widget_grey animation unloaded\" data-url=\"\" data-link=\"http://darksovereign.adarkhero.at/\" data-theme=\"grey\" data-name=\"tile_00025\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/darksovereign.png');\">\n"; 
	echo "                            <span>Dark<br>Sovereign</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 


/*************************************
	Heidis Landhaus
*************************************/		
	echo "                <div class=\"widget widget4x2 widget_grey animation unloaded\" data-url=\"\" data-link=\"http://saalbach.net/heidi\" data-theme=\"grey\" data-name=\"heidi\" >\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/heidi.png');\">\n"; 
	echo "                            <span>Heidis Landhaus</span>\n"; 
	echo "                        </div>\n";
	echo "                    </div>\n"; 
	echo "                </div>\n"; 


/*************************************
	Capslocker
*************************************/		
	echo "                <div class=\"widget widget2x1 widget_grey animation unloaded\" data-link=\"http://www.capslocker.de\"  data-url=\"\" data-theme=\"grey\" data-name=\"capslocker\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/capslocker.png');\">\n"; 
	echo "                            <span>Capslocker</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 

	
/*************************************
	Nerdbash
*************************************/		
	echo "                <div class=\"widget widget1x1 widget_grey animation unloaded\" data-link=\"http://www.nerdbash.de\" data-url=\"\" data-theme=\"grey\" data-name=\"nerdbash\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/nerdbash.png');\">\n"; 
	echo "                            <span>Nerdbash</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 


/*************************************
	Kistl
*************************************/		
	echo "                <div class=\"widget widget1x1 widget_grey animation unloaded\" data-link=\"http://kistl.no-ip.org/\" data-url=\"\" data-theme=\"grey\" data-name=\"tile_00027\">\n"; 
	echo "                    <div class=\"widget_content\">\n"; 
	echo "                        <div class=\"main\" style=\"background-image:url('images/kistl.png');\">\n"; 
	echo "                            <span>Kistl Blog</span>\n"; 
	echo "                        </div>\n"; 
	echo "                    </div>\n"; 
	echo "                </div>\n"; 


/*************************************
	Useless Sidebar I don't use *-*
*************************************/		
	echo "        <div id=\"widget_preview\">\n"; 
	echo "            <div id=\"widget_sidebar\">\n"; 
	echo "                <div>\n"; 
	echo "                    <div class=\"cancel\"><span>Close</span></div>\n"; 
	echo "                    <div class=\"refresh\"><span>Refresh</span></div>\n"; 
	echo "                    <div class=\"download\"><span>Download</span></div>\n"; 
	echo "                    <div class=\"back\"><span>Back</span></div>\n"; 
	echo "                    <div class=\"next\"><span>Next</span></div>\n"; 
	echo "                </div>\n"; 
	echo "            </div>\n"; 
	echo "        </div>\n"; 
	echo "        <script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1&appId=161905873924694\";fjs.parentNode.insertBefore(js, fjs);}(document, \"script\", \"facebook-jssdk\"));</script>\n"; 
	echo "        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>\n"; 
?>



</body> 
</html>