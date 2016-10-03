<?php
$resId = '';
if(isset($_POST['host'])){
            $format = "host=%s port=%d dbname=%s user=%s password=%s";
                    $conn_string = sprintf($format, $_POST['host'], $_POST['port'], $_POST['dbname'], $_POST['user'], $_POST['password']);
                            $dbConn = pg_connect($conn_string);
                            $resId = print_r($dbConn, true);
}

?>
<!Doctype html>
<html>
<head>

</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<label for="host">Host</label><br />
<input type="text" value="172.17.0.3" name="host" /><br />
<label for="port">Port</label><br />
<input type="number" value="5432" name="port" /><br />
<label for="dbname">Nombre DB</label><br />
<input type="text" value="postgres" name="dbname" /><br />
<label for="user">Usuario</label><br />
<input type="text" value="postgres" name="user" /><br />
<label for="password">Pass</label><br />
<input type="password" value="" name="password" /><br />
<input type="submit" value="Conectar" />
</form>
<br />
<h1>
<?php echo $resId ?>
</h1>
</body>
</html>

