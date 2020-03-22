<?php
session_start();
    include_once getenv('TMPDIR')."includes\includeViewHeader.php";

    include_once getenv('TMPDIR')."includes\includeViewAdminContent.php";
    
    include_once getenv('TMPDIR')."includes\includeViewFooter.php";

?>
