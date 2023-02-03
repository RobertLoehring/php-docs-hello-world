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
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "rse", "pwd" => 'Pa$$w0rd1234', "Database" => "ibrot", "LoginTimeout" => 30,
"Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:xxx-ibrot-dbsrv.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
/* Set up and execute the query. */
$tsql = "SELECT * FROM Bestellposition WHERE BestellungID=$bnr";
$stmt = sqlsrv_query( $conn, $tsql);
if( $stmt === false)
{
echo "Error in query preparation/execution.\n";
die( print_r( sqlsrv_errors(), true));
}
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
/* Retrieve each row as an associative array and display the results.*/
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
{
echo "<tr>";
echo "<td>".$row['Position']."</td>";
echo "<td>".$row['ArtikelID']."</td>";
echo "<td>".$row['Menge']."</td>";
echo "</tr>";
}
echo "</table>";
echo "<tbody>";
/* Free statement and connection resources. */
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);
?> <!-- Ende PHP-->
</body> <!-- Ende HTML-Body-->
</html> <!-- Ende HTML-->