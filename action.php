<?php 
@include_once('Connection/connections.php');
$con = connection();

if(isset($_POST['submit'])) {
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $sql = "INSERT INTO message_info(`mess`)
    VALUES ('$message')";
    $con->query($sql)or die ($con->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for messaging</title>

    <style>
        * {margin: 0; padding: o; box-sizing: border-box;}

        .div {
            width: 100vw;
            height: 100vh;
            background: rgb(55, 55, 55);
        }

        .div-1 {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        span {
            margin-top: 50px;
            color: white;
            font-size: 80px;
            font-family: 'Arial';
        }

        button {
            padding: 10px 30px;
            border: none;
            font-family: 'Arial';
            color: black;
            font-size: 20px;
        }

        button:hover {
            background: black;
            color: white;
        }
    </style>
</head>
<body>

<div class="div">
    <div class="div-1">
        <span>Thank you for messaging!</span>
        <br><a href="index.php"><button>Go back to main page</button></a>
    </div>
</div>
    
</body>
</html>
