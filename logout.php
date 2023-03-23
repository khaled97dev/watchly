<?php
    session_start();
    session_destroy();
    header("Location: /watchly/index.php");
    ?>