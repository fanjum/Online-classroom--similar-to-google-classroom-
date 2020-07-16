<?php 
include("header.php");
include("includes/classes/User.php");
include("includes/classes/User2.php");
include("includes/classes/Post.php");
	 $user_array ="";
	 $courseName="";
	 $sec = "";
	 
     //fetching class room details
    $classCode = $_GET['classCode'];
	$user_details_query = mysqli_query($con, "SELECT * FROM createclass WHERE courseCode='$classCode'");
	$user_array = mysqli_fetch_array($user_details_query);
	$courseName = $user_array['className'];
	$sec = $user_array['section'];
	 
	//fetching teacher details
	$teacherName = $user_array['username'];
	$user_details_query2 = mysqli_query($con, "SELECT * FROM users WHERE username='$teacherName'");
	$teacherDetails = mysqli_fetch_array($user_details_query2);
 
	

	

if(isset($_POST['post'])){
	$post = new Post($con, $userLoggedIn2, $user2['courseCode']);
	$post->submitPost($_POST['post_text'], 'none');
	
}


?>

<html>
<body>
<div class="Wrapper">


    <div class="user_details cloumn">
        <h1>
            <?php echo $courseName ?>
        </h1>
        Section:
        <?php echo $sec ?>
        <br> Class code:
        <?php echo $classCode ?>
        <br>
    </div>


    <div class="people_column">
        Instructor:
        <a href="<?php echo $teacherName; ?>">
            <?php echo $teacherDetails['first_name'] . " " . $teacherDetails['last_name'] ?>
        </a>
        <br>
        <?php echo "Posts: " . $user_array['num_posts']. "<br>"; ?>

    </div>

    <div class="main_column">
        <form class="post_form" action="classRoom.php" method="POST">
            <textarea name="post_text" id="post_text" placeholder="Share something withyour class"></textarea>
            <input type="submit" name="post" id="post_button" value="post">
            <hr>
        </form>

        <?php 

		$post = new Post($con, $userLoggedIn,$user2['courseCode']);
		$post->loadPostsFriends();
        ?>

    </div>







</div>
</body>

</html>
