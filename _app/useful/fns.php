<?php

/**
 * Função para carregar view.
 * 
 * @param type $view Nome da View que será carregada.
 * @param type $data Array contendo as informações que serão exibidas na view.
 */
function loadView($view, $data = array()) {

    if (file_exists('./_app/views/' . $view . '.php')) {

        foreach ($data as $key => $value) {
            $$key = $value;
        }

        $data = array();

        require './_app/views/' . $view . '.php';
    } else {
        echo 'File ' . $view . '.php not found';
    }
}

/**
 * Função para retornar a url do site concatenada com o parâmetro passado.
 * 
 * @param type $path Destino que será concatenado após a url definida em DIR_RAIZ.
 * @return string DIR_RAIZ ou DIR_RAIZ . $path
 */
function url($path = null) {

    if ($path != null) {
        $url = DIR_RAIZ . $path;
    } else {
        $url = DIR_RAIZ;
    }
    return $url;
}

/**
 * Função para carregar imagem.
 * Será concatenado o nome da imagem com o caminho absoluto.
 * 
 * @param type $path Nome e extensão da imagem a ser carregada.
 * @return type Caminho absoluto da imagem.
 */
function loadImg($path) {

    return DIR_RAIZ . 'assets/img/' . $path;
}

/**
 * Função para carregar arquivos JavaScript automaticamente.
 * 
 * @param type $js Um ou varios nomes de arquivos JS que serão carregados.
 */
function loadJs($js) {

    if (is_array($js)) {
        foreach ($js as $row) {
            echo '<script src="' . DIR_RAIZ . 'assets/js/' . $row . '"></script>' . PHP_EOL;
        }
    } else {
        echo '<script src="' . DIR_RAIZ . 'assets/js/' . $js . '"></script>' . PHP_EOL;
    }
}

/**
 * 
 * @param type $var
 */
function debug($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}
