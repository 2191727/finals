<!DOCTYPE html>
<?php
// include 'db.php';

// // $string = $db->prepare('SELECT * FROM exam_table WHERE exam_title=? and time_limit=? and course_id=? and question_limit=?');
// // $string->bind_param('ssss', $title, $time, $course, $questions);
// // $string->execute();
// // $result = $string->get_result();

// if ($result->num_rows > 0) {
//     while ($row - $result->fetch_assoc()) {
//         echo '<tr><td>', $row['exam_title'], '</td><td>', $row['time'], '</td><td>', $row['course'], '</td><td>', $row['question_limit'], '</td><td>';
//     }
// } else {
//     echo 'No Results';
// }

// $con->close();
?>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Student</title>
    <link rel="stylesheet" href="myexams.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawsome.com/a076d05399"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php include 'index.php'; ?>
</head>

<body>
    <div class="container">
        <table class="content-table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Time Limit</th>
                    <th scope="col">Course</th>
                    <th scope="col">Questions</th>
                    <th scope="col" style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <form action="" method="POST">
                        <td>
                            <center><?php echo $title; ?></center>
                        </td>
                        <td>
                            <center><?php echo $time; ?></center>
                        </td>
                        <td>
                            <center><?php echo $course; ?></center>
                        </td>
                        <td>
                            <center><?php echo $questions; ?></center>
                        </td>
                        <td>
                            <a href='take'>Take Exam</a>
                            <a href='view'>View Exam</a>
                    </td>
                    </form>
                </tr> -->
                <?php
                $servername = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'finals';
                
                //create connection
                $connection = new mysqli($servername, $username, $password, $database);
                
                //check connection
                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }

                $sql = 'SELECT * FROM exam_table';
                $result = $connection->query($sql);
                
                if (!$result) {
                    die('Invalid query: ' . $connection->error);
                }
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                                    <td>" .
                        $row['exam_title'] .
                        "</td>
                                    <td>" .
                        $row['time_limit'] .
                        "</td>
                                    <td>" .
                        $row['exam_description'] .
                        "</td>
                                    <td>" .
                        $row['question_limit'] .
                        "
                                    <td>
                                            <a class='btn btn-primary btn-sm' href='take'>Take Exam</a>
                                            <a class='btn btn-secondary btn-sm'href='view'>View Exam</a>
                                    </td>
                                </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>


<!-- <th scope="row">CFE 135</th>
    <td>5:00</td>
    <td>CFE NA MALUPET</td>
    <td>Not yet taken</td>
    <td><button>Take Exam</button>
    <button>View Result</button></td> -->
