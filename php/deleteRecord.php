<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: Admin.php");
    exit();
}
?>
<script>
    function myFunction() {
        if (confirm('Do you want to delete the record!')) {
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
                    $Reg = $_POST["reg"];
                    $Roll = $_POST["roll"];
                    $sql = "delete from result where RollNo = '$Roll'";
                    if ($conn->query($sql) === TRUE) {
                        $txt = "Record deleted successfully" ;    
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
    <link rel="stylesheet" href="deleteRecord.css">
    <title>Delete</title>
</head>
<body>
        <div class="topnav">
            <a  href="Adminlogged.php"><?php echo"<div>",$_SESSION['username']."</div>"?></a>
            <div class="active">
                <a class="active1"href="logout.php">logout</a> 
            </div> 
        </div>
    <div>
        <h1>
            Delete Record
        </h1>
    </div>
    <div class="main">
        <div class="dl">
            <form action="deleteRecord.php" method="post">
                <table>
                    <tr>
                        <td><label for="reg">Reg No. : </label></td>
                        <td><input type="number" name="reg" id="reg"width="30"size="80" placeholder="Registration Number"></td>
                    </tr>
                    <tr>
                        <td><label for="roll">Roll No. : </label></td>
                        <td><input type="number" name="roll" id="roll"width="30"size="80" placeholder="Roll Number"></td>
                    </tr>
                     
                </table>
                <div class="S">
                        <input onclick="myFunction()" type="submit" value="Delete">
                </div> 
            </form>
        </div>
    </div>
    
</body>
</html>