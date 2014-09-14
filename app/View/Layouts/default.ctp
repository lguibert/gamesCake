<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php echo $this->Html->charset(); ?>
    <title>Jeux à nous</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?php
        echo $this->Html->css('bootstrap-responsive.min');
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('main');
    ?>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="http://localhost/gamesCake/accueil">Jeux à Nous</a>
          <div class="nav-collapse collapse">            
            <ul class="nav">
              <li class="active"><a href="http://localhost/gamesCake/accueil">Accueil</a></li>
              <li><a href="#">Gérer mes données</a></li>
              <li><a href="http://localhost/gamesCake/ajouter">Ajouter un jeu</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span1">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>              
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span11">
          <div class="row-fluid">
            <?= $this->fetch('content');?>
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
      </footer>

    </div><!--/.fluid-container-->
    
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <?php
        echo $this->Html->script('bootstrap.min');
        echo $this->fetch('script');
    ?>
  </body>
</html>
