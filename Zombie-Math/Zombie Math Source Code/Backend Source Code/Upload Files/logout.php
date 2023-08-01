<?php
include './init.php';
unset($_SESSION['authenticated_user']);
header("location: ./login.php");
?>