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
    },

   'Atualiza o campo de deficiência para os novos valoressss' => function() use($app) {
        /** @var App $app */
        $app = App::i();
        $em = $app->em;
        $conn = $em->getConnection();
        $updates = [
            'Visual' => 'Pessoa com Deficiência Visual (cega ou com baixa visão)',
            'Mental' => 'Pessoa com Deficiência Intelectual',
            'Física' => 'Pessoa com Deficiência Física',
            'Auditiva' => 'Pessoa Surda, ensurdecida ou com deficiência auditiva',
            'Física-motora' => 'Pessoa com Deficiência Física',
            'Intelectual' => 'Pessoa com Deficiência Intelectual',
            'Múltipla' => 'Outra',
            'Transtorno do Espectro Autista' => 'Pessoa com Neurodiversidade/Autismo',
            'Outras' => 'Outra',
            'Não sou' => 'Não sou Pessoa com Deficiência',
        ];
       
        foreach ($updates as $old => $new) {
            __exec("
                UPDATE agent_meta
                SET value = REPLACE(value::text, '\"{$old}\"', '\"{$new}\"')::jsonb
                WHERE key = 'pessoaDeficiente'
                AND value::text LIKE '%\"{$old}\"%'
            ", $conn);
        }
    },
];