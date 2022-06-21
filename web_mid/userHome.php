<?php



$userId = $_REQUEST['userId'];



$file = fopen('user.txt', 'r');

   

    while (!feof($file)) {

        $data = fgets($file);

        $user = explode("|", $data);

        if($userId == trim($user[0])) {

            $userName = trim($user[2]);

            echo '<h1>Welcome '.$userName.' !!</h1>';

        }  

    }




    if(isset($_COOKIE['status']))

    {

?>



<html>

<head>

    <title>User Home</title>

</head>

<body>

    <a href="Profile.php?userId=<?php echo $userId; ?>">Profile </a> <br>

    <a href="ChangePassword.php"> Change Password </a> <br>

    <a href="logout.php"> logout </a>

   

</body>

</html>



<?php

    }else{

        echo "invalid request!";

    }

?>