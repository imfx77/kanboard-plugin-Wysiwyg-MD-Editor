<?php

namespace Kanboard\Plugin\WysiwygMDEditor;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
    	if ($this->configModel->get('WysiwygMDEditor_enable_easymde', '0') == '1') {
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/vendor/highlightjs/highlight.js/highlight.min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/vendor/Ionaru/easy-markdown-editor/easymde.min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/easymde/editor.js'));
        }
    	if ($this->configModel->get('WysiwygMDEditor_enable_stackedit', '0') == '1') {
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/vendor/benweet/stackedit.js/stackedit.min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/stackedit/editor.js'));
        }

        $this->template->hook->attach('template:config:sidebar', 'WysiwygMDEditor:config/sidebar');

        $this->route->addRoute('settings/wysiwygmdeditor', 'WysiwygMDEditorConfigController', 'show', 'WysiwygMDEditor');
        $this->route->addRoute('settings/wysiwygmdeditor/preview', 'WysiwygMDEditorConfigController', 'preview', 'WysiwygMDEditor');
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
        return 'Im[F(x)]';
    }

    public function getPluginVersion()
    {
        return '0.5.2';
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
