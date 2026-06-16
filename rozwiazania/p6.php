<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['xd2'])){

    $user = $_POST['user_id'];
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $subject = $_POST['subject'];
    $date = $_POST['due_date'];
    $status = $_POST['status'];

    $conn = mysqli_connect("localhost", "root", "", "php_inne");
    $result = "INSERT into exercises (user_id, title, description, subject, due_date, status) VALUES ('$user', '$title', '$desc', '$subject', '$date', '$status')";
    mysqli_query($conn, $result);
}
 




?>