<?php

$conn = mysqli_connect('localhost', 'root', '', 'msgdatabases');
if (!$conn) {
    die('connection failed'.mysqli_connect_error());
}
