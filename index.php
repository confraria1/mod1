<?php

/**
 * Versão 2.0
 */

require './_app/config.php';
require './_app/models/Database.php';
require './_app/useful/fns.php';

if (isset($_GET['page'])) {

    $page = filter_input(INPUT_GET, 'page', FILTER_DEFAULT);

    if (substr_count($page, '/') > 0) {
        $urlParts = explode('/', $page);
        $page = $urlParts[0];
    }

    if (in_array($page, $pagesNames) && file_exists('_app/controllers/' . $page . '.php')) {
        require '_app/controllers/' . $page . '.php';
    } else {
        require '_app/controllers/error_404.php';
    }
} else {
    require '_app/controllers/home.php';
}

