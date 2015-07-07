<?php

function __autoload($classname) {
	// autoload the class file using the class name given
	$class = explode("_",$classname);
	$path = implode("/",$class).".php";
	if(file_exists($path)) {
		// autload the class if file exists
		require_once($path);
	} else {
		// log non-existential class file error
	}
}
