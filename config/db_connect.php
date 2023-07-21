<?php 

// connect to database
$conn = mysqli_connect('localhost', 'daniel', 'test1234', 'pizzaproject');

if (!$conn) {
    echo 'connection error:' . mysqli_connect_error();
}

?>