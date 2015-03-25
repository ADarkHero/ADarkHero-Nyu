<?php
	error_reporting(0);
		$dbhost = "localhost";
	   $dbuser = "u15117db1";
	   $dbpass = "Senji1994";
	   $dbdata = "u15117db1";
	   
	   		session_start();
	   
	   		$user = $_GET['user'];
	   		$link = $_GET['link'];
	   		$eintragen = $_GET['eintragen'];
	   		$delete = $_GET['delete'];
	   		$admin = $_GET['admin'];
			
			if ($user == NULL){ $user = 'ADarkHero'; }

	   
	   
	     mysql_connect($dbhost, $dbuser, $dbpass);

    $x=mysql_select_db($dbdata);
        if (empty($x)) {
           echo "Fehler beim Verbinden mit dem Datenbankserver ";
           exit;
        }
		
		
	/********************************	
	  Counter Main Side
	********************************/
			$sql = "SELECT counter FROM counter WHERE ID = 1";
    $result  =  mysql_query($sql);      

    if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

				 $counter =  $ar["counter"];
            }
    }

	/********************************	
	  Counter Puush	
	********************************/	
				$sql = "SELECT counter FROM counter WHERE ID = 2";
    $result  =  mysql_query($sql);      

    if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

				 $viewed =  $ar["counter"];
            }
    }
	
	/********************************	
	  Musikwunsch.php
	********************************/
	
		//Video
	   				$sql = "SELECT Link FROM musikwunsch WHERE User = '$user'";
    $result  =  mysql_query($sql);      

    if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

				 $mw_link[] =  $ar["Link"];
				 $mw_anzahl =  mysql_num_rows($result);
            }
    }
?>