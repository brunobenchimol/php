<?php

$filename = 'alive.txt';
if (file_exists($filename)) {
    echo "OK - Im Alive - File exists";
} else {
    header("HTTP/1.1 503 Service Unavailable");
    die("File do Liveness não existe.");
}

?>
