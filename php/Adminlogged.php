<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: Admin.php");
        exit();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $_SESSION['username']?></title>
    <link rel="stylesheet" href="Adminlogged.css">
</head>
<body>
    
    <header>
        <ul class="nav">
            
            <li class="nav-item" >
                <a class="nav-link" aria-current="page" href="Adminlogged.php">
                <?php echo"<div>",$_SESSION['username']."</div>"?>
                </a>
            </li>
            
            <li class="nav-item" >
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </header>
    <div class="body">
        <div class="links">
            <span class="a">-></span><a href="add.php"class="a">Add result</a><br>
            <span class="b">-></span><a href="student.php" class="b">Update result</a><br>
            <span class="c">-></span><a href="deleteRecord.php" class="c">Delete result</a><br>
            <span class="d">-></span><a href="#" class="d">Complaints</a>
        </div>
    </div>
</body>
</html>