<?php

$start = microtime(true);
sleep(3);
?>

<div>
    <p>
        Salam Dunya
    </p>
</div>

<?php
$end = microtime(true);
$time = floor($end - $start);
echo "Sehife acilma zamani: ".$time." saniye";
?>