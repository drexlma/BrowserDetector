<?php
namespace Browscap\Detector\Os;

/**
 * PHP version 5.3
 *
 * LICENSE:
 *
 * Copyright (c) 2013, Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 *
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without 
 * modification, are permitted provided that the following conditions are met:
 *
 * * Redistributions of source code must retain the above copyright notice, 
 *   this list of conditions and the following disclaimer.
 * * Redistributions in binary form must reproduce the above copyright notice, 
 *   this list of conditions and the following disclaimer in the documentation 
 *   and/or other materials provided with the distribution.
 * * Neither the name of the authors nor the names of its contributors may be 
 *   used to endorse or promote products derived from this software without 
 *   specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" 
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE 
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE 
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE 
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR 
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF 
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS 
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN 
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) 
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE 
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category  Browscap
 * @package   Browscap
 * @copyright Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @license   http://opensource.org/licenses/BSD-3-Clause New BSD License
 * @version   SVN: $Id$
 */

use \Browscap\Detector\OsHandler;
use \Browscap\Detector\MatcherInterface;

/**
 * MSIEAgentHandler
 *
 *
 * @category  Browscap
 * @package   Browscap
 * @copyright Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @license   http://opensource.org/licenses/BSD-3-Clause New BSD License
 * @version   SVN: $Id$
 */
class WindowsPhoneOs extends OsHandler
{
    /**
     * the detected browser properties
     *
     * @var StdClass
     */
    protected $_properties = array(
        'wurflKey' => null, // not in wurfl
        
        // kind of device
        // 'is_wireless_device' => null,
        // 'is_tablet'          => null,
        // 'is_bot'             => null,
        // 'is_smarttv'         => null,
        // 'is_console'         => null,
        // 'ux_full_desktop'    => null,
        // 'is_transcoder'      => null,
        
        // device
        // 'model_name'                => null,
        // 'manufacturer_name'         => null,
        // 'brand_name'                => null,
        // 'model_extra_info'          => null,
        // 'marketing_name'            => null,
        // 'has_qwerty_keyboard'       => null,
        // 'pointing_method'           => null,
        // 'device_claims_web_support' => null,
        
        // browser
        // 'mobile_browser'         => null,
        // 'mobile_browser_version' => null,
        // 'mobile_browser_bits'    => null, // not in wurfl
        
        // os
        'device_os'              => 'Windows Phone OS',
        'device_os_version'      => '',
        'device_os_bits'         => '', // not in wurfl
        'device_os_manufacturer' => 'microsoft', // not in wurfl
        
        // engine
        // 'renderingengine_name'         => null, // not in wurfl
        // 'renderingengine_version'      => null, // not in wurfl
        // 'renderingengine_manufacturer' => null, // not in wurfl
    );
    
    /**
     * Returns true if this handler can handle the given $useragent
     *
     * @return bool
     */
    public function canHandle()
    {
        if (!$this->_utils->isMobileWindows() 
            && !($this->_utils->isWindows() && $this->_utils->isMobileBrowser())
        ) {
            return false;
        }
        
        if (!$this->_utils->checkIfContains(array('Windows Phone OS', 'XBLWP7', 'ZuneWP7', 'Windows Phone'))) {
            return false;
        }
        
        return true;
    }
    
    /**
     * detects the browser name from the given user agent
     *
     * @param string $this->_useragent
     *
     * @return string
     */
    protected function _detectVersion()
    {
        $detector = new \Browscap\Detector\Version();
        $detector->setUserAgent($this->_useragent);
        
        $searches = array('Windows Phone OS');
        
        $this->setCapability(
            'device_os_version', 
            $detector->detectVersion($searches)
        );
        
        if ($this->_utils->checkIfContains(array('XBLWP7', 'ZuneWP7'))) {
            $this->setCapability('device_os_version', $detector->setVersion('7.5'));
        }
    }
    
    /**
     * gets the weight of the handler, which is used for sorting
     *
     * @return integer
     */
    public function getWeight()
    {
        return 2;
    }
    
    /**
     * returns null, if the device does not have a specific Browser
     * returns the Browser Handler otherwise
     *
     * @return null|\Browscap\Os\Handler
     */
    public function getBrowser()
    {
        $browsers = array(
            'MicrosoftMobileExplorer',
            'Opera'
        );
        
        $browserPath = realpath(
            __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' 
            . DIRECTORY_SEPARATOR . 'Browser' 
            . DIRECTORY_SEPARATOR . 'Handlers' . DIRECTORY_SEPARATOR . 'Mobile' 
            . DIRECTORY_SEPARATOR
        );
        $browserNs   = 'Browscap\\Browser\\Handlers\\Mobile';
        
        $chain = new \Browscap\Detector\Chain(false, $browsers, $browserPath, $browserNs);
        $chain->setDefaultHandler(new \Browscap\Detector\Browser\Mobile\MicrosoftMobileExplorer());
        $chain->setUseragent($this->_useragent);
        
        return $chain->detect();
    }
}