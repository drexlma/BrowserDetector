<?php
namespace Browscap\Browser\Handlers\Desktop;

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

/**
 * ChromeUserAgentHandler
 *
 *
 * @category   WURFL
 * @package    WURFL_Handlers
 * @copyright  ScientiaMobile, Inc.
 * @license    GNU Affero General Public License
 * @version    SVN: $Id$
 */
class Iron extends Chromium
{
    /**
     * @var string the detected browser
     */
    protected $_browser = 'Iron';
    
    /**
     * Returns true if this handler can handle the given user agent
     *
     * @return bool
     */
    public function canHandle()
    {
        if ('' == $this->_useragent) {
            return false;
        }
        
        if (!$this->_utils->checkIfStartsWith('Mozilla/')) {
            return false;
        }
        
        if (!$this->_utils->checkIfContainsAll(array('AppleWebKit', 'Iron'))) {
            return false;
        }
        
        $isNotReallyAnSafari = array(
            // using also the KHTML rendering engine
            'Chromium',
            'Flock',
            'Galeon',
            'Lunascape',
            'Maemo',
            'PaleMoon',
            'Rockmelt'
        );
        
        if ($this->_utils->checkIfContains($isNotReallyAnSafari)) {
            return false;
        }
        
        return true;
    }
    
    /**
     * detects the browser version from the given user agent
     *
     * @return string
     */
    protected function _detectVersion()
    {
        $doMatch = preg_match('/Iron\/([\d\.]+)/', $this->_useragent, $matches);
        
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
        return 108;
    }
}