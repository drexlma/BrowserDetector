<?php
/**
 * Copyright (c) 2012-2016, Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
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
 * @copyright 2012-2016 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 *
 * @link      https://github.com/mimmi20/BrowserDetector
 */

namespace BrowserDetector\Detector\Device\Mobile;

use BrowserDetector\Detector\Chain\Chain;
use BrowserDetector\Detector\Company;
use BrowserDetector\Detector\Device\AbstractDevice;
use BrowserDetector\Detector\Os;
use BrowserDetector\Matcher\Device\DeviceHasChildrenInterface;
use BrowserDetector\Matcher\Device\DeviceHasSpecificPlatformInterface;
use UaDeviceType;

/**
 * @category  BrowserDetector
 *
 * @copyright 2012-2016 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class Nokia extends AbstractDevice implements DeviceHasChildrenInterface
{
    /**
     * the class constructor
     *
     * @param string $useragent
     * @param array  $data
     */
    public function __construct(
        $useragent,
        array $data
    ) {
        $this->useragent = $useragent;

        $this->setData(
            [
                'deviceName'        => 'general Nokia Device',
                'marketingName'     => 'general Nokia Device',
                'version'           => null,
                'manufacturer'      => (new Company\Nokia())->name,
                'brand'             => (new Company\Nokia())->brandname,
                'formFactor'        => null,
                'pointingMethod'    => 'touchscreen',
                'resolutionWidth'   => 240,
                'resolutionHeight'  => 320,
                'dualOrientation'   => false,
                'colors'            => 65536,
                'smsSupport'        => true,
                'nfcSupport'        => true,
                'hasQwertyKeyboard' => true,
                'type'              => new UaDeviceType\MobilePhone(),
            ]
        );
    }

    /**
     * detects the device name from the given user agent
     *
     * @return \UaResult\Device\DeviceInterface
     */
    public function detectDevice()
    {
        $chain = new Chain();
        $chain->setUserAgent($this->useragent, []);
        $chain->setNamespace('\BrowserDetector\Detector\Device\Mobile\Nokia');
        $chain->setDirectory(
            __DIR__ . DIRECTORY_SEPARATOR . 'Nokia' . DIRECTORY_SEPARATOR
        );
        $chain->setDefaultHandler($this);

        return $chain->detect();
    }
}
