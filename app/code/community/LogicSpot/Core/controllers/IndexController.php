<?php
/**
 * LogicSpot_Core
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @category    LogicSpot
 * @package     LogicSpot_Core
 * @copyright   Copyright (c) 2015 LogicSpot (http://www.logicspot.com)
 * @license     http://www.gnu.org/licenses/gpl-3.0.txt GNU General Public License v3.0
 */

/**
 * Index controller used to disable magento homepage
 *
 * @category    LogicSpot
 * @package     LogicSpot_Core
 * @author      Kamil Szewczyk <kamil@logicspot.com>
 */
class LogicSpot_Core_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction() {
        $this->getResponse()->setRedirect('/');
    }

}
