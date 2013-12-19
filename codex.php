<?php
if(isset($_GET['entry'])){
	$directory = "assets/codex/";
	$codex = $directory.$_GET['entry'];
	
	ob_start();                      // start capturing output
	include($codex);   // execute the file
	$content = ob_get_contents();    // get the contents from the buffer
	ob_end_clean(); 
	$json = json_decode($content);
	
	$header = "SB Assets | ".$json->title;
}else{
	$header = "SB Assets | Codex";}
	
	$header_string = "<!DOCTYPE html>";
	$header_string .= "<head>";
	$header_string .= "<meta charset=\"utf-8\">";
	$header_string .= "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
	$header_string .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
	$header_string .= "<meta name=\"description\" content=\"".$json->contentPages[0]."\">";
	$header_string .= "<title>".$header."</title>";
	$header_string .= "<link href=\"dist/css/bootstrap.css\" rel=\"stylesheet\">";
	$header_string .= "<link href=\"dist/css/navbar-fixed-top.css\" rel=\"stylesheet\">";
	$header_string .= "</head>";
	
	echo $header_string;
	

?>

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
            <li><a href="categories.php">Categories</a></li>
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
<?php
function json_decode_nice($json, $assoc = FALSE){
    $json = str_replace(array("\n","\r"),"",$json);
    $json = preg_replace('/([{,]+)(\s*)([^"]+?)\s*:/','$1"$3":',$json);
    return json_decode($json,$assoc);
} 
if(isset($_GET['entry'])){
	$directory = "assets/codex/";
	$codex = $directory.$_GET['entry'];
	
	ob_start();                      // start capturing output
	include($codex);   // execute the file
	$content = ob_get_contents();    // get the contents from the buffer
	ob_end_clean(); 
	$json = json_decode($content);
	$display_string = "<div class=\"panel panel-primary\">";
	$display_string .= "<div class=\"panel-heading\"><h3 class=\"panel-title\">".$json->title."</h3></div>";
	$display_string .= "<div class=\"panel-body\">";

	$display_string .= $json->contentPages[0].$json->contentPages[1].$json->contentPages[2].$json->contentPages[3].$json->contentPages[4].$json->contentPages[5].$json->contentPages[6].$json->contentPages[7].$json->contentPages[8].$json->contentPages[9].$json->contentPages[10];
	$display_string .= "</div>";
	
	echo $display_string;
	echo "<div class=\"panel-footer\"><a href=\"codex.php\">Back</a></div></div>";
	
}else{
$directory = "assets/codex/";
$phpfiles = glob($directory . "*.*");
natcasesort($phpfiles);
$display_string = "<div class=\"list-group\">";
foreach($phpfiles as $phpfile)
{
    ob_start();                      // start capturing output
	include($phpfile);   // execute the file
	$content = ob_get_contents();    // get the contents from the buffer
	ob_end_clean(); 
	$json = json_decode($content);
	
	$display_string .= "<a href=\"codex.php?entry=".basename($phpfile)."\" class=\"list-group-item\">".$json->title."</a>";
	
}

$display_string .= "</div>";
echo $display_string;
}
?></div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
