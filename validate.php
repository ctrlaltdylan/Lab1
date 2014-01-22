<?php

 /* *
  * File:    validate.php 
  * 
  * Author:   Dylan Pierce | Carmine Valentino
  * Date:     January 21 2014   
  * Course:   INFO 154 
  * 
  * Summary of File: 
  * 
  *		Take string input as parameter look for well-formed numbers
  *   	Return True if all Criteria for assignment is met and false otherwise.
  *   
  *
  */

$testArray = array(
	'',
	'0123456789',
	'+1',
	'-1',
	'+1-',
	'aa4564345',
	',12324',
	'123,123,123',
	'12,3244,234',
	'1234,231,212'
);

$testOutput = array();

function isItaNumber($string)
{
	//Logic to check if $string is a valid number and meets ALL required criteria of such ...
	if (preg_match('/^[+-]?[0-9]{1,3}(?:,?[0-9]{3})*(?:\.[0-9]{2})?$/', $string))
	{
		//Dylan - This regex almost works, it's supposed to validate numbers with commas like '12,323,553'
		return True;
	}
	else
	{
		return False;
	}

}

// outputting to the browser if the case is True or False
foreach($testArray as $testString)
{
	if(isItaNumber($testString))
	{
		$testOutput[] = True;
		echo 'True <br>';
	}
	else
	{
		$testOutput[] = False;
		echo 'False <br>';
	}
}

echo print_r($testArray);
?>