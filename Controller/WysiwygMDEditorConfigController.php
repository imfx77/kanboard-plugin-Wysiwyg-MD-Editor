<?php

/**
 * Class WysiwygMDEditorConfigController
 * @package Kanboard\Plugin\WysiwygMDEditor\Controller
 * @author  Im[F(x)]
 */

namespace Kanboard\Plugin\WysiwygMDEditor\Controller;

class WysiwygMDEditorConfigController extends \Kanboard\Controller\ConfigController
{
    public function show()
    {
        $this->response->html($this->helper->layout->config('WysiwygMDEditor:config/settings', array(
            'title' => t('Settings') . ' &gt; ' . t('WysiwygMDEditor_TITLE_SETTINGS'),
        )));
    }

    public function preview(array $values = array(), array $errors = array())
    {
        $this->response->html($this->helper->layout->config('wysiwygMDEditor:config/preview', array(
            'values' => $values,
            'errors' => $errors,
            'title' => t('Settings') . ' &gt; ' . t('WysiwygMDEditor_TITLE_PREVIEW'),
        )));
    }

    public function save()
    {
        $values = $this->request->getValues();

        if (!isset($values['WysiwygMDEditor_enable_emojipicker'])) {
            $values['WysiwygMDEditor_enable_emojipicker'] = 0;
        }
        if (!isset($values['WysiwygMDEditor_enable_faiconspicker'])) {
            $values['WysiwygMDEditor_enable_faiconspicker'] = 0;
        }
        if (!isset($values['WysiwygMDEditor_enable_easymde'])) {
            $values['WysiwygMDEditor_enable_easymde'] = 0;
        }
        if (!isset($values['WysiwygMDEditor_enable_stackedit'])) {
            $values['WysiwygMDEditor_enable_stackedit'] = 0;
        }
        if (!isset($values['WysiwygMDEditor_enable_stackedit_plus'])) {
            $values['WysiwygMDEditor_enable_stackedit'] = 0;
        }

        if (!isset($values['WysiwygMDEditor_enable_easymde_rendering'])) {
            $values['WysiwygMDEditor_enable_easymde_rendering'] = 0;
        }
        if (!isset($values['WysiwygMDEditor_easymde_render_transparent_background'])) {
            $values['WysiwygMDEditor_easymde_render_transparent_background'] = 0;
        }

        // check if HighlightCodeSyntax and/or MarkdownPlus plugins are installed
        $is_HighlightCodeSyntax_Installed = false;
        $is_MarkdownPlus_Installed = false;
        foreach ($this->pluginLoader->getPlugins() as $installedPlugin) {
            if ($installedPlugin->getPluginName() == "HighlightCodeSyntax") {
                $is_HighlightCodeSyntax_Installed = true;
            }
            if ($installedPlugin->getPluginName() == "MarkdownPlus") {
                $is_MarkdownPlus_Installed = true;
            }
        }

        // provide additional flash message details depending on settings and installed plugins
        if ($values['WysiwygMDEditor_easymde_render_code_highlight'] == 2 && !$is_HighlightCodeSyntax_Installed) {
            // DO NOT save settings if HighlightCodeSyntax plugin is missing
            $this->flash->failure(t('Unable to save your settings.' . ' ' . t('WysiwygMDEditor_WARNING_HLCS_PLUGIN_NOT_INSTALLED')));
        } else {
            // actual save attempt
            if ($this->configModel->save($values)) {
                if ($values['WysiwygMDEditor_enable_easymde_rendering'] == 1 && $is_MarkdownPlus_Installed) {
                    // WARNING about MarkdownPlus plugin override
                    $this->flash->success(t('Settings saved successfully.' . ' ' . t('WysiwygMDEditor_WARNING_MDPLUS_PLUGIN_OVERRIDE_CONFLICT')));
                } else {
                    $this->flash->success(t('Settings saved successfully.'));
                }
            } else {
                $this->flash->failure(t('Unable to save your settings.'));
            }
        }

        $this->response->redirect($this->helper->url->to('WysiwygMDEditorConfigController', 'show', array('plugin' => 'WysiwygMDEditor')));
    }

    public function getEasyMDEDefaultTheme()
    {
        print $this->configModel->get('WysiwygMDEditor_easymde_default_theme', 'dimmed');
    }

    public function getEasyMDERenderTheme()
    {
        print $this->configModel->get('WysiwygMDEditor_easymde_render_theme', 'dimmed');
    }

    public function getEasyMDERenderTransparentBackground()
    {
        print $this->configModel->get('WysiwygMDEditor_easymde_render_transparent_background', 0);
    }

    public function getEasyMDERenderCodeHighlight()
    {
        print $this->configModel->get('WysiwygMDEditor_easymde_render_code_highlight', 1);
    }
}
