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


<?php
//$mysqli = mysqli_connect(
//    'localhost',
//    'root',
//    '6233',
//    'home16queries');
//
//if (!$mysqli) {
//    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
//    exit;
//}
//
//
//echo "<br>1. Get all blocks from block table where theme is bartik and module is system: <br>";
//function printResult($result)
//{
//    while ($row = $result->fetch_assoc()) {
////            print_r($row);
//        echo $row["bid"] . " || " . $row["module"] . " || " . $row["delta"] . " || " . $row["theme"] .
//            " || " . $row["status"] . " || " . $row["weight"] . " || " . $row["region"] . " || " . $row["custom"]
//            . " || " . $row["visibility"] . " || " . $row["title"] . $row["cache"];
//        echo "<br>";
//    }
//    echo "-----------------------------------------------------------------------------------------
//        " . "<br>" . "Количество записей - " . $result->num_rows;
//}
//
//$result = $mysqli->query("SELECT * FROM block WHERE `theme` = 'bartik' AND `module` = 'system'");
//printResult($result);
//
//echo "<br>";
//echo "<br> 2. Get nodes where type is delivery and all that made in october and title begins with 8046:<br>";
//function printResult2($result)
//{
//    while ($row = $result->fetch_assoc()) {
//        print_r($row);
//        echo "<br>";
//    }
//    echo "-----------------------------------------------------------------------------------------
//        " . "<br>" . "Количество записей - " . $result->num_rows;
//}
//
//$result = $mysqli->query("SELECT `title`, `type`, `created` FROM node WHERE `type` = 'delivery' AND
//                                    title LIKE '8046%' AND DATE_FORMAT(FROM_UNIXTIME(created), '%M') = 'October'");
//printResult2($result);
//
//echo "<br>";
//echo "<br> 3. Get user name and nodes that where published by user 'serhiy'
//    (output username and email with each node). get last 20 nodes.;<br>";
//function printResult3($result)
//{
//    while ($row = $result->fetch_assoc()) {
//        print_r($row);
//        echo "<br>";
//    }
//    echo "-----------------------------------------------------------------------------------------
//        " . "<br>" . "Количество записей - " . $result->num_rows;
//}
//
//$result = $mysqli->query("SELECT node.nid, node.title, users.name, users.mail FROM node LEFT JOIN users ON
//  node.uid = users.uid WHERE users.uid = 3 ORDER BY node.created DESC LIMIT 20");
//
//printResult3($result);
//
//
//echo "<br>";
//echo "<br> 4. Get all variable name that has cache word(cache_akjsgdkjag) but not (cache)(see variable table)<br>";
//function printResult4($result)
//{
//    while ($row = $result->fetch_assoc()) {
//        print_r($row);
//        echo "<br>";
//    }
//    echo "-----------------------------------------------------------------------------------------
//        " . "<br>" . "Количество записей - " . $result->num_rows;
//}
//
//$result = $mysqli->query("SELECT * FROM variable WHERE name LIKE '%cache%' AND name != 'cache' ");
//printResult4($result);
//
//?>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
