<?php
DEFINE("ROOT","/var/www/Enbaby/web/AudioLib/");
DEFINE("DBROOT","db.enbaby.net/AudioLib/");

function getBookInfoFromIndex($seriesId,$subId)
{
	$bookIndex = ROOT . $seriesId . "/" . $subId . "/index.json";
	$handle = fopen($bookIndex, 'r');
	if(!$handle) return null;
	$json_string = '';
      
	while(!feof($handle)){
		$line = trim(fgets($handle));
		$json_string = $json_string . $line;        	
	}

	$json = json_decode($json_string,true);
	return $json;

}


function getSeriesInfoFromIndex($seriesId)
{
	$bookIndex = ROOT . $seriesId . "/" . "/index.json";
	$handle = fopen($bookIndex, 'r');
	if(!$handle) return null;
	$json_string = '';
      
	while(!feof($handle)){
		$line = trim(fgets($handle));
		$json_string = $json_string . $line;        	
	}

	$json = json_decode($json_string,true);
	return $json;

}

function getSeriesLocation($seriesId)
{
	return DBROOT . $seriesId . "/";
}

function getBookLocation($seriesId,$subId)
{
	return DBROOT . $seriesId . "/" . $subId . "/";
}
?>
