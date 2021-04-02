<?php
session_start();
echo "Logging you out. plaease wait";

session_destroy();
header("Location: /forum");


?>