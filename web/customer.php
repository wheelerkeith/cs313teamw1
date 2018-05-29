<!DOCTYPE html>
<html>

<head>
<title>Customer Database</title>
</head>

<body>
<?php  include 'nav.php'; ?>

<?php 

$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $db->query('SELECT * FROM customer');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

while($row = mysql_fetch_array($result)) {
echo $row['fieldname'];
}

?>
</body>

</html>
