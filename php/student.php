<?php

    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: Admin.php");
        exit();
    }
?>
<script>
    function myFunction() {
        if (confirm('Do you want to update the record!')) {
            <?php
            $txt = "";
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $servername = 'localhost';
                    $username = 'root';
                    $password = '';
                    $dbname = 'studentresult';
                        // create a connection
                    $conn = new mysqli($servername,$username,$password,$dbname);
                    if ($conn->connect_error) {
                        die("Connection error: ".$conn->connect_error);
                    }
                    $Reg = $_POST["number"];
                    $Roll = $_POST["rollno"];
                    $Sem = $_POST["Sem"];
                    $Sub1 = $_POST["subject1"];
                    $Sub2 = $_POST["subject2"];
                    $Sub3 = $_POST["subject3"];
                    $Sub4 = $_POST["subject4"];
                    $Sub5 = $_POST["subject5"];
                    $sem = $_POST["Sem"];
                    $Name = $_POST["name"];
                    $sql = "update result set sub1='$Sub1',sub2='$Sub2',sub3='$Sub3',sub4='$Sub4',sub5='$Sub5' where Registration = '$Reg' and RollNo = '$Roll'";
                    if ($conn->query($sql) === TRUE) {
                        $txt = "Record updated successfully" ;    
                    }
                    else {
                        $txt = "Error: ". $sql ."<br>". $conn->error ;
                    }
                } 
            ?>
            
        }
    }
</script>
<?php
echo $txt;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="substyle.css">
    <link rel="apple-touch-icon" sizes="180x180" href="details/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="details/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="details/favicon-16x16.png">
    <link rel="manifest" href="details/site.webmanifest">
    <title>Update</title>
</head>
<body>

    <div>
        <div class="topnav">
            <a  href="Adminlogged.php"><?php echo"<div>",$_SESSION['username']."</div>"?></a>
            <div class="active">
                <a class="active1"href="logout.php">logout</a> 
            </div> 
        </div>
        <div class="I">
            <h1>Update Marks</h1>   
        </div>
        <div class="set">
            <div class="F">
                <form action="student.php" method="post">
                <table>
                        <tr>
                            <td>
                                <label for="name">
                                    Name
                                </label><br>
                            </td>
                            <td><input type="text" name="name" id="name"width="30"size="80"placeholder="Name" /><br>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="Registration No">
                                  RegNo.  
                                </label><br>
                            </td>
                            <td><input type="number" name="number" id="number"placeholder="RegNo." /><br>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="Roll No.">
                                RollNo.
                            </label><br>
                            </td>
                            <td><input type="number" name="rollno" id="rollno"placeholder="Roll No." /><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="Sem">
                                    Sem
                                </label><br>
                            </td>
                            <td><input type="text" name="Sem" id="Sem"width="30"size="80"placeholder="Sem" /><br>
                            </td>
                        </tr>
                </table>
                <table >

                        <tr>
                            <td><label for="subject"></label>
                            </td>
                            <td><label for="subject">Subject</label></td>
                            <td><input type="text1" name="subject1" id="subject" placeholder="Sub1"size="70"/></td>
                            <td><label for="subject"></label></td>   
                            <td><input type="text1" name="subject2" id="subject" placeholder="Sub2"size="70"/></td>
                            <td><label for="subject"></label></td>
                            <td><input type="text1" name="subject3" id="subject" placeholder="Sub3"size="70"/></td>
                            <td><label for="subject"></label></td>
                            <td><input type="text1" name="subject4" id="subject" placeholder="Sub4"size="70"/></td>
                            <td><label for="subject"></label></td>
                            <td><input type="text1" name="subject5" id="subject" placeholder="Sub5"size="70"/></td>
                        </tr>
                </table>
                <div class="S">
                    <input onclick="myFunction()" type="submit" value="Submit" >
                </div>
                </form>
            </div>

        </div>
        </div>
    </div>
    
</body>
</html>