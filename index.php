<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Projet Medicament</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="signin.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">
            <div class="col-xs-12 col-sm-7"> 
                <!-- Partie gauche --> 
                <div class="rubrique"> 
                    <form class="form-signin">
                        <h2 class="form-signin-heading">Se connecter</h2>
                        <label for="inputEmail" class="sr-only">Adresse mail</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus>
                        <label for="inputPassword" class="sr-only">mot de passe</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Se souvenir de moi
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
                    </form>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-5"> 
                <!-- Partie droite --> 
            <div class="rubrique"> 
                    <form class="form-signin">
                        <h2 class="form-signin-heading">Inscription</h2>
                        <label for="inputEmail" class="sr-only">Adresse mail</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus>
                        <label for="inputPassword" class="sr-only">mot de passe</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
                        <label for="inputPassword" class="sr-only">Confirmer mot de passe</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Confirmer Mot de passe" required>
                        <label for="inputNom" class="sr-only">Nom</label>
                        <input type="text" id="inputNom" class="form-control" placeholder="Votre Nom" required>
                        <label for="inputPrenom" class="sr-only">Prénom</label>
                        <input type="text" id="inputPrenom" class="form-control" placeholder="Votre Prénom" required>
                        <label for="inputPrenom" class="sr-only">Téléphone mobile</label>
                        <input type="text" id="inputTel" class="form-control" placeholder="Téléphone mobile" required>
                        <p></p>             
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Création compte</button>
                    </form>
                </div>
            </div>
        </div><!-- /container -->
            

            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
