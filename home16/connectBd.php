<?php


/**
 * Created by PhpStorm.
 * User: sancho
 * Date: 06.02.19
 * Time: 12:30
 */
/* Подключение к серверу MySQL */
$servername = 'localhost';
$username = 'root';
$password = '6233';
$dbname = 'home16';

$testForm = new Mysqli($servername, $username, $password, $dbname);
if ($testForm->connect_error) {
    die("Connection failed: ".$testForm->connect_error);
}

