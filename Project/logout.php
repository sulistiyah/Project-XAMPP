<?php
session_start();
unset($_SESSION['sesi2014']);
unset($_SESSION['nama']);
session_destroy();
echo "<script>location='login.php';</script>";