<?php
    $result = array();

    function getAllUsers($conn) {
        $query = "SELECT * FROM carModels";
    
        $runQuery = $conn->query($query); 
    
        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        } 
    
        // return $result;
        echo(json_encode($result));
    }

    function getSingleUser($conn, $id) {
        $query = "SELECT * FROM carModels WHERE id=" . $id . "";

        $runQuery = $conn->query($query);

        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        } 

        echo(json_encode($result));
    }