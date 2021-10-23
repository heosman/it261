<?php

// the date function
echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("H:i");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date("H:i");
echo '<br>';

$time = date("H:i");
if($time <= 1) {
    echo '<h2 style="color:yellow;">Good morning, Hanan</h2>';
} elseif ($time <= 16) {
    echo '<h2 style="color:lightblue;">Good afternoon, Hanan</h2>';
} else {
    echo '<h2 style="color:purple;">Good evening, Hanan</h2>';
}
echo '<br>';

