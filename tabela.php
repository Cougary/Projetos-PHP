<?php

$tabela = get_html_translation_table(HTML_ENTITIES);

foreach($tabela as $tab) {
    echo("$tab\n");
}

print_r($tabela);

?>
