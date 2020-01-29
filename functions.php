<?php

if(!function_exists('Dd')) {
    function dd($input) {
        Dump($input);
        die();
    }
}

if(!function_exists('Dump')) {
    function dump($input) {
        if(BD_WEB_REQUEST) {
            echo '<pre>';
        }

        var_dump($input);

        if(BD_WEB_REQUEST) {
            echo '</pre>';
        }
    }
}

if(!function_exists('WriteLine')) {
    function WriteLine($input) {
        echo $input . "\n";
    }
}

if(!function_exists('PrintCode')) {
    function PrintCode($input, $label = '') {
        if($label) {
            echo '<h2>'.$label.'</h2>';
        }
        echo '<pre><code>';
        echo $input;
        echo '</code></pre>';
    }
}

if(!function_exists('Slugify')) {
    function Slugify($str) {
        $search = array('Ș', 'Ț', 'ş', 'ţ', 'Ş', 'Ţ', 'ș', 'ț', 'î', 'â', 'ă', 'Î', 'Â', 'Ă', 'ë', 'Ë');
        $replace = array('s', 't', 's', 't', 's', 't', 's', 't', 'i', 'a', 'a', 'i', 'a', 'a', 'e', 'E');
        $str = str_ireplace($search, $replace, strtolower(trim($str)));
        $str = preg_replace('/[^\w\d\-\ ]/', '', $str);
        $str = str_replace(' ', '-', $str);

        return preg_replace('/\-{2,}/', '-', $str);
    }
}

if(!function_exists('ShortHash')) {
    function ShortHash($input, $len = 10) {
        return substr(hash('sha256', $input), 0, $len);
    }
}
