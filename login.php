<?php
    require "db.php";
    session_start();

    if (isset($_POST['email_address'])) {
        $email=$_POST['email_address'];
        $pass=$_POST['password'];
        $string=$db->prepare("SELECT * FROM student_account WHERE student_email=? and student_password=?");
        $string->bind_param('ss', $email, $pass);
        $string->execute();
        $result = $string->get_result();
        if ($result->num_rows!=0) {
            $_SESSION['email_address'] = $email;
        }
        $string->close();   
    }
    header('Location: myexams.php')
?>
