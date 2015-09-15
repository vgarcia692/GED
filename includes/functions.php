<?php 
    
    // Close the DB connection
    function closeDBConn() {
        if (isset($dbconn)) {
            $dbconn->close();
        }
    }

    // Redirect
    function redirect_to( $location = NULL ) {
        if ($location != NULL) {
            header("Location: {$location}");
            die();
        }
    }

 ?>