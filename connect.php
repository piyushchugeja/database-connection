<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = ""; //name of your database here
    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if (!$conn) {                                 //check if the connection is not made
        echo
        "
            <script>
                alert('Connection failed.');
            </script>
        "; //display an alert if the connection failed
    }        
    else {
        echo " ";
    }
?>
