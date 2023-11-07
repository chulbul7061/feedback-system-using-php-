<?php
include_once("databasefile.php");

// Establish a database connection and execute the query
$mysqli = new mysqli($servername, $username, $password, $databasename);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$query = "SELECT * FROM feedbacksystem";
$result = $mysqli->query($query);

if (!$result) {
    die("Query failed: " . $mysqli->error);
}
?>

<html>
<head>
    <link rel="stylesheet" href="style3.css">
    <title>Feedback Page</title>
</head>
<body>
<a href="index.html">Add New Feedback</a><br/><br/>

<table width='100%' border='1'>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Gender</th>
        <th>Feedback Type</th>
        <th>Feedback</th>
        <th>Actions</th>
    </tr>

    <?php
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['names'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['mobile'] . '</td>';
        echo '<td>' . $row['gender'] . '</td>';
        echo '<td>' . $row['feedbackType'] . '</td>';
        echo '<td>' . $row['feedback'] . '</td>';
        echo "<td><a href='editdata.php?id=$row[id]'>Edit</a> | <a href='deletedata.php?id=$row[id]'>Delete</a></td></tr>";
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>
