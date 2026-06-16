<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['xd'])){

    $name = $_POST['name'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $studentindex = $_POST['studentindex'];


    $conn = mysqli_connect("localhost", "root", "", "php_inne");
    $result = "INSERT into users (first_name, last_name, email, student_index) VALUES ('$name', '$last_name', '$email', '$studentindex')";
    mysqli_query($conn, $result);

    $liczba = mysqli_affected_rows($conn);
    if($liczba > 0){
        echo 'Zaktualizowane' . $liczba . 'wierszy';
    }
}
 




?>