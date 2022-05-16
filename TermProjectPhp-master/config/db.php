<?php

require('config.php');

//path:  http://localhost:8080/MCON358/TermProjectPhp/config/connections.php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Make MySQLi throw exceptions.

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(mysqli_connect_errno()){
    echo "failed to connect ". mysqli_connect_errno();
}


?>