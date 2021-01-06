<?php include 'config.php';


$apikey = 'APIKEYHERE';


			
			
			$url = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$apikey.'&steamids=';
			$tamam = $url.$steamid1;
			$jsonInfo = json_decode(file_get_contents($tamam), true);
			
			$yetkili1avatar = $jsonInfo['response']['players'][0]['avatarfull'];	
			$yetkili1nick = $jsonInfo['response']['players'][0]['personaname'];
			$yetkili1durum = $jsonInfo['response']['players'][0]['personastate'];
			
			if ($yetkili1durum == 1) {
				
				$yetkili1durum = 'online';
				
			} else {$yetkili1durum = 'offline';}
			
			
			
			$url = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$apikey.'&steamids=';
			$tamam = $url.$steamid2;
			$jsonInfo = json_decode(file_get_contents($tamam), true);
			
			$yetkili2avatar = $jsonInfo['response']['players'][0]['avatarfull'];	
			$yetkili2nick = $jsonInfo['response']['players'][0]['personaname'];
			$yetkili2durum = $jsonInfo['response']['players'][0]['personastate'];
			
			if ($yetkili2durum == 1) {
				
				$yetkili2durum = 'online';
				
			} else {$yetkili2durum = 'offline';}
			
			
			
			
			
			$url = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$apikey.'&steamids=';
			$tamam = $url.$steamid3;
			$jsonInfo = json_decode(file_get_contents($tamam), true);
			
			$yetkili3avatar = $jsonInfo['response']['players'][0]['avatarfull'];	
			$yetkili3nick = $jsonInfo['response']['players'][0]['personaname'];
			$yetkili3durum = $jsonInfo['response']['players'][0]['personastate'];
			
			if ($yetkili3durum == 1) {
				
				$yetkili3durum = 'online';
				
			} else {$yetkili3durum = 'offline';}
			
			
			
			
			
			
			
			$url = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$apikey.'&steamids=';
			$tamam = $url.$steamid4;
			$jsonInfo = json_decode(file_get_contents($tamam), true);
			
			$yetkili4avatar = $jsonInfo['response']['players'][0]['avatarfull'];	
			$yetkili4nick = $jsonInfo['response']['players'][0]['personaname'];
			$yetkili4durum = $jsonInfo['response']['players'][0]['personastate'];
			
			if ($yetkili4durum == 1) {
				
				$yetkili4durum = 'online';
				
			} else {$yetkili4durum = 'offline';}
			
			
			
			$url = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$apikey.'&steamids=';
			$tamam = $url.$steamid5;
			$jsonInfo = json_decode(file_get_contents($tamam), true);
			
			$yetkili5avatar = $jsonInfo['response']['players'][0]['avatarfull'];	
			$yetkili5nick = $jsonInfo['response']['players'][0]['personaname'];
			$yetkili5durum = $jsonInfo['response']['players'][0]['personastate'];
			
			if ($yetkili5durum == 1) {
				
				$yetkili5durum = 'online';
				
			} else {$yetkili5durum = 'offline';}
			
			
			
			
			
			
			
			
			$url = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$apikey.'&steamids=';
			$tamam = $url.$steamid4;
			$jsonInfo = json_decode(file_get_contents($tamam), true);
			
			$yetkili6avatar = $jsonInfo['response']['players'][0]['avatarfull'];	
			$yetkili6nick = $jsonInfo['response']['players'][0]['personaname'];
			$yetkili6durum = $jsonInfo['response']['players'][0]['personastate'];
			
			if ($yetkili6durum == 1) {
				
				$yetkili6durum = 'online';
				
			} else {$yetkili6durum = 'offline';}
			
			
			
			
			
			
			
			
			
			
			$communityid = $_GET["steamid"];
			$mapname = $_GET['mapname'];
			
			$url = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$apikey.'&steamids=';
			$tamam = $url.$communityid;
			$jsonInfo = json_decode(file_get_contents($tamam), true);
			
			$useravatar = $jsonInfo['response']['players'][0]['avatarfull'];	
			$usernick = $jsonInfo['response']['players'][0]['personaname'];
			$authserver = bcsub($communityid, '76561197960265728') & 1;
			$authid = (bcsub($communityid, '76561197960265728')-$authserver)/2;
			$usersteamid = "STEAM_0:$authserver:$authid";
			