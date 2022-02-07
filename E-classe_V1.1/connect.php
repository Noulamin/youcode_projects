<?php
   /* $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname;
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn) {
        echo "Connected seccesfuly." . "<br>";
        Create_database($conn);
    }
    else
    {
        echo "Connection failed." . "<br>";
    }
    
    // Create database
    function Create_database($conn)
    {
        $sql = "CREATE DATABASE IF NOT EXISTS fist_db;";
        $dbname = "fist_db";
        if($conn->query($sql)) 
        {
            echo "database created seccesfuly." . "<br>";
            create_table($conn);
        }
        else
        {
            echo $conn->error . "<br>";
        }
    }

    function create_table($conn)
    {
        $conn = new mysqli(global $servername, $username, $password, $dbname);

        if ($result = $conn->query("SHOW TABLES LIKE 'haha';")) {
            if($result->num_rows == 1) {
                echo "Table exists". "<br>";
            }
        }
        else
        {
            echo "Table does not exist". "<br>";
        }
    }

    $conn->close();

    */
?>