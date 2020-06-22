<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'userdb');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}

// // for username availblty
// public function usernameavailblty($lname) {
// $result =mysqli_query($this->dbh,"SELECT lastname FROM tblusers WHERE lastname='$lname'");
// return $result;

// }

// Function for registration
	public function registration($fname,$lname,$email,$password,$dob)
	{
	$ret=mysqli_query($this->dbh,"insert into tblusers(firstname,lastname,email,password,dob) values('$fname','$lname','$email','$password','$dob')");
	return $ret;
	exit;
	}

// Function for signin
public function signin($email,$password)
	{
	$result=mysqli_query($this->dbh,"select id,firstname from tblusers where email='$email' and password='$password'");
	return $result;
	}


}
?>