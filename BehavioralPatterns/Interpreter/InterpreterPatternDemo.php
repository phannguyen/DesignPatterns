<?php
/*
 * http://www.tutorialspoint.com/design_pattern/interpreter_pattern.htm
 */

function __autoload($class_name) {
	include $class_name . ".php";
}

//Rule: Robert and John are male
function getMaleExpression()
{
	$robert = new TerminalExpression("Robert");
	$john = new TerminalExpression("John");
	return new OrExpression($robert,$john);
}

//Rule: Julie is a married women
function getMarriedWomanExpression()
{
	$julie = new TerminalExpression("Julie");
	$married = new TerminalExpression("Married");
	return new AndExpression($julie,$married);
}

$isMale = getMaleExpression();
$isMarriedWoman = getMarriedWomanExpression();

echo "John is male? ";
echo ($isMale->interpret("John"))? "true" : "false" ;
echo "<br>";
echo "Julie is a married women? ";
echo ($isMarriedWoman->interpret("Married Julie"))? "true" : "false";
?>
