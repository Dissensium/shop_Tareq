<?php
session_start();

define("CLIENT", "client");
define("ADMIN", "admin");

//var_dump($_SESSION);



//echo "username :" .$_SESSION['role']."<br> \n";

/* if (isset($_SESSION['username'])){
    echo "username :" .$_SESSION['username']."<br> \n";
} */

// password
include_once getenv('TMPDIR')."includes\includeViewHeader.php";

if ($_SESSION['role']==""){
    include_once getenv('TMPDIR')."includes\includeViewContent.php";
}else{
    if ($_SESSION['role']==CLIENT){
        include_once getenv('TMPDIR')."includes\includeViewClientContent.php";
    }else{
        include_once getenv('TMPDIR')."includes\includeViewAdminContent.php";
    }
    
}

include_once getenv('TMPDIR')."includes\includeViewFooter.php"; 



?>