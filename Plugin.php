<?php

namespace Kanboard\Plugin\WysiwygMDEditor;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $cspRules = $this->container['cspRules'];

    	if ($this->configModel->get('WysiwygMDEditor_enable_easymde', '0') == '1') {
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/vendor/highlightjs/highlight.js/highlight.min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/vendor/Ionaru/easy-markdown-editor/easymde.min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/easymde/editor.js'));

            // add a 'self' frame-src CSP for EasyMDE, ONLY if not already present
            if (!array_key_exists('frame-src', $cspRules)) {
                $cspRules['frame-src'] = "'self'";
            }
            else if (!str_contains($cspRules['frame-src'], "'self'")) {
                $cspRules['frame-src'] .= " 'self'";
            }
        }

    	if ($this->configModel->get('WysiwygMDEditor_enable_stackedit', '0') == '1') {
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/vendor/benweet/stackedit.js/stackedit.min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/stackedit/editor.js'));

            // add a specific frame-src CSP for StackEdit+, ONLY if not already present
            if (!array_key_exists('frame-src', $cspRules)) {
                $cspRules['frame-src'] = "https://stackedit.net/";
            }
            else if (!str_contains($cspRules['frame-src'], "https://stackedit.net/")) {
                $cspRules['frame-src'] .= " https://stackedit.net/";
            }
        }

        $this->setContentSecurityPolicy($cspRules);

        $this->template->hook->attach('template:config:sidebar', 'WysiwygMDEditor:config/sidebar');

        $this->route->addRoute('settings/wysiwygmdeditor', 'WysiwygMDEditorConfigController', 'show', 'WysiwygMDEditor');
        $this->route->addRoute('settings/wysiwygmdeditor/preview', 'WysiwygMDEditorConfigController', 'preview', 'WysiwygMDEditor');
    }

    public function onStartup()
    {
        $path = __DIR__ . '/Locale';
        $language = $this->languageModel->getCurrentLanguage();
        $filename = implode(DIRECTORY_SEPARATOR, array($path, $language, 'translations.php'));

        if (file_exists($filename)) {
            Translator::load($language, $path);
        }
        else {
            Translator::load('en_US', $path);
        }
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
        return '0.5.4';
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
