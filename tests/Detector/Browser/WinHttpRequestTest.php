<?php
namespace BrowserDetectorTest\Detector\Browser;

use BrowserDetector\Detector\Browser\WinHttpRequest;

/**
 * Test class for \BrowserDetector\Detector\Browser\WinHttpRequest
 */
class WinHttpRequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \BrowserDetector\Detector\Browser\WinHttpRequest
     */
    private $object = null;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->object = new WinHttpRequest();
    }

    /**
     * @dataProvider providerCanHandlePositive
     * @param string $agent
     */
    public function testCanHandlePositive($agent)
    {
        $this->object->setUserAgent($agent);

        self::assertTrue($this->object->canHandle());
    }

    public function providerCanHandlePositive()
    {
        return array(
            array('Mozilla/4.0 (compatible; Win32; WinHttp.WinHttpRequest.5)'),
        );
    }

    /**
     * @dataProvider providerCanHandleNegative
     * @param string $agent
     */
    public function testCanHandleNegative($agent)
    {
        $this->object->setUserAgent($agent);

        self::assertFalse($this->object->canHandle());
    }

    public function providerCanHandleNegative()
    {
        return array(
            array('Mozilla/5.0 (iPad; CPU OS 5_1_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Mobile'),
            array('Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/538.1 (KHTML, like Gecko) crawler Safari/538.1'),
            array('Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_1 like Mac OS X; en-us) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobile/8B117 Safari/6531.22.7 (compatible; Mediapartners-Google/2.1; +http://www.google.com/bot.html)'),
        );
    }

    /**
     * tests that a integer is returned
     */
    public function testGetWeight()
    {
        self::assertInternalType('integer', $this->object->getWeight());
    }
}