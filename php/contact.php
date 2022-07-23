<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cstyle.css">
    <link rel="apple-touch-icon" sizes="180x180" href="details/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="details/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="details/favicon-16x16.png">
    <link rel="manifest" href="details/site.webmanifest">
    <title>Document</title>
</head>
<body>
    <?php
    /*$email = $_POST["email"];
    $msg = $_POST["query"];
    $to = "mukutmoniayan@gmail.com";
    if (mail($to,"Complaints!",$msg)) {
        echo "Mail sent successfully";
    }
    else{
        echo "Mail not sent";
    }*/
    ?>
<header>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="Admin.php">Admin Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
        </ul>
    </header>
    <div>
        <div class="I">
            <h1>Contact Details</h1>
        </div>
        <div class="set">
            <div class="F">
                <form action="contact.php" method="post">
                    <!--<label for="fname" color="white">Name</label>-->
                    <input type="text" id="fname" name="firstname" placeholder="Name"><br>
                    <!--<label for="lname">Email</label>-->
                    <input type="text" id="email" name="email" placeholder="Email"><br>
                    <!--<label for="lname">ContactNo</label>-->
                    <input type="text" id="ContactNo" name="ContactNo" placeholder="ContactNo.."><br>
                    <div class="C">
                        <textarea rows="4" cols="50"placeholder="  Query.." name="query"></textarea>
                    </div>
                    <div class="S">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    
</body>
</html>