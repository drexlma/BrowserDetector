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

namespace BrowserDetector\Input;

use BrowserDetector\Detector\Browser\UnknownBrowser;
use BrowserDetector\Detector\Chain;
use BrowserDetector\Detector\Device\GeneralDesktop;
use BrowserDetector\Detector\Device\GeneralMobile;
use BrowserDetector\Detector\Device\GeneralTv;
use BrowserDetector\Detector\Device\UnknownDevice;
use BrowserDetector\Detector\Engine\UnknownEngine;
use BrowserDetector\Detector\EngineHandler;
use BrowserDetector\Detector\MatcherInterface\BrowserInterface;
use BrowserDetector\Detector\MatcherInterface\DeviceHasChildrenInterface;
use BrowserDetector\Detector\MatcherInterface\OsInterface;
use BrowserDetector\Detector\Os\UnknownOs;
use BrowserDetector\Detector\Result;

/**
 * Browser detection class
 *
 * @category  BrowserDetector
 * @package   BrowserDetector
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2014 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class UserAgent
    extends Core
{
    /**
     * the detected browser
     *
     * @var \BrowserDetector\Detector\BrowserHandler
     */
    private $browser = null;

    /**
     * the detected browser engine
     *
     * @var \BrowserDetector\Detector\EngineHandler
     */
    private $engine = null;

    /**
     * the detected platform
     *
     * @var \BrowserDetector\Detector\OsHandler
     */
    private $os = null;

    /**
     * the detected device
     *
     * @var \BrowserDetector\Detector\MatcherInterface\DeviceInterface
     */
    private $device = null;

    /**
     * Gets the information about the browser by User Agent
     *
     * @return \BrowserDetector\Detector\Result
     */
    public function getBrowser()
    {
        $this->device = $this->detectDevice();
        $this->device->detectSpecialProperties();

        // detect the os which runs on the device
        $this->os = $this->device->detectOs();
        if (!($this->os instanceof OsInterface)) {
            $this->os = $this->detectOs();
        }

        // detect the browser which is used
        $this->browser = $this->os->detectBrowser();
        if (!($this->browser instanceof BrowserInterface)
            || ($this->os instanceof UnknownOs && is_callable(array($this->device, 'detectBrowser')))
        ) {
            $this->browser = $this->device->detectBrowser();
        }

        if (!($this->browser instanceof BrowserInterface)) {
            $this->browser = $this->detectBrowser();
        }

        // detect the engine which is used in the browser
        $this->engine = $this->browser->detectEngine($this->os);
        if (!($this->engine instanceof EngineHandler)) {
            $this->engine = $this->detectEngine();
        }

        $this->device->detectDependProperties(
            $this->browser,
            $this->engine,
            $this->os
        );

        $result = new Result();
        $result->setCapability('useragent', $this->agent);

        $result->setDetectionResult(
            $this->device,
            $this->os,
            $this->browser,
            $this->engine
        );

        return $result;
    }

    /**
     * Gets the information about the device by User Agent
     *
     * @return \BrowserDetector\Detector\MatcherInterface\DeviceInterface
     */
    private function detectDevice()
    {
        $handlersToUse = array(
            new GeneralMobile(),
            new GeneralTv(),
            new GeneralDesktop(),
        );

        $chain = new Chain();
        $chain->setUserAgent($this->agent);
        $chain->setNamespace('\BrowserDetector\Detector\Device');
        $chain->setHandlers($handlersToUse);
        $chain->setDefaultHandler(new UnknownDevice());

        $device = $chain->detect();

        if ($device instanceof DeviceHasChildrenInterface) {
            $device = $device->detectDevice();
        }

        return $device;
    }

    /**
     * Gets the information about the os by User Agent
     *
     * @return \BrowserDetector\Detector\OsHandler
     */
    private function detectOs()
    {
        $chain = new Chain();
        $chain->setUserAgent($this->agent);
        $chain->setNamespace('\BrowserDetector\Detector\Os');
        $chain->setDirectory(
            __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Detector' . DIRECTORY_SEPARATOR . 'Os' . DIRECTORY_SEPARATOR
        );
        $chain->setDefaultHandler(new UnknownOs());

        return $chain->detect();
    }

    /**
     * Gets the information about the browser by User Agent
     *
     * @return \BrowserDetector\Detector\BrowserHandler
     */
    private function detectBrowser()
    {
        $chain = new Chain();
        $chain->setUserAgent($this->agent);
        $chain->setNamespace('\BrowserDetector\Detector\Browser');
        $chain->setDirectory(
            __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Detector' . DIRECTORY_SEPARATOR . 'Browser' . DIRECTORY_SEPARATOR
        );
        $chain->setDefaultHandler(new UnknownBrowser());

        return $chain->detect();
    }

    /**
     * Gets the information about the rendering engine by User Agent
     *
     * @return \BrowserDetector\Detector\MatcherInterface\EngineInterface
     */
    private function detectEngine()
    {
        $chain = new Chain();
        $chain->setUserAgent($this->agent);
        $chain->setNamespace('\BrowserDetector\Detector\Engine');
        $chain->setDirectory(
            __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Detector' . DIRECTORY_SEPARATOR . 'Engine' . DIRECTORY_SEPARATOR
        );
        $chain->setDefaultHandler(new UnknownEngine());

        return $chain->detect();
    }
}
