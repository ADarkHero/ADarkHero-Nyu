<body style="background-image:url(images/background/black.png); color:#FFFFFF;">


<?php 
	include 'datenbank.php';
	$mw_anzahl2 = $mw_anzahl;
	$mw_anzahl--;
	$rand = rand(0,$mw_anzahl); //RNG Luv
	$video = 'https://www.youtube.com/v/'.$mw_link[$rand].'?enablejsapi=1&version=3&playerapiid=ytplayer&autoplay=1"';
?>   
    <script type="text/javascript">
        function onYouTubePlayerReady() {
            ytplayer = document.getElementsByTagName("embed")[0];
            ytplayer.addEventListener("onStateChange", "onytplayerStateChange");
        }
        
        function onytplayerStateChange(newState) {
			if (newState == 0){
				location.reload(true);
			}       
        }
    </script>

<center>

<h1> Musikwunschplayer von <u><b><?php echo $user; ?></b></u> <font size="-2"><i>(<?php echo $mw_anzahl2; ?> Eintr&auml;ge vorhanden!)</i></font></h1>
    <div id="video">
        <object width="640" height="360">
			<param name="movie" value="<?php echo $video; ?>"></param>
			<param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param>
			<embed src="<?php echo $video; ?>" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="640" height="360"></embed>
		</object>
    </div>
	
<br>	
	
	<a href="musikwunsch.php?user=<?php echo $user; ?>">Lied &uuml;berspringen</a>  <?php if($admin == md5($user)){ echo '|  <a href="musikwunsch.php?user=<?php echo $user; ?>&delete=<?php echo $mw_link[$rand]; ?>">Lied l&ouml;schen</a>'; } ?>

<br><br>
	
<h2> Musikwunsch eintragen </h2>	

Zum Eintragen wird die <b><i>Video ID</i></b> ben&ouml;tigt! Dies ist der Teil <b><i>hinter dem watch?v=</i></b> beim Videolink.<br>
Bei <b><i>https://www.youtube.com/watch?v=abcdefg</i></b> w&auml;re die ID also <b><i>abcdefg</i></b>!<br><br>

<form action="musikwunsch.php" method="get">
	<input type="text" size="24" maxlength="100" name="link">
	<input type="hidden" name="user" value="<?php echo $user; ?>">
	<input type="hidden" name="eintragen" value="true">
	<input type="submit" value="Go!">
</form>

<?php

	if ($eintragen == 'true'){
	if ($_SESSION['Wunsch'] != 'true'){
		if (strlen($link) < 15 OR $link == NULL){	
			$counter = 0;
			while ($counter != $mw_anzahl){
				if ($link == $mw_link[$counter]){
					$exists = 'true';
				}
			$counter++;
			}
			
				$url = "http://www.youtube.com/watch?v=".$link;
				$le_video = file_get_contents($url);
				$stringposition = strpos($le_video, '<h1 id="unavailable-message" class="message">');
				
				 if ($stringposition == NULL){ if ($exists != 'true'){ $exists = 'false'; }}
			
			if ($exists == 'false'){
				$eintrag = "INSERT INTO musikwunsch (ID, User, Link) VALUES (0, '$user', '$link')"; 
				$eintragen = mysql_query($eintrag);
		
			echo 'Musikwunsch erfolgreich eingetragen!';
				session_start();
				$_SESSION['Wunsch'] = 'true';
			}
			else{
			echo '<b>Musikwunsch wurde nicht eingetragen, versuchen Sie es erneut!</b>';
		}
		}
		else{
			echo '<b>Musikwunsch wurde nicht eingetragen, versuchen Sie es erneut!</b>';
		}
		}
		else{
			echo '<b>Du hast schon einen Wunsch eingetragen!</b>';
		}
}		

if ($delete != NULL){
		$eintrag = "DELETE FROM musikwunsch WHERE Link = '$delete'"; 
		$eintragen = mysql_query($eintrag);
}

?>

</center>

	
<?php include 'end.php'; ?>