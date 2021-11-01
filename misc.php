<?php
    $password = 'P@ssw0rd';
    
    function XSS( $text ){
        echo $text;
    }
    
    function AFD( $file ){
        unlink($file);
    }
    
    echo $_GET['a'];
    
    AFD($_GET['file']);
?>