<?php 

    require_once "connect.php";

    $con = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);


    try {

        if ($con->connect_errno != 0) {
            throw new Exception(mysqli_connect_errno());
        } else {
            // $sql2 = 'SELECT * FROM tbl_users INTO OUTFILE 'humans.txt' FIELDS TERMINATED 
            // BY ',' ENCLOSED BY '"' LINES TERMINATED BY '\n';";
            $sql2 = "SELECT * FROM tbl_users LIMIT 1";
            $csv = mysqli_query($con, $sql2);
        }
    } catch (Exception $e){
        echo 'Error occured!';
    }

?>