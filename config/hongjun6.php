<?php

$g_count = 0;


function init($work)
{

    echo '=======';
    echo PHP_EOL;
}
function run($worker, $data) {
    global $g_count;
    $g_count++;
    sleep(5);
    echo "Worker {$worker->index} current: {$g_count}\r\n";
}