<?php
use workbookcore\wbinc\base;
//
try {
    include_once(((substr(getcwd(), -strlen('/lib/exe')) == '/lib/exe') ? '../../' : '') . 'lib/plugins/workbookcore/__dokuinit.php');
    $_REQUEST['wb_template'] = 'mediamanager';
    base\BaseAction::DokuJobEcho();
} catch (\Throwable $e) {
    include_once(((substr(getcwd(), -strlen('/lib/exe')) == '/lib/exe') ? '../../' : '') . 'lib/tpl/dokuwiki/mediamanager.php');
}