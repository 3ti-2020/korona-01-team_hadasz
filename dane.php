<!doctype html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body class="body">
<div class="container">
    
<?php

$servername="35.246.243.27";
$username="root";
$password="a";
$dbname="kacper_hadasz";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM bronie_jednoręczne";

$result = $conn->query($sql);
   

    
echo("</h1>");
echo("<table class='tabelka'>");
echo("<tr>
<th class='th'>id</th>
<th class='th'>nazwa</th>
<th class='th'>poziom</th>
</tr>");


while($wiersz = $result->fetch_assoc()){
   
    echo("<tr class='myrow'>");
echo("<td class='mycol'>".$wiersz['ID']."</td><td class='mycol'>".$wiersz['Nazwa']."</td><td class='mycol imie'>".$wiersz['Poziom']);
echo("</tr>");
};

echo("</table>");


$sql = "SELECT * FROM bronie_dwuręczne";

$result = $conn->query($sql);
   

    
echo("</h1>");
echo("<table class='tabelka'>");
echo("<tr>
<th class='th'>id</th>
<th class='th'>nazwa</th>
<th class='th'>poziom</th>
</tr>");


while($wiersz = $result->fetch_assoc()){
   
    echo("<tr class='myrow'>");
echo("<td class='mycol'>".$wiersz['ID']."</td><td class='mycol'>".$wiersz['Nazwa']."</td><td class='mycol imie'>".$wiersz['Poziom']);
echo("</tr>");
};

echo("</table>");

?>

</div>
</body>
</html>
