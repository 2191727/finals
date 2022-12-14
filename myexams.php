<!DOCTYPE html>

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
                <?php
                $servername = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'finals_db';
                
                //create connection
                $connection = new mysqli($servername, $username, $password, $database);
                
                //check connection
                if ($connection->connect_error) {
                    die('Connection failed: ' . $connection->connect_error);
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
                                                    <td><center>" .
                        $row['time_limit'] .
                        "</center></td>
                                                    <td>" .
                        $row['exam_description'] .
                        "</td>
                                                    <td></center>" .
                        $row['question_limit'] .
                        "</center></td>
                                                    <td>
                                                        <form action='examsummary.php' method='POST' class='view'>
                                                            <input type='hidden' name='exam' value=\"" . $row['exam_id'] ."\">
                                                            <input type='submit' class='btn btn-secondary btn-sm' name='submit' value='View Exam'>
                                                        </form>
                                                    </td>
                                                </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>

</body>

</html>
