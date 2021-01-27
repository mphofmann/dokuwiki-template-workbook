<?php
use workbookcore\wbinc\base;
//
if (is_dir('lib/plugins/workbookcore')) {
    try {
        include_once(((substr(getcwd(), -strlen('/lib/exe')) == '/lib/exe') ? '../../' : '') . 'lib/plugins/workbookcore/__dokuinit.php');
        base\BaseAction::DokuJobEcho();
    } catch (\Throwable $e) {
        include('lib/tpl/dokuwiki/main.php');
    }
} else {
    echo "<h1 style='text-align:center'>Warning: Plugin WorkbookCore not installed.</h1>";
    include('lib/tpl/dokuwiki/main.php');
}