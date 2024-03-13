<?php
    session_start();
    unset($_SESSION['project_cloud']);
    unset($_SESSION['nama']);
    session_destroy();
    echo "<script>location='index.php';</script>";

?>