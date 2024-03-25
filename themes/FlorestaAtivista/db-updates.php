<?php

use MapasCulturais\App;

function __exec($sql, $conn)
{
    try {
        $conn->executeQuery($sql);
    } catch (Exception $ex) {
        echo "
SQL ========================= 
$sql
-----------------------------
";
        throw $ex;
    }
}

return [
    'Ajusta o numero na ficha de inscrição' => function () use($app) {
        /** @var App $app */
        $app = App::i();
        $em = $app->em;
        $conn = $em->getConnection();
        __exec("UPDATE registration SET number = REPLACE(number, 'mc-', 'FA-');", $conn);
    }
];