<?php
namespace Browscap\Browser\Handlers\Mobile;

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
 * @version    SVN: $Id$
 */

use Browscap\Browser\Handler as BrowserHandler;

/**
 * CatchAllUserAgentHandler
 *
 *
 * @category   WURFL
 * @package    WURFL_Handlers
 * @copyright  ScientiaMobile, Inc.
 * @license    GNU Affero General Public License
 * @version    SVN: $Id$
 */
class Playstation extends BrowserHandler
{
    /**
     * @var string the detected browser
     */
    protected $_browser = 'Playstation';

    /**
     * @var string the detected manufacturer
     */
    protected $_manufacturer = 'Sony';
    
    /**
     * Final Interceptor: Intercept
     * Everything that has not been trapped by a previous handler
     *
     * @return boolean always true
     */
    public function canHandle()
    {
        if ('' == $this->_useragent) {
            return false;
        }
        
        if (!$this->_utils->checkIfStartsWith('Mozilla/')) {
            return false;
        }
        
        if (!$this->_utils->checkIfContains(array('Playstation/'))) {
            return false;
        }
        
        return true;
    }
    
    /**
     * detects the browser name from the given user agent
     *
     * @return string
     */
    protected function _detectBrowser()
    {
        return 'Playstation';
    }
    
    /**
     * Returns true if this handler can handle the given user agent
     *
     * @return bool
     */
    protected function _detectVersion()
    {
        $doMatch = preg_match('/Playstation\/([\d\.]+)/', $this->_useragent, $matches);
        
        if ($doMatch) {
            $this->_version = $matches[1];
            return;
        }
        
        $this->_version = '';
    }
    
    /**
     * returns TRUE if the browser has a specific rendering engine
     *
     * @return boolean
     */
    public function hasEngine()
    {
        return true;
    }
    
    /**
     * returns null, if the browser does not have a specific rendering engine
     * returns the Engine Handler otherwise
     *
     * @return null|\Browscap\Os\Handler
     */
    public function getEngine()
    {
        $handler = new \Browscap\Engine\Handlers\Webkit();
        $handler->setLogger($this->_logger);
        $handler->setUseragent($this->_useragent);
        
        return $handler->detect();
    }
}