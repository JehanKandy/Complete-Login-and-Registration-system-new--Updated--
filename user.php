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
</head>
<body>
        <center>
            <table border="0">
                <tr>
                    <td>
                        <h1>
                                Hello <span>User</span>...! 
                        </h1>
                    </td>
                    <tr>
                        <td>
                            <h4><?php echo($_COOKIE['loginDemo']);?></h4>
                        </td>
                        
                    </tr>
                </tr>
                <tr>
                    <td>
                        <a href="logout.php"><button class="logout">Logout</button></a>
                    </td>
                </tr>

            </table>

        </center>

    </div>
    
</body>
</html>