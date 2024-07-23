<?php

/**
 * Class WysiwygMDEditorHelperTest
 * @package Kanboard\Plugin\WysiwygMDEditor\Test\Helper
 * @author  lastlink
 * @author  Im[F(x)]
 */

namespace Kanboard\Plugin\WysiwygMDEditor\Test\Helper;

require_once __DIR__ . '/../../../../tests/units/Base.php';

use Kanboard\Core\Plugin\Loader;
use Kanboard\Plugin\WysiwygMDEditor\Helper\WysiwygMDEditorHelper;

class WysiwygMDEditorHelperTest extends \Base
{
    /**
     * @var Plugin
     */
    protected $plugin;

    protected function setUp()
    {
        parent::setUp();

        $plugin = new Loader($this->container);
        $plugin->scan();
    }

    public function testBytes()
    {
        $helper = new WysiwygMDEditorHelper($this->container);

        $result = $helper->bytes(1024);

        $this->assertEquals('1k', $result);
    }
}
