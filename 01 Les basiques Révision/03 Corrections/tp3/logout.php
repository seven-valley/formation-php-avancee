<?php
session_start();
session_unset();
session_destroy();

// Redirection
header("location:login.php");