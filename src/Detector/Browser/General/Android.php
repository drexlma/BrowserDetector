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

namespace BrowserDetector\Detector\Browser\General;

use BrowserDetector\Detector\BrowserHandler;
use BrowserDetector\Detector\Company;
use BrowserDetector\Detector\Engine\Webkit;
use BrowserDetector\Detector\Type\Browser as BrowserType;
use BrowserDetector\Detector\Version;
use BrowserDetector\Helper\Safari as SafariHelper;

/**
 * @category  BrowserDetector
 * @package   BrowserDetector
 * @copyright 2012-2014 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class Android
    extends BrowserHandler
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
        'rss_support'                  => false,
    );

    /**
     * Returns true if this handler can handle the given user agent
     *
     * @return bool
     */
    public function canHandle()
    {
        $safariHelper = new SafariHelper();
        $safariHelper->setUserAgent($this->useragent);

        if (!$this->utils->checkIfContains(array('Android', 'JUC (Linux; U;'))
            && !$safariHelper->isMobileAsSafari()
        ) {
            return false;
        }

        $noAndroid = array(
            'AndroidDownloadManager',
            'BlackBerry',
            'Blackberry',
            'BB10',
            'Browser/Phantom',
            'CalDAV',
            'Chrome',
            'Dalvik',
            'Dolfin',
            'Dolphin',
            'Fennec',
            'Firefox',
            'FlyFlow',
            'iPhone',
            'Maxthon',
            'MQQBrowser',
            'NetFrontLifeBrowser',
            'NokiaBrowser',
            'Opera',
            'RIM Tablet',
            'Series60',
            'Silk',
            'UCBrowser',
            'WeTab-Browser',
            'wOSBrowser',
            'YahooMobileMessenger',
            'i9988_custom',
            'i9999_custom'
        );

        if ($this->utils->checkIfContains($noAndroid)) {
            return false;
        }

        if ($this->utils->checkIfContains('iPad') && !$this->utils->checkIfContains('TechniPad')) {
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
        return 'Android Webkit';
    }

    /**
     * gets the maker of the browser
     *
     * @return \BrowserDetector\Detector\Company\CompanyInterface
     */
    public function getManufacturer()
    {
        return new Company\Google();
    }

    /**
     * returns the type of the current device
     *
     * @return \BrowserDetector\Detector\Type\Device\TypeInterface
     */
    public function getBrowserType()
    {
        return new BrowserType\Browser();
    }

    /**
     * detects the browser version from the given user agent
     *
     * @return \BrowserDetector\Detector\Version
     */
    public function detectVersion()
    {
        $detector = new Version();
        $detector->setUserAgent($this->useragent);
        $detector->setMode(Version::COMPLETE | Version::IGNORE_MICRO_IF_EMPTY);

        $safariHelper = new SafariHelper();
        $safariHelper->setUserAgent($this->useragent);

        $doMatch = preg_match(
            '/Version\/([\d\.]+)/', $this->useragent, $matches
        );

        if ($doMatch) {
            return $detector->setVersion($safariHelper->mapSafariVersions($matches[1]));
        }

        if ($this->utils->checkIfContains('android eclair', true)) {
            return $detector->setVersion('2.1');
        }

        if ($this->utils->checkIfContains('gingerbread', true)) {
            return $detector->setVersion('2.3');
        }

        $doMatch = preg_match(
            '/Safari\/([\d\.]+)/', $this->useragent, $matches
        );

        if ($doMatch) {
            return $detector->setVersion($safariHelper->mapSafariVersions($matches[1]));
        }

        $doMatch = preg_match(
            '/AppleWebKit\/([\d\.]+)/', $this->useragent, $matches
        );

        if ($doMatch) {
            return $detector->setVersion($safariHelper->mapSafariVersions($matches[1]));
        }

        $doMatch = preg_match(
            '/MobileSafari\/([\d\.]+)/', $this->useragent, $matches
        );

        if ($doMatch) {
            return $detector->setVersion($safariHelper->mapSafariVersions($matches[1]));
        }

        $doMatch = preg_match(
            '/Android\/([\d\.]+)/', $this->useragent, $matches
        );

        if ($doMatch) {
            return $detector->setVersion($matches[1]);
        }

        $searches = array('Version', 'Safari', 'JUC \(Linux\; U\;');

        return $detector->detectVersion($searches);
    }

    /**
     * gets the weight of the handler, which is used for sorting
     *
     * @return integer
     */
    public function getWeight()
    {
        return 38951839;
    }

    /**
     * returns null, if the browser does not have a specific rendering engine
     * returns the Engine Handler otherwise
     *
     * @return \BrowserDetector\Detector\Engine\Webkit
     */
    public function detectEngine()
    {
        $handler = new Webkit();
        $handler->setUseragent($this->useragent);

        return $handler;
    }

    /**
     * detects properties who are depending on the browser, the rendering engine
     * or the operating system
     *
     * @param \BrowserDetector\Detector\EngineHandler $engine
     * @param \BrowserDetector\Detector\OsHandler     $os
     * @param \BrowserDetector\Detector\DeviceHandler $device
     *
     * @return \BrowserDetector\Detector\Browser\General\Android
     */
    public function detectDependProperties(
        EngineHandler $engine, OsHandler $os, DeviceHandler $device
    ) {
        parent::detectDependProperties($engine, $os, $device);

        $engine->setCapability('html_wi_imode_compact_generic', false);
        $engine->setCapability('xhtml_avoid_accesskeys', true);
        $engine->setCapability('xhtml_supports_forms_in_table', true);
        $engine->setCapability('xhtml_file_upload', 'supported');
        $engine->setCapability('xhtml_readable_background_color1', '#FFFFFF');
        $engine->setCapability('xhtml_allows_disabled_form_elements', true);
        $engine->setCapability('xhtml_supports_invisible_text', false);
        $engine->setCapability('break_list_of_links_with_br_element_recommended', true);

        $osVersion = $os->detectVersion()->getVersion(
            Version::MAJORMINOR
        );

        if ($osVersion <= 2.3) {
            $engine->setCapability('xhtml_can_embed_video', 'play_and_stop');
            $engine->setCapability('bmp', true);
        }

        $browserVersion = $this->detectVersion()->getVersion(
            Version::MAJORMINOR
        );

        if ($browserVersion <= 2.1) {
            $engine->setCapability('jqm_grade', 'C');
        }

        return $this;
    }
}

