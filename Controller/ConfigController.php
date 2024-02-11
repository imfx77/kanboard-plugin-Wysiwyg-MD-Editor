<?php

namespace Kanboard\Plugin\WysiwygMDEditor\Controller;

/**
 * Class ConfigController
 * @package Kanboard\Plugin\WysiwygMDEditor\Controller
 * @author  imfx77
 */
class ConfigController extends \Kanboard\Controller\ConfigController
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

//     public function save()
//     {
//         $values =  $this->request->getValues();
//
//         if ($this->configModel->save($values)) {
//             $this->flash->success(t('Settings saved successfully.'));
//         } else {
//             $this->flash->failure(t('Unable to save your settings.'));
//         }
//
//         $this->response->redirect($this->helper->url->to('ConfigController', 'show', array('plugin' => 'Calendar')));
//     }
}
