<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['xd3'])){

    $id = $_POST['id'];

    $conn = mysqli_connect("localhost", "root", "", "php_inne");
    $result = "DELETE FROM users WHERE id = '$id'";
    mysqli_query($conn, $result);
}





