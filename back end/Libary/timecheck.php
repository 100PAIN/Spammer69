<?php
function timecheck()
{
    $time = $_SERVER["REQUEST_TIME"];
    $data_time = date("h:i:sa Y:m:d", $time);
    $file_time = fopen("txt_time_server", "a");
    fwrite($file_time, $data_time . "\n");
    fclose($file_time);
}
?>