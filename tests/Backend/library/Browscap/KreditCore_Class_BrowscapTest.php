<?php
//require_once __DIR__ . '/../../../../ControllerTestCase.php';

/** @see PHPUnit_Framework_TestCase */
require_once 'PHPUnit/Framework/TestCase.php';

require_once __DIR__ . '/../../../../library/Browscap/Browscap.php';
require_once LIB_PATH . '/Zend/Db/Db.php';

/**
 * Test class for KreditCore_Class_Browscap.
 * Generated by PHPUnit on 2010-09-05 at 22:13:26.
 */
class KreditCore_Class_BrowscapTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var KreditCore_Class_Browscap
     */
    private $object = null;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        parent::setUp();

        //$config = new Zend_Config_Ini(APPLICATION_PATH . DS . 'configs'
        //        . DS . 'application.ini', APPLICATION_ENV);
        //\Zend\Registry::set('_config', $config);

        $db = \Zend\Db\Db::factory(
            'PdoMysql',
            array(
                'type' => 'PdoMysql',
                'dbname' => 'browscap',
                'username' => 'root',
                'password' => 'mimmi',
                'host' => 'localhost',
                'charset' => 'utf8'
            )
        );

        \Zend\Db\Table\AbstractTable::setDefaultAdapter($db);

        $logger = new \Zend\Log\Logger();
        $dumpWriter = new \Zend\Log\Writer\Stream('php://output');
        $logger->addWriter($dumpWriter);
        \Zend\Registry::set('log', $logger);

        $home = 'http://slave29.kreditcalc.geld.de/';
        \Zend\Registry::set('_home', $home);
        \Zend\Registry::set('_imageUrlRoot', $home . 'images/');
        \Zend\Registry::set('_urlDir', $home);
        \Zend\Registry::set('_urlDirAntrag', $home);
        \Zend\Registry::set('_urlDirInfo', $home);
        \Zend\Registry::set('_useAbsolteUrl', false);

        $this->object = new \Browscap\Browscap();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        unset($this->object);

        parent::tearDown();
    }

    /**
     * @dataProvider providerGetBrowser
     */
    public function testGetBrowser($agent, $browser, $version, $platform)
    {
        $result = $this->object->getBrowser($agent, true);

        $this->assertInstanceOf('StdClass', $result);

        //$this->assertSame($agent, $result->Browser);
        $this->assertSame($browser, $result->Browser);
        $this->assertSame($version, $result->Version);
        $this->assertSame($platform, $result->Platform);
    }

    public function providerGetBrowser()
    {
        $agent = 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.3) Gecko/' . time() . ' Firefox/3.6.3 FirePHP/0.4';

        return array(
            array($agent, 'Firefox', '3.6', 'Win7'),
            array('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Iron/10.0.650.0 Chrome/10.0.650.0 Safari/534.16', 'Iron', '10.0', 'WinXP'),
            array('Mozilla/5.0 (Windows NT 5.1; rv:5.0) Gecko/20100101 Firefox/5.0 FirePHP/0.5', 'Firefox', '5.0', 'WinXP'),
            array('Mozilla/5.0 (Windows NT 5.1; rv:5.0) Gecko/20100101 Firefox/5.0', 'Firefox', '5.0', 'WinXP'),
            array('Mozilla/5.0 (Windows NT 5.1; rv:2.0.1) Gecko/20100101 Firefox/4.0.1 FirePHP/0.5', 'Firefox', '4.0', 'WinXP'),
            array('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET4.0C; .NET4.0E; .NET CLR 2.0.50727)', 'Internet Explorer', '7.0', 'WinXP'),
            array('Opera/9.52 (Macintosh; Intel Mac OS X; U; en)', 'Opera', '9.50', 'MacOSX'),
            array('Mozilla/5.0 (Windows NT 5.1; rv:5.0) Gecko/20100101 Firefox/5.0', 'Firefox', '5.0', 'WinXP'),
            array('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/534.30 (KHTML, like Gecko) Chrome/12.0.742.122 Safari/534.30', 'Chrome', '12.0', 'WinXP'),
            array('Jakarta Commons-HttpClient/3.0.1', 'Default Browser', '0', 'unknown'),
            array('check_http/v1.4.15 (nagios-plugins 1.4.15)', 'Default Browser', '0', 'unknown'),
            array('www.kredit.de', 'www.kredit.de', '0', 'Unister'),
            array('Opera/9.80 (Windows NT 6.1; U; en) Presto/2.9.168 Version/11.50', 'Opera', '11.50', 'Win7'),
            array('Mozilla/5.0 (Windows NT 6.0; rv:6.0) Gecko/20100101 Firefox/6.0', 'Firefox', '6.0', 'WinVista'),
            
            array('Mozilla/5.0 (iPad; U; CPU OS 4_2_1 like Mac OS X; de-de) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148 Safari/6533.18.5', 'iPad', '4.2', 'iOS'),
            array('Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)', 'Baidu', '0', 'unknown'),
            array('Mozilla/5.0 (iPhone; U; CPU iOS 4_3_3 like Mac OS X; de-de) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5', 'iPhone', '4.3.3', 'iOS'),
            array('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0)', 'Internet Explorer', '9.0', 'Win7'),
            
            array('Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.15) Gecko/20101028 Iceweasel/3.5.15 unister-test-acceptance', 'Unister-Testing', '0', 'Unister'),
            
            array('Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; HTC Dream Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', 'Android Webkit', '2.1', 'Android'),
            array('Mozilla/5.0 (Linux; U; Android 2.2; de-de; HTC Desire 2.33.161.2 Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', 'Android Webkit', '2.2', 'Android'),
            array('SonyEricssonW910i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1', 'Access Netfront', '3.4', 'JAVA'),
        );
    }
}