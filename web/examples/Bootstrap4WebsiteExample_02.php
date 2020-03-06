<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>



    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>My First Bootstrap 4 Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

    <div class="container" style="margin-top:30px">
        <div class="row">

            <!----------------------------------- Content-Left -->
            <div class="col-sm-4">
                <h3>Some Links</h3>
                <p>Lorem ipsum dolor sit ame.</p>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>

            <!----------------------------------- Content -->
            <div class="col-sm-8">
                <h2>TITLE HEADING</h2>
                <h5>Title description, Dec 7, 2017</h5>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../img/lights.jpg" target="_blank">
                                <img src="../img/lights.jpg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../img/nature.jpg" target="_blank">
                                <img src="../img/nature.jpg" alt="Nature" style="width:100%">
                                <div class="caption">
                                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../img/fjords.jpg" target="_blank">
                                <img src="../img/fjords.jpg" alt="Fjords" style="width:100%">
                                <div class="caption">
                                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../img/fjords.jpg" target="_blank">
                                <img src="../img/fjords.jpg" alt="Fjords" style="width:100%">
                                <div class="caption">
                                    <p>titre.</p>
                                    <p>prix.</p>
                                    <p>description.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!----------------------------------- Fin de row -->
        </div>
        <!----------------------------------- Fin de container -->
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>Footer</p>
    </div>

</body>

</html>