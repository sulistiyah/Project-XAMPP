<?php
    session_start();
    unset($_SESSION['sesi1002']);
    unset($_SESSION['nama']);
    session_destroy();
    echo "<script>location='index.php';</script>";

?>