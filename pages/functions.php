<?php
       function connect($host='localhost', $user='root', $pass='', $dbname='questions'){
        $link=mysql_connect($host, $user, $pass) or die ('connection_error');
        mysql_select_db($dbname) or die ('DB open error');
        mysql_query("set names 'utf8'");
    }
?>