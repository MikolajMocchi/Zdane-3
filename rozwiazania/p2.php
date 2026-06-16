<?php
// Your code here

$name = $_POST['name'];
$wybur = $_POST['select'] ?? 'Poland';

echo "
    <table>
        <tr>
            <th>Imie</th>
            <th>Kraj</th>
        </tr>
        <tr>
            <td>$name</td>
            <td>$wybur</td>
        </tr>
    </table>
";



echo "<a href='../index.php'>Go back to index</a>";