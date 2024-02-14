<?php

namespace Kanboard\Plugin\WysiwygMDEditor;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
    	if ($this->configModel->get('WysiwygMDEditor_enable_easymde', '0') == '1') {
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/highlight/min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/easymde/min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/easymde/editor.js'));
        }
    	if ($this->configModel->get('WysiwygMDEditor_enable_stackedit', '0') == '1') {
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/stackedit/min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/stackedit/editor.js'));
        }

        $this->template->hook->attach('template:config:sidebar', 'WysiwygMDEditor:config/sidebar');

        $this->route->addRoute('settings/wysiwygmdeditor', 'WysiwygMDEditorConfigController', 'show', 'WysiwygMDEditor');
        $this->route->addRoute('settings/wysiwygmdeditor/preview', 'WysiwygMDEditorConfigController', 'preview', 'WysiwygMDEditor');

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
        return '0.5.0';
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
