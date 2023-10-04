<!DOCTYPE html>
<html>
<body>

<?php
//função anonima é uma function sem nome

$tudo = function($a, $z) {
    $so = $a + $z;
    $su = $a - $z;
    $di = $a / $z;
    $mu = $a * $z;

	$soS = "$a + $z = $so";
    $suS = "$a - $z = $su";
    $diS = "$a / $z = $di";
    $muS = "$a * $z = $mu";
  
    return array($soS, $suS, $diS, $muS);
};

function execute($x, $y, $callback) {
    $res = $callback($x, $y);
    
    foreach($res as $con) {
    	echo "$con <br>";
    }
}

execute(20, 40, $tudo);
?>

</body>
</html>
