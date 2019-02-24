<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<?php
require('connectBd.php');

if (isset($_POST['submit'])) {
    $username = $testForm->real_escape_string(trim($_POST['username']));
    $email = $testForm->real_escape_string(trim($_POST['email']));
    $password = $testForm->real_escape_string(trim($_POST['password']));
    $passwordNew =  SHA1($password, PASSWORD_DEFAULT);
    $passwordRepeat = $testForm->real_escape_string(trim($_POST['passwordRepeat']));
    $firstName = $testForm->real_escape_string(trim($_POST['firstName']));
    $lastName = $testForm->real_escape_string(trim($_POST['lastName']));
    $age = $testForm->real_escape_string(trim($_POST['age']));
    $gender = $testForm->real_escape_string(trim($_POST['gender']));
    if (!empty($username) && !empty($email) && !empty($password) && !empty($passwordRepeat)
        && !empty($firstName) && !empty($lastName) && ($password == $passwordRepeat)) {
        $query = "SELECT * FROM `users` WHERE username = '$username'";
        $data = mysqli_query($testForm, $query);
        if (mysqli_num_rows($data) == 0) {
            $query = "INSERT INTO `users` (username, email, password, firstName, lastName, age, gender) 
                      VALUE ('$username', '$email', '$passwordNew', '$firstName', '$lastName', '$age', '$gender')";
            mysqli_query($testForm, $query);
            echo 'Профиль создан ';
            mysqli_close($testForm);
            exit();
        }
        echo 'Такой логин уже существует';
    }else {
        echo "Заполните все поля";
    }
}


?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <br>
    <input type="text" name="username" placeholder="User name"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="text" name="firstName" placeholder="First name"><br>
    <input type="text" name="lastName" placeholder="Last Name"><br>
    <input type="number" name="age" placeholder="Age"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="passwordRepeat" placeholder="Repeat password">
    <p>Gender:</p>
    <label> Male <input type="radio" name="gender" value="Male" checked="checked"></label>
    <label> Female <input type="radio" name="gender" value="Female"></label><br>
    <input type="submit" name="submit"><br>
    <a href="index.php">Login</a>
</form>



<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
