<?php

namespace Kanboard\Plugin\WysiwygMDEditor\Controller;

use Kanboard\Controller\BaseController;
use Kanboard\Core\Plugin\Directory;

/**
 * Plugin WysiwygMDEditor
 *
 * Class WysiwygMDEditorController
 * @package  Kanboard\Controller
 * @author   imfx77
 */
class WysiwygMDEditorController extends \Kanboard\Controller\PluginController
{
    /**
     * Display the Settings Page
     * Use this function to create a page showing your template content.
     * This function must be checked with 'Views - Add Menu Item - Template Hook' in Plugin.php
     * This function must be checked with 'Extra Page - Routes' in Plugin.php
     * Use: $this->helper->layout->config for config settings menu sidebar
     * Use: $this->helper->layout->plugin for plugin menu sidebar
     *
     * @access public
     */
    public function show()
    {
        $this->response->html($this->helper->layout->config('wysiwygMDEditor:folder/filename', array(
            'title' => e('Settings %s WysiwygMDEditor', ' &#10562; '),
        )));
    }
}
