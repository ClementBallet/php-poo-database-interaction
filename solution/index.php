<?php
require "Database.class.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intéraction avec une base de données en POO</title>
</head>

<body>
<?php
$database = new Database("localhost", "root", "villes_france", "");
$database->connect();
$database->prepReq("SELECT * FROM departement");
$departements = $database->fetchData();

echo "<ul>";
foreach ($departements as $departement) {
    $nomDepartement = $departement['departement_nom'];
    echo "<li>$nomDepartement</li>";
}
echo "</ul>";
?>

</body>

</html>