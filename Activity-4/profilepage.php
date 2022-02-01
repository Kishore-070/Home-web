<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:authentication.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profilepage.css">
    <title>Profilepage</title>
</head>
<body>
    <div class="full">
        <div class="left">
        </div>
        <div class="right">
            <div>
                <img class="imgg" src="images/profilepic.jpg">
            </div>
                 <h1 class="h11">
                     <?php echo $_SESSION['username']; ?>
                 </h1>
                 <br>
                 <p class="p1" >@<?php echo $_SESSION['username']; ?></p>
                 <br>
                 <div class="s1">
                     <p>000 Followers 0000 Following</p>
                 </div>
                 <br>
                 <div class="s2">
                     <p>Works at icrewsystems LLP since 2021 <br>
                        Studying at Saveetha college <br>
                        CSE Student
                        
                     </p>
                 </div>
                 <br>
                 <br>
                <div>
                    <a href="#"><button class="butn">Update Profile</button></a>
                    <br>
                    <br>
                    <a href="logout.php"><button class="butn">LOGOUT</button></a>
                </div>

        </div>
    </div>
</body>
</html>