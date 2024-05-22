<?php
use MapasCulturais\i;

$config['mailer.templates']['welcome']['title'] = i::__("Boas vindas à Floresta Ativista");
$config['mailer.templates']['last_login']['title'] = i::__("Acesse a Floresta Ativista");
$config['mailer.templates']['new']['title'] = i::__("Novo registro");
$config['mailer.templates']['update_required']['title'] = i::__("Acesse a Floresta Ativista");
$config['mailer.templates']['compliant']['title'] = i::__("Denúncia - Floresta Ativista");
$config['mailer.templates']['suggestion']['title'] = i::__("Mensagem - Floresta Ativista");
$config['mailer.templates']['seal_toexpire']['title'] = i::__("Selo Certificador Expirando");
$config['mailer.templates']['seal_expired']['title'] = i::__("Selo Certificador Expirado");
$config['mailer.templates']['opportunity_claim']['title'] = i::__("Solicitação de Recurso de Oportunidade");
$config['mailer.templates']['request_relation']['title'] = i::__("Solicitação de requisição");
$config['mailer.templates']['start_registration']['title'] = i::__("Inscrição iniciada");
$config['mailer.templates']['send_registration']['title'] = i::__("Inscrição enviada");
$config['mailer.templates']['claim_form']['title'] = i::__("Solicitação de recurso");
$config['mailer.templates']['claim_certificate']['title'] = i::__("Certificado de solicitação de recurso");

return ['mailer.templates' => $config['mailer.templates']];