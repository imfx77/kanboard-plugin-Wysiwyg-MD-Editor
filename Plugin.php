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
        $this->template->setTemplateOverride('action/index', 'wysiwygMDEditor:action/index');

        $this->hook->on('template:layout:css', array('template' => 'plugins/WysiwygMDEditor/Assets/css/wysiwyg-mde-editor.css'));

        $this->hook->on('template:layout:js', array('template' => 'plugins/WysiwygMDEditor/Assets/js/wysiwyg-mde-editor.js'));

        $this->template->hook->attach('template:project-header:view-switcher-before-project-overview', 'wysiwygMDEditor:project_header/actions');

        // Views - Add Menu Item - Template Hook
        //  - Override name should start lowercase e.g. wysiwygMDEditor
        //  - Example for menu item in kanboard settings page: $this->template->hook->attach('template:config:sidebar', 'wysiwygMDEditor:config/sidebar');

        // Extra Page - Routes
        //  - Example: $this->route->addRoute('/my/custom/route', 'MyController', 'show', 'WysiwygMDEditor');
        //  - Must have the corresponding action in the matching controller
        $this->route->addRoute('/ / ', ' ', ' ', 'WysiwygMDEditor');

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
        return t('Integrates external MD editors into Kanboard in order to conveniently edit/preview
                (and eventually render) the rich text enabled fields in the interface.
                Every editor may allow for different customizations of functionality, MD features, and UI themes.');
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
