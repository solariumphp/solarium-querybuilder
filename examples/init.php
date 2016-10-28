<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require __DIR__.'/../vendor/autoload.php';

function htmlHeader()
{
    echo '<html><head><title>Solarium QueryBuilder examples</title></head><body>';
}

function htmlFooter()
{
    echo '</body></html>';
}
