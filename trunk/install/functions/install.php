<?php
// +-----------------------------------------------------------------+
// |                   PhreeBooks Open Source ERP                    |
// +-----------------------------------------------------------------+
// | Copyright(c) 2008-2013 PhreeSoft, LLC (www.PhreeSoft.com)       |
// +-----------------------------------------------------------------+
// | This program is free software: you can redistribute it and/or   |
// | modify it under the terms of the GNU General Public License as  |
// | published by the Free Software Foundation, either version 3 of  |
// | the License, or any later version.                              |
// |                                                                 |
// | This program is distributed in the hope that it will be useful, |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of  |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the   |
// | GNU General Public License for more details.                    |
// +-----------------------------------------------------------------+
//  Path: /install/functions/install.php
//

function load_lang_dropdown() {
	$output   = array();
	$contents = scandir('language');
	foreach ($contents as $lang) {
		if ($lang <> '.' && $lang <> '..' && file_exists('language/' . $lang . '/language.php')) {
	  if ($config_file = file('language/' . $lang . '/language.php')) {
	  	foreach ($config_file as $line) {
	  		if (strstr($line,'\'LANGUAGE\'') !== false) {
		    $start_pos     = strpos($line, ',') + 2;
		    $end_pos       = strpos($line, ')') + 1;
		    $language_name = substr($line, $start_pos, $end_pos - $start_pos);
		    break;
	  		}
	  	}
	  	$output[$lang] = array('id' => $lang, 'text' => $language_name);
	  }
		}
	}
	return $output;
}

function install_pull_language($lang = 'en_us') {
	if (file_exists('language/' . $lang . '/language.php')) {
		include_once ('language/' . $lang . '/language.php');
	} else {
		include_once ('language/en_us/language.php');
	}
}

function install_lang($module, $lang = 'en_us', $file = 'menu') {
	if (file_exists('../modules/' . $module . '/language/' . $lang . '/' . $file . '.php')) {
		include_once ('../modules/' . $module . '/language/' . $lang . '/' . $file . '.php');
	} elseif (file_exists('../modules/' . $module . '/language/en_us/' . $file . '.php')) {
		include_once ('../modules/' . $module . '/language/en_us/' . $file . '.php');
	}
}

function load_full_access_security() {
	global $mainmenu;
	foreach ($mainmenu as $value) $security .= $value['security_id'] . ':4,';
	if (!$security) $security = '1:4,'; // if loading security tokens fails this will allow access to the user menu
	$security = substr($security, 0, -1);
	return $security;
}

?>