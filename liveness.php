<?php
$filename = 'liveprobe_check';

if (file_exists($filename)) {
    echo "O arquivo $filename existe";
} else {
    exit(1);
}
?>
