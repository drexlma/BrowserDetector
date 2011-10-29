<?php
declare(ENCODING = 'utf-8');
namespace HTML\Common3\Root;

/* vim: set expandtab tabstop=4 shiftwidth=4 set softtabstop=4: */

/**
 * \HTML\Common3\Root\Style: Class for HTML <style> Elements
 *
 * PHP versions 5 and 6
 *
 * LICENSE:
 *
 * Copyright (c) 2007 - 2009, Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 *
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 * * Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 * * Redistributions in binary form must reproduce the above copyright
 * notice, this list of conditions and the following disclaimer in the
 * documentation and/or other materials provided with the distribution.
 * * The names of the authors may not be used to endorse or promote products
 * derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS
 * IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO,
 * THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR
 * CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 * EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 * PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY
 * OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 * NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @category HTML
 * @package  \HTML\Common3\
 * @author   Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @license  http://opensource.org/licenses/bsd-license.php New BSD License
 * @version  SVN: $Id$
 * @link     http://pear.php.net/package/\HTML\Common3\
 */

/**
 * base class for \HTML\Common3\
 */
require_once 'HTML/Common3.php';

/**
 * class Interface for \HTML\Common3\
 */
require_once 'HTML/Common3/Face.php';

// {{{ \HTML\Common3\Root\Style

/**
 * Class for HTML <style> Elements
 *
 * @category HTML
 * @package  \HTML\Common3\
 * @author   Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @license  http://opensource.org/licenses/bsd-license.php New BSD License
 * @link     http://pear.php.net/package/\HTML\Common3\
 */
class Style
extends \HTML\Common3
implements \HTML\Common3\Face
{
    // {{{ properties

    /**
     * HTML Tag of the Element
     *
     * @var      string
     * @access   protected
     */
    protected $_elementName = 'style';

    /**
     * Associative array of attributes
     *
     * @var      array
     * @access   protected
     */
    protected $_attributes = array(
        'type' => 'text/css',
        'media' => 'all'
    );

    /**
     * List of attributes to which will be announced via
     * {@link onAttributeChange()} method rather than performed by
     * \HTML\Common3\ class itself
     *
     * contains all required attributes
     *
     * @var      array
     * @see      onAttributeChange()
     * @see      getWatchedAttributes()
     * @access   protected
     * @readonly
     */
    protected $_watchedAttributes = array('type', 'media');

    /**
     * Indicator to tell, if the Object is an empty HTML Element
     *
     * @var      boolean
     * @access   protected
     */
    protected $_elementEmpty = false;

    /**
     * Array of HTML Elements which are possible as child elements
     *
     * @var      array
     * @access   protected
     */
    protected $_posElements = array(
        '#all' => array(
            'zero'
        )
    );

    /**
     * Array of Attibutes which are possible for an Element
     *
     * @var      array
     * @access   protected
     */
    protected $_posAttributes = array(
        '#all' => array(
            'media',
            'title',
            'type'
        ),
        'html' => array(
            '#all' => array(
                'lang'
            ),
            '4.01' => array(
                '#all' => array(
                    'dir'
                )
            ),
            '5.0' => array(
                '#all' => array(
                    'scoped'
                )
            )
        ),
        'xhtml' => array(
            '#all' => array(
                'xml:lang'
            ),
            '1.0' => array(
                '#all' => array(
                    'lang',
                    'dir'
                )
            )
        )
    );

    /**
     * SVN Version for this class
     *
     * @var     string
     * @access  protected
     */
    const VERSION = '$Id$';

    // }}} properties
    // {{{ initAttributes

    /**
     * set the default attributes
     *
     * @access public
     * @return \HTML\Common3\Root\Style
     */
    protected function initAttributes()
    {
        //set the default attributes
        $this->_attributes = array(
            'type' => 'text/css',
            'media' => 'all'
        );

        return $this;
    }

    // }}} initAttributes
    // {{{ onAttributeChange

    /**
     * Called if trying to change an attribute with name in $watchedAttributes
     *
     * This method is called for each attribute whose name is in the
     * $watchedAttributes array and which is being changed by setAttribute(),
     * setAttributes() or mergeAttributes() or removed via removeAttribute().
     * Note that the operation for the attribute is not carried on after calling
     * this method, it is the responsibility of this method to change or remove
     * (or not) the attribute.
     *
     * @param string $name  Attribute name
     * @param string $value Attribute value, null if attribute is being removed
     *
     * @access protected
     * @return void
     */
    protected function onAttributeChange($name, $value = null)
    {
        $name = (string) $name;

        if ($name != '') {
            if ($name == 'type') {
                //style type could not be changed
                //-> set default value
                $value = 'text/css';
            }

            if ($name == 'media') {
                if ($value === null || (string) $value == '') {
                    //set default value
                    $value = 'screen';
                }
            }

            $this->_attributes[$name] = (string) $value;
        }
    }

    // }}} onAttributeChange
    // {{{ setValue

    /**
     * sets or adds a value to the element
     *
     * @param string  $value an text that should be the value for the element
     * @param integer $flag  Determines whether to prepend, append or replace
     *                       the content. Use pre-defined constants.
     *
     * @return \HTML\Common3\
     * @access public
     * @throws \HTML\Common3\InvalidArgumentException
     *
     * NOTE: this function has no relation to the Attribute "value"
     */
    public function setValue($value, $flag = HTML_REPLACE)
    {
        $posElements = $this->getPosElements();

        if (!is_object($value)) {
            $key  = 'zero';
            //$root = $this->getRoot();

            if (in_array($key, $posElements) &&
                array_key_exists($key, \HTML\Common3\Globals::$allElements) &&
                !$this->_elementEmpty
               ) {
                $value = (string) $value;

                if ($flag === HTML_APPEND) {
                    $this->value .= $value;//$this->replace($value, 'all');
                } elseif ($flag === HTML_REPLACE) {
                    $this->value = $value;//$this->replace($value, 'all');
                } else {
                    //prepend
                    $this->value = $value . $this->value;
                }
            }
        } elseif (is_subclass_of($value, "html_common")) {
            $this->value = $value;
        } elseif (is_subclass_of($value, '\HTML\Common3')) {
            $this->value = $value;
        }

        return $this;
    }

    // }}} setValue
    // {{{ getValue

    /**
     * gets the value to the element
     *
     * NOTE: this function has no relation to the Attribute "value"
     *
     * @return string
     * @access public
     */
    public function getValue()
    {
        if (!$this->_elementEmpty) {
            if (!is_object($this->value)) {
                return (string) $this->value;
            } elseif (is_subclass_of($this->value, "html_common")) {
                return $this->value->toHtml();
            } elseif (is_subclass_of($this->value, '\HTML\Common3')) {
                return $this->value->toHtml();
            } else {
                return '';
            }
        } else {
            return '';
        }
    }

    // }}} getValue
    // {{{ writeInner

    /**
     * Returns the inner Element structure as HTML, works recursive
     *
     * @param boolean $dump     if TRUE an dump of the class is created
     * @param boolean $comments if TRUE comments were added to the output
     * @param boolean $levels   if TRUE the levels are added,
     *                          if FALSE the levels will be ignored
     *
     * @return string
     * @access public
     */
    public function writeInner($dump = false, $comments = false, $levels = true)
    {
        $txt        = '';
        $childcount = count($this->_elements);

        if (
            $childcount ||
            (!is_object($this->value) && $this->value != '') ||
            (is_object($this->value) &&
             (is_subclass_of($this->value, "html_common")) ||
             (is_subclass_of($this->value, '\HTML\Common3'))
            )
           ) {
            $root       = $this->getRoot();
            $beginText  = $this->getIndent();
            $markerText = $beginText . $root->getTab();
            $lineEnd    = $root->getOption('linebreak');
            $step2      = (int) $this->getIndentLevel() + 1;
            $mode       = $this->mode;
            $parents    = $this->getParentTree();

            $disableCDataMark = false;

            foreach ($parents as $object) {
                if ($object->getElementName() == 'if' && $comments !== true) {
                    $disableCDataMark = true;
                    break;
                }
            }

            if (!$childcount) {
                $txt .= $lineEnd;
            }

            $txt .= $markerText;

            if (!$disableCDataMark) {
                if ($this->mime != 'text/html' ) {
                    $txt .= '/* <![CDATA[ */';
                } else {
                    $txt .= '<!--';
                }
            }

            $txt .= parent::writeInner($dump, $comments, $levels) . $markerText;

            if (!$disableCDataMark) {
                if ($this->mime != 'text/html' ) {
                    $txt .= '/* ]]> */';
                } else {
                    $txt .= '//-->';
                }
            }

            $txt .= $lineEnd;
            if (!$childcount) {
                $txt .= $beginText;
            }
        }

        return $txt;
    }

    // }}} writeInner
}

// }}} \HTML\Common3\Root\Style

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */