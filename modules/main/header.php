<?php
// Configurações do site
$site_title = "Lag Hosting - Hospedagem de Qualidade";
$site_description = "Os melhores servidores estão na Lag Hosting! Há mais de 4 anos oferecendo hospedagem SAMP, Open-MP, Web e VPS com proteção DDoS.";
$site_url = "https://laghosting.com.br";

// Itens de navegação
$nav_items = [
    'inicio' => 'Início',
    'servicos' => 'Serviços', 
    'precos' => 'Preços',
    'sobre' => 'Sobre',
    'contato' => 'Contato'
];

// Verificar se usuário está logado
$is_logged_in = isset($_SESSION['user_id']) ? true : false;
?>
