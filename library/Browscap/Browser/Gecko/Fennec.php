<?php
declare(ENCODING = 'utf-8');
namespace Browscap\Browser\Gecko;

/**
 * Copyright(c) 2011 ScientiaMobile, Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or(at your option) any later version.
 *
 * Refer to the COPYING file distributed with this package.
 *
 * @category   WURFL
 * @package    WURFL_Handlers
 * @copyright  ScientiaMobile, Inc.
 * @license    GNU Affero General Public License
 * @version    $id$
 */

use Browscap\Browser\Handler as BrowserHandler;

/**
 * FirefoxUserAgentHanlder
 *
 *
 * @category   WURFL
 * @package    WURFL_Handlers
 * @copyright  ScientiaMobile, Inc.
 * @license    GNU Affero General Public License
 * @version    $id$
 */
class Fennec extends BrowserHandler
{
    /**
     * Intercept all UAs Containing Seamonkey and are not mobile browsers
     *
     * @param string $userAgent
     * @return boolean
     */
    public function canHandle($userAgent)
    {
        if (!$this->utils->checkIfStartsWith($userAgent, 'Mozilla')) {
            return false;
        }
        
        if (!$this->utils->checkIfContainsAll($userAgent, array('Firefox', 'Gecko', 'Fennec'))) {
            return false;
        }
        
        if ($this->utils->isSpamOrCrawler($userAgent)) {
            return false;
        }
        
        $isNotReallyAnFirefox = array(
            // using also the Gecko rendering engine
            'Maemo',
            'Maxthon',
            'Camino',
            'Galeon',
            'Lunascape',
            'Opera',
            'Navigator',
            'Palemoon',
            'Flock',
            'SeaMonkey'
        );
        
        if ($this->utils->checkIfContainsAnyOf($userAgent, $isNotReallyAnFirefox)) {
            return false;
        }
        
        return true;
    }
}