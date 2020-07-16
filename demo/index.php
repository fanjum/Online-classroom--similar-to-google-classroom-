<?php 
include("header.php");
include("includes/classes/User.php");
include("includes/classes/User2.php");
include("includes/classes/Post.php");
$ooo = "";
 ?>

   <html>
   <body>
   <div class="wrapper">
    <div class="teaching">
        <h3>Teaching</h3>
    </div>
    <?php 
               $post = new Post($con, $user['username'], $user2['courseCode']);
               $post->loadTeachingClasses();
          ?>

    <div class="enrolled">
        <h3>Enrolled</h3>
    </div>

    <?php 
               $post = new Post($con, $user['username'], $user2['courseCode']);
               $post->loadEnrolledClasses();
          ?>


</div>


</body>

</html>
