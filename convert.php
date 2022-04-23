<?php

require_once('vendor/autoload.php');

error_reporting(E_ALL);

use ML\JsonLD\JsonLD;
use ML\JsonLD\NQuads;

$filename = 'orcid.json';

$quads = JsonLD::toRdf($filename);

$nquads = new NQuads();
$serialized = $nquads->serialize($quads);
print $serialized;


?>
