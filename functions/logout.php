<?php
session_start();
print_r($_SESSION["user"]);
session_destroy();

header("Location: ../index.php");