<?php
/**
 * Copyright (c) 2012-2014, Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @category  BrowserDetector
 * @package   BrowserDetector
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2014 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 * @link      https://github.com/mimmi20/BrowserDetector
 */

namespace BrowserDetector\Detector\Os;

use BrowserDetector\Detector\Browser\Mobile\MicrosoftInternetExplorer;
use BrowserDetector\Detector\Browser\Mobile\MicrosoftMobileExplorer;
use BrowserDetector\Detector\Browser\Mobile\Opera;
use BrowserDetector\Detector\Browser\Mobile\OperaMobile;
use BrowserDetector\Detector\Browser\UnknownBrowser;
use BrowserDetector\Detector\BrowserHandler;
use BrowserDetector\Detector\Chain;
use BrowserDetector\Detector\Company;
use BrowserDetector\Detector\DeviceHandler;
use BrowserDetector\Detector\EngineHandler;
use BrowserDetector\Detector\MatcherInterface\MatcherInterface;
use BrowserDetector\Detector\MatcherInterface\OsInterface;
use BrowserDetector\Detector\OsHandler;
use BrowserDetector\Detector\Version;
use BrowserDetector\Helper\MobileDevice;
use BrowserDetector\Helper\Windows as WindowsHelper;

/**
 * MSIEAgentHandler
 *
 *
 * @category  BrowserDetector
 * @package   BrowserDetector
 * @copyright 2012-2014 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class WindowsPhoneOs
    extends OsHandler
    implements OsInterface
{
    /**
     * Returns true if this handler can handle the given $useragent
     *
     * @return bool
     */
    public function canHandle()
    {
        $mobileDeviceHelper = new MobileDevice();
        $mobileDeviceHelper->setUserAgent($this->_useragent);

        $windowsHelper = new WindowsHelper();
        $windowsHelper->setUserAgent($this->_useragent);

        if (!$windowsHelper->isMobileWindows()
            && !($windowsHelper->isWindows() && $mobileDeviceHelper->isMobileBrowser())
        ) {
            return false;
        }

        if (!$this->utils->checkIfContains(array('Windows Phone OS', 'XBLWP7', 'ZuneWP7', 'Windows Phone'))) {
            return false;
        }

        $doMatch = preg_match('/Windows Phone ([\d\.]+)/', $this->_useragent, $matches);
        if ($doMatch && $matches[1] < 7) {
            return false;
        }

        return true;
    }

    /**
     * returns the name of the operating system/platform
     *
     * @return string
     */
    public function getName()
    {
        return 'Windows Phone OS';
    }

    /**
     * returns the version of the operating system/platform
     *
     * @return \BrowserDetector\Detector\Version
     */
    public function detectVersion()
    {
        $detector = new Version();
        $detector->setUserAgent($this->_useragent);

        if ($this->utils->checkIfContains(array('XBLWP7', 'ZuneWP7'))) {
            return $detector->setVersion('7.5');
        }

        if ($this->utils->checkIfContains(array('WPDesktop'))) {
            return $detector->setVersion('8.0');
        }

        $searches = array('Windows Phone OS', 'Windows Phone');

        return $detector->detectVersion($searches);
    }

    /**
     * returns the version of the operating system/platform
     *
     * @return \BrowserDetector\Detector\Company\CompanyInterface
     */
    public function getManufacturer()
    {
        return new Company\Microsoft();
    }

    /**
     * gets the weight of the handler, which is used for sorting
     *
     * @return integer
     */
    public function getWeight()
    {
        return 805140;
    }

    /**
     * returns null, if the device does not have a specific Browser
     * returns the Browser Handler otherwise
     *
     * @return null|\BrowserDetector\Detector\OsHandler
     */
    public function detectBrowser()
    {
        $browsers = array(
            new MicrosoftInternetExplorer(),
            new MicrosoftMobileExplorer(),
            new OperaMobile(),
            new Opera()
        );

        $chain = new Chain();
        $chain->setUserAgent($this->_useragent);
        $chain->setHandlers($browsers);
        $chain->setDefaultHandler(new UnknownBrowser());

        return $chain->detect();
    }

    /**
     * detects properties who are depending on the browser, the rendering engine
     * or the operating system
     *
     * @param \BrowserDetector\Detector\BrowserHandler $browser
     * @param \BrowserDetector\Detector\EngineHandler  $engine
     * @param \BrowserDetector\Detector\DeviceHandler  $device
     *
     * @return DeviceHandler
     */
    public function detectDependProperties(
        BrowserHandler $browser, EngineHandler $engine, DeviceHandler $device
    ) {
        parent::detectDependProperties($browser, $engine, $device);

        if ($this->utils->checkIfContains(array('XBLWP7', 'ZuneWP7'))) {
            $browser->setCapability('mobile_browser_modus', 'Desktop Mode');
        }

        $browserVersion = (float)$browser->detectVersion()->getVersion(
            Version::MAJORMINOR
        );

        if ($browserVersion < 10.0) {
            $engine->setCapability('is_sencha_touch_ok', false);
        }

        return $this;
    }
}