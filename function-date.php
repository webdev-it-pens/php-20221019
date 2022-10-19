<?php 
// built-in func

// date()
// echo date("l, d M Y");
// echo "copyright @" . date('Y');


// time() -> detik sejak 1 Jan 1970 - sekarang
// echo time();
// echo date("l", time()-3600*24*8);


// mktime() -> detik 1 Jan 1970 - waktu tertentu
// echo date('l', mktime(0,0,0,11,7,2001));


// strtotime()
// echo strtotime("10 nov 2014");
echo date('l', strtotime("7 nov 2001"));
?>