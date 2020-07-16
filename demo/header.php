<?php 
require 'config/config.php' ;
require 'includes/form_handlers/createJoinClass_handler.php';
   
   if(isset($_SESSION['username'])){
		 $userLoggedIn  = $_SESSION['username'];
		 $userLoggedIn2  = $_SESSION['username'];
		 $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username = '$userLoggedIn'");
		 $user_details_query2 = mysqli_query($con, "SELECT * FROM createclass WHERE username = '$userLoggedIn2' ORDER BY id DESC");
		 $user = mysqli_fetch_array($user_details_query);
		 $user2 = mysqli_fetch_array($user_details_query2);
   }
   else{
   	header("Location:register.php");
   }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>classRoom</title>

    <!-- javaScripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="assets\js\createJoinClass.js"></script>
    <script src="asstes\js\bootstrap.js"></script>
    <script src="assets\js\index.js"></script>


    <!-- css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="asstes\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets\css\styling.css">
</head>

<body>


    <div class="top_bar">
        <div class="logo">
            <a href="index.php" style="text-decoration: none">classRoom</a>
        </div>

        <div class="icon">
            <nav>
                <a href="<?php echo $userLoggedIn; ?>">
                    <?php echo $user['first_name'] ?>
                    <span class="tooltiptext">Profile</span>
                </a>
                <a href="index.php"><i class="fas fa-home"></i>
				 <span class="tooltiptext">Home</span>
				 </a>
                <a href="#"><i class="far fa-envelope"></i>
				 <span class="tooltiptext">Messages</span>
				 </a>
                <a href="#"><i class="fas fa-bell"></i>  
				 <span class="tooltiptext">Notifications</span>
				 </a>
                <a href="createJoinClass.php"><i class="fas fa-plus"></i>
				 <span class="tooltiptext">Create or Join class</span>
				 </a>
                <a href="includes/handlers/logout.php">
				<i class="fas fa-sign-out-alt"></i>
				<span class="tooltiptext">Sign out</span>
				</a>

            </nav>
        </div>

    </div>
    <div>



    </div>
    </body>
</html>
