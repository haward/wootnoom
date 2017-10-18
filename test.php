<?php
ini_set('default_charset', 'utf-8');
// Turn off all error reporting
//error_reporting(0);

// Report simple running errors
//error_reporting(E_ERROR);
require_once ("configuration.php");
//require_once ("ahocorasick.php");
require_once("util.php");
require_once("user.php");
require_once("userManager.php");

$util = new Util($CONFIGURATION);

//$text = "ภาพ และแผนที่";
$text = "map";

//$answer_message = $util->getAnswer($text);
	//$message_template = condition($text);
//echo $answer_message;
$userManager = new userManager();
$user = new User();
$user->name = "user b";
$user->userId = "key 1";
//$userManager->addUser($user);
print_r($userManager->users);