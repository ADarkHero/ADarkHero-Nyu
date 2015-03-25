<body style="background-image:url(images/background/black.png); color:#FFFFFF;">

<center> 
				<h1>Puush Randomizer</h1>

</center>

<br><br>

<?php
		error_reporting(0);													//Keine Fehler anzeigen
		include 'datenbank.php'; 											//Datenbank einbinden
		
			
		$viewed++;															//Angeschaute Puushs erhöhen
							
		$miez = "UPDATE counter Set counter = '$viewed' WHERE ID = 2";		//Angeschaute Puushs in Datenbank aktualisieren
		$miez = mysql_query($miez);
						
		 
		
		$le_array = array('q', 'w', 'e', 'r', 't', 'z', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'y', 'x', 'c', 'v', 'b', 'n', 'm', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'Q', 'W', 'E', 'R', 'T', 'Z', 'U', 'I', 'O', 'P', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Y', 'X', 'C', 'V', 'B', 'N', 'M');
																			//Array mit allen Groß- und Kleinbuchstaben, sowie Zahlen
		$le_array_counter = count($le_array);								//Zählt Einträge im Array
		$puush = array("http://puu.sh/");									//Neues Array für Puush Links
		
			$counter = 0;
			
				while ($counter != 5){										//Puush Link: 5 Zeichen
				
					$random = rand(0, $le_array_counter);					//Zufallszahl ermitteln
					$random2 = $le_array[$random];							//Zufallszeichen ermitteln
									
					array_push($puush, $random2);
					
					
						if ($counter == 4){									//Prüfen, ob Puush Link existiert
						
							 $url = $puush[0].$puush[1].$puush[2].$puush[3].$puush[4].$puush[5];
							$existing = file_get_contents($url);
							
																			//Filtern von nicht vorhandenen oder bestimmten Puushs
							if ($existing == NULL 
							OR $existing == 'That puush could not be found.' 
							OR $existing == 'You do not have access to view that puush.' 
							OR $existing == 'Weed' 
							OR $existing == 'Rosh' 
							OR $existing == 'Taylor is a noob'
							){
								$puush = array("http://puu.sh/");			//Array zurücksetzen, wenn Puush ungültig
								$counter = 0;
							}
						
						}
					
				
					$counter++;
				}
				
				$imagesize =  getimagesize($puush[0].$puush[1].$puush[2].$puush[3].$puush[4].$puush[5]);			//Größe des Puushs ermitteln
				
				$width = $imagesize[0];										//Weite des Puushs
				$height = $imagesize[1];									//Höhe des Puushs
				
					while ($width > 1000){									//Wenn Puush zu breit: verkleinern
						$width = $width * 0.9;
						$height = $height * 0.9;
					}
					
					while ($height > 600){									//Wenn Puush zu hoch: verkleinern
						$width = $width * 0.9;
						$height = $height * 0.9;
					}
				
				
				//Ausgabe
			
			echo 'Diese Randomizer zeigt ein zuf&auml;lliges Bild der Seite <a href="http://puush.me" target="_blank">puush</a>.<br>
					Sollte kein Bild angezeigt werden, ist das jeweilige puush eine Datei und kann mittels Klick auf den Link heruntergeladen werden.<br><br>';
			
			echo '<center><b>Showing puush: <a href="'.$puush[0].$puush[1].$puush[2].$puush[3].$puush[4].$puush[5].'" target="_blank">'.$puush[0].$puush[1].$puush[2].$puush[3].$puush[4].$puush[5].'</a></b> - 
			'.$viewed.' puushs were viewed!<br><br>';
			echo '<a href="puush.php">Load new Puush</a><br><br><br>';
			echo '<img src="'.$puush[0].$puush[1].$puush[2].$puush[3].$puush[4].$puush[5].'" width="'.$width.'" height="'.$height.'"></img><br></center>';	

?>

<?php include 'end.php'; ?>