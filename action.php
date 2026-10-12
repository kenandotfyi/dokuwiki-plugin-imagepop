<?php

if (!defined('DOKU_INC')) die();

/** Load the standalone imagepop assets on rendered wiki pages. */
class action_plugin_imagepop extends DokuWiki_Action_Plugin
{
    public function register(Doku_Event_Handler $controller)
    {
        $controller->register_hook('TPL_METAHEADER_OUTPUT', 'BEFORE', $this, 'addAssets');
    }

    public function addAssets(Doku_Event $event, $param)
    {
        global $ACT;
        if (!isset($ACT) || $ACT !== 'show') return;

        $event->data['link'][] = [
            'rel' => 'stylesheet',
            'type' => 'text/css',
            'href' => DOKU_BASE . 'lib/plugins/imagepop/style.css',
        ];
        $event->data['script'][] = [
            'type' => 'text/javascript',
            'charset' => 'utf-8',
            'defer' => 'defer',
            'src' => DOKU_BASE . 'lib/plugins/imagepop/script.js',
        ];
    }
}
