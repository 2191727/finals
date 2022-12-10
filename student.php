<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Student</title>
    <link rel="stylesheet" href="student.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-student">

            <div class="user-image">
                <img src="team-socials.png" width="40px" height="40px" alt="">
            </div>
            <div class="user-wrapper">
                <div>
                    <h4>Team Socials</h4>
                    <small>Student</small>
                </div>
            </div>

        </div>

        <div class="sidebar-menu">
            <ul class="nav">
                <li>
                    <a href="student.php"><span><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span>Home</span></a>
                </li>

                <li>
                    <a href="studentlist.php"><span><i class="fa fa-users" aria-hidden="true"></i></span>
                        <span>My Exams</span></a>
                </li>

                <li>
                    <a href="createquiz.php"><span><i class="fa fa-list-alt" aria-hidden="true"></i></span>
                        <span>Show Grades</span></a>
                </li>


                <li>
                    <a href=""><span><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                        <span>Logout</span></a>
                </li>

                <div class="active"></div>

            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                </label>
            </h2>
        </header>
    </div>
</body>

</html>
