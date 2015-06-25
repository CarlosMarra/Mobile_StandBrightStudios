<?php
 
    $connection_error = 'Could not connect.';
    

    $mysql_host = 'localhost';
    $mysql_port = '3306';
    $mysql_user = 'carlosh7_ports';
    $mysql_pass = 'M2#mRg*QF@LKminoi7!#@nW^re*fXXV#EtwF7e';

    /*
    $mysql_host = 'localhost';
    $mysql_port = '3306';
    $mysql_user = 'root';
    $mysql_pass = '';
    */
    /*M2#mRg*QF@LKminoi7!#@nW^re*fXXV#EtwF7e*/
    
    $mysql_db = 'carlosh7_likewise'; /*ims*/
    
    $connection = mysql_connect($mysql_host, $mysql_user, $mysql_pass) OR die($connection_error);
    
    mysql_select_db($mysql_db) OR die($connection_error);
    
?>