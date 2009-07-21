<?php
defined('JPATH_BASE') or die();
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage App
 * @copyright  Copyright (c) 2005-2008 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * @see Zend_Gdata_App_Extension
 */
require_once (JPATH_LIBRARIES.DS.'zend'.DS.'Gdata'.DS.'App'.DS.'Extension.php');

/**
 * Represents the atom:logo element
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage App
 * @copyright  Copyright (c) 2005-2008 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Gdata_App_Extension_Logo extends Zend_Gdata_App_Extension
{

    protected $_rootElement = 'logo';

    public function __construct($text = null)
    {
        parent::__construct();
        $this->_text = $text;
    }

}