<?php

session_start();
unset($SESSION['first_name']);
session_destroy();
header("Location: new_login.php");
?>
