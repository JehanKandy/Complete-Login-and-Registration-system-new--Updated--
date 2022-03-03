<?php
    include("config.php");
    session_start();

    $sql = "SELECT * FROM user_tbl WHERE user_type = 'user'";
    $result = mysqli_query($con, $sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Employees</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Oswald:wght@500&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">    <style>
        
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th{
            font-size: 120%;
            font-family: 'Oswald', sans-serif;
        }
        tr{
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .edit{
            background: rgba(0, 172, 255, 0.19);
            color: rgba(0, 49, 255, 1);
            width: 80%;
            height: 30px;
            border: none;
            border-radius: 10px;
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .edit:hover{
            background: rgba(0, 49, 255, 1);
            color: white;
        }
        h1{
            font-size: 350%;
            font-family: 'Poppins', sans-serif;
        }
        .acc_a{
            color: green;
        }
        .acc_d{
            color: red;
        }
        .back{
            background: rgba(0, 172, 255, 0.19);
            color: rgba(0, 49, 255, 1);
            width: 10%;
            height: 30px;
            border: none;
            border-radius: 10px;
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .back:hover{
            background: rgba(0, 49, 255, 1);
            color: white;
        }
        p{
            font-size: 100%;
            font-family: 'Poppins', sans-serif;  
        }
    </style>
</head>
<body>
    <p>
        <a href="admin.php"><button class="back">Back</button></a>
    </p>

    <center>
    <h1>
        Control All Users
    </h1>


        <table>
            <tr>
                <th>
                    Username
                </th>
                <th>
                    Email
                </th>
                <th>
                    User Type
                </th>
                <th>
                    User Status
                </th>
                <th>
                    Last Upda Time
                </th>
                <th>
                    Action
                </th>
            </tr>
                <?php

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){

                ?>
            <tr>
                <td>
                    <?php echo($row['username']); ?>
                </td>
                <td>
                    <?php echo($row['email']); ?>
                </td>
                <td>
                    <?php echo($row['user_type']); ?>
                </td>
                <td>
                    <?php echo($row['user_status']."&nbsp&nbsp&nbsp");
                        if($row['user_status'] == 1){
                            echo("<span class='acc_a'>(Account Activeted)</span>");
                        }else{
                            echo("<span class='acc_d'>(Account Deactivate)</span>");
                        }
                    ?>
                </td>
                <td>
                    <?php echo($row['time']); ?>
                </td>
                <td>
                   <a href="c_user_edit.php?id=<?php echo($row['id']); ?>"><button class="edit">Edit</button></a>
                </td>
            </tr>
            <?php }
            }
            ?>

        </table>
    </div>
    </center>
</body>
</html>