<?php
    $connect = mysqli_connect('localhost', 'routing', 'kaba.24', 'routing');

    if(mysqli_connect_errno()){
        exit("Failed to connect to MSQLI:" . mysqli_connect_error());
    }