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
            o2.name as nome_da_oportunidade
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
                $result['ID e nome dos agentes afetados'][] = 'ID: ' . $data['id_agente'] . ' ** ' . $data['nome_agente'] . '** ---- Inscrição ' . $data['id_inscricao'] . ' ---- Oportunidade: '.$data['nome_da_oportunidade'];
                $result['data'][] = $data;
            }
        }

        dump($result);
    }
}
