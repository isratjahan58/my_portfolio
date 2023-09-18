<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <style>
        table, tr,th,td{
            border:2px solid black;
             border-collapse: collapse;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
include 'connect.php'; 

$query = 'SELECT * FROM orders';
$run = mysqli_query($conn, $query);

if (mysqli_num_rows($run) > 0) {
    echo '<table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Category</th>
    </tr>';
    
    while ($row = mysqli_fetch_assoc($run)) {
        echo '<tr>
        <td>' . $row['name'] . '</td>
        <td>' . $row['email'] . '</td>
        <td>' . $row['mobile'] . '</td>
        <td>' . $row['category'] . '</td>
        </tr>';
    }

    echo '</table>';
}
?>