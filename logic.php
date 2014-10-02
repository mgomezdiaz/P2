<?php

/* Read the dictionary. If the source of words change, as for example scraped from the web, 
 * hardcoded, or from another file, the rest of the program remains unchanged.
 * In this case, reading from a file that contains the dictionary of words.
 */
$words =  file ( "./files/wordlist.txt" );

/* Variable initialization */
$customization['words'] = 3; /* by default use 3 words in the password generated */
$customization['symbol'] = false; /* if the password has symbols */
$customization['number'] = false; /* if the password has numbers */
$customization['capital'] = false; /* if all the letters should be capitalized. */
$customization['camel_case'] = false; /* if the first letter of each word should be capitalized */
$customization['first_capital'] = false; /* if the first letter of the password should be capitalized */


/* Read the variables posted if any, if not use defaults */
foreach ($_POST as $key => $value){
	/* check if variable has a value, if it does, record the value*/
	if ($value){
		$customization[$key]= $value;
	}
}

$password = "";	/* for storing the generated password. */


/*Generate the password!*/
for ($i = 1; $i <= intval($customization['words']); $i++) {
	$wordIndex = rand(0, count($words));   		/*generate a random number*/
	$word = $words[$wordIndex];
	/*Capitalize first letter if applies*/
	if ($customization['camel_case']){
		$word = ucfirst($word);
	}	

	$password .= "-".trim($word);   /*concatenate it from the dictionay*/
}

/*Define the default symbol. This can be read from an input as well!*/
$symbol = "@";
/*Add symbol if applies*/
if ($customization['symbol']){
	$password .= $symbol;
}

/*Add number if applies*/
if ($customization['number']){
	$number = rand(0, 9);   		/*generate a random number*/
	$password .= $number;
}

/*Capitalize if applies*/
if ($customization['capital']){
	$password = strtoupper($password);
}

/*Clean the first symbol*/
$password = substr($password, 1);


/*Capitalize first letter if applies*/
if ($customization['first_capital']){
	$password = ucfirst($password);
}






?>