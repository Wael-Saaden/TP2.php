<?php
$matieres = [
    "java" => [14, 15],
    "html" => [13, 18],
    "php" => [17, 15]
];

function affichage($data) {
    foreach ($data as $key => $value) {
        echo "$key : ";
        if (is_array($value)) {
            affichage($value);
        } else {
            echo "$value";
        }
        echo "<br>";
    }
}


affichage($matieres);

$etudiants = [
    "ali" => ["java" => [14, 5], "html" => [13, 15], "php" => [17, 14]],
    "salah" => ["java" => [12, 13], "html" => [10, 14.5], "php" => [13, 4]],
    "sami" => ["java" => [10, 15], "html" => [13.5, 18], "php" => [15, 19]]
];

echo "<hr>";

affichage($etudiants);

echo "<hr>";

$tab5 = ["java", "html", "js", "css", "angular", "nodejs"];

echo "<table border=1>
<tr>
<th>Nom matiere</th>
</tr>";

foreach ($tab5 as $matiere) {
    echo "<tr><td>$matiere</td></tr>";
}

echo "</table>";
?>