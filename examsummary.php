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
        include "db.php";
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'finals_db';
        
        if (!isset($_POST['exam'])) {
            $id = $POST['exam'];
            $string=$db->prepare("SELECT * FROM exam_table WHERE exam_id=?");
            $string->bind_param('s', $id);
            $string->execute();

            $connection = new mysqli($servername, $username, $password, $database);
        
            if ($connection->connect_error) {
                die('Connection failed: ' . $connection->connect_error);
            }
        
            $sql = "SELECT * FROM exam_table WHERE exam_id=$id";
            $result = $connection->query($sql);
        
            if (!$result) {
                die('Invalid query: ' . $connection->error);
            }
        
            while ($row = $result->fetch_assoc()){ 
            $row = mysqli_fetch_array($result);
        
            $exam_id = $row[0];
            $exam_title = $row[1];
            $exam_limit = $row[2];
            $exam_questions = $row[3];
        
            echo "<BR>" . $exam_id . "<BR>" . $exam_title . "<BR>" . $exam_limit . "<BR>" . $exam_questions . "<BR>";
            $string->close();
        }
    }
        ?>
    </tbody>
</table>
