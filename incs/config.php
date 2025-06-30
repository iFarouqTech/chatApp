<?php

	require "dbConn/dbConnection.php";

	// FETH USER'S DATA FROM DB
	$usrData = mysqli_fetch_array($conn->query("SELECT * FROM users WHERE userUniqueID = '10FG9G73NE' && userEmailAddress = 'ifarouq@example.com'"));

	if ($usrData) {
		$myID 			= htmlspecialchars($usrData['userID']);
		$myUniqueKey 	= htmlspecialchars($usrData['userUniqueID']);
		$myStatus 		= htmlspecialchars($usrData['userStatus']);
		$myUsername 	= htmlspecialchars($usrData['userUsername']);
		$myFirstName 	= htmlspecialchars($usrData['userFirstName']);
		$myLastName 	= htmlspecialchars($usrData['userLastName']);
		$myGender 		= htmlspecialchars($usrData['userGender']);
		$myBirthDate 	= htmlspecialchars($usrData['userBirthDate']);
		$myState 		= htmlspecialchars($usrData['userState']);
		$myCity 		= htmlspecialchars($usrData['userCity']);
		$myEmail 		= htmlspecialchars($usrData['userEmailAddress']);
		$myNumber 		= htmlspecialchars($usrData['userMobileNumber']);
		$myPhoto 		= $usrData['userProfileImage'];
	}
	else{
		$myID = $myUniqueKey = $myStatus = $myUsername = $myFirstName = $myLastName = $myGender = $myBirthDate = $myState = $myCity = $myEmail = $myNumber = $myPhoto = "";
		
	}
