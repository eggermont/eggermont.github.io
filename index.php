<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
// create a variable for the country code
$var_country_code = $geoplugin->countryCode;
// redirect based on country code:
if ($var_country_code == "AL") {
header('Location: http://sq.wikipedia.org/');
}
else if ($var_country_code == "US") {
header('Location: http://nl.wikipedia.org/');
}
else {
header('Location: http://en.wikipedia.org/');
}
?>