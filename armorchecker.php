<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Untitled Document</title>
</head>

<body>
<?
$directory = "assets/armor/";
$phpfiles = glob($directory . "*.*");

$display_string = "<table border=1>";
foreach ($phpfiles as $phpfile) {
    ob_start(); // start capturing output
    include($phpfile); // execute the file
    $content = ob_get_contents(); // get the contents from the buffer
    ob_end_clean();
    $json = json_decode($content);


    switch (json_last_error()) {
        case JSON_ERROR_NONE:
            echo '';
            break;
        case JSON_ERROR_DEPTH:
            echo '';
            break;
        case JSON_ERROR_STATE_MISMATCH:
            echo '';
            break;
        case JSON_ERROR_CTRL_CHAR:
            echo '';
            break;
        case JSON_ERROR_SYNTAX:
            echo $phpfile . ' - Syntax error, malformed JSON';
            break;
        case JSON_ERROR_UTF8:
            echo '';
            break;
        default:
            echo ' - Unknown error';
            break;
    }
    echo "<br>";
}

?>
</body>
</html>