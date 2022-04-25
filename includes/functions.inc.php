<?php



///////////////////////////////////USER SIGN UP FUNCTIONS////////////////////////////////////

// Check for empty input signup
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
	$result = true;
	if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}



// Check invalid username
function invalidUid($username) {
	$result = true;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check invalid email
function invalidEmail($email) {
	$result = true;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check if passwords matches
function pwdMatch($pwd, $pwdrepeat) {
	$result = true ;
	if ($pwd !== $pwdrepeat) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check if username is in database, if so then return data
function uidExists($conn, $username) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../login.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $username);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

// Insert new user into database
function createUser($conn, $name, $email, $username, $pwd) {
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../login.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: ../login.php?error=none");
	exit();
}

// Check for empty input login
function emptyInputLogin($username, $pwd) {
	$result = true;
	if (empty($username) || empty($pwd)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

/////////////////////////////////////// USER LOGIN FUNCTIONS ////////////////////////////////////////////////////

// Log user into website
function loginUser($conn, $username, $pwd) {
	$uidExists = uidExists($conn, $username);

	if ($uidExists === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	elseif ($checkPwd === true) {
		if(isset($uidExists["usersId"])) {
		session_start();
		$_SESSION["userid"] = $uidExists["usersId"];
		$_SESSION["name"] = $uidExists["usersName"];
		$_SESSION["useremail"] = $uidExists["usersEmail"];


		if ($uidExists["AdminVer"] === 'True')
	    $_SESSION["admin"] = $uidExists["AdminVer"];
		
		}	

		header("location: ../index.php?error=none");
		exit();
	}
}
///////////////////////////////////////////////////////////////////////////////////REPORT FUNCTIONS//////////////////////////////////////////////////////////////////////


function EmptyReportInput( $item_name,  $item_description, $item_finder,  $item_picture, $item_date, $item_catagory) {
	$result = true;
	if (empty($item_name) || empty($item_description) || empty($item_description) || empty( $item_finder) || empty($item_picture) || empty($item_date) || empty( $item_catagory)){
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invaiditemname($item_name) {
	$result = true;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $item_name)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function InsertItem($conn, $item_name, $item_description, $item_finder, $item_picture, $item_date, $item_catagory, $item_location) {

	$sql = "INSERT INTO lost_items (item_name, item_description, item_finder, item_picture, item_date, item_catagory, item_location) VALUES (?, ?, ?, ?,?,?,?);";
  
	  $stmt = mysqli_stmt_init($conn);
	  if (!mysqli_stmt_prepare($stmt, $sql)) {
		   header("location: ../Report_items.php?error=stmtfailed");
		  exit();
	  }
  
	  mysqli_stmt_bind_param($stmt, "sssssss", $item_name, $item_description, $item_finder, $item_picture, $item_date, $item_catagory, $item_location);
	  mysqli_stmt_execute($stmt);
	  mysqli_stmt_close($stmt);
	  mysqli_close($conn);
	  header("location: ../index.php?error=reportdone");
	  exit();
  }

  ////////////////////////////////////////////////////////////////////////////////////////// CLAIM FUNCTIONS/////////////


  
function InsertClaim($conn, $item, $name, $claimreason, $itemname, $itempic)  {

	$sql = "INSERT INTO claim (Item_Cid, Item_claimer, Item_Creason, Item_name, Item_picture) VALUES (?, ?, ?, ?, ?);";
  
	  $stmt = mysqli_stmt_init($conn);
	  if (!mysqli_stmt_prepare($stmt, $sql)) {
		   header("location: ../Report_items.php?error=stmtfailed");
		  exit();
	  }
  
	  mysqli_stmt_bind_param($stmt, "sssss", $item, $name, $claimreason, $itemname, $itempic);
	  mysqli_stmt_execute($stmt);
	  mysqli_stmt_close($stmt);
	  mysqli_close($conn);
	  header("location: ../index.php?error=Claimmade");
	  exit();
  }