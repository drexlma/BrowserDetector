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
 *
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2015 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 *
 * @link      https://github.com/mimmi20/BrowserDetector
 */

namespace BrowserDetector\Detector\Device\Mobile\Huawei;

use BrowserDetector\Detector\Company;
use BrowserDetector\Detector\Device\AbstractDevice;
use BrowserDetector\Detector\Os\AndroidOs;
use UaDeviceType\Tablet;
use UaMatcher\Browser\BrowserInterface;
use UaMatcher\Device\DeviceHasSpecificPlatformInterface;
use UaMatcher\Device\DeviceHasWurflKeyInterface;
use UaMatcher\Engine\EngineInterface;
use UaMatcher\Os\OsInterface;
use UaResult\Version;

/**
 * @category  BrowserDetector
 *
 * @copyright 2012-2015 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class HuaweiMediaPad extends AbstractDevice implements DeviceHasWurflKeyInterface, DeviceHasSpecificPlatformInterface
{
    /**
     * the detected browser properties
     *
     * @var array
     */
    protected $properties = [
        // device
        'code_name'              => 'S7-301w',
        'model_extra_info'       => 'aka T-Mobile Springboard',
        'marketing_name'         => 'MediaPad',
        'has_qwerty_keyboard'    => true,
        'pointing_method'        => 'touchscreen',
        // product info
        'ununiqueness_handler'   => null,
        'uaprof'                 => 'http://wap.huawei.com/uaprof/HuaweiMediaPadWIFIOnl',
        'uaprof2'                => null,
        'uaprof3'                => null,
        'unique'                 => true,
        // display
        'physical_screen_width'  => 151,
        'physical_screen_height' => 95,
        'columns'                => 80,
        'rows'                   => 25,
        'max_image_width'        => 980,
        'max_image_height'       => 472,
        'resolution_width'       => 1280,
        'resolution_height'      => 800,
        'dual_orientation'       => true,
        'colors'                 => 4294967296,
        // sms
        'sms_enabled'            => false,
        // chips
        'nfc_support'            => false,
    ];

    /**
     * checks if this device is able to handle the useragent
     *
     * @return bool returns TRUE, if this device can handle the useragent
     */
    public function canHandle()
    {
        if (!$this->utils->checkIfContains(['HUAWEI MediaPad', 'MediaPad'])) {
            return false;
        }

        $otherMediaPads = [
            'mediapad 7 lite',
            'mediapad 10 link',
            'mediapad m1 8.0',
            'mediapad t1 8.0',
            'mediapad 7 classic',
        ];

        if ($this->utils->checkIfContains($otherMediaPads, true)) {
            return false;
        }

        return true;
    }

    /**
     * gets the weight of the handler, which is used for sorting
     *
     * @return int
     */
    public function getWeight()
    {
        return 3;
    }

    /**
     * returns the type of the current device
     *
     * @return \UaDeviceType\TypeInterface
     */
    public function getDeviceType()
    {
        return new Tablet();
    }

    /**
     * returns the type of the current device
     *
     * @return \UaMatcher\Company\CompanyInterface
     */
    public function getManufacturer()
    {
        return new Company(new Company\Huawei());
    }

    /**
     * returns the type of the current device
     *
     * @return \UaMatcher\Company\CompanyInterface
     */
    public function getBrand()
    {
        return new Company(new Company\Huawei());
    }

    /**
     * returns null, if the device does not have a specific Operating System, returns the OS Handler otherwise
     *
     * @return \BrowserDetector\Detector\Os\AndroidOs
     */
    public function detectOs()
    {
        return new AndroidOs($this->useragent, $this->logger);
    }

    /**
     * returns the WurflKey for the device
     *
     * @param \UaMatcher\Browser\BrowserInterface $browser
     * @param \UaMatcher\Engine\EngineInterface   $engine
     * @param \UaMatcher\Os\OsInterface           $os
     *
     * @return string|null
     */
    public function getWurflKey(BrowserInterface $browser, EngineInterface $engine, OsInterface $os)
    {
        $wurflKey = 'huawei_mediapad_ver1_suban40';

        $osVersion = $os->detectVersion()->getVersion(
            Version::MAJORMINOR
        );

        switch ($browser->getName()) {
            case 'Android Webkit':
                switch ((float) $osVersion) {
                    case 4.1:
                        $wurflKey = 'huawei_mediapad10_link_ver1_suban41';
                        break;
                    default:
                        // nothing to do here
                        break;
                }
                break;
            default:
                // nothing to do here
                break;
        }

        return $wurflKey;
    }
}
