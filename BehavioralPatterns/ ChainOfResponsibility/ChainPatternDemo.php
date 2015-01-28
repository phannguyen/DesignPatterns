<?php
/*
 * http://www.tutorialspoint.com/design_pattern/chain_of_responsibility_pattern.htm
 */

function __autoload($class_name) {
	include $class_name . ".php";
}

function getChainOfLoggers()
{
	$errorLogger = new ErrorLogger(AbstractLogger::ERROR);
    $fileLogger = new FileLogger(AbstractLogger::DEBUG);
    $consoleLogger = new ConsoleLogger(AbstractLogger::INFO);
	
	$errorLogger->setNextLogger($fileLogger);
	$fileLogger->setNextLogger($consoleLogger);
	
	return $errorLogger;
}

$loggerChain = getChainOfLoggers();

$loggerChain->logMessage(AbstractLogger::INFO, "This is an information.");
$loggerChain->logMessage(AbstractLogger::DEBUG, "This is an debug level information.");
$loggerChain->logMessage(AbstractLogger::ERROR, "This is an error information.");
