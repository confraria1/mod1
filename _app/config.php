<?php

/*
 * Definição do diretório raiz do site
 */
define('DIR_RAIZ', 'http://192.168.5.100/sitename/');
//define("DIR_RAIZ", 'http://');


/*
 * Nome do site
 */
define('SITE_NAME', 'SITE NAME');


/*
 * Nomes das páginas
 */
$pagesNames = array(
    'error_404',
    'home',
    'institucional',
    'equipamentos',
    'servicos',
    'produtos',
    'clientes',
    'contato',
    'mail'
);


/*
 * Mensagens de retorno do contato
 */
$msg[1] = 'Sua mensagem foi enviada com sucesso!';
$msg[2] = 'Erro ao enviar mensagem, tente novamente!';