<?php

namespace Kanboard\Plugin\WysiwygMDEditor;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;
use Kanboard\Plugin\WysiwygMDEditor\Helper\WysiwygMDEditorHelper;
// use Kanboard\Helper;  // Add core Helper for using forms etc. inside external templates

class Plugin extends Base
{
    public function initialize()
    {
        //$this->template->setTemplateOverride('action/index', 'wysiwygMDEditor:action/index');

        $this->hook->on('template:layout:css', array('template' => 'plugins/WysiwygMDEditor/Assets/css/wysiwyg-mde-editor.css'));

        $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/js/wysiwyg-mde-editor.js'));

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
