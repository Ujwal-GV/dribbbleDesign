<?php
include("connect.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="back">
    <h1>WELCOME TO REGISTRATION</h1>
    <form action="register.php" method="post">
        <div class="box">
            <div id="left">
                <ol>
                    <li>ID</li>
                    <li>NAME</li>
                    <li>USERNAME</li>
                    <li>PASSWORD</li>
                    <li>EMAIL</li>
                    <li>PHONE</li>
                </ol>
            </div>
            <div id="right">
                <ol>
                    <li><input type="text" name="id" required="" placeholder="Your user id generated is" value="<?php $random = mt_rand(0000, 9999); echo "MHBS".$random; ?>"></li>
                    <li><input type="text" name="name" title="Enter your name" required="" placeholder="Enter your name"></li>
                    <li><input type="text" name="user" title="Enter your username" required="" placeholder="Enter the username"></li>
                    <li><input type="password" name="password" title="Enter your password" required="" placeholder="Enter your password"></li>
                    <li><input type="email" name="email" title="Enter your email" required="" placeholder="Enter your email"></li>
                    <li><input type="text" name="phno" title="Enter your phoneno" required="" maxlength="10" minlength="10" placeholder="Enter your phoneno"></li>
                </ol>
            </div>
        </div>
        <div id="reg">
            <input type="submit" value="REGISTER" name="register">
        </div>
        <button><a href="admin.php">BACK</a></button>
    </form>
</body>
</html>

<?php
error_reporting(0);
if($_POST['register'])
{
    $name=$_POST['name'];
    $user=$_POST['user'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $id=$_POST['id'];

    $sql="INSERT INTO register(id,name,user,password,email,phno) VALUES ('$id','$name','$user','$password','$email','$phno')";
    $cond1="SELECT * FROM register WHERE user='$user'";
    $cond2="SELECT * FROM register WHERE email='$email'";
    $mov1=mysqli_query($conn,$cond1);
    $mov2=mysqli_query($conn,$cond2);
    if(mysqli_num_rows($mov1)>0)
    {
        echo "<script>alert('USERNAME ALREADY EXISTS!!')</script>";
    }

    else if(mysqli_num_rows($mov2)>0)
    {
        echo "<script>alert('EMAIL ALREADY EXISTS!!')</script>";
    }

    else if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('REGISTRATION SUCCESSFULL!!')</script>";
        ?>
            <meta http-equiv = "refresh" content = "0; url = http://127.0.0.1/dribbbleDesign/admin.php " />
        <?php
        $sql2="INSERT INTO bookings (user) VALUES ('$user')";
        $result1 = mysqli_query($conn,$sql2);
    }

    else
    {
        echo "<script>alert('REGISTRATION UNSUCCESSFULL!!')</script>";
    }
}

?>