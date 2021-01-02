<?php

spl_autoload_register(function ($className) {
    
	if (file_exists($className . '.php'))
		include $className . '.php';
	elseif (file_exists('tests/'.$className . '.php'))
		include 'tests/'. $className . '.php';
	else
		include 'class/'. $className . '.php';
	
});