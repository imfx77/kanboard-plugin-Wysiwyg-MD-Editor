<?php

namespace Kanboard\Plugin\WysiwygMDEditor\Helper;

use Kanboard\Core\Base;

/**
 * Plugin PluginNameExampleStudlyCaps
 * Class WysiwygMDEditorHelper
 *
 * @package  Plugin\WysiwygMDEditor\Helper
 * @author   imfx77
 */
class WysiwygMDEditorHelper extends Base
{
    /**
     * Get SVG Icons for Inline Markup and CSS Styling (Embed SVG Fly Method)
     *
     * Include filename as class inside SVG file
     * Set 'color' as 'currentColor' to use CSS or define a color
     * Style using normal CSS
     * @uses    $this->helper->supportHelper->embedSVGIcon('icon-filename-without-extension')
     * @var     $svgFilename
     * @return  svg
     * @author  Erik Moberg https://www.erikmoberg.net/article/embed-svg-icons-in-html-with-php
     * @author  aljawaid
     */
    public function embedSVGIcon($icon_filename)
    {
        if ($this->router->getPlugin()) {
            // For plugin templates
            return file_get_contents('plugins/' . $this->helper->app->getPluginName() . '/Assets/icons/' . $icon_filename . '.svg');
        } else {
            // For core templates
            return file_get_contents('plugins/WysiwygMDEditor/Assets/icons/' . $icon_filename . '.svg');
        }
    }

    /**
     * Summary
     *
     * @return   void
     * @see      core-template.php
     * @author   imfx77
     */
    public function testFunction()
    {
        return true;
    }
}
