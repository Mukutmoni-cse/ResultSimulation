<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'studentlogin';
// create a connection
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection error: ".$conn->connect_error);
}
session_start();
$Reg1 = $_SESSION['Registration'];
$Roll1 = $_SESSION['Roll'];
$query1 = "select * from student where Registration='$Reg1' and RollNo='$Roll1'";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
//another connection
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'studentresult';
$conn2 = new mysqli($servername,$username,$password,$dbname);
if ($conn2->connect_error) {
    die("Connection error: ".$conn->connect_error);
}

$query2 = "select * from result where Registration='$Reg1' and RollNo='$Roll1'";
$result2 = mysqli_query($conn2,$query2);
$row2 = mysqli_fetch_assoc($result2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentHome2.css">
    <title>Home</title>
</head>
<body>
<header>
        <ul class="nav">
            
            <li class="nav-item" >
                <a class="nav-link" aria-current="page" href="studentHome.php">
                <?php echo"<div> Welcome " .$row1['Fname']."</div>"?>
                </a>
            </li>
            
            <li class="nav-item" >
                <a class="nav-link" href="logout2.php">Logout</a>
            </li>
        </ul>
    </header>
    <div class="info">
        <table>
            <tr>
                <td>Name :</td>
                <td><?php echo $row2["name"]; ?></td>
            </tr>
            <tr>
                <td>Roll Number :</td>
                <td><?php echo $row2["RollNo"]; ?></td>
            </tr>
            <tr>
                <td>Registration Number :</td>
                <td><?php echo $row2["Registration"]; ?></td>
            </tr>
            <tr>
                <td>Semester :</td>
                <td><?php echo $row2["semester"]; ?></td>
            </tr>
        </table>
         
        
    </div>
    <div class="grid">
        <table>
            <tr>
                <td>Subject Name</td>
                <td>Score</td>
            </tr>
            <tr>
                <td>Subject 1 </td>
                <td class="marks">
                    <?php
                    echo $row2["sub1"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Subject 2 </td>
                <td class="marks">
                <?php
                    echo $row2["sub2"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Subject 3 </td>
                <td class="marks">
                <?php
                    echo $row2["sub3"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Subject 4 </td>
                <td class="marks">
                <?php
                    echo $row2["sub4"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Subject 5 </td>
                <td class="marks">
                <?php
                    echo $row2["sub5"];
                    ?>
                </td>
            </tr>
        </table>
        
    </div>
</body>
</html>