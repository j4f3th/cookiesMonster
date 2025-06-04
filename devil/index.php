<?php

// display the cookies with the IP Address
function show_cookies($file_ubication){
    $file = fopen("$file_ubication","r");
    $file_output = fread($file, filesize($file_ubication));
    
    $list = explode("|", $file_output);


    foreach ($list as $ip => $cookie){  
    
        echo $cookie;

    };

};


