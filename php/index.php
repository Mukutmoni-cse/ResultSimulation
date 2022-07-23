
<?php
$login = false;
$showerrors = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'studentlogin';
    // create a connection
    $conn = new mysqli($servername,$username,$password,$dbname);
    if ($conn->connect_error) {
        die("Connection error: ".$conn->connect_error);
    }
    $Roll = $_POST["RollNo"];
    $Reg = $_POST["Registration"];
    $sem = $_POST["Semester"];
    $sql = "select * from student where Registration='$Reg' and RollNo='$Roll' and Semester='$sem'";
    $name = "select Fname from student where Registration='$Reg' and RollNo='$Roll'";
    $result = mysqli_query($conn,$sql);
    $result2 = mysqli_query($conn,$name);
    $num = mysqli_num_rows($result);
    if($num==1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['Roll'] = $Roll;
        $_SESSION['Registration'] = $Reg;
        header("location: studentHome.php");
    }
    else{
        $showerrors = "No result found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="home1.css">
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
        <form action="index.php" method="post">
            <table id="signin">
                <tr>
                    <td><?php
                        if($login == false){
                            echo '<div id="Error">',$showerrors,'</div>';
                        }
                    ?></td>
                </tr>
                <tr>
                    <td><label for="reg ">Registration Number* : </label> </td>
                    <td><input type="number " name="Registration" id="reg " size="30"></td>
                </tr>
                <tr>
                    <td><label for="roll ">Roll Number* : </label></td>
                    <td><input type="number " name="RollNo" id="roll" size="30"></td>
                </tr>
                <tr>
                    <td><label for="sem ">Semester* : </label></td>
                    <td><input type="number " name="Semester" id="sem" size="5"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit">Submit</button> <button type="reset">Reset</button></td>
                </tr>
            </table>

        </form>
    </div>
    <div class = "marqdiv">
    <marquee class="marq" direction = "left" loop="" >
        <div class="geek1">*7th semester results available on 30/12/2022*</div>
    </marquee>
    </div>

</body>

</html>