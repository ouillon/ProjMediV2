<html lang="fr"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags --> 
        <meta name="description" content="Portfolio d’Amélia Pilou - BTS SIO SLAM"> 
        <meta name="author" content="Amélia Pilou"> 
        <link rel="icon" href="favicon.ico"> 
        <title>Projet medicaments</title>   
        <!-- Bootstrap core CSS --> 
        <link href="../css/bootstrap.min.css" rel="stylesheet" /> 
        <link rel="stylesheet" href="css/styles.css" />

    </head>
    <body> 
        <nav class="navbar navbar-inverse navbar-fixed-top"> 
            <div class="container"> 
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"> 
                        <span class="sr-only">Navigation raccourcie</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button> 
                    <a class="navbar-brand" href="#">Mon Profil</a> 
                </div> 
                <div id="navbar" class="navbar-collapse collapse"> 
                    <ul class="nav navbar-nav"> 
                        <li > 
                            <a href="index.html"> 
                                <span class="glyphicon glyphicon-home"></span> 
                                Observance
                            </a> 
                        </li> 
                        <li class="active"><a href="cv.html"><span class="glyphicon glyphicon-object-align-top"></span> Déclarer un aidant</a></li> 


                        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Deconnexion</a></li> 
                    </ul> 
                </div><!--/.nav-collapse --> 
            </div><!--/.navbar-collapse --> 
        </nav>
        <!-- Bootstrap core JavaScript ============================================ --> 
        <!-- Main jumbotron for a primary marketing message or call to action --> 
        <div class="jumbotron"> 
            <div class="container"> 
                <h1>Déclarer un aidant</h1>
                <h2>Vous</h2>
                <p> 
                <div class="col-xs-12 col-sm-6 col-lg-3"> 
                    <img id="maPhoto" class="pull-left img-rounded" src="../images/profil.jpg" alt="Mon profil" />
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-9"> 
                    <form class="form-profil">
                        <h3>Nom</h3>        
                        <output type="text" id="outputNom" class="form-control" size="20"></output>
           
                        <h3>Prénom</h3>  
                        <output type="text" id="outputPrenom" class="form-control" size="20">   </output>                    
                    </form>
                </div>
            </div> 
        </div>

        <footer> 
            <div class="container"> 
                <div class="row"> 

                    <h2>Votre Aidant</h2> 
                    <p>
                        <!--- partie gauche --->
                    <div class="col-xs-6 col-sm-2"> 
                
                    </div>
                    <!--- partie centre1 --->
                    <div class="col-xs-6 col-sm-3"> 
                        <div class="rubrique"> 
                            <form class="form-aidant">

                                <br>

                                <label for="inputPrenom" class="sr-only">Téléphone mobile</label>
                                <input type="text" id="inputTel" class="form-control" placeholder="Téléphone mobile" required>
                                <p> ou </p>
                                <label for="inputEmail" class="sr-only">Adresse mail</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus>
                                <p></p>
                                <button class="btn btn-lg btn-primary btn-block" type="submit" size="20">Valider</button>
                        </div>
                        </form>
                    </div>
                    <!--- partie droite --->
                    <div class="col-xs-6 col-sm-1"> 
                        <p></p>
                    </div>
                    <!--- partie droite --->
                    <div class="col-xs-6 col-sm-5"> 
                        <form class="form-profil">
                            Nom       
                            <output type="text" id="outputNom" class="form-control" size="20"></output>
                    
                            Prénom
                            <output type="text" id="outputPrenom" class="form-control" size="20">   </output>
                                Date de naissance
                                <output type="text" id="outputPrenom" class="form-control" size="20"> </output>
                        </form>
                    </div>
                    </p> 
                </div> 
            </div>
        </footer> 
        <!-- Placed at the end of the document so the pages load faster --> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script> 
        <script src="css/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script> 
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
        <script src="css/bootstrap-3.3.6-dist/js/ie10-viewport-bug-workaround.js">
        </script> 
    </body>
</html>
