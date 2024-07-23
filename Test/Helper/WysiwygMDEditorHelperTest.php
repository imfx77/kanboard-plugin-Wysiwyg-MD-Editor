<?php

require_once 'tests/units/Base.php';

use Kanboard\Core\Plugin\Loader;
use Kanboard\Plugin\WysiwygMDEditor\Helper\WysiwygMDEditorHelper;

class WysiwygMDEditorHelperTest extends Base
{
    /**
     * @var Plugin
     */
    protected $plugin;

    protected function setUp(): void
    {
        parent::setUp();

        $plugin = new Loader($this->container);
        $plugin->scan();
    }

    public function testBytes(){
        $helper = new WysiwygMDEditorHelper($this->container);

        $result = $helper->bytes(1024);

        $this->assertEquals('1.00 KB', $result);
    }
}