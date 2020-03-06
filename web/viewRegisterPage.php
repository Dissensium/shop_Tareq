<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #17a2b8;
        height: 100vh;
    }

    #login .container #login-row #login-column #login-box {
        margin-top: 50px;
        max-width: 600px;
        height: 600px;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
    }

    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }

    #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
    }
</style>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Register Page</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <form id="login-form" class="form" action="controllers/registerController" method="post">
                            <h3 class="text-center text-info">Register</h3>

                            <div class="form-group">
                                <label for="nikname" class="text-info">Pseudo:</label><br>
                                <input type="text" name="nikname" id="nikname" class="form-control" placeholder="pseudo">
                            </div>

                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" placeholder="email">
                            </div>

                            <div class="form-group">
                                <label for="emailConfirmation" class="text-info">Confirmation d'email :</label><br>
                                <input type="email" name="emailConfirmation" id="emailConfirmation" class="form-control" placeholder="email">
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="passwordConfirmation" class="text-info">Confrmation de password:</label><br>
                                <input type="password" name="passwordConfirmation" id="passwordConfirmation" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Je m'inscris">
                                <a href="viewLoginPage.php" class="btn btn-info btn-md justify-content-right"> login here</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>