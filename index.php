<?php
include("databasefile.php");
session_start();

// Form submit handling
if (isset($_POST['names']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['gender']) && isset($_POST['feedbackType']) && isset($_POST['feedback'])) {
    $names = $_POST['names'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $feedbackType = $_POST['feedbackType'];
    $feedback = $_POST['feedback'];

    // SQL injection prevention (you should use prepared statements for better security)
    $names = mysqli_real_escape_string($conn, $names);
    $email = mysqli_real_escape_string($conn, $email);
    $mobile = mysqli_real_escape_string($conn, $mobile);
    $gender = mysqli_real_escape_string($conn, $gender);
    $feedbackType = mysqli_real_escape_string($conn, $feedbackType);
    $feedback = mysqli_real_escape_string($conn, $feedback);

    $sql = "INSERT INTO feedbacksystem (names, email, mobile, gender, feedbackType, feedback) 
            VALUES ('$names', '$email', '$mobile', '$gender', '$feedbackType', '$feedback')";

    $result = $conn->query($sql);
    if ($result) {
        $_SESSION['success'] = "Feedback has been submitted";
    } else {
        $_SESSION['error'] = "Something went wrong, please try again";
    }

    header("Location: msg.html");
    exit();
}
?>
