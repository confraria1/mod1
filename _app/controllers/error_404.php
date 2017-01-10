<?php

$data = array(
    'pageTitle' => 'Página não encontrada - ' . SITE_NAME,
    'description' => '',
    'canonical' => url('error_404')
);

loadView('error_404', $data);

