<html> <!-- Start HTML -->
<head> <!-- Start HTML-Kopf -->
<!-- CSS-Formatierung für die Tabelle -->
<style type="text/css">
 table {
 background-color: #E2E9F6;
 border-collapse: collapse;
 border: none;
 }
 thead {
 background-color: #4D79C7;
 color: #FFFFFF;
 }

 td, th {
 text-align: left;
 padding: 0.5em 1em;
 }
</style> <!-- Ende CSS-Style -->
</head> <!-- Ende HTML-Kopf -->
<body> <!-- Start HTML-Body -->
<?php //Start PHP
//Parameter holen und ausgeben
$bnr = $_GET["bnr"];
echo "<h1>iBrot-Bestellung</h1>";
echo "<h2>Bestellnummer: $bnr </h2>";
/* Daten in einem assoziativen Array definieren*/
$daten = array (
 array("Position"=>1,"ArtikelID"=>"Brötchen","Menge"=>5),
 array("Position"=>2,"ArtikelID"=>"Croissant","Menge"=>3),
 array("Position"=>3,"ArtikelID"=>"Brot","Menge"=>1)
 );
/* Überschriften im Tabellen-Head ausgeben */
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Position</th>";
echo "<th>Artikel-ID</th>";
echo "<th>Menge</th>";
echo "</tr>";
echo "</thead>";
/* Datensätze im Tabellen-Body ausgeben */
echo "<tbody>";
foreach ($daten as $row) {
 echo "<tr>";
 echo "<td>".$row['Position']."</td>";
 echo "<td>".$row['ArtikelID']."</td>";
 echo "<td>".$row['Menge']."</td>";
 echo "</tr>";
}
echo "</table>";
echo "<tbody>";

?> <!-- Ende PHP-->
</body> <!-- Ende HTML-Body-->
</html> <!-- Ende HTML-->