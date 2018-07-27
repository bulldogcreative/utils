<?php

if(php_sapi_name() == 'cli') {
    define('BD_WEB_REQUEST', false);
} else {
    define('BD_WEB_REQUEST', true);
}
