<?php
    include ('config.php');
    session_start();

    if(isset($_POST['login'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $user = $_POST['user'];
            $pass = md5($_POST['pass']);

            $new_user = mysqli_real_escape_string($con,$user);
            
            $sql = "SELECT * FROM user_tbl WHERE username = '$new_user' && pass = '$pass'";
            $result = mysqli_query($con,$sql);



            if(mysqli_num_rows($result) > 0){

                $passn = md5($pass);
                $row = mysqli_fetch_assoc($result);
                if($row['user_status'] == 1){
                        if($row['user_type'] == 'admin'){
                            setcookie('loginDemo',$user,time()+60*60);
                            $_SESSION['login'] =  $user;
                            header('location:admin.php');
                        }
                        if($row['user_type'] == 'manager'){
                            setcookie('loginDemo',$user,time()+60*60);
                            $_SESSION['login'] =  $user;
                            header('location:manager.php');
                        }
                        if($row['user_type'] == 'user'){
                            setcookie('loginDemo',$user,time()+60*60);
                            $_SESSION['login'] =  $user;
                            header('location:user.php');
                        }
                        if($row['user_type'] == 'employee'){
                            setcookie('loginDemo',$user,time()+60*60);
                            $_SESSION['login'] =  $user;
                            header('location:employee.php');
                        }
                    }else{
                        $error[] = "Your account has been deactivated...!";
                    }
                }else{
                        $error[] = "Incorrect Password or Username";
                }
           
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="icon">
        <a href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
            </svg>
        </a>
    </div>
    <div class="container">
        <div class="content">
             <div class="form-container">
                <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>
                        <legend>Login</legend>

                            <?php
                                    if(isset($error)){
                                        foreach($error as $error){
                                            echo("<p class='error'>".$error."</p>");
                                        }
                                    }
                            ?>
                            <input type="text" name="user" id="user" placeholder="Enter Your Username">
                            <input type="password" name="pass" id="pass" placeholder="Enter Your Password">
                            <p>
                                Don't have an account? <a href="reg.php">Create One</a>
                            </p>
                            <input type="submit" value="Login" class="login-submit" name="login">
                        </form>
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>