<?php
    echo "Mysql connection test<br />";
    $db = mysqli_connect("localhost", "root", "tmddjssql19", "test");
    if($db) {
        echo "connect success<br />";
    } else {
        echo "connect failed<br />";
    }
    $result = mysqli_query($db, 'SELECT VERSION() as VERSION');
    $data = mysqli_fetch_assoc($result);
    echo $data['VERSION'];
?>