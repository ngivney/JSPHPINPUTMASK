<?php
/* Check for post data and location */
$URLhold = $_SERVER['HTTP_REFERER'];
if ($_POST && $URLhold == "http://ngivney.comyr.com/github/jsphpinputmask/index.html" || $URLhold == "http://ngivney.comyr.com/github/jsphpinputmask/"){
}
else{
header( 'Location: filloutform.html' ) ;
}
$_SESSION['wphone1'] = $_POST['wphone1'] ;
$wphone1 = $_SESSION['wphone1'];
$_SESSION['wphone2'] = $_POST['wphone2'] ;
$wphone2 = $_SESSION['wphone2'];
$_SESSION['wphone3'] = $_POST['wphone3'] ;
$wphone3 = $_SESSION['wphone3'];
$wphone = $wphone1 . "-" . $wphone2 . "-" . $wphone3;
echo "You entered: $wphone";
?>
