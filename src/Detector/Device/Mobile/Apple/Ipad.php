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

namespace BrowserDetector\Detector\Device\Mobile\Apple;

use BrowserDetector\Detector\Company;
use BrowserDetector\Detector\Device\AbstractDevice;
use UaDeviceType\Tablet;
use UaMatcher\Browser\BrowserInterface;
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
class Ipad extends AbstractDevice implements DeviceHasWurflKeyInterface
{
    /**
     * the detected browser properties
     *
     * @var array
     */
    protected $properties = [
        // device
        'code_name'              => 'iPad',
        'model_extra_info'       => null,
        'marketing_name'         => 'iPad',
        'has_qwerty_keyboard'    => true,
        'pointing_method'        => 'touchscreen',
        // product info
        'ununiqueness_handler'   => null,
        'uaprof'                 => null,
        'uaprof2'                => null,
        'uaprof3'                => null,
        'unique'                 => true,
        // display
        'physical_screen_width'  => 148,
        'physical_screen_height' => 198,
        'columns'                => 100,
        'rows'                   => 100,
        'max_image_width'        => 768,
        'max_image_height'       => 1024,
        'resolution_width'       => 1024,
        'resolution_height'      => 768,
        'dual_orientation'       => true,
        'colors'                 => 65536,
        // sms
        'sms_enabled'            => true,
        // chips
        'nfc_support'            => false, // wurflkey: apple_ipad_ver1_sub51
    ];

    /**
     * checks if this device is able to handle the useragent
     *
     * @return bool returns TRUE, if this device can handle the useragent
     */
    public function canHandle()
    {
        if (!$this->utils->checkIfContains('ipad', true)) {
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
        return 16905153;
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
        return new Company(new Company\Apple());
    }

    /**
     * returns the type of the current device
     *
     * @return \UaMatcher\Company\CompanyInterface
     */
    public function getBrand()
    {
        return new Company(new Company\Apple());
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
        $wurflKey = 'apple_ipad_ver1';

        $osVersion = $os->detectVersion()->getVersion(
            Version::MAJORMINOR
        );

        $this->setCapability('model_extra_info', $osVersion);

        if (3.2 === (float) $osVersion) {
            $wurflKey = 'apple_ipad_ver1_subua32';
        }

        if (5.0 === (float) $osVersion) {
            $wurflKey = 'apple_ipad_ver1_sub5';
        }

        if (5.1 === (float) $osVersion) {
            $wurflKey = 'apple_ipad_ver1_sub51';
        }

        if (6.0 <= (float) $osVersion) {
            $wurflKey = 'apple_ipad_ver1_sub6';
        }

        if (6.1 <= (float) $osVersion) {
            $wurflKey = 'apple_ipad_ver1_sub61';
        }

        if (7.0 <= (float) $osVersion) {
            $wurflKey = 'apple_ipad_ver1_sub7';
        }

        if (7.1 <= (float) $osVersion) {
            $wurflKey = 'apple_ipad_ver1_sub71';
        }

        if (8.0 <= (float) $osVersion) {
            $wurflKey = 'apple_ipad_ver1_sub8';
        }

        if (8.1 <= (float) $osVersion) {
            $wurflKey = 'apple_ipad_ver1_sub8_1';
        }

        $osVersion = $os->detectVersion()->getVersion();

        switch ($osVersion) {
            case '3.1.3':
                // $wurflKey = 'apple_iphone_ver3_1_3_subenus';
                break;
            case '3.2.2':
                $wurflKey = 'apple_ipad_ver1_sub321';
                break;
            case '4.2.1':
                $wurflKey = 'apple_ipad_ver1_sub421';
                break;
            case '4.3.0':
                // $wurflKey = 'apple_iphone_ver4_3';
                break;
            case '4.3.1':
                // $wurflKey = 'apple_iphone_ver4_3_1';
                break;
            case '4.3.2':
                $wurflKey = 'apple_ipad_ver1_sub432';
                break;
            case '4.3.3':
                $wurflKey = 'apple_ipad_ver1_sub432';
                break;
            case '4.3.4':
            case '4.3.5':
                $wurflKey = 'apple_ipad_ver1_sub435';
                break;
            default:
                // nothing to do here
                break;
        }

        return $wurflKey;
    }
}
