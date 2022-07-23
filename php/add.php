<?php

    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: Admin.php");
        exit();
    }
?>
<script>
    function myFunction() {
        if (confirm('Do you want to insert a new record!')) {
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
                    $sql = "insert into result(Registration,RollNo,sub1,sub2,sub3,sub4,sub5,semester,name) values('$Reg','$Roll','$Sub1','$Sub2','$Sub3','$Sub4','$Sub5','$sem','$Name')";
                    if ($conn->query($sql) === TRUE) {
                        $txt = "New record created" ;    
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
    <link rel="stylesheet" href="adstyle.css">
    <link rel="apple-touch-icon" sizes="180x180" href="addfavicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="addfavicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="addfavicon/favicon-16x16.png">
    <link rel="manifest" href="addfavicon/site.webmanifest">
    <title>Add</title>
</head>
<body>
    <div id="last"></div>
    <div>
        <div class="topnav">
            <a  href="Adminlogged.php"><?php echo"<div>",$_SESSION['username']."</div>"?></a>
            <div class="active">
                <a class="active1"href="logout.php">logout</a> 
            </div> 
        </div>
        <div class="I">
            <h1>Add Information </h1>   
        </div>
        <div class="set">
            <div class="F">
                <form action="add.php" method="post">
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
                            <td><label for="Sem">
                                Semester
                            </label><br></td>
                            <td><input type="number" name="Sem" id="Sem"placeholder="Semester" /><br></td>
                        </tr>
                </table>
                <table >
                        <tr>
                            <td><label for="subject"></label>
                            </td>
                            <td><label for="subject">Subject</label></td>
                            <td><input type="text1" name="subject1" id="subject1" placeholder="Sub1"size="70"/></td>
                            <td><label for="subject"></label></td>   
                            <td><input type="text1" name="subject2" id="subject2" placeholder="Sub2"size="70"/></td>
                            <td><label for="subject"></label></td>
                            <td><input type="text1" name="subject3" id="subject3" placeholder="Sub3"size="70"/></td>
                            <td><label for="subject"></label></td>
                            <td><input type="text1" name="subject4" id="subject4" placeholder="Sub4"size="70"/></td>
                            <td><label for="subject"></label></td>
                            <td><input type="text1" name="subject5" id="subject5" placeholder="Sub5"size="70"/></td>
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