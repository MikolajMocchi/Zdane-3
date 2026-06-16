<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
    $id = $_GET['id'];

    $conn = mysqli_connect("localhost", "root", "", "php_inne");
    $sql = "SELECT a.first_name, a.last_name, b.title, b.description, b.subject from users a INNER JOIN exercises b ON A.id = b.user_id;";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo "<br>";
        echo "Imie: ". $row['first_name']. " "."Nazwisko: ". $row['last_name']. " "."Tytuł: ". $row['title']. " "."Opis: ". $row['description']. " "."Temat: ". $row['subject'];
    }
}
?>
