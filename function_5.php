<?php
function UPPER($string) {
    $load=mb_strtoupper($string);
    return $load;
}
print(UPPER("hello world dear friend from php, хей-хей-хей"));
?>
