<?php
namespace Browscap\Device\Handlers;

/**
 * Copyright (c) 2012 ScientiaMobile, Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or(at your option) any later version.
 *
 * Refer to the COPYING.txt file distributed with this package.
 *
 * @category   WURFL
 * @package    WURFL_Handlers
 * @copyright  ScientiaMobile, Inc.
 * @license    GNU Affero General Public License
 * @version    SVN: $Id: HtcWildfireA3333.php 173 2012-01-28 13:38:35Z  $
 */

/**
 * CatchAllUserAgentHandler
 *
 *
 * @category   WURFL
 * @package    WURFL_Handlers
 * @copyright  ScientiaMobile, Inc.
 * @license    GNU Affero General Public License
 * @version    SVN: $Id: HtcWildfireA3333.php 173 2012-01-28 13:38:35Z  $
 */
class HtcWildfireS extends HtcWildfire
{
    /**
     * @var string the detected device
     */
    protected $_device = 'HTC Wildfire S';
    
    /**
     * Final Interceptor: Intercept
     * Everything that has not been trapped by a previous handler
     *
     * @param string $this->_useragent
     * @return boolean always true
     */
    public function canHandle()
    {
        if ('' == $this->_useragent) {
            return false;
        }
        
        if (!$this->_utils->checkIfContainsAnyOf($this->_useragent, array('HTC Wildfire S', 'HTC/WildfireS', 'HTC_WildfireS'))) {
            return false;
        }
        
        if ($this->_utils->checkIfContainsAnyOf($this->_useragent, array('HTC Wildfire S A510e', 'HTC_WildfireS-orange-LS'))) {
            return false;
        }
        
        return true;
    }
    
    /**
     * detects the device version from the given user agent
     *
     * @param string $this->_useragent
     *
     * @return string
     */
    protected function _detectVersion()
    {
        $doMatch = preg_match('/HTC\/WildfireS\/([a-zA-Z\d\.]+)/', $this->_useragent, $matches);
        
        if ($doMatch) {
            $this->_version = $matches[1];
            return;
        }
        
        $this->_version = '';
    }
    
    /**
     * gets the weight of the handler, which is used for sorting
     *
     * @return integer
     */
    public function getWeight()
    {
        return 7;
    }
}