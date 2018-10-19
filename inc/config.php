<?php


// for security reasons we don not want user to view the config.php file. Now since config file is not defined user will not able to view the file and receive this custom message
// if there is no constant defined config do not load this file
if(!defined('__CONFIG__')) {                     
		exit('You do not have a config file');
}


 
//Our config is below

?>