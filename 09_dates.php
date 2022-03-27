<?php

// Print current date
echo date('H:i:s d-m-Y') . '<br>';

// Print yesterday
echo date('H:i:s d-m-Y', time() - 60 * 60 * 24) . '<br>';
// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y') . '<br>';
// Print current timestamp
echo time();
// Parse date: https://www.php.net/manual/en/function.date-parse.php

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
