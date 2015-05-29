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


use BrowserDetector\Detector\Type\Browser as BrowserType;
use BrowserDetector\Detector\Version;

/**
 * @category  BrowserDetector
 * @package   BrowserDetector
 * @copyright 2012-2014 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class MicrosoftInternetExplorer
    extends BrowserHandler
{
    private $patterns = array(
        '/Mozilla\/5\.0.*\(.*\) AppleWebKit\/.*\(KHTML, like Gecko\) Chrome\/.*Edge\/12\.0.*/' => '12.0',
        '/Mozilla\/5\.0.*\(.*Trident\/7\.0.*rv\:11\.0.*\) like Gecko.*/'                       => '11.0',
        '/Mozilla\/5\.0.*\(.*MSIE 10\.0.*/'                                                    => '10.0',
        '/Mozilla\/(4|5)\.0.*\(.*MSIE 9\.0.*/'                                                 => '9.0',
        '/Mozilla\/(4|5)\.0 \(.*MSIE 8\.0.*/'                                                  => '8.0',
        '/Mozilla\/(4|5)\.0 \(.*MSIE 7\.0.*/'                                                  => '7.0',
        '/Mozilla\/(4|5)\.0 \(.*MSIE 6\.0.*/'                                                  => '6.0',
        '/Mozilla\/(4|5)\.0 \(.*MSIE 5\.5.*/'                                                  => '5.5',
        '/Mozilla\/(4|5)\.0 \(.*MSIE 5\.23.*/'                                                 => '5.23',
        '/Mozilla\/(4|5)\.0 \(.*MSIE 5\.22.*/'                                                 => '5.22',
        '/Mozilla\/(4|5)\.0 \(.*MSIE 5\.17.*/'                                                 => '5.17',
        '/Mozilla\/(4|5)\.0 \(.*MSIE 5\.16.*/'                                                 => '5.16',
        '/Mozilla\/(4|5)\.0 \(.*MSIE 5\.01.*/'                                                 => '5.01',
        '/Mozilla\/(4|5)\.0 \(.*MSIE 5\.0.*/'                                                  => '5.0',
        '/Mozilla\/(4|5)\.0 \(.*MSIE 4\.01.*/'                                                 => '4.01',
        '/Mozilla\/(4|5)\.0 \(.*MSIE 4\.0.*/'                                                  => '4.0',
        '/Mozilla\/.*\(.*MSIE 3\..*/'                                                          => '3.0',
        '/Mozilla\/.*\(.*MSIE 2\..*/'                                                          => '2.0',
        '/Mozilla\/.*\(.*MSIE 1\..*/'                                                          => '1.0'
    );

    /**
     * the detected browser properties
     *
     * @var array
     */
    protected $properties = array(
        // browser
        'wurflKey'                     => 'msie', // not in wurfl
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
        if (!$this->utils->checkIfContains(array('Mozilla/', 'MSIE', 'Trident', 'Edge'))) {
            return false;
        }

        if ($this->utils->checkIfStartsWith('IE')) {
            return false;
        }

        $isNotReallyAnIE = array(
            'presto',
            // using also the Trident rendering engine
            'crazy browser',
            'flock',
            'galeon',
            'lunascape',
            'maxthon',
            'mxbrowser',
            'myie',
            'opera',
            'palemoon',
            'avant',
            // other Browsers
            'linux',
            'msoffice',
            'outlook',
            'iemobile',
            'blackberry',
            'webtv',
            'argclrint',
            'slimbrowser',
            // mobile IE
            'xblwp7',
            'zunewp7',
            'wpdesktop',
            'htc_hd2',
            'gomezagent',
            'deepnet explorer',
            // Fakes / Bots
            'msiecrawler',
            'mac; mac os ',
            'bingpreview',
            'crystalsemanticsbot',
            '360spider',
        );

        if ($this->utils->checkIfContains($isNotReallyAnIE, true)
            && !$this->utils->checkIfContains(
                array('Bitte Mozilla Firefox verwenden', 'chromeframe')
            )
        ) {
            return false;
        }

        if ($this->utils->checkIfContains('Gecko')
            && !$this->utils->checkIfContains(array('like Gecko', 'rv:11.0'))
        ) {
            return false;
        }

        foreach (array_keys($this->patterns) as $pattern) {
            if (preg_match($pattern, $this->useragent)) {
                return true;
            }
        }

        return false;
    }

    /**
     * gets the name of the browser
     *
     * @return string
     */
    public function getName()
    {
        return 'Internet Explorer';
    }

    /**
     * gets the maker of the browser
     *
     * @return \BrowserDetector\Detector\Company\CompanyInterface
     */
    public function getManufacturer()
    {
        return new Company\Microsoft();
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
        $detector->setMode(Version::COMPLETE | Version::IGNORE_MICRO);

        $doMatch = preg_match('/MSIE ([\d\.]+)/', $this->useragent, $matches);

        if ($doMatch) {
            return $detector->setVersion($matches[1]);
        }

        foreach ($this->patterns as $pattern => $version) {
            if (preg_match($pattern, $this->useragent)) {
                return $detector->setVersion($version);
            }
        }

        return $detector->setVersion('');
    }

    /**
     * gets the weight of the handler, which is used for sorting
     *
     * @return integer
     */
    public function getWeight()
    {
        return 369968046;
    }
}
