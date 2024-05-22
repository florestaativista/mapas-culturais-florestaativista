<?php

namespace SettingsFa;

use MapasCulturais\App;

class Controller extends \MapasCulturais\Controllers\EntityController
{
    function __construct()
    {
    }

    public function GET_noAvatarFile()
    {

        $this->requireAuthentication();

        $app = App::i();

        if (!$app->user->is('admin')) {
            return;
        }

        $em = $app->em;
        $conn = $em->getConnection();

        $files_data = $conn->fetchAll("
         select 
            a.id as id_agente,
            a.name as nome_agente,
            f.path,
            r.id as id_inscricao,	
            o2.name as nome_da_oportunidade,
            f.create_timestamp as data_criacao
        from 
            registration r 
        join 
            file f on r.agent_id = f.object_id and f.object_type = 'MapasCulturais\Entities\Agent' and f.grp = 'avatar'
        join 
            agent a on r.agent_id = a.id
        join
        	opportunity o2 on r.opportunity_id = o2.id
        where 
            r.opportunity_id in (
                select 
                    o.id
                from 
                    opportunity o 
                join 
                    opportunity_meta om on om.object_id = o.id and om.key = 'requestAgentAvatar'
                where 
                    om.value = '1' and
                    o.parent_id is null
            )
        ");

        $result['Quantidade'] = 0;
        foreach ($files_data as $data) {
            if (!file_exists(PUBLIC_PATH . 'files/' . $data['path'])) {
                $result['Quantidade']++;
                $result['ID e nome dos agentes afetados'][] = 'ID: ' . $data['id_agente'] . ' ** ' . $data['nome_agente'] . '** ---- Inscrição ' . $data['id_inscricao'] . ' ---- Oportunidade: ' . $data['nome_da_oportunidade'] . ' ---- Data Criação: ' . $data['data_criacao'];
                $result['data'][] = $data;
            }
        }

        dump($result);
    }

    public function GET_noRegistrationFile()
    {

        $this->requireAuthentication();

        $app = App::i();

        if (!$app->user->is('admin')) {
            return;
        }

        $em = $app->em;
        $conn = $em->getConnection();

        $files_data = $conn->fetchAll("
        select 
            a.id as id_agente,
            a.name as nome_agente,
            f.path,
            r2.id as id_inscricao,	
            o.name as nome_da_oportunidade,
            f.create_timestamp as data_criacao
        from 
            file f
        join 
            registration r2 on  f.object_id = r2.id 
        join 
            agent a on r2.agent_id = a.id
        join opportunity o on r2.opportunity_id = o.id
        where 
            f.object_id in (
                select 
                    r.id 
                from 
                    registration r 
                where r.status > 0
            )
        ");

        $result['Quantidade'] = 0;
        foreach ($files_data as $data) {
            if (!file_exists(PRIVATE_FILES_PATH . $data['path'])) {
                $result['Quantidade']++;
                $result['ID e nome dos agentes afetados'][] = 'ID: ' . $data['id_agente'] . ' ** ' . $data['nome_agente'] . '** ---- Inscrição ' . $data['id_inscricao'] . ' ---- Oportunidade: ' . $data['nome_da_oportunidade'] . ' ---- Data Criação: ' . $data['data_criacao'];
                $result['data'][] = $data;
            }
        }

        dump($result);
    }

    public function GET_noFile()
    {

        $this->requireAuthentication();

        $app = App::i();

        if (!$app->user->is('admin')) {
            return;
        }

        $em = $app->em;
        $conn = $em->getConnection();

        $files_data = $conn->fetchAll("
        select 
        f.path,
        f.object_type as tipo_de_registro,
        f.object_id as id_do_registro,
        f.grp as grupo,
        f.create_timestamp as data_criacao,
        f.private
        from 
            file f
        where parent_id is null
        order by data_criacao desc
        ");

        $result['Quantidade'] = 0;
        foreach ($files_data as $data) {
            
            $path = $data['private'] ? PRIVATE_FILES_PATH . $data['path'] : PUBLIC_PATH . 'files/' . $data['path'];
            if (!file_exists($path) ) {
                $result['Quantidade']++;
                $result['Tipo registro'][] = 'ID: ' . $data['id_do_registro'] . ' ---- Tipo: ' . $data['tipo_de_registro'] . '----- Grupo: ' . $data['grupo'] . ' ---- Data Criação: ' . $data['data_criacao'];
            }
        }

        dump($result);
        dump(['data' =>  $files_data]);
    }
}
