<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// 如果当前路径不是根目录，并且这个文件在public目录下，则直接退出，否则指向public/index.php

if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {  
    return false;
}

require_once __DIR__.'/public/index.php';
