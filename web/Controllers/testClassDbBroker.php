<?php

include_once "ClassDbBroker.php";
    
    $myClassDbBroker = ClassDbBroker::getInstance();
    $myCategory ='';
    $rows = $myClassDbBroker->getArticlesByCaterory($myCategory);
    /* echo "<pre> \n";
    print_r($rows);
    echo "</pre> \n"; */


    //$strSql = 'SELECT role FROM membres where mail="'."aaa@aaa.ch'";
    $strSql = 'SELECT role FROM membres';
    echo "Test 2";
    $rows = $myClassDbBroker->getRowsFromSelectQuery($strSql); 
    
    echo "<pre> \n";
    print_r($rows);
    echo "</pre> \n";
    
    


?> 
