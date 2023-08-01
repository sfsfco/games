<?php session_start();
include './core/core.php';
include './core/helpers.php';
if (isset($_SESSION['HTTP_USER_AGENT']))
{
    if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT']))
    {
    header("location: ./login.php");
    }
}
if (!isset($_SESSION['authenticated_user'])&&(basename($_SERVER['PHP_SELF'])!='login.php')) 
{
    header("location: ./login.php");
}