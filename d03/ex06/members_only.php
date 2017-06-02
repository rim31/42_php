<?php
if ($_SERVER['PHP_AUTH_USER'] == "zaz" and $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
// if (1)
{
	$path = '../img/42.png';
	$toto = file_get_contents($path);
	$lien = base64_encode($toto);
}
else
{
	header('HTTP/1.0 401 Unauthorized');
	header("'WWW-Authenticate: Basic realm=''Espace membres''");
	header('Content-Type: text/html');
	?>
<html><body>Cette zone est accessible uniquement aux membres du site</body></htm>
<?php
exit;
}
?>
<html><body>
Bonjour Zaz<br />
<img src='data:image/png;base64,<?php echo $lien ?>'/>
</body></html>
