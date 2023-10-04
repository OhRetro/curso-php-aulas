<?php
    function sau($nome = "Senhor(a)", $sobrenome = "Cliente") {
        echo "\n". $nome. " ". $sobrenome;
    }

    sau();
    sau("Gabriel", "Naka");
    sau(null);
    sau(null, null);
?>