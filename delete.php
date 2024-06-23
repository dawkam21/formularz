<?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        require_once "connect.php";

        $con = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

        $sql = "DELETE FROM tbl_users WHERE id = $id";
        $con->query($sql);
    }

    header("location: index.php");
    exit;
?>