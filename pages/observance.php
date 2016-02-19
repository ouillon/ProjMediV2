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
        <div class="jumbotron"> 
            <div class="container"> 


                <h1>Observance</h1>
                

            </div>
            <h2 class="sub-header">Personnes observées</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>age</th>
                            <th>detail</th>
                            <th>photo</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>mamie</td>
                            <td>nova</td>
                            <td>90 ans</td>
                            <td><a href=#>visualiser observance</a></td>
                            <td><img id="maPhoto" class="pull-left img-rounded" src="../images/mamie.jpg" alt="Mon profil" width="200" height="200" class="img-responsive"/>   </td>
                            
                        </tr>
                       <tr>
                            <td>papi</td>
                            <td>Jo</td>
                            <td>69 ans</td>
                            <td><a href=#>visualiser observance</a></td>
                            <td><img id="maPhoto" class="pull-left img-rounded" src="../images/papi.jpg" alt="Mon profil" width="200" height="200" class="img-responsive"/>   </td>
                            
                        </tr>
                        <tr>
                            <td>Jack</td>
                            <td>eventeur</td>
                            <td>102 ans</td>
                            <td><a href=#>visualiser observance</a></td>
                            <td><img id="maPhoto" class="pull-left img-rounded" src="../images/jack.jpg" alt="Mon profil" width="200" height="200" class="img-responsive"/>   </td>
                            
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>
<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
</script> 
<script src="css/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script> 
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script src="css/bootstrap-3.3.6-dist/js/ie10-viewport-bug-workaround.js">
</script> 
</body>
</html>
