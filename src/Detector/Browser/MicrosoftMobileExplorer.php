<?php
/**
 * Copyright (c) 2012-2015, Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
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
 * @copyright 2012-2015 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 * @link      https://github.com/mimmi20/BrowserDetector
 */

namespace BrowserDetector\Detector\Browser;

use BrowserDetector\Detector\Company;
use BrowserDetector\Detector\Engine\Trident;
use UaBrowserType\Browser;
use UaResult\Version;
use UaMatcher\Browser\BrowserHasRuntimeModificationsInterface;
use UaMatcher\Browser\BrowserHasSpecificEngineInterface;

/**
 * @category  BrowserDetector
 * @package   BrowserDetector
 * @copyright 2012-2015 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class MicrosoftMobileExplorer extends AbstractBrowser implements BrowserHasSpecificEngineInterface, BrowserHasRuntimeModificationsInterface
{
    /**
     * the detected browser properties
     *
     * @var array
     */
    protected $properties = array(
        // browser
        'mobile_browser_modus'         => null, // not in wurfl

        // product info
        'can_skip_aligned_link_row'    => true,
        'device_claims_web_support'    => true,
        // pdf
        'pdf_support'                  => true,
        // bugs
        'empty_option_value_support'   => true,
        'basic_authentication_support' => true,
        'post_method_support'          => true,
        // rss
        'rss_support'                  => true,
    );

    /**
     * Returns true if this handler can handle the given user agent
     *
     * @return bool
     */
    public function canHandle()
    {
        if (!$this->utils->checkIfContains(array('IEMobile', 'Windows CE', 'MSIE', 'WPDesktop', 'XBLWP7', 'ZuneWP7'))) {
            return false;
        }

        $isNotReallyAnIE = array(
            // using also the Trident rendering engine
            'Maxthon',
            'MxBrowser',
            'Galeon',
            'Lunascape',
            'Opera',
            'PaleMoon',
            'Flock',
            'MyIE',
            //others
            'Linux',
            'MSOffice',
            'Outlook',
            'BlackBerry',
            'WebTV',
            'ArgClrInt',
            'Avant',
            'Lightspeedsystems',
            'Daumoa',
            'Sogou',
            '360Spider',
            'HaosouSpider',
        );

        if ($this->utils->checkIfContains($isNotReallyAnIE)) {
            return false;
        }

        return true;
    }

    /**
     * gets the name of the browser
     *
     * @return string
     */
    public function getName()
    {
        return 'IEMobile';
    }

    /**
     * gets the maker of the browser
     *
     * @return \UaMatcher\Company\CompanyInterface
     */
    public function getManufacturer()
    {
        return new Company(new Company\Microsoft());
    }

    /**
     * returns the type of the current device
     *
     * @return \UaBrowserType\TypeInterface
     */
    public function getBrowserType()
    {
        return new Browser();
    }

    /**
     * detects the browser version from the given user agent
     *
     * @return \UaResult\Version
     */
    public function detectVersion()
    {
        $detector = new Version();
        $detector->setUserAgent($this->useragent);

        if ($this->utils->checkIfContains(array('XBLWP7', 'ZuneWP7'))) {
            return $detector->setVersion('9.0');
        }

        if ($this->utils->checkIfContains('WPDesktop') && !$this->utils->checkIfContains('rv:')) {
            return $detector->setVersion('10.0');
        }

        $searches = array('IEMobile', 'MSIE', 'rv\:');

        return $detector->detectVersion($searches);
    }

    /**
     * returns null, if the browser does not have a specific rendering engine
     * returns the Engine Handler otherwise
     *
     * @return \BrowserDetector\Detector\Engine\Trident
     */
    public function getEngine()
    {
        return new Trident($this->useragent, $this->logger);
    }

    /**
     * gets the weight of the handler, which is used for sorting
     *
     * @return integer
     */
    public function getWeight()
    {
        return 828786;
    }

    /**
     * detects properties who are depending on the device version or the user
     * agent
     *
     * @return \UaMatcher\Device\DeviceInterface
     */
    public function detectSpecialProperties()
    {
        if ($this->utils->checkIfContains('WPDesktop')) {
            $this->setCapability('mobile_browser_modus', 'Desktop Mode');
        }

        return $this;
    }
}
