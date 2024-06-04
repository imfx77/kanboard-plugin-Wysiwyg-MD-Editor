<?php

namespace Kanboard\Plugin\WysiwygMDEditor;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $cspRules = $this->container['cspRules'];

        $enableEmojiPicker = ($this->configModel->get('WysiwygMDEditor_enable_emojipicker', '0') == '1');
        $enableEasyMDE = ($this->configModel->get('WysiwygMDEditor_enable_easymde', '0') == '1');
        $enableEasyMDERenering = ($this->configModel->get('WysiwygMDEditor_enable_easymde_rendering', '0') == '1');
        $enableStackEdit = ($this->configModel->get('WysiwygMDEditor_enable_stackedit', '0') == '1');
        $enableStackEditPlus = ($this->configModel->get('WysiwygMDEditor_enable_stackedit_plus', '0') == '1');

        if ($enableEmojiPicker || $enableEasyMDE) {
            //JS
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/vendor/woody180/vanilla-javascript-emoji-picker/vanillaEmojiPicker.js'));
        }

        if ($enableEmojiPicker) {
            //JS
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/symbols/emojis.js'));
        }

        if ($enableEasyMDE) {
            //CSS
            $this->hook->on('template:layout:css', array('template' => 'plugins/WysiwygMDEditor/Assets/easymde/container.css'));

            //JS
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/vendor/highlightjs/highlight.js/highlight.min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/vendor/Ionaru/easy-markdown-editor/easymde.min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/easymde/editor.js'));

            // add a 'self' frame-src CSP for EasyMDE, ONLY if not already present
            if (!array_key_exists('frame-src', $cspRules)) {
                $cspRules['frame-src'] = "'self'";
            } elseif (!str_contains($cspRules['frame-src'], "'self'")) {
                $cspRules['frame-src'] .= " 'self'";
            }
        }

        if ($enableStackEdit) {
            //JS
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/vendor/benweet/stackedit.js/stackedit.min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/stackedit/editor.js'));

            // add a specific frame-src CSP for StackEdit, ONLY if not already present
            if (!array_key_exists('frame-src', $cspRules)) {
                $cspRules['frame-src'] = "https://stackedit.io/";
            } elseif (!str_contains($cspRules['frame-src'], "https://stackedit.io/")) {
                $cspRules['frame-src'] .= " https://stackedit.io/";
            }
        }

        if ($enableStackEditPlus) {
            //JS
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/vendor/benweet/stackedit.js/stackedit.min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/stackedit-plus/editor.js'));

            // add a specific frame-src CSP for StackEdit+, ONLY if not already present
            if (!array_key_exists('frame-src', $cspRules)) {
                $cspRules['frame-src'] = "https://stackedit.cn/";
            } elseif (!str_contains($cspRules['frame-src'], "https://stackedit.cn/")) {
                $cspRules['frame-src'] .= " https://stackedit.cn/";
            }
        }

        if ($enableEasyMDERenering) {
            //CSS
            $this->hook->on('template:layout:css', array('template' => 'plugins/WysiwygMDEditor/Assets/easymde/container.css'));

            //JS
            if ($this->configModel->get('WysiwygMDEditor_easymde_render_code_highlight', '1') == '2') {
                $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/vendor/highlightjs/highlight.js/highlight.min.js'));
            }
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/vendor/Ionaru/easy-markdown-editor/easymde.min.js'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/easymde/render.js'));

            //HELPER
            $this->helper->register('text', '\Kanboard\Plugin\WysiwygMDEditor\Helper\WysiwygMDEditorHelper');

            // add a 'self' frame-src CSP for EasyMDE, ONLY if not already present
            if (!array_key_exists('frame-src', $cspRules)) {
                $cspRules['frame-src'] = "'self'";
            } elseif (!str_contains($cspRules['frame-src'], "'self'")) {
                $cspRules['frame-src'] .= " 'self'";
            }
        }

        // CSP
        $this->setContentSecurityPolicy($cspRules);

        //CONFIG HOOK
        $this->template->hook->attach('template:config:sidebar', 'WysiwygMDEditor:config/sidebar');

        // ROUTES
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
        } else {
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
        return '0.9.3';
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
