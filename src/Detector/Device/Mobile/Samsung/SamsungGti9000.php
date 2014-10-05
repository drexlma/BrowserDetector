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

namespace BrowserDetector\Detector\Device\Mobile\Samsung;

use BrowserDetector\Detector\BrowserHandler;
use BrowserDetector\Detector\Company;
use BrowserDetector\Detector\DeviceHandler;
use BrowserDetector\Detector\EngineHandler;
use BrowserDetector\Detector\MatcherInterface\MatcherInterface;
use BrowserDetector\Detector\MatcherInterface\DeviceInterface;
use BrowserDetector\Detector\Os\AndroidOs;
use BrowserDetector\Detector\OsHandler;
use BrowserDetector\Detector\Type\Device as DeviceType;
use BrowserDetector\Detector\Version;

/**
 * @category  BrowserDetector
 * @package   BrowserDetector
 * @copyright 2012-2014 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class SamsungGti9000
    extends DeviceHandler
    implements DeviceInterface
{
    /**
     * the detected browser properties
     *
     * @var array
     */
    protected $properties = array(
        'wurflKey'                => 'samsung_gt_i9000_ver1', // not in wurfl

        // device
        'model_name'              => 'GT-I9000',
        'model_extra_info'        => null,
        'marketing_name'          => 'Galaxy S',
        'has_qwerty_keyboard'     => false,
        'pointing_method'         => 'touchscreen',

        // product info
        'ununiqueness_handler'    => null,
        'uaprof'                  => 'http://wap.samsungmobile.com/uaprof/GT-i9000.xml',
        'uaprof2'                 => 'http://wap.samsungmobile.com/uaprof/GT-I9000.xml',
        'uaprof3'                 => null,
        'unique'                  => true,

        // display
        'physical_screen_width'   => 53,
        'physical_screen_height'  => 88,
        'columns'                 => 15,
        'rows'                    => 12,
        'max_image_width'         => 320,
        'max_image_height'        => 452,
        'resolution_width'        => 480,
        'resolution_height'       => 800,
        'dual_orientation'        => true,
        'colors'                  => 16777216,

        // sms
        'sms_enabled'             => true,

        // chips
        'nfc_support'             => false,
    );

    /**
     * checks if this device is able to handle the useragent
     *
     * @return boolean returns TRUE, if this device can handle the useragent
     */
    public function canHandle()
    {
        if (!$this->utils->checkIfContains(array('GT-I9000', 'GT-i9000', 'SGH-T959V'))) {
            return false;
        }

        return true;
    }

    /**
     * gets the weight of the handler, which is used for sorting
     *
     * @return integer
     */
    public function getWeight()
    {
        return 558995;
    }

    /**
     * returns the type of the current device
     *
     * @return \BrowserDetector\Detector\Type\Device\TypeInterface
     */
    public function getDeviceType()
    {
        return new DeviceType\MobilePhone();
    }

    /**
     * returns the type of the current device
     *
     * @return \BrowserDetector\Detector\Company\CompanyInterface
     */
    public function getManufacturer()
    {
        return new Company\Samsung();
    }

    /**
     * returns the type of the current device
     *
     * @return \BrowserDetector\Detector\Company\CompanyInterface
     */
    public function getBrand()
    {
        return new Company\Samsung();
    }

    /**
     * returns null, if the device does not have a specific Operating System, returns the OS Handler otherwise
     *
     * @return \BrowserDetector\Detector\Os\AndroidOs
     */
    public function detectOs()
    {
        $handler = new AndroidOs();
        $handler->setUseragent($this->_useragent);

        return $handler;
    }

    /**
     * detects properties who are depending on the browser, the rendering engine
     * or the operating system
     *
     * @param \BrowserDetector\Detector\BrowserHandler $browser
     * @param \BrowserDetector\Detector\EngineHandler  $engine
     * @param \BrowserDetector\Detector\OsHandler      $os
     *
     * @return DeviceHandler
     */
    public function detectDependProperties(
        BrowserHandler $browser, EngineHandler $engine, OsHandler $os
    ) {
        parent::detectDependProperties($browser, $engine, $os);

        $engine->setCapability('xhtml_can_embed_video', 'play_and_stop');
        $engine->setCapability('supports_java_applets', false);

        $osVersion = $os->detectVersion()->getVersion(
            Version::MAJORMINOR
        );

        switch ($browser->getName()) {
        case 'Android Webkit':
            switch ((float)$osVersion) {
            case 2.1:
                $engineVersion = $engine->detectVersion()->getVersion(Version::MAJORMINOR);

                if ('530.17' == $engineVersion) {
                    $this->setCapability('wurflKey', 'samsung_gt_i9000_ver1_sub53017');
                }
                break;
            case 2.2:
                $this->setCapability('wurflKey', 'samsung_gt_i9000_ver1_suban221');
                break;
            case 2.3:
                $this->setCapability('wurflKey', 'samsung_gt_i9000_ver1_suban233bis');
                break;
            case 4.0:
                $this->setCapability('wurflKey', 'samsung_gt_i9100_ver1_suban40');
                break;
            case 3.1:
            case 3.2:
            case 4.1:
            case 4.2:
            default:
                // nothing to do here
                break;
            }
            break;
        case 'Chrome':
            $engine->setCapability('is_sencha_touch_ok', false);

            switch ((float)$osVersion) {
            case 4.0:
                $this->setCapability('wurflKey', 'samsung_gt_i9100_ver1_suban40chrome');
                break;
            case 2.1:
            case 2.2:
            case 2.3:
            case 3.1:
            case 3.2:
            case 4.1:
            case 4.2:
            default:
                // nothing to do here
                break;
            }
            break;
        default:
            // nothing to do here
            break;
        }

        return $this;
    }
}