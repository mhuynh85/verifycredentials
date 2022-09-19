<?php

    //Verify credentials from an associative array
	//after submit button is pressed
	//@rec an associative array of credentials 
	//@u user entered username
	//@p user entered password
	//@return erorr message if credentials invalid
	function verifyCredentials($rec, $u, $p)
	{
		$errorMessage = "";	
		
		//loop through array of username and password 
		for ($i=0; $i<count($rec); $i++)
		{
			$user = $rec[$i]['USERNAME'];
			$pass = $rec[$i]['PASSWORD'];
			
			//if a username and password match is found,
			//break the loop, no error message
			if (isset($_POST['subButton']) && !empty($u == $user) 
			&& !empty($p == $pass)){
				$errorMessage = "";
				break;
			}
			else{	
				$errorMessage = "Invalid credentials.";
			}
		}
		return $errorMessage;
		
	}
