<?php

   /*********************************************************************************
	*	Alfasms API 4.0	for way2sms													*
	*	Author		  : Alfred francis												*
	*	Email         : alfredputhurh@gmail.com										*
	*	API homepage  : www.alfredfrancis.in/alfasms-api							*							
	*	Feel free to edit,share and publish.										*
	*																				*
	*		Simple usage															*
	*		------------															*
	*		<?php																	*
	*			include_once "alfa.sms.class.php";									*
	*			$sms=new AlfaSMS();													*
	*			$result=$sms->login('username','password');							*
	*			$sms->send('8089617433','Thanks Alfred,your API works perfectly.');	*
	*		$sms->logout();															*
	*		?>																		*
	*********************************************************************************/


include_once "alfa.sms.class.php";
/*
If you get Fatal error: Call to undefined function curl_init() ,
Then you need to enable the curl extension in php.ini from your controlpanel.
If your server is not supporting cURL use my online version @ www.alfredfrancis.in/alfasms-api
*/
//initialising AlfaSMS API Class
$sms=new AlfaSMS();

echo "Alfasms is Logging in.. <br>";

//Replace useranme and password with your way2sms username and password
$result=$sms->login('username','password');


	if($result)
	{
		echo "Alfasms is Sending SMS..<br> ";
		
		//It'll be my pleasure to receive a sms from you
		$result=$sms->send('8089617433','Thanks Alfred,your API works perfectly.');
		
			if($result)
			{
				echo "Alfasms: SMS send sucessfully !";
			}
			else
			{
				echo "Alfasms: Cant send SMS,Invalid content or Mobile number !<br>";
			}
	}
echo "Alfasms is Logging out  ... <br>";	

//Alfasms is loging out
$sms->logout();
?>

