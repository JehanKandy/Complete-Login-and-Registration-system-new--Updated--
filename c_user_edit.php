<?php
    include ("config.php");
    session_start();

    if(isset($_POST['update'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $id = $_POST['id'];
            $user_status = $_POST['user_status'];

            $sql = "UPDATE user_tbl SET user_status = '$user_status' WHERE id = '$id'";

            $result = mysqli_query($con, $sql);

            if(!$result){
                $error[] = "ERROR ";
            }else{
                header("location:c_user.php");
            }
        }
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql1 = "SELECT * FROM user_tbl WHERE id='$id'";

        $result = mysqli_query($con, $sql1);

        while($row = mysqli_fetch_assoc($result)){
            $username = $row['username'];
            $email = $row['email'];
            $user_type = $row['user_type'];
            $user_status_new = $row['user_status'];

        }


    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Oswald:wght@500&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
    <style>
        form{
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            background: #fff;
            width: 75%;
            font-family: 'Poppins', sans-serif;
            
        }
        .update{
            background: rgba(0, 172, 255, 0.19);
            color: rgba(0, 49, 255, 1);
            width: 80%;
            height: 30px;
            border: none;
            border-radius: 10px;
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .update:hover{
            background: rgba(0, 49, 255, 1);
            color: white;
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
<center>
                <form action="" method="POST">
                <table border="0">

                    <tr>
                        <td>
                            Username  
                        </td>
                        <td>&nbsp&nbsp : &nbsp&nbsp</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <?php echo $username; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email  
                        </td>
                        <td>&nbsp&nbsp : &nbsp&nbsp</td>
                        <td>
                            <?php echo $email; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            User Type 
                        </td>
                        <td>&nbsp&nbsp : &nbsp&nbsp</td>
                        <td>
                            <?php echo $user_type; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            User Status  
                        </td>
                        <td>&nbsp&nbsp : &nbsp&nbsp</td>
                        <td>
                            <input type="text" name="user_status" value="<?php echo $user_status_new; ?>">                            
                            (to deactivete account enter 0 / to activete account enter 1  )
                        </td>
                    </tr>
                    <tr>
                        <input type="submit" value="Update" name="update" class="update">
                    </tr>
                </table>
            </form>
            <br><br>
            <p> <a href="c_employee.php"><button class="back">Back</button></a> Without Updating </p>

</body>
</html>