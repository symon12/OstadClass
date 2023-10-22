<?php
session_start();
$_SESSION['username']='John doe';
header('Location: index.php');