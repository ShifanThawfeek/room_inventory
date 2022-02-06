<?php 

$connection = mysqli_connect('localhost', 'root', '', 'room_inventory');

if($connection)
{
    // echo "DB connected";
}
else
{
    echo "DB connection failed";
}
?>