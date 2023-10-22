<?php
session_start();
echo "hello";
$loginUrl = "login.php";
$logoutUrl = "logout.php";

if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
    echo "<br/>";
    echo "<a href='$logoutUrl'>logout</a>";
} else {
    echo "guest";
    echo "<br/>";
    echo "<a href='$loginUrl'>login</a>";
}
