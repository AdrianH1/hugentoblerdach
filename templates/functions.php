<?php
	function addSlash($path)	{
		if (substr($path, strlen($path)-1, 1) != '/')	{
			$path .= '/';
		} 
		return $path;
	}
	
	function getContentFromTextFile($file='')	{

		// read content 
		if (file_exists($file))	{
			$text = file_get_contents($file);
			$text = nl2br($text);
			$text = str_replace("\r", '', str_replace("\n", '', $text));
			
			//Für Sonderzeichen im Zeichensatz UTF-8 auf ANSI
			//if (function_exists('mb_convert_encoding'))	{
			//	$text = mb_convert_encoding($text, 'UTF-8', mb_detect_encoding($text, 'UTF-8, ISO-8859-1', true)); 
			//}
				
			return $text;
		}
		return '';
		
	}
	
	
?>