<?php
/**
 * EasyLogger demo script.
 *
 * Example shows usage of this class in situations when we 
 * want to log some errors (exceptions), which were 
 * generated in our web application.
 */
include_once('EasyLogger.php');

$logFilePath = dirname(__FILE__) . '/'. 'log.txt'; //Path to the log file. Of course, your log file can be where ever you want.

try {	
	throw new Exception('An error occured.'); //Throw some exception on purpose.
}
catch (Exception $ex) {
	try {
		$easyLogger = new EasyLogger($logFilePath, 'Y-m-d'); //Create EasyLogger instance using custom date format. You can also pass the third parametar to set custom time format.
		$easyLogger->log($ex->getMessage(), EasyLogger::ERR); //Log exception message with ERR (error) priority.
	}
	catch (Exception $ex) {
		echo $ex->getMessage();
	}
}
?>