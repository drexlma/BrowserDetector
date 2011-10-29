<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty urlencode modifier plugin
 *
 * Type:     modifier
 * Name:     urlencode
 * Purpose:  urlencoding
 * @link     ??
 * @param string
 * @return string
 */
    public function urlencode($string)
    {
        return urlencode($string);
    }
}
/* vim: set expandtab: */