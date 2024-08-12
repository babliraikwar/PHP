<?php

session_start();
//session_destroy();
unset($_SESSION['name']);
echo " session has been destoy";

?>