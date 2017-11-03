<?php

include "Connection.php";


class table{

    function addToTable(){
        $conn = new connec();
        $conn=$conn->makeConnection();
        $sql = "SELECT request_id, name, Read_state FROM connection_request";
        $result = $conn->query($sql);
        return $result;
    }}















?>