<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Student</title>
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawsome.com/a076d05399"></script>
</head>


<body>

    <div class="main-content">
        <div class="header">
            <h1>Header</h1>
            <p>My supercool header</p>
        </div>
        <main>
        </main>
    </div>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-student">

            <div class="user-image">
                <img src="team-socials.png" width="200px" height="100px" alt="">

            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="nav">
                <li>
                    <a href="myexams.php"><span><i class="fa fa-users" aria-hidden="true"></i></span>
                        <span>My Exams</span></a>
                </li>
                <li>
                    <a href="showgrades.php"><span><i class="fa fa-list-alt" aria-hidden="true"></i></span>
                        <span>Show Grades</span></a>
                </li>
                <li>
                    <a href="logout.php"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                        <span>Logout</span></a>
                        
                </li>
                <div class="active"></div>
            </ul>
        </div>
    </div>
</body>

</html>
