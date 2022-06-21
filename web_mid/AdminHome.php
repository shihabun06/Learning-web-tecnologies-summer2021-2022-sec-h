<?php
$userId=$_REQUEST['userId'];
$file = fopen('user.text', 'r');
while (!feof($file)){
   $data=fgets($file) ;
   $user=explode("|", $data);
   if($userId==trim($user[0])){
    $userName=trim($user[2]);
    echo '<h2>welcome'.$userName.'!!</h2>';
   }
}
if(isset($_COOKIE['statud']))
?>


<html>
    <head>
        <title>Admin Home</title>
    </head>
    <body>
        <a href="profile.php?userId=".$userId> profile </a>
        <br>
        <a href="ChangePassword.php"> Change Password</a>
        <br>
        <a href="userList.php">View users </a>
        <br>
        <a> href="logout.php" logout </a>
        <br>
    </body>
</html>