<?php
include_once getenv('TMPDIR')."includes\includeViewHeader.php";
?>

<div class="container-fluid text-center">
    <div class="row content">

        <?php include_once getenv('TMPDIR')."includes\includeViewContentLeft.php"; ?>

        <div class="col-sm-8 text-left">
            <h1> Dev links </h1>
            <ul>
                <li> <a href="https://www.w3schools.com/bootstrap4/" target="_blank" rel="noopener noreferrer"> Bootstrap 4 Tutorial </a> </li>
                <li> <a href="https://colorlib.com/wp/templates/" target="_blank" rel="noopener noreferrer"> colorlib.com/wp/templates/ </a> 
                Our free WordPress themes are downloaded over 3 MILLION times</li>
                <li> <a href="https://bootsnipp.com/templates?page=1" target="_blank" rel="noopener noreferrer"> bootsnipp.com/templates?page=1 </a> 
                Free and premium templates for Bootstrap</li>
           
            </ul>
        </div>
    </div>
</div>

<?php
    include_once getenv('TMPDIR')."includes\includeViewFooter.php";
?>