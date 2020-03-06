<!DOCTYPE html>
<html lang="en">

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

    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Page temporaire de liens</h1>
        <p>Cette page est temporaire. Son utilitée est de faciliter de le développement</p>
    </div>

    <h1> Lines</h1>
    <ul>
        <li> <a href="http://localhost/shop_tareq/web/viewHomePage.php" target="_blank" rel="noopener noreferrer">viewHomePage.php</a></li>
        <li> <a href="http://localhost/shop_tareq/web/examples/Bootstrap4WebsiteExample.php" target="_blank" rel="noopener noreferrer">Bootstrap4WebsiteExample</a></li>
        <li> <a href="http://localhost/shop_tareq/web/examples/Bootstrap4WebsiteExample_02.php" target="_blank" rel="noopener noreferrer">Bootstrap4WebsiteExample_02</a></li>        
    </ul>

    <h1> environnemet</h1>
    <?php 
    echo "<pre>";
    print_r($_ENV);
    echo "</pre>";
    echo "User :" . getenv('USER')."<br>";
    echo "HOME :" . getenv('HOME')."<br>";
    echo "PWD :" . getenv('PWD')."<br>";
    echo "getcwd() :" . getcwd()."<br>";
    echo "TMPDIR :" . getenv('TMPDIR')."<br>";
    //phpinfo();
?>

</body>

</html>