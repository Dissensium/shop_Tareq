<?php

include_once "ClassDbBroker.php";
    
    $myClassDbBroker = ClassDbBroker::getInstance();
    $myCategory ='';
    $rows = $myClassDbBroker->getArticlesByCaterory($myCategory);
    echo "<pre> \n";
    print_r($rows);
    echo "</pre> \n";


?> 
