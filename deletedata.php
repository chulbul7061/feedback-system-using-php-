<?php
include("databasefile.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL to delete a record based on the user ID
    $sql = "DELETE FROM feedbacksystem WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Redirect to the homepage or any other page after deletion
    header("Location: fetchalldata.php");
} else {
    echo "Invalid request.";
}
?>
