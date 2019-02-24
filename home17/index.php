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
if(!isset($_COOKIE['user_id'])){
    if(isset($_POST['submit'])) {
        $user_username = $testForm->real_escape_string(trim($_POST['username']));
        $user_password = $testForm->real_escape_string(trim($_POST['password']));
        $user_passwordNew = SHA1($user_password, PASSWORD_BCRYPT);
        if(!empty($user_username) && !empty($user_password)) {
            $query = "SELECT `user_id` , `username` FROM `users` WHERE username = '$user_username' AND 
                      password = '$user_passwordNew'";
            $data = mysqli_query($testForm, $query);
            if(mysqli_num_rows($data) == 1) {
                $row = mysqli_fetch_assoc($data);
                setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
                setcookie('username', $row['username'], time() + (60*60*24*30));
                $home_url = 'http://' . $_SERVER['HTTP_HOST'];
                header('Location: ' . $home_url);
            }
            else {
                echo "Не правильный логин или пароль";
            }
        }
    }
}
?>

<?php
    if(empty($_COOKIE['username'])) {
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><br>
    <input type="text" name="username" placeholder="Login"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit" name="submit">Вход</button><br>
    <a href="signup.php">Регистрация</a>
</form>

<?php
}
    else {
        ?>
        <p><a href="myprofile.php">Мой профиль</a></p>
        <p><a href="exit.php">Выход</a></p>
<?php
    }
?>

<?php


?>


<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>

