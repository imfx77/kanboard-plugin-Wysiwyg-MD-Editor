<?php

namespace Kanboard\Plugin\WysiwygMDEditor\Controller;

/**
 * Class WysiwygMDEditorConfigController
 * @package Kanboard\Plugin\WysiwygMDEditor\Controller
 * @author  Im[F(x)]
 */
class WysiwygMDEditorConfigController extends \Kanboard\Controller\ConfigController
{
    public function show()
    {
        $this->response->html($this->helper->layout->config('WysiwygMDEditor:config/settings', array(
            'title' => t('Settings').' &gt; '.t('WysiwygMDEditor_TITLE_SETTINGS'),
        )));
    }

    public function preview(array $values = array(), array $errors = array())
    {
        $this->response->html($this->helper->layout->config('wysiwygMDEditor:config/preview', array(
            'values' => $values,
            'errors' => $errors,
            'title' => t('Settings').' &gt; '.t('WysiwygMDEditor_TITLE_PREVIEW'),
        )));
    }

    public function save()
    {
        $values =  $this->request->getValues();

        if (!isset($values['WysiwygMDEditor_enable_easymde'])) {
          $values['WysiwygMDEditor_enable_easymde'] = 0;
        }
        if (!isset($values['WysiwygMDEditor_enable_stackedit'])) {
          $values['WysiwygMDEditor_enable_stackedit'] = 0;
        }

        if ($this->configModel->save($values)) {
            $this->flash->success(t('Settings saved successfully.'));
        } else {
            $this->flash->failure(t('Unable to save your settings.'));
        }

        $this->response->redirect($this->helper->url->to('WysiwygMDEditorConfigController', 'show', array('plugin' => 'WysiwygMDEditor')));
    }

    public function getEasyMDEDefaultTheme()
    {
        print $this->configModel->get('WysiwygMDEditor_easymde_default_theme');
    }
}
