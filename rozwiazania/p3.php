<?php
// Your code here

$gender = $_POST['gen'] ?? 'Rather not say';



echo "
    <table>
        <tr>
            <th>Płeć</th>
        </tr>
        <tr>
            <td>$gender</td>
        </tr>
    </table>
";





echo "<a href='../index.php'>Go back to index</a>";