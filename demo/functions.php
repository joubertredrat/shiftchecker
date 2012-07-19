<?php
	/**
	 * Provides a simple HTML header to demo example.
	 * @return string return a string with a reader html.
	 */
	function getHeader()
	{
		$header  = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
		$header .= '<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">';
		$header .= '<head>';
		$header .=		'<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		$header .=		'<title>ShiftChecker jQuery Plugin Demo</title>';
		$header .=		'<script type="text/javascript" src="jquery-1.7.2.min.js"></script>';
		$header .=		'<script type="text/javascript" src="shiftchecker.min.js"></script>';		
		$header .= '</head>';
		$header .= '<body>';
		return $header;
	}

	/**
	 * Provides a footer for the page.
	 * @return string return a string with a footer html.
	 */
	function getFooter()
	{
		return '</body></html>';
	}
?>
