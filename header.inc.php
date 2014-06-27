<div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">NumeGeek - Administration</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="stats.php"><i class="fa fa-edit"></i> Statistiques</a></li>
            <li><a href="products.php"><i class="fa fa-bar-chart-o"></i>Produits</a></li>
            <li><a href="listclients.php"><i class="fa fa-table"></i> Listes Clients</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i>Commandes <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="clients.php">Commandes Clients</a></li>
                <li><a href="fournisseurs.php">Commandes Fournisseur</a></li>
                         </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"><span class="glyphicon glyphicon-bell white"></span></i> Alertes <span class="label label-danger">4</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="label label-info">Commande automatique effectuée</span></a></li>
                <li><a href="#"><span class="label label-success">Nouveau client inscrit</span></a></li>
                <li><a href="#"><span class="label label-success">Nouveau client inscrit</span></a></li>
                <li><a href="#"><span class="label label-danger">Stock d'alerte atteint</span></span></a></li>
                <li class="divider"></li>
                <li><a href="#">Tout voir</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"><span class="glyphicon glyphicon-user"></span></i> Nom utilisateur <b class="caret"></b></a>
              <ul class="dropdown-menu">
        
                
                <li><a href="#"><i class="fa fa-power-off"><span class="glyphicon glyphicon-off"></span></i> Déconnexion</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>