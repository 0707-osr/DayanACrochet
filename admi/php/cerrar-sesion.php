<?php
   session_start();
if (isset($_SESSION['cliente_id'])) {
    session_destroy();
    header("location: ../../index.php");
    die();
} else {
    header("location: ../../index.php");
}

?>