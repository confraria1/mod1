<?php

$data = array(
    'pageTitle' => SITE_NAME,
    'description' => '',
    'canonical' => url()
);

loadView('home', $data);

