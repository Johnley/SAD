<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Starbound asset data site.">
    <meta name="author" content="Johnley">
    <link rel="shortcut icon" href="">

    <title>SB Assets | Categories</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">SB Assets</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="categories.php">Categories</a></li>
            <li><a href="http://www.reddit.com/message/compose/?to=DrJohnley">Help</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
		<div id ="search"><form action="search.php" method="get">
            <div class="input-group custom-search-form">
            
              <input type="text" class="form-control" name="q">
              <span class="input-group-btn">
              <button class="btn btn-default" type="submit">
              <span class="glyphicon glyphicon-search"></span>
             </button>
             </span>
             
             </div><!-- /input-group -->
             </form>
        </div>
	</div>
                   </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-md-4">
          <h2>Armor</h2>
          <p>Lets be honest, you aren't gonna make it that far. But armor might let you get a bit farther. </p>
          <p><a class="btn btn-default" href="armor.php" role="button">View &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Techs</h2>
          <p>Better, Harder, Faster, Stronger.</p>
          <br>
          <p><a class="btn btn-default" href="tech.php" role="button">View &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Objects</h2>
          <p>Things that go in the world, like chairs, 3D Printers, and beds.</p>
          <p><a class="btn btn-default" href="object.php" role="button">View &raquo;</a></p>
        </div>
                <div class="col-md-4">
          <h2>Codex Entries</h2>
          <p>Careful, there be spoilers here.</p>
          <br>
          <p><a class="btn btn-default" href="codex.php" role="button">View &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Consumables</h2>
          <p>Things that can be eaten to make you feel better about yourself, at least for a short while.</p>
          <p><a class="btn btn-default" href="consumable.php" role="button">View &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Items</h2>
          <p>These are things. things that go in your inventory, usually coming from other things, like ores and dirt.</p>
          <p><a class="btn btn-default" href="item.php" role="button">View &raquo;</a></p>
        </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>