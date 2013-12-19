<?php
if(isset($_GET['entry'])){
	$directory = "assets/armor/";
	$codex = $directory.$_GET['entry'];
	
	ob_start();                      // start capturing output
	include($codex);   // execute the file
	$content = ob_get_contents();    // get the contents from the buffer
	ob_end_clean(); 
	$json = json_decode($content);
	
	$header = "SB Assets | ".$json->shortdescription;
}else{
	$header = "SB Assets | Armor";}
	
	$header_string = "<!DOCTYPE html>";
	$header_string .= "<head>";
	$header_string .= "<meta charset=\"utf-8\">";
	$header_string .= "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
	$header_string .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
	$header_string .= "<meta name=\"description\" content=\"".$json->description."\">";
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
	$directory = "assets/armor/";
	$tech = $directory.$_GET['entry'];
	
	ob_start();                      // start capturing output
	include($tech);   // execute the file
	$content = ob_get_contents();    // get the contents from the buffer
	ob_end_clean(); 
	$json = json_decode($content);
	$display_string = "<div class=\"panel panel-primary\">";
	$display_string .= "<div class=\"panel-heading\"><h3 class=\"panel-title\">".$json->shortdescription."</h3></div>";
	$display_string .= "<div class=\"panel-body\">";
	$display_string .= "<table class=\"table\">";
	$display_string .= "<tr><td>Rarity: </td><td>".$json->rarity."</td></tr>";
	$display_string .= "<tr><td>Description: </td><td>".$json->description."</td></tr>";
	$display_string .= "<tr><td>Effects: </td><td><table class=\"table\"><tr><td>".$json->statusEffects[0]->kind."</td><td>".$json->statusEffects[0]->amount."</td></tr><tr><td>".$json->statusEffects[1]->kind."</td><td>".$json->statusEffects[1]->amount."</td></tr><tr><td>".$json->statusEffects[2]->kind."</td><td>".$json->statusEffects[2]->amount."</td></tr><tr><td>".$json->statusEffects[3]->kind."</td><td>".$json->statusEffects[3]->amount."</td></tr></table>";
	$display_string .= "</table>";

	$display_string .= "</div>";
	
	echo $display_string;
	echo "<div class=\"panel-footer\"><a href=\"armor.php\">Back</a></div></div>";
	
}else{
$directory = "assets/armor/";
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
	
	$display_string .= "<a href=\"armor.php?entry=".basename($phpfile)."\" class=\"list-group-item\">".$json->shortdescription."</a>";
	
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
