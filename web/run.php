<?php
require_once(__DIR__ . '/../lib/frood/src/Frood.php');
$frood = new Frood('Lolmodule', 'public');
//optional config here $frood->configure();
$frood->dispatch();
