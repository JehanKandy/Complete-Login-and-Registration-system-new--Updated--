<?php
    session_start();
    if(empty($_SESSION['login'])){
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Control Area</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <br>
    <center>
        <h1>
            Hi <span>Admin</span>
        </h1>
        <h2>
             <?php echo($_COOKIE['loginDemo']);?>
        </h2>
        <h3>
            Welcome to Admin Control Area
        </h3>
        <table border="0">
            <tr>
                <td>
                    <a href="c_manager.php">
                        <div class="box1">
                            <p>Control Managers <br>

                            </p>
                            <p class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="c_user.php">
                        <div class="box1">
                            <p>Control Users</p>
                            <p class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </p>
                        </div>
                    </a>
                </td>
                <td>
                    <a href="c_employee.php">
                        <div class="box1">
                            <p>Control Employees</p>    
                            <p class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </p>
                        </div>
                    </a>
                </td>

            </tr>
            <tr></tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr>
        <td>
            <a href="logout.php"><button class="logout">Logout</button></a>
        </td>
    </tr>
        </table>


    </center>
    
</body>
</html>