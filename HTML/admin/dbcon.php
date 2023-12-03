<?php
//check connection 
$conn = mysqli_connect('localhost', 'root', '', 'btl');

//check connection 
if (!$conn) {
    echo 'Connection failed: ' . mysqli_connect_error();
}
