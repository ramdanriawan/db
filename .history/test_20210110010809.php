<?php

include 'vendor/autoload.php';

use RamdanRiawan\DB;

$db = (new DB)
    ->setHost('localhost')
    ->setUser('root')
    ->setPassword('')
    ->setDb('dipo_crisvandoli.bikinaplikasi.dev')
    ->setConnection()
    ->setRelations([
        ''
    ]);

foreach ($db->getTables() as $key => $item) {

    $$item = (clone $db)->$item;
}

foreach($anggota() as $anggota)
{
    echo $anggota->getLoop() . PHP_EOL;
}