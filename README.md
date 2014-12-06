Script doesnt work anymore
===========================

	```php		<?php																	
			include_once "alfa.sms.class.php";									
			$sms=new AlfaSMS();													
			$result=$sms->login('username','password');							
			$sms->send('8089617433','Thanks Alfred,your API works perfectly.');	
			$sms->logout();															
		?>```																		
	2.
	```php	<?php
			include_once "alfasmsapi/alfa.sms.php";
			$link = mysql_connect("localhost", "mysql_username", "mysql_password") or die ("Could not connect to MySQL");
			mysql_select_db ("Your_databse") or die ("Could not select database");
			$query="SELECT * FROM members";
			$result=mysql_query($query);
			$content="Testing Alfasms";
			while ($myrow = mysql_fetch_array($result))
			{
				alfasms($myrow["mobile"],$content);	
			};
		?>```
	
	If you get Fatal error: Call to undefined function curl_init() ,
	Then you need to enable the curl extension in php.ini from your controlpanel.
	If your server is not supporting cURL,obtain my online version @ www.alfredfrancis.in/alfasms-api
	which will works an all server which supports PHP


