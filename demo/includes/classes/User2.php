<?php
class User2 {
	// private $user2;
	private $con;
	private $user;
	private $code;

	public function __construct($con, $code,$user){
        $this->con = $con;
		$user2_details_query = mysqli_query($con, "SELECT * FROM createclass WHERE courseCode='$code'");
		$this->code= mysqli_fetch_array($user2_details_query);
		$user2_details_query = mysqli_query($con, "SELECT * FROM createclass WHERE username='$user'");
		$this->user= mysqli_fetch_array($user2_details_query);
	}

	
		

	public function getCourseCode() {
		return $this->code['courseCode'];
	}

	public function getNumPosts() {
		// $userCourseCode = $this->code['courseCode'];
		// $query = mysqli_query($this->con, "SELECT num_posts FROM createclass WHERE courseCode ='$userCourseCode '");
		// $row = mysqli_fetch_array($query);
        // return $row['num_posts'];
        return $this->code['num_posts'];
	}
	public function isStudent($username_to_check) {
		$usernameComma = "," . $username_to_check . ",";

		if((strstr($this->user['student_array'], $usernameComma) || $username_to_check == $this->user['username'])) {
			return true;
		}
		else {
			return false;
		}
	}


}

?>