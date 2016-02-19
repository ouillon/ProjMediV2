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


                <p></p>
                <div class="col-xs-12 col-sm-6 col-lg-3"> 
                    <div class="row placeholders">

                        <img id="maPhoto" class="pull-left img-rounded" src="../images/mamie.jpg" alt="Mon profil" width="200" height="200" class="img-responsive"/>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-6 col-lg-9"> 
                    <form class="form-profil">
                        <h3>Nom</h3>        
                        <output type="text" id="outputNom" class="form-control" size="20"></output>

                        <h3>Prénom</h3>  
                        <output type="text" id="outputPrenom" class="form-control" size="20">   </output>   
                        <h3>sélection journée</h3>
                          <input type="date" name="i_date">
                    </form>
                </div>

            </div>
            <h2 class="sub-header">Détail des prises de la journée du XXXX</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>photo</th>
                            <th>medicament</th>
                            <th>matin<br>6h-11h</th>
                            <th>midi<br>11h-14h</th>
                            <th>après-midi<br>14h-18h</th>
                            <th>soir<br>18h-20h</th>
                            <th>coucher<br>20h-23h</th>
                            <th>nuit<br>23h-6h</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1,001</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                        </tr>
                        <tr>
                            <td>1,002</td>
                            <td>amet</td>
                            <td>consectetur</td>
                            <td>adipiscing</td>
                            <td>elit</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                        </tr>
                        <tr>
                            <td>1,003</td>
                            <td>Integer</td>
                            <td>nec</td>
                            <td>odio</td>
                            <td>Praesent</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                        </tr>
                        <tr>
                            <td>1,003</td>
                            <td>libero</td>
                            <td>Sed</td>
                            <td>cursus</td>
                            <td>ante</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>détail du traitemant du medicament</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1,001</td>
                            
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
