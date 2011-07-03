<?php
declare(ENCODING = 'iso-8859-1');
namespace AppCore\Model;

/**
 * Model
 *
 * PHP version 5
 *
 * @category  Kreditrechner
 * @package   Models
 * @author    Thomas Mueller <thomas.mueller@unister-gmbh.de>
 * @copyright 2007-2010 Unister GmbH
 * @version   SVN: $Id: EventType.php 24 2011-02-01 20:55:24Z tmu $
 */

/**
 * Model
 *
 * @category  Kreditrechner
 * @package   Models
 * @author    Thomas Mueller <thomas.mueller@unister-gmbh.de>
 * @copyright 2007-2010 Unister GmbH
 */
class Interfaces extends ModelAbstract
{
    /**
     * Table name
     *
     * @var String
     */
    protected $_name = 'interfaces';

    /**
     * Primary key
     *
     * @var String
     */
    protected $_primary = 'idInterfaces';

    /**
     * ??
     * @var array
     */
    protected $_referenceMap = array(
       'ProductInterfaces'  => array(
           'columns'           =>  array('idInterfaces'),
           'refTableClass'     =>  '\\AppCore\\Model\ProductInterfaces',
           'refColumns'        =>  array('idInterfaces')
       )
    );
}