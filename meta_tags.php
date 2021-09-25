<?php

$site = readline("Digite um site: ");
$meta = get_meta_tags($site);

foreach($meta as $m) {
    echo("$m\n");
}
?>
