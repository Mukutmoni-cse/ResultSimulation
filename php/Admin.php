<?php
$login = false;
$showerrors = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "select * from admin where username='$username' and pass='$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num==1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: Adminlogged.php");
    }
    else{
        $showerrors = "Invalid Credentials";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="Admin.css">
</head>

<body>
    <header>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="Admin.php">Admin Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
        </ul>
    </header>
    
    <div>
        <form action="Admin.php" method="post">
            <table id="login">
                <tr>
                    <td><?php
                        if($login == false){
                            echo '<div id="error">',$showerrors,'</div>';
                        }
                    ?></td>
                </tr>
                <tr>
                    <td>
                        <label for="user">Username : </label>
                    </td>
                    <td>
                        <input type="text" name="username" id="user">
                    </td>
                </tr>
                <tr>
                    <td><label for="pass">Password : </label></td>
                    <td>
                        <input type="password" name="password" id="pass">
                    </td>
                </tr>
                <tr>

                    <td id="submit"><button type="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>