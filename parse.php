<?php

$site = readline("Digite o site: ");
$parse = parse_url($site);

foreach($parse as $p) {
    echo("$p\n");
}

print_r($parse);

?>
