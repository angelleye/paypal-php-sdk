<?php
// Include required library files.
require_once('config-sample.php');
require_once('../autoload.php');

// Create PayPal object.
$PayPalConfig = array(
					'Sandbox' => $sandbox,
					'APIUsername' => $api_username,
					'APIPassword' => $api_password,
					'APISignature' => $api_signature
					);

$PayPal = new PayPal\PayPal($PayPalConfig);

// Prepare request arrays
$BMButtonSearchFields = array
						(
						'startdate' => '', 			// Required.  Starting date for the search.  UTC/GMT format: 2009-08-24T05:38:48Z
						'enddate' => ''				// Ending date for the search.  UTC/GMT format: 2010-05-01T05:38:48Z  
						);
				
$PayPalRequestData = array('BMButtonSearchFields'=>$BMButtonSearchFields);

// Pass data into class for processing with PayPal and load the response array into $PayPalResult
$PayPalResult = $PayPal->BMButtonSearch($PayPalRequestData);

// Write the contents of the response array to the screen for demo purposes.
echo '<pre />';
print_r($PayPalResult);
?>