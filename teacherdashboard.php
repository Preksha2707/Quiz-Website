<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="header">
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <div class="container-fluid" id="header">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <p style="font-size:35px;text-transform: uppercase;margin:auto;padding:5px 5px">Quiz App</p>
                    </a>
                    <a class="navbar-brand" href="#">
                        <?php echo "<p style='font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px;'>Welcome {$_GET['name']}</p>"; ?>
                    </a>
                    <a class="navbar-brand" href="./view_course.php">
                        <p style="font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px">View Course</p>
                    </a>
                    <a class="navbar-brand" href="./add_course.php">
                        <p style="font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px">Add Course</p>
                    </a>
                    <a class="navbar-brand" href="./edit_course.php">
                        <p style="font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px">Edit Course</p>
                    </a>
                    <a class="navbar-brand" href="./delete_course.php">
                        <p style="font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px">Delete Course</p>
                    </a>
                    <a class="navbar-brand" href="./teacherlogin.php">
                        <p style="font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px">Logout</p>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div class="outer-div">
        <?php
        echo "<h2>Welcome {$_GET['name']}</h2>";
        ?>
        <a class="navbar-brand" href="./view_course.php">
            <p style="font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px">View Course</p>
        </a>
        <a class="navbar-brand" href="./add_course.php">
            <p style="font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px">Add Course</p>
        </a>
        <a class="navbar-brand" href="./edit_course.php">
            <p style="font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px">Edit Course</p>
        </a>
        <a class="navbar-brand" href="./delete_course.php">
            <p style="font-size:20px;text-transform: uppercase;margin:auto;padding:5px 5px">Delete Course</p>
        </a>
        <!-- <div class="buttons">
            <button id="teacher" style="color:#fff;text-transform:uppercase"><a href="./teacher.php" style="color:#fff">Teachers</a></button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button id="student" style="color:#fff;text-transform:uppercase"><a href="./student.html" style="color:#fff">Students</a></button>
        </div> -->
    </div>

    <div id="footer">
        <nav class="navbar navbar-inverse navbar-fixed-bottom ">
            <div class="container-fluid" id="footer">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <p style="font-size:20px;text-transform: uppercase;">&copy; Mohammad Umaid Ansari</p>
                    </a>
                </div>
            </div>
        </nav>


    </div>
</body>

</html>