<?php
include("databasefile.php");

## Login form submit
if (isset($_POST['submit'])) 
{
    extract($_POST);

    # Sql query to login
  

    $sql = "SELECT * FROM admin where username = '$username' AND password = '$password'";

    $result = $conn->query($sql);
    if ($result->num_rows) 
    {
        $_SESSION['is_user_loggedin'] = true;
        $_SESSION['user_data'] = mysqli_fetch_assoc(($result));
        header("LOCATION: fetchalldata.php");
    } 
    else
     {
        echo "<script>alert('Invalid login info')</script>";
    }
}

//munually created the admin username and password


//  $sql="insert into admin (username,password)
//        values('12202437','himi')";



// $result=$conn->query($sql);
//  if($result==true)
// {
//          echo "new record is created";
//  }

// else{
//          echo "not added in record".$conn->error;
//  }




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="adminstyle.css" rel="stylesheet">
    <title>PHP CRUD Application</title>
</head>

<body>

         <h2>Login Form</h2>

        <form action="admin.php" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" name="submit">Login</button>

            </div>
        </form>
    </section>

</body>

</html>