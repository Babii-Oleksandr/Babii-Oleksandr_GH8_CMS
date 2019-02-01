<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<?php
/* Подключение к серверу MySQL */
$testForm = mysqli_connect(
    'localhost',
    'root',
    '6233',
    'home16');

if (!$testForm) {
    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($testForm, trim($_POST['username']));
    $email = mysqli_real_escape_string($testForm, trim($_POST['email']));
    $password = mysqli_real_escape_string($testForm, trim($_POST['password']));
    $passwordRepeat = mysqli_real_escape_string($testForm, trim($_POST['passwordRepeat']));
    $firstName = mysqli_real_escape_string($testForm, trim($_POST['firstName']));
    $lastName = mysqli_real_escape_string($testForm, trim($_POST['lastName']));
    $age = mysqli_real_escape_string($testForm, trim($_POST['age']));
    $gender = mysqli_real_escape_string($testForm, trim($_POST['gender']));
    if (!empty($username) && !empty($email) && !empty($password) && !empty($passwordRepeat)
        && !empty($firstName) && !empty($lastName) && ($password == $passwordRepeat)) {
        $query = "SELECT * FROM `users` WHERE username = '$username'";
        $data = mysqli_query($testForm, $query);
        if (mysqli_num_rows($data) == 0) {
            $query = "INSERT INTO `users` (username, email, password, firstName, lastName, age, gender) 
                      VALUE ('$username', '$email', SHA('$password'), '$firstName', '$lastName', '$age', '$gender')";
            mysqli_query($testForm, $query);
            echo 'data is transferred';
            mysqli_close($testForm);
            exit();
        }
        echo 'login is busy';
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
    <input type="submit" name="submit">
</form>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
