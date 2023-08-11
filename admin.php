<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <div class="Box">
            <div class="iBox">
                <div class="boxCont">
                    ADMIN<br><br><hr style="width: 100%;"><br>
                    <input type="text" name="user" placeholder="USERNAME" required="true"><br>
                    <input type="password" name="password" placeholder="PASSWORD" required="true"><br>
                    <input type="submit" name="submit"><br>
                    <label for="reg">New user? <a href="register.php">Register</a></label>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

<?php
session_start();
include('connect.php');
error_reporting(0);
if (isset($_POST['submit']))
{
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['password'] = $_POST['password'];

    $sql = "SELECT * FROM register WHERE user = '{$_SESSION['user']}' AND password = '{$_SESSION['password']}'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($row['user']==$_SESSION['user'] && $row['password']==$_SESSION['password'])
    {
        echo "<script>alert('Login successful!!')</script>";
        ?>
            <meta http-equiv = "refresh" content = "0; url = http://127.0.0.1/dribbbleDesign/index.php " />
        <?php
    }
    else
    {
        echo "<script>alert('You have not registered!!')</script>";
    }
}
?>