<!DOCTYPE html>
<html>

<head>
<title>Customer Database</title>
</head>

<body>
<?php  include 'nav.php'; ?>

<?php 
try
{
    $user = 'fitfour'
    $db   = new PDO('pgsql:host=192.168.0.223;dbname=Customer', $user);
}
catch (PDOException $ex)
{
    echo 'ERROR: ' . $ex->getMessage();
}
?>
</body>

</html>
