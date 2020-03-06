<?php
    
    include_once "D:\DrissDev\wamp\www\shop_Tareq\web\includes\includeViewHeader.php";

?>


<div class="container" style="margin-top:30px">
    <div class="row">

        <!----------------------------------- Content-Left -->
        <?php
        include_once "D:\DrissDev\wamp\www\shop_Tareq\web\includes\includeViewContentLeft.php";
        ?>
        <!----------------------------------- Content -->
        <div class="col-sm-8">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Dec 7, 2017</h5>

            <div class="row">
                <div class="col-sm-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="../img/HD Wallpepers backgrounds/Ferrari F355.jpg" alt="Ferrari F355">
                            </div>

                            <div class="carousel-item">
                                <img class="img-fluid" src="../img/HD Wallpepers backgrounds/Sunset in Rincon.jpg" alt="Sunset in Rincon">
                            </div>

                            <div class="carousel-item">
                                <img class="img-fluid" src="../img/HD Wallpepers backgrounds/Northbound Train - Thomasville NC OC 2048x1367.jpg" alt="Northbound Train - Thomasville NC OC">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>


            <!----------------------------------- Fin de row -->
        </div>
        <!----------------------------------- Fin de container -->
    </div>






    <?php
    include_once "D:\DrissDev\wamp\www\shop_Tareq\web\includes\includeViewFooter.php";
    ?>