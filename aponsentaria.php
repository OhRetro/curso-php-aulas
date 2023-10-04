<?php
echo "Programa para Aponsentaria" . "\n";
$idade = 18;
$sexo = "M";

$critH = $idade >= 65 && $sexo == "M";
$critM = $idade >= 60 && $sexo == "F";

$critReach = $critH || $critM;
$prevPag = true;
$podeAposentar = $prevPag && $critReach;

echo "Pode Aposentar ? -> $podeAposentar" . "\n";

if ($critH || $critM) {
    echo "Pode se Aponsentar.";
} else {
    echo "Vá trabalhar mais. Falta apenas " . ($sexo == "M" ? 65 : 60) - $idade . " anos.";
}
?>