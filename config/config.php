<?php
    define("HOSTNAME","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DBNAME","student");

    $con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME) or die("cant connect to tha database");

    $department_config = '';
    $semester_config = '';

?>