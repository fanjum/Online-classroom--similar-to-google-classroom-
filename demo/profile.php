<?php 
include("header.php");
include("includes/classes/User.php");
include("includes/classes/Post.php");

if(isset($_GET['profile_username'])) {
	$username = $_GET['profile_username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
	$user_array = mysqli_fetch_array($user_details_query);
}
?>



<html>
<body>
<div class="main_column">
    dsfdsf
    <?php echo $username ?>
</div>



</body>

</html>
