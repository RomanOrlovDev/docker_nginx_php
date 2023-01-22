<?php
function runMe(){
    $x = 'x';
    for ($i = 0; $i < 10; $i++){
        $x = $x . $x;
    }
}
runMe();
$t = 1;
// use this function to check xdebug errors and warnings
if (true){
    runMe();
}else{
    runMe();
}
xdebug_info();
exit;
phpinfo();