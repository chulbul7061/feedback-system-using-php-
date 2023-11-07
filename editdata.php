<?php
include("databasefile.php");

if (isset($_GET['id'])) {
    $sql = "SELECT * FROM feedbacksystem WHERE id = " . $_GET['id'];
    $result = $conn->query($sql);
    $user = mysqli_fetch_assoc($result);
} else {
    echo "<h1>Invalid request</h1>";
    exit;
}

if (isset($_POST['submit'])) {
    extract($_POST);

    $sql = "UPDATE feedbacksystem SET 
        names = '$names',
        email = '$email',
        mobile = '$mobile',
        gender = '$gender',
        feedbackType='$feedbackType',
        feedback='$feedback'

        WHERE id = " . $_GET['id'];

    $result = $conn->query($sql);
    if ($result) {
        $_SESSION['success'] = "User data has been updated";
    } else {
        $_SESSION['error'] = "Something went wrong, please try again";
    }
    header("LOCATION: fetchalldata.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleedit.css">
    <title>Edit Feedback Data</title>
</head>
<body>
    <section class="section">
        <h2>Edit Feedback Data</h2>

        <form action="editdata.php?id=<?php echo $user['id'] ?>" method="post">
            <div class="container">
                <!-- Input fields for editing feedback data -->
                <label for="names"><b>Name</b></label>
                <input type="text" name="names" value="<?php echo $user['names']; ?>" required>

                <label for="email"><b>Email</b></label>
                <input type="email" name="email" value="<?php echo $user['email']; ?>" required>

                <label for="mobile"><b>Mobile</b></label>
                <input type="text" name="mobile" value="<?php echo $user['mobile']; ?>" required>

                <label for="gender"><b>Gender</b></label>
                <input type="text" name="gender" value="<?php echo $user['gender']; ?>" required>

                <label for="feedbackType"><b>Feedback Type</b></label>
                <input type="text" name="feedbackType" value="<?php echo $user['feedbackType']; ?>" required>

                <label for="feedback"><b>Feedback</b></label>
                <textarea name="feedback" required><?php echo $user['feedback']; ?></textarea>

                <button type="submit" name="submit">Update</button>
            </div>
        </form>

        <div class="container" style="background-color:#f1f1f1">
            <a href="fetchalldata.php" class="footerbtn">All Feedback Data</a>
        </div>
    </section>
</body>
</html>
