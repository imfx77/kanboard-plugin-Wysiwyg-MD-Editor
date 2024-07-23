<?php

/**
 * Class PluginTest
 * @package Kanboard\Plugin\WysiwygMDEditor\Test
 * @author  lastlink
 * @author  Im[F(x)]
 */

namespace Kanboard\Plugin\WysiwygMDEditor\Test;

//require_once 'tests/units/Base.php';
use Kanboard\tests\units\Base;
use Kanboard\Plugin\WysiwygMDEditor\Plugin;

class PluginTest extends Base
{
    public function testPlugin()
    {
        $plugin = new Plugin($this->container);
        $this->assertSame(null, $plugin->initialize());
        $this->assertSame(null, $plugin->onStartup());
        $this->assertNotEmpty($plugin->getPluginName());
        $this->assertNotEmpty($plugin->getPluginDescription());
        $this->assertNotEmpty($plugin->getPluginAuthor());
        $this->assertNotEmpty($plugin->getPluginVersion());
        $this->assertNotEmpty($plugin->getPluginHomepage());
    }
}
