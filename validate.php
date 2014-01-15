<?php

/// INFO 154 - Lab 1

/// Dylan Pierce

$testArray = array(
	'',
	'0123456789',
	'+1',
	'-1',
	'+1-',
	'aa4564345',
	',12324'
	'123,123,123',
	'12,3244,234',
	'1234,231,212',
);

$testOutput = array();

function isItaNumber($string)
{
	//Logic to check if $string is a valid number
	//It's easier in this case to define what is NOT a valid number. Else, the string must be a valid number.
	if($string === NULL)
	{
		return False;
	}
	elseif ($string === '')
	{
		return False;
	}
	elseif (!is_numeric($string) ) 
	{
		return False;
	}
	elseif (preg_match('\A[0-9]{1,3}(,[0-9]{3})+', $string)
	{
		//Dylan - This regex almost works, it's supposed to validate numbers with commas like '12,323,553'
		return False;
	}
	else
	{
		return True;
	}

}

// Dylan - Looping through our test cases and applying isItaNumber to each test string
// Also we are outputting to the browser if the case is True or False
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





?>