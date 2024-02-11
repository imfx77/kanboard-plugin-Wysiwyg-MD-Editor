<?php

namespace Kanboard\Plugin\WysiwygMDEditor;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/AssetsMDE/highlight/min.js'));
        $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/AssetsMDE/easymde/min.js'));
        $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/AssetsMDE/easymde/editor.js'));
        $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/AssetsMDE/stackedit/min.js'));
        $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/AssetsMDE/stackedit/editor.js'));

        $this->template->hook->attach('template:config:sidebar', 'WysiwygMDEditor:config/sidebar');

        $this->route->addRoute('settings/wysiwygmdeditor', 'ConfigController', 'show', 'WysiwygMDEditor');
        $this->route->addRoute('settings/wysiwygmdeditor/preview', 'ConfigController', 'preview', 'WysiwygMDEditor');

        $this->helper->register('wysiwygMDEditorHelper', '\Kanboard\Plugin\WysiwygMDEditor\Helper\WysiwygMDEditorHelper');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__ . '/Locale');
    }

    public function getPluginName()
    {
        return 'WysiwygMDEditor';
    }

    public function getPluginDescription()
    {
        return t('WysiwygMDEditor_PLUGIN_DESCRIPTION');
    }

    public function getPluginAuthor()
    {
        return 'imfx77';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.33';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor';
    }
}
